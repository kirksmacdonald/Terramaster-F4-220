<?php 
// �������� �� ������
if (!defined('CASINOENGINE')) {
	die("��� �������!<script>location.href='/';</script>");
} 

$dbhost = "localhost"; //��� ����� (������ localhost)
$dbuname = "bduser"; //��� ������������
$dbpass = "pass"; //������
$dbname = "bdname"; //��� ����

$site['coding']    = "cp1251";
$site['loc']       = "cp1251_general_ci";

$full_base = @mysql_pconnect($dbhost, $dbuname, $dbpass) or die("<br><br><center><br><br><b>�� ������� ����������� � ���� ������, ���������� ���������� ���������� ������ � �������� ���������.</center></b>");
@mysql_select_db($dbname, $full_base) or die("<br><br><center><br><br><b>����������� ������� ��� ������� ����, ���������� ���������� ���������� ������ � �������� ���������.</center></b>");

@mysql_query("SET NAMES '".$site['coding']."'");
@mysql_query("SET CHARACTER SET '".$site['coding']."'");
@mysql_query("SET @@collation_connection = ".$site['loc']."");

?>