<?php
  $dbhost = "localhost"; //��� ����� (������ localhost)
  $dbuname = "beste122_KazGo7V"; //��� ������������
  $dbpass = "56755852"; //������
  $dbname = "beste122_KazGo7V"; //��� ����

  $site['coding']    = "cp1251";
  $site['loc']       = "cp1251_general_ci";

  $full_base = @mysql_pconnect($dbhost, $dbuname, $dbpass) or die("<br><br><center><br><br><b>�� ������� ����������� � ���� ������, ���������� ���������� ���������� ������ � �������� ���������.</center></b>");
  @mysql_select_db($dbname, $full_base) or die("<br><br><center><br><br><b>����������� ������� ��� ������� ����, ���������� ���������� ���������� ������ � �������� ���������.</center></b>");

  @mysql_query("SET NAMES '".$site['coding']."'");
  @mysql_query("SET CHARACTER SET '".$site['coding']."'");
  @mysql_query("SET @@collation_connection = ".$site['loc']."");

  $setting_query = mysql_fetch_array(@mysql_query("SELECT * FROM casino_settings"));
  @mysql_query("UPDATE clients SET cash=cash+".$setting_query[10]);
?>