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

$title = "������ �������������� - �������";
$menu = "pay";
$menu_sub = "admin_pay_withdrawals.php";
$error = "";

$����� = $_GET['mode'];
$�����_������� = preg_match( "/^[a-z]{2,20}\$/D", $����� );
$id = $_GET['id'];
$id_������� = preg_match( "/^[0-9]{1,5}\$/D", $id );
if ( $����� == "status_decline" && $id != "" && $id_������� == true )
{
    @mysql_query( "update pay_withdrawals set status='2' where id='".$id."'" );
    header( "Location: ".$_SERVER['HTTP_REFERER'] );
}
if ( $����� == "status_ok" && $id != "" && $id_������� == true )
{
    @mysql_query( "update pay_withdrawals set status='1' where id='".$id."'" );
    echo "<script>alert(\"������ ������� ����������� �����!\");</script>";
    echo "<script>location.href=\"/acp/acp_admin/admin_pay_withdrawals.php\";</script>";
}
include_once( "content/content_pay_withdrawals.php" );
?>
