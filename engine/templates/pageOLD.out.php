<?php
  if (!defined("CASINOENGINE")) {
      exit("��� �������!<script>location.href='/';</script>");
  }
  if ($_SESSION['login'] != "") {
      $action        = intval($_POST['action']);
      $clients_query = @mysql_fetch_array(@mysql_query("SELECT * FROM clients WHERE login='" . $_SESSION['login'] . "' limit 1"));
      $tariffs_query = @mysql_fetch_array(@mysql_query("SELECT * FROM pay_tariff"));
      $tariff_wmz    = $clients_query['cash'] / $tariffs_query['USD'];
      $tariff_wmz    = sprintf("%01.2f", $tariff_wmz);
      $tariff_wmzpr  = $tariff_wmz - $tariff_wmz / 100 * 0.8;
      $tariff_wmzpr  = sprintf("%01.2f", $tariff_wmzpr);
      $tariff_wme    = $clients_query['cash'] / $tariffs_query['EUR'];
      $tariff_wme    = sprintf("%01.2f", $tariff_wme);
      $tariff_wmepr  = sprintf("%01.2f", $tariff_wme - $tariff_wme / 100 * 0.8);
      $tariff_wmu    = $clients_query['cash'] / $tariffs_query['UAH'];
      $tariff_wmu    = sprintf("%01.2f", $tariff_wmu);
      $tariff_wmupr  = sprintf("%01.2f", $tariff_wmu - $tariff_wmu / 100 * 0.8);
      
      $minWmz = 1.00;
      $minWme = 1.00;
      $minWmr = 10.00;
      $minWmu = 10.00;
      
      
      if ($action == "") {
          $page_out_tpl          = file_get_contents(TEMPLATE_DIR . "/page_out.tpl");
          $page_out_tpl          = str_replace("{theme}", "/templates/" . $template . "/" . $_SESSION['language'], $page_out_tpl);
          $page_out_tpl          = str_replace("{language}", $_SESSION['language'], $page_out_tpl);
          
          /*
           * ��� ��� ������� ����� ������
           */
          //���� ����� ��������� ���������� ���������
          $selectPart = '';
          $fromPart = ''; 
		  $wherePart = '';
          $limitPart = '';		  
          $ITEMS_PER_PAGE = 20;
          $limitFrom = 0;          
          
          if(isset($_POST['pageno'])) {
          	if(is_numeric($_POST['pageno'])) {
          		$currentPage = mysql_real_escape_string($_POST['pageno']);
          		$limitFrom = $currentPage * $ITEMS_PER_PAGE;
          	}
          }          
          
          /* �������� ��� ������ ��� �������, �� �������� �� ����� �������� ������ ������
          ������ �������� � ������ ����� �������
          Radiobutton � ������� ������� - ��������� ����� */
          $chk = 'out';
          if(isset($_POST['radio_table_select'])) {
          	$chk = ($_POST['radio_table_select'] == 'in') ? 'in' : 'out';
          }          
          if($chk == 'out') {
          	$selectPart = "SELECT date, time, notes, amount, type";
          	$fromPart = " FROM pay_withdrawals";
          	$wherePart =  " WHERE user='" . $_SESSION['login'] . "' ORDER BY id DESC";
          	$limitPart =  " LIMIT ".$limitFrom.",".$ITEMS_PER_PAGE;
          	$page_out_tpl = str_replace("{radio_out}", ' checked', $page_out_tpl);
          } else {
          	$selectPart = "SELECT date, time, notes, amount, type_money as type";
          	$fromPart = " FROM pay_deposits";
          	$wherePart =  " WHERE user='" . $_SESSION['login'] . "' ORDER BY id DESC";
          	$limitPart =  " LIMIT ".$limitFrom.",".$ITEMS_PER_PAGE;
          	$page_out_tpl = str_replace("{radio_in}", ' checked', $page_out_tpl);
          }     
          
          //������� ����� �������
          $query = "SELECT Count(*) ".$fromPart.$wherePart;          
          $num0 = mysql_fetch_row(mysql_query($query));
          $pagesCount = $num0[0];
          $pagesNum = ceil($pagesCount / $ITEMS_PER_PAGE);
          
          //������ ��� ��������� �� ���������
          $pagerTpl = '';
          for($i = 0; $i < $pagesNum; $i++) {          	
          	$currentPgTpl = (string)($i+1);
          	$pagerTpl .= ' <a href=\'#\' onclick=\'navigateToPage('.$i.')\'>'.$currentPgTpl.'</a>';
          }          
          $page_out_tpl          = str_replace("{tbl_pager}", $pagerTpl, $page_out_tpl);
          /*
          * ��� ��� ������� ����� �����
          */          
          
          $module_webmoney_out   = get_template($page_out_tpl, "[webmoney]", "[/webmoney]");
          $module_webmoney_out   = str_replace("[webmoney]", "", $module_webmoney_out);
          $module_webmoney_out   = str_replace("[/webmoney]", "", $module_webmoney_out);
          $module_webmoney_out   = str_replace("{cash}", $clients_query['cash'], $module_webmoney_out);
          $module_webmoney_out   = str_replace("{cash_wmpr}", $clients_query['cash'] / 100 * 0.8, $module_webmoney_out);
          $module_webmoney_out   = str_replace("{tariff_wmz}", $tariff_wmz, $module_webmoney_out);
          $module_webmoney_out   = str_replace("{tariff_onewmz}", $tariffs_query['USD'], $module_webmoney_out);
          $module_webmoney_out   = str_replace("{tariff_wmzpr}", $tariff_wmzpr, $module_webmoney_out);
          $module_webmoney_out   = str_replace("{tariff_wme}", $tariff_wme, $module_webmoney_out);
          $module_webmoney_out   = str_replace("{tariff_wmepr}", $tariff_wmepr, $module_webmoney_out);
          $module_webmoney_out   = str_replace("{tariff_onewme}", $tariffs_query['EUR'], $module_webmoney_out);
          $module_webmoney_out   = str_replace("{tariff_wmu}", $tariff_wmu, $module_webmoney_out);
          $module_webmoney_out   = str_replace("{tariff_wmupr}", $tariff_wmupr, $module_webmoney_out);
          $module_webmoney_out   = str_replace("{tariff_onewmu}", $tariffs_query['UAH'], $module_webmoney_out);
          $module_statistic      = get_template($page_out_tpl, "[statistic_header]", "[/statistic_header]");
          $module_statistic      = str_replace("[statistic_header]", "", $module_statistic);
          $module_statistic      = str_replace("[/statistic_header]", "", $module_statistic);
          $module_statistic_out  = $module_statistic;
          
       
          $pay_withdrawals_query = @mysql_query($selectPart.$fromPart.$wherePart.$limitPart);
          while ($pay_withdrawals_list = @mysql_fetch_array($pay_withdrawals_query)) {
              $module_statistic_list = get_template($page_out_tpl, "[statistic_list]", "[/statistic_list]");
              $module_statistic_list = str_replace("[statistic_list]", "", $module_statistic_list);
              $module_statistic_list = str_replace("[/statistic_list]", "", $module_statistic_list);
              $module_statistic_list = str_replace("{date}", $pay_withdrawals_list['date'], $module_statistic_list);
              $module_statistic_list = str_replace("{time}", $pay_withdrawals_list['time'], $module_statistic_list);
              $module_statistic_list = str_replace("{notes}", $pay_withdrawals_list['notes'], $module_statistic_list);
              $module_statistic_list = str_replace("{amount}", $pay_withdrawals_list['amount'], $module_statistic_list);
              $module_statistic_list = str_replace("{type}", $pay_withdrawals_list['type'], $module_statistic_list);
              if ($pay_withdrawals_list['status'] == 0) {
                  $status_withdrawals = "� ���������";
              }
              if ($pay_withdrawals_list['status'] == 1) {
                  $status_withdrawals = "��������";
              }
              if ($pay_withdrawals_list['status'] == 2) {
                  $status_withdrawals = "�������������";
              }
              $module_statistic_list = str_replace("{status}", $status_withdrawals, $module_statistic_list);
              $module_statistic_out .= $module_statistic_list;
          }
          $module_statistic = get_template($page_out_tpl, "[statistic_footer]", "[/statistic_footer]");
          $module_statistic = str_replace("[statistic_footer]", "", $module_statistic);
          $module_statistic = str_replace("[/statistic_footer]", "", $module_statistic);
          $module_statistic_out .= $module_statistic;
          $page_out_main = get_template($page_out_tpl, "[main]", "[/main]");
          $page_out_main = str_replace("[main]", "", $page_out_main);
          $page_out_main = str_replace("[/main]", "", $page_out_main);
          $page_out_main = str_replace("{webmoney}", $module_webmoney_out, $page_out_main);
          $page_out_main = str_replace("{statistic}", $module_statistic_out, $page_out_main);
          
          
          echo $page_out_main;
      }
      if ($action == "1") {
          $�����_���             = $_POST['type'];
          $�����_�����          = $_POST['summa'];
          $�����_������         = $_POST['purse'];
          $�����_������_������� = preg_match("/^(R|Z|E|U)[0-9]{12}\$/D", $�����_������);
          $�����_�����_������� 	 = preg_match("/^[0-9.]{1,10}\$/D", $�����_�����);
          $�����_���_�������     = preg_match("/^(WMR)\$/", $�����_���);
          if ($�����_������ == "") {
              $error .= "�� ����� ����� ��������!\\n";
          } else if ($�����_������_������� == false) {
              $error .= "�� ��������� ����� ��������, ������� 12�� ���������� �����!\\n";
          }
          if ($�����_����� == "") {
              $error .= "�� ������ ����� ������!\\n";
          } else if ($�����_�����_������� == false) {
              $error .= "�� ��������� ����� ������!\\n";
          }
          if ($�����_��� == "") {
              $error .= "�� ����� ���� ��������!\\n";
          } else if ($�����_���_������� == false) {
              $error .= "�� ��������� ��� ��������!\\n";
          }
          if ($�����_��� == "WMR" && $clients_query['cash'] < $�����_�����) {
              $error .= "����� ������ WMR �� ����� ���� ������ �������!\\n";
          }
          if ($�����_��� == "WMZ" && $tariff_wmz < $�����_�����) {
              $error .= "����� ������ WMZ �� ����� ���� ������ �������!\\n";
          }
          if ($�����_��� == "WME" && $tariff_wme < $�����_�����) {
              $error .= "����� ������ WME �� ����� ���� ������ �������!\\n";
          }
          if ($�����_��� == "WMU" && $tariff_wmu < $�����_�����) {
              $error .= "����� ������ WMU �� ����� ���� ������ �������!\\n";
          }
          
          if ($�����_��� == "WMR" && $�����_����� < $minWmr) {
          	$error .= "�� �� ������ ������� ������, ��� ".$minWmr." WMR.\\n";
          }
          if ($�����_��� == "WMZ" && $�����_�����< $minWmz) {
          	$error .= "�� �� ������ ������� ������, ��� ".$minWmz." WMZ.\\n";
          }
          if ($�����_��� == "WME" && $�����_�����< $minWme) {
          	$error .= "�� �� ������ ������� ������, ��� ".$minWme." WME.\\n";
          }
          if ($�����_��� == "WMU" && $�����_�����< $minWmu) {
          	$error .= "�� �� ������ ������� ������, ��� ".$minWmu." WMU.\\n";
          }
                    
          if ($error == "") {
          	
              $date = date("Y-m-d");
              $time = date("H:i:s");
              @mysql_query("update clients set cash=cash-{$�����_�����} where login='" . $_SESSION['login'] . "'");
              @mysql_query("INSERT INTO pay_withdrawals\r\n\t\t\t\t(`id` ,`user`, `amount`, `date`, `time`, `type`, `type_purse`, `status`, `notes`, `details`) VALUES\r\n\t\t\t\t(NULL,'" . $_SESSION['login'] . "','" . $�����_����� . "', '" . $date . "', '" . $time . "', '" . $�����_��� . "','" . $�����_������ . "' , '0', '����� �� ����� WebMoney:" . $�����_��� . "', '')");
              $outid         = mysql_insert_id();
              $config_query  = @mysql_fetch_array(@mysql_query("select * from casino_settings"));
              $site          = $config_query['siteadress'];
              $email_support = $config_query['emailcasino'];
              $priority      = 3;
              $format        = "text/html";
              $msg .= "������������, �������������,<br>";
              $msg .= "������������:" . $_SESSION['login'] . "<br><br>";
              $msg .= "�������� �� ����� �����: " . $�����_����� . " " . $�����_��� . "<br>";
              $msg .= "�� ������: " . $�����_������ . "<br>";
              $msg .= "����� �������� ������������, ���������� ��������� �� <a href=\"http://" . $site . "/acp/acp_admin/admin_pay_withdrawals.php?mode=transaction&id=" . $outid . "\">������</a><br>";
              $msg .= "---------------------<br>";
              $msg .= "� ���������� �����������,<br>";
              $msg .= "����� ��������-������ " . $site . "<br>";
              mail($email_support, "������ �� ����� �������: " . $�����_����� . ":" . $�����_��� . " ", $msg, "From: {$email_support}\nContent-Type:{$format};charset=windows-1251\nMIME-Version: 1.0\nContent-Transfer-Encoding: 8bit\nX-Priority: {$priority}\nX-Mailer:CasinoEngine mail v1.0");
               
              echo "<script>alert(\"������ �� ����� ����� �������! �������� ��������� ������ �������, �������� ��������!\");</script>";
              echo "<script>location.href=\"/" . $_SESSION['language'] . "/out\";</script>";
             
          } else {
              echo "<script>alert(\"������: " . $error . "\");</script>";
              echo "<script>history.back();</script>";
          }
      }
  } else {
	$_SESSION['needToLogin'] = true;
    echo "<script>location.href=\"/ru/\";</script>";
    exit( );
  }
?>