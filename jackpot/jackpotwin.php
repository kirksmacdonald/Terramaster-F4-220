<?php
  define("CASINOENGINE", true);
  session_start();
  include_once("../engine/config/config.php");
  if ($_SESSION['jp_win'] == true) {
      echo "����������� �� �������� �������, �������� ������� ��������� ��� �� ����!";
      sleep(5);
      $_SESSION['jp_win'] = false;
  }
?>