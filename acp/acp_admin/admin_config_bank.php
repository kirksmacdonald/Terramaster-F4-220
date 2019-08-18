<?php
//�������������
session_start();

//���������� ���������������� �� login
if(isset($_SESSION['session_admin'])) $adm_login = $_SESSION['session_admin'];
else die("<script>location.href=\"/acp/acp_admin/login.php\";</script>");

define("CASINOENGINE", true);
define("ENGINE_DIR", $_SERVER['DOCUMENT_ROOT']."/engine_acp");

require_once($_SERVER['DOCUMENT_ROOT']."/engine/core/mysql_log.php");
require_once(ENGINE_DIR."/config/config.php");
include_once("content/functions.php");

$title = "������ �������������� - ��������� �����";
$menu = "config";
$menu_sub = "admin_config_bank.php";

if(isset($_GET['mode'])) $mode = $_GET['mode']; else $mode = '';
if(isset($_GET['id'])) $id = intval($_GET['id']); else $id = '';
$error='';

switch($mode) {

	//�������������� ������
	case 'edit':
	
		//���������
	    if(isset($_POST['name'])) $bank_name = $_POST['name']; else $bank_name = '';
		if(isset($_POST['bank'])) $bank_sum = $_POST['bank']; else $bank_sum = '';
		if(isset($_POST['proc'])) $bank_percent = $_POST['proc']; else $bank_percent = '';
		if (!$bank_name or !preg_match("/^[-_a-zA-Z�-��-�0-9 ]{1,50}\$/D", $bank_name)) $error .= "�� ������ ��� ������������ �������� �����<br>";
		if (!$bank_sum or !preg_match("/^[0-9.]{1,20}\$/D", $bank_sum)) $error .= "�� ������ ��� ������������ ����������� ����� � �����<br>";
		if (!$bank_percent or !preg_match("/^[0-9]{1,3}\$/D", $bank_percent)) $error .= "�� ����� ��� ������������ ������� �����<br>";
		if (100 < $bank_percent) $error .= "������� �� ����� ���� ������ 100%<br>";
		
		//��������
		if (!$error) {
		    if ($_SESSION['session_admin'] != $demo) {
		        mysql_query("update games_bank set\r\n\t\tname = '{$bank_name}',\r\n\t\tbank = '{$bank_sum}',\r\n\t\tproc = '{$bank_percent}'\r\n\t\twhere id = '{$id}'\r\n\t\t" );
		        die("<script>alert(\"���� ".$bank_name." ������� ��������!\");location.href=\"/acp/acp_admin/admin_config_bank.php\"</script>");
		    } else die("<script>alert(\"�� �� ������ ������������� ����� � ���� ������!\");history.back();</script>");
		}
		if ($bank_name == "" && $bank_sum == "" && $bank_percent == "") $error = "";
	break;
	
	//���������� ������
	case 'add':
		//���������
	    if(isset($_POST['name'])) $bank_name = $_POST['name']; else $bank_name = '';
		if(isset($_POST['bank'])) $bank_sum = $_POST['bank']; else $bank_sum = '';
		if(isset($_POST['proc'])) $bank_percent = $_POST['proc']; else $bank_percent = '';
		if (!$bank_name or !preg_match("/^[-_a-zA-Z�-��-�0-9 ]{1,50}\$/D", $bank_name)) $error .= "�� ������ ��� ������������ �������� �����<br>";
		if (!$bank_sum or !preg_match("/^[0-9.]{1,20}\$/D", $bank_sum)) $error .= "�� ������ ��� ������������ ����������� ����� � �����<br>";
		if (!$bank_percent or !preg_match("/^[0-9]{1,3}\$/D", $bank_percent)) $error .= "�� ����� ��� ������������ ������� �����<br>";
		if (100 < $bank_percent) $error .= "������� �� ����� ���� ������ 100%<br>";
		
		//��������
		if (!$error) {
		    mysql_query("INSERT INTO games_bank\r\n\t\t(`id`, `name` ,`bank`, `proc`) VALUES\r\n\t\t(NULL,'".$bank_name."','".$bank_sum."', '".$bank_percent."')" );
		    echo "<script>alert(\"���� ".$bank_name." ������� ��������!\");location.href=\"/acp/acp_admin/admin_config_bank.php\";</script>";
		}
		if ($bank_name == "" && $bank_sum == "" && $bank_percent == "") $error = "";
	break;
	
	//�������� ������
	case 'delete':
	    if ($id == "1" || $id == "2") echo "<script>alert(\"���� � id:".$id." ������ �������!\");history.back();</script>";
		else 
			if ($_SESSION['session_admin'] != $demo) {
				mysql_query( "DELETE FROM games_bank WHERE id = '{$id}' LIMIT 1" );
				echo "<script>alert(\"���� � id:".$id." ������� �����!\");location.href=\"/acp/acp_admin/admin_config_bank.php\";</script>";
			} else echo "<script>alert(\"�� �� ������ ������� ����� � ���� ������!\");history.back();</script>";
	break;
}

//���������� ���
include_once( "content/content_config_bank.php" );
?>
