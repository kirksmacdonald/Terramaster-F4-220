<?php
//�������� �� ������
if(!defined('CASINOENGINE')) { die("��� �������!<script>location.href='/';</script>"); }

	//������ post ������
	$error = '';
	$�����������_����� 	 = $_POST['login'];
	$�����������_������  = $_POST['password'];
	$�����������_������2 = $_POST['password2'];
	$�����������_email	 = $_POST['email'];
	$�����������_�����	 = $_POST['captcha_code'];
	$confirm             = (isset($_POST['confirm']) && 'on' == $_POST['confirm']);
 	$error = '';

	$�����������_�����_������� = preg_match('/^[A-Za-z0-9]{3,20}$/', $�����������_�����);
	$�����������_������_������� = preg_match('/^[A-Za-z0-9]{6,20}$/', $�����������_������);
	$�����������_������2_������� = preg_match('/^[A-Za-z0-9]{6,20}$/', $�����������_������2);
	$�����������_�����_������� = preg_match('/^[A-Za-z0-9]{2,20}$/', $�����������_�����);
	$�����������_email_������� = preg_match('/^([a-zA-Z0-9])+([a-zA-Z0-9._-])*@([a-zA-Z0-9_-])+(\.[a-zA-Z0-9]+[a-zA-Z0-9_-]*)+$/', $�����������_email);

	if ($�����������_����� == '') 				 			{ $error .= '�� ����� �����<br>';}  else
		{ if ($�����������_�����_������� == false) 			{ $error .= '�� ���������� �����<br>';} }
	if ($�����������_������ == '') 			 				{ $error .= '�� ����� ������<br>';} else
		{ if ($�����������_������_������� == false) 		{ $error .= '�� ���������� ������<br>';} }
	if ($�����������_������2 == '') 						{ $error .= '�� ����� ��������� ������<br>';} else
		{ if ($�����������_������2_������� == false) 		{ $error .= '�� ���������� ��������� ������<br>';}
		  if ($�����������_������ != $�����������_������2)  { $error .= '������ � ��������� ������ �����������<br>';}
		}
	if ($�����������_email == '') 				 			{ $error .= '�� ����� �������� �����<br>';} else
		{
		  if ($�����������_email_������� == false) 			{ $error .= '�� ���������� �������� �����<br>';} }

	if ($�����������_����� == '') 			 				{ $error .= '�� ����� ���<br>';} else
		{ if ($�����������_�����_������� == false) 			{ $error .= '�� ���������� ���<br>';} else {

			include_once (ENGINE_DIR.'/securimage/securimage.php');
			$securimage = new Securimage();

			$�����_�������� = $securimage->check($�����������_�����);
			if ($�����������_����� == '') { $error .= '������� ���������� ��� �� �����������<br>';}   else {
		           if ($�����_�������� == false) { $error .= '���������� ����� ���<br>'; }
			}
			}
		}
	if (!$confirm) {
		$error .= '�� �� ����������� � ��������� ������ Zodiac<br />';
	}

	//���� ������ ������ � ��� ������ ��������� ������
	if (
	$error == '' and
	$�����������_�����_������� == true and
	$�����������_������_������� == true and
	$�����������_������2_������� == true and
	$�����������_email_������� == true and
	$�����������_�����_������� == true and
	$confirm
	) 	{
		//������ ���
	    //echo '������';



		$ip = $_SERVER['REMOTE_ADDR'];


		//��� ���� ��������� �� �� �� ���������� �� ��� ������ ����� ��� ��� ������ � ����.
		$��������_��_������������ = @mysql_num_rows(mysql_query("select login from clients where login='".filter($�����������_�����)."' or email='".filter($�����������_email)."'"));
		if ($��������_��_������������ != '0') { $error .= '������� � ������ ������� ��� �����!'; }

		if ($error == '' and $��������_��_������������ == '0' ) {

		$mysqltime = date ("Y-m-d H:i:s");

		$fun_reg_query = @mysql_fetch_array(mysql_query("select * from casino_settings"));
		$fun_reg = $fun_reg_query['fun_reg'];
		$regBonus = $fun_reg_query['bonusreg'];
		
		//����������� ��������
		$referer = -1;		
		if(isset($_SESSION['ref'])) {
			$referer = mysql_real_escape_string($_SESSION['ref']);
				
			$refId0 = mysql_fetch_row(mysql_query("SELECT id FROM clients WHERE login = '$referer';"));
			$refId = $refId0[0];
			
			//������ ����������
			mysql_query("UPDATE clients SET registers = registers + 1 WHERE login = '".$referer."';");
		}
		
		if($refId == '')
			$refId = -1;
		
		//��������� ������ - ���� �����������
		$pid=intval($HTTP_COOKIE_VARS["pid"]);
		//���� ���� �� ������������, �� ����� 0 - ������� ��� �������
		if ($pid == '' and $pid == 0) { $pid = 0; }
		//����� � ���� ������ �����������
		
		@mysql_query("INSERT INTO clients
		(`id` ,`login`, `pass`, `email`, `cashfun`, `cash`, `ip_reg`, `ip_last`, `date`, `fun_date`, `status`, `admin_notes`, `operator_notes`,`status_message`, `key_reset`, `referer`) VALUES
		(NULL,'".$�����������_�����."','".md5($�����������_������)."', '".$�����������_email."', '".$fun_reg."', '".$regBonus."' , '".filter($ip)."', '".filter($ip)."', '".$mysqltime."', '".$mysqltime."', '1', '������� ������', '������� �����', '0', '', '".$refId."')");
/*
@mysql_query("INSERT INTO clients
		(`login`, `pass`, `email`, `cashfun`, `cash`, `ip_reg`, `ip_last`, `date`, `fun_date`, `status`, `admin_notes`, `operator_notes`,`status_message`, `key_reset`, `referer`) VALUES
		('".$�����������_�����."','".md5($�����������_������)."', '".$�����������_email."', '".$fun_reg."', '".$regBonus."' , '".filter($ip)."', '".filter($ip)."', '".$mysqltime."', '".$mysqltime."', '1', '������� ������', '������� �����', '0', '', '".$refId."')");*/
		//������ ������ � ��������������
		$�����������_������ = 'CASINOSOFT' . $_SERVER['HTTP_USER_AGENT'] . $_SERVER['HTTP_ACCEPT_CHARSET'];
		$�����������_������ = md5($�����������_������ . session_id());

		$_SESSION['login'] = $�����������_�����;
		$_SESSION['sid'] = $�����������_������;

		//������� ������ � �����������
		    $���������_������ = mysql_fetch_array(mysql_query("SELECT * FROM casino_settings"));
			$��_email = $���������_������['emailcasino'];
			$priority = 3;
			$format="text/html";

			$msg .= '������������, '.$�����������_�����.',<br>';
			$msg .= '������ ������ �������� ���������� ��� ������� � ������ �������� ��������:<br>';
			$msg .= '<br>';
			$msg .= '�����   : '.htmltext($�����������_�����).'<br>';
			$msg .= '������  : '.htmltext($�����������_������).'<br>';
			$msg .= '<br>';
			$msg .= '���� �� ���� ���������: <a href="http://'.$���������_������['siteadress'].'/ru/login">�����</a><br>';
			$msg .= '---------------------<br>';
			$msg .= '� ���������� �����������,<br>';
			$msg .= '������������� ��������-������ '.$���������_������['siteadress'].'<br>';


			mail($�����������_email, '����������� � ������', $msg, "From: $��_email\nContent-Type:$format;charset=windows-1251\nMIME-Version: 1.0\nContent-Transfer-Encoding: 8bit\nX-Priority: $priority\nX-Mailer:CasinoEngine mail v1.0");

			
			if (isAjaxRequest()) {
				unset($pid);
				exit(json_encode(array('status' => 0, 'message' => '', 'url' => '/' . $_SESSION['language'] . '/games')));
			}
			
			echo '<script>location.href="/'.$_SESSION['language'].'/games";</script>';
			unset($pid);
			die() or exit();


		}

		}

	if (isAjaxRequest()) {
		if ($error) {
			$error = iconv('windows-1251', 'utf-8', $error);
			exit(json_encode(array('status' => 1, 'message' => $error, 'url' => '')));
		}
	}
		
	//���� ������� ��� �� ������ ��� ��������� ���������, error = '';
	if ($�����������_����� == '' and $�����������_������ == '' and $�����������_������2 =='' and $�����������_email == '' and $�����������_����� == '')
	{ $error = ''; }

	include(ENGINE_DIR."forms/main_open_account.php");
?>