<?php
  define("CASINOENGINE", true);
  session_start();
  include_once("../../../engine/config/config.php");
  error_reporting(0);
  $referer   = $_SERVER['REMOTE_ADDR'];
  $inv_id    = floatval($_GET['InvId']);
  $pay_query = @mysql_fetch_array(@mysql_query("select * from pay_deposits where id ='" . $inv_id . "'"));
  if ($pay_query != "") {
      echo "<script>alert(\"������ �� �������� ��� ��������� ������! ����� ������������ �������: " . $inv_id . ".���� �� ����� �� �������� ������ ���������, � ������� �� ���� �� ���������! ��������������� ��������� � �������������� �����, c ������� ������� ���������.\");</script>";
      echo "<script>location.href=\"/ru/in\";</script>";
      exit();
  } else {
      exit();
  }
  @mysql_query("update pay_deposits set status = '3', referer = '" . $referer . "' where id ='" . $inv_id . "'");
  exit();
?>