<?php
//�������������
session_start();

//���������� ���������������� �� login
if(isset($_SESSION['session_admin'])) $adm_login = $_SESSION['session_admin'];
else die("<script>location.href=\"/acp/acp_admin/login.php\";</script>");

define("CASINOENGINE", true);
define("ENGINE_DIR", $_SERVER['DOCUMENT_ROOT']."/engine_acp");

require_once($_SERVER['DOCUMENT_ROOT']."/engine/core/mysql_log.php");
require_once( ENGINE_DIR."/config/config.php" );
include_once("content/functions.php");

$title = "������ �������������� - �������� E-Mail";
$menu = "module";
$menu_sub = "admin_mass_email.php";

$����� = $_GET['mode'];
$id = $_GET['id'];
$�����_������� = preg_match( "/^[a-z]{2,20}\$/D", $����� );
$id_������� = preg_match( "/^[0-9]{1,5}\$/D", $id );
$error = "";
$��������_����� = $_POST['login'];
$��������_����� = $_POST['email'];
$send_mode = $_POST['gr11'];
$��������_���� = $_POST['subject'];
$��������_��������� = $_POST['message'];
$��������_�����_������� = preg_match( "/^[a-zA-Z0-9]{2,20}\$/D", $��������_����� );
$��������_�����_������� = preg_match( "/^([a-zA-Z0-9])+([a-zA-Z0-9._-])*@([a-zA-Z0-9_-])+(\\.[a-zA-Z0-9]+[a-zA-Z0-9_-]*)+\$/D", $��������_����� );
if ( $send_mode == "mass_user" || $send_mode == "mass_all" )
{
    $send_mode_set = true;
}
else
{
    $send_mode_set = false;
    $error .= "�������� ����� ��������!<br>";
}
if ( $��������_���� == "" )
{
    $error .= "�� ������ ����<br>";
}
if ( $��������_��������� == "" )
{
    $error .= "�� ������ ���������<br>";
}
if ( $send_mode == "mass_user" && $��������_����� == "" && $��������_����� == "" )
{
    $error .= "�� ������� ������������ ��� ������� ��� �� ������ email ��� �������!<br>";
}
if ( $����� == "send" && $error == "" && $send_mode_set == true )
{
    if ( $send_mode == "mass_user" && $��������_����� != "" && ( $��������_�����_������� = true ) && $��������_����� == "" && $��������_���� != "" && $��������_��������� != "" )
    {
        $�������_������ = mysql_fetch_array( mysql_query( "SELECT * FROM clients WHERE login='".$��������_�����."'" ) );
        if ( $�������_������ != "" || $�������_������ != "0" )
        {
            $email_������� = $�������_������['email'];
        }
        else
        {
            echo "<script>alert(\"������ � ������: ".$��������_�����." ��������!\");</script>";
            echo "<script>location.href=\"/acp/acp_admin/admin_mass_email.php\";</script>";
            exit( );
            if ( !TRUE )
            {
                exit( );
            }
        }
        $���������_������ = mysql_fetch_array( mysql_query( "SELECT * FROM casino_settings" ) );
        $casino_email = $���������_������['emailcasino'];
        $priority = 3;
        $format = "text/html";
        $msg = $��������_���������;
        mail( $email_�������, $��������_����, $msg, "From: {$casino_email}\nContent-Type:{$format};charset=windows-1251\nMIME-Version: 1.0\nContent-Transfer-Encoding: 8bit\nX-Priority: {$priority}\nX-Mailer:Casino mail v2" );
        echo "<script>alert(\"��������� ��� ������������: ".$��������_�����." ������� �����������!\");</script>";
        echo "<script>location.href=\"/acp/acp_admin/admin_mass_email.php\";</script>";
        exit( );
        if ( !TRUE )
        {
            exit( );
        }
    }
    if ( $send_mode == "mass_user" && $��������_����� == "" && $��������_����� != "" && $��������_�����_������� == true && $��������_���� != "" && $��������_��������� != "" )
    {
        $���������_������ = mysql_fetch_array( mysql_query( "SELECT * FROM casino_settings" ) );
        $casino_email = $���������_������['emailcasino'];
        $priority = 3;
        $format = "text/html";
        $msg = $��������_���������;
        mail( $��������_�����, $��������_����, $msg, "From: {$casino_email}\nContent-Type:{$format};charset=windows-1251\nMIME-Version: 1.0\nContent-Transfer-Encoding: 8bit\nX-Priority: {$priority}\nX-Mailer:Casino mail v2" );
        echo "<script>alert(\"��������� �� �������� ������: ".$��������_�����." ������� �����������\");</script>";
        echo "<script>location.href=\"/acp/acp_admin/admin_mass_email.php\";</script>";
        exit( );
        if ( !TRUE )
        {
            exit( );
        }
    }
    if ( $send_mode == "mass_all" && $��������_���� != "" && $��������_��������� != "" )
    {
        $�������_������ = mysql_query( "select * from clients ORDER BY email ASC" );
        while ($client = mysql_fetch_array($�������_������))
        {
            $���������_������ = mysql_fetch_array( mysql_query( "SELECT * FROM casino_settings" ) );
            $casino_email = $���������_������['emailcasino'];
            $priority = 3;
            $format = "text/html";
            $msg = $��������_���������;
            mail($client['email'], $��������_����, $msg, "From: {$casino_email}\nContent-Type:{$format};charset=windows-1251\nMIME-Version: 1.0\nContent-Transfer-Encoding: 8bit\nX-Priority: {$priority}\nX-Mailer:Casino mail v2" );
        }
        echo "<script>alert(\"��������� ����������� ���� ������������� �������!\");</script>";
        echo "<script>location.href=\"/acp/acp_admin/admin_mass_email.php?mode=send\";</script>";
        exit( );
        if ( !TRUE )
        {
            exit( );
        }
    }
}
if ( $����� == "senduser" && $error == "" && $send_mode_set == true && $send_mode == "mass_user" && $��������_����� != "" && ( $��������_�����_������� = true ) && $��������_����� == "" && $��������_���� != "" && $��������_��������� != "" )
{
    $�������_������ = mysql_fetch_array( mysql_query( "SELECT * FROM clients WHERE login='".$��������_�����."'" ) );
    if ( $�������_������ != "" || $�������_������ != "0" )
    {
        $email_������� = $�������_������['email'];
    }
    else
    {
        echo "<script>alert(\"������ � ������: ".$��������_�����." ��������!\");</script>";
        echo "<script>location.href=\"/acp/acp_admin/admin_mass_email.php?mode=senduser&login=".$��������_�����."\";</script>";
        exit( );
        if ( !TRUE )
        {
            exit( );
        }
    }
    $���������_������ = mysql_fetch_array( mysql_query( "SELECT * FROM casino_settings" ) );
    $casino_email = $���������_������['emailcasino'];
    $priority = 3;
    $format = "text/html";
    $msg = $��������_���������;
    mail( $email_�������, $��������_����, $msg, "From: {$casino_email}\nContent-Type:{$format};charset=windows-1251\nMIME-Version: 1.0\nContent-Transfer-Encoding: 8bit\nX-Priority: {$priority}\nX-Mailer:Casino mail v2" );
    echo "<script>alert(\"��������� ��� ������������: ".$��������_�����." ������� �����������!\");</script>";
    echo "<script>location.href=\"/acp/acp_admin/admin_mass_email.php?mode=senduser&login=".$��������_�����."\";</script>";
    exit( );
    if ( !TRUE )
    {
        exit( );
    }
}
if ( $��������_����� == "" && $��������_����� == "" && $send_mode == "" && $��������_���� == "" && $��������_��������� == "" )
{
    $error = "";
}
include_once( "content/content_mass_email.php" );
?>
