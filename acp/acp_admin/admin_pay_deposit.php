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

$title = "������ �������������� - ��������";
$menu = "pay";
$menu_sub = "admin_pay_deposit.php";
$error = "";

$����� = $_GET['mode'];
$�����_������� = preg_match( "/^[a-z]{2,20}\$/D", $����� );
$id = $_GET['id'];
$id_������� = preg_match( "/^[0-9]{1,5}\$/D", $id );
if ( $����� == "status_pending" && $id != "" && $id_������� == true )
{
    @mysql_query( "update pay_deposits set status='2' where id='".$id."'" );
    header( "Location: ".$_SERVER['HTTP_REFERER'] );
}
if ( $����� == "status_decline" && $id != "" && $id_������� == true )
{
    @mysql_query( "update pay_deposits set status='3' where id='".$id."'" );
    header( "Location: ".$_SERVER['HTTP_REFERER'] );
}
if ( $����� == "delete" && $id != "" && $id_������� == true )
{
    if ( $_SESSION['session_admin'] != $demo )
    {
        @mysql_query( "DELETE FROM pay_deposits WHERE id = '{$id}' LIMIT 1" );
        echo "<script>alert(\"������ � id:".$id." ������� �����!\");</script>";
        echo "<script>location.href=\"".$_SERVER['HTTP_REFERER']."\";</script>";
    }
    else
    {
        echo "<script>alert(\"�� �� ������ ������� ������ � ���� ������!\");</script>";
        echo "<script>history.back();</script>";
    }
}
include_once( "content/content_pay_deposit.php" );
?>
