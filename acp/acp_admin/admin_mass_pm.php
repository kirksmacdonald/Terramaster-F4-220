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

$title = "������ �������������� - �������� ��";
$menu = "module";
$menu_sub = "admin_mass_pm.php";
include_once( "content/functions.php" );
$����� = $_GET['mode'];
$id = $_GET['id'];
$�����_������� = preg_match( "/^[a-z]{2,20}\$/D", $����� );
$id_������� = preg_match( "/^[0-9]{1,5}\$/D", $id );
$��������_����� = $_POST['login'];
$send_mode = $_POST['gr11'];
$��������_���� = @mysql_escape_string( $_POST['subject'] );
$��������_��������� = @mysql_escape_string( $_POST['message'] );
$��������_��������� = preg_replace("/(\r\n)/", "<br/>", $��������_���������);
$��������_�����_������� = preg_match( "/^[a-zA-Z0-9]{2,20}\$/D", $��������_����� );
if ( $send_mode == "pm_user" || $send_mode == "pm_all" )
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
if ( $send_mode == "mass_user" && $��������_����� == "" )
{
    $error .= "�� ������� ������������ ��� ��������!<br>";
}
if ( $����� == "send" && $error == "" )
{
    if ( $send_mode == "pm_user" && $��������_����� != "" && ( $��������_�����_������� = true ) && $��������_���� != "" && $��������_��������� != "" )
    {
        $�������_������ = @mysql_fetch_array( @mysql_query( "SELECT * FROM clients WHERE login='".$��������_�����."'" ) );
        if ( $�������_������ != "" || $�������_������ != "0" )
        {
            $time = time( );
            mysql_query( "INSERT INTO casino_pm (subj, text, user, user_from, date, pm_read, folder) values ('{$��������_����}', '{$��������_���������}', '{$��������_�����}', 'admin', '{$time}', 'no', 'inbox')" );
            mysql_query( "UPDATE clients set pm_all=pm_all+1, pm_unread=pm_unread+1  where login='".$��������_�����."'" );
            echo "<script>alert(\"������ ��������� ��� �������: ".$��������_�����." ������� �����������!\");</script>";
            echo "<script>location.href=\"/acp/acp_admin/admin_mass_pm.php\";</script>";
            exit( );
            if ( !TRUE )
            {
                exit( );
            }
        }
        else
        {
            echo "<script>alert(\"������ � ������: ".$��������_�����." ��������!\");</script>";
            echo "<script>location.href=\"/acp/acp_admin/admin_mass_pm.php\";</script>";
            exit( );
            if ( !TRUE )
            {
                exit( );
            }
        }
    }
    if ( $send_mode == "pm_all" && $��������_���� != "" && $��������_��������� != "" )
    {
        $�������_������ = @mysql_query( "select * from clients" );
        while ( $�������_email_������ = @mysql_fetch_array( $�������_������ ) )
        {
            if ( !@mysql_query( "insert into casino_tickets (priority,dt,subject,userid,message,newforuser,newforadmin) values('2',NOW(),'".@addslashes( $��������_���� )."','".$�������_email_������['id']."','".@addslashes( $��������_��������� )."','1','0')" ) )
            {
                exit( mysql_error( ) );
            }
        }
        echo "<script>alert(\"������ ��������� ��� �������� ������� �����������!\");</script>";
        echo "<script>location.href=\"/acp/acp_admin/admin_mass_pm.php\";</script>";
        exit( );
        if ( !TRUE )
        {
            exit( );
        }
    }
}
if ( $��������_����� == "" && $send_mode == "" && $��������_���� == "" && $��������_��������� == "" )
{
    $error = "";
}
include_once( "content/content_mass_pm.php" );
?>
