<?php

//�������� �� ������
if(!defined('CASINOENGINE')) { die("��� �������!<script>location.href='/';</script>"); }

	$�������������_����� 	= $_POST['forgot_login'];
	$�������������_email	= $_POST['forgot_email'];
	$�������������_�����	= $_POST['captcha_code'];
	$�������������_���      = '';
	//$email					= '';
	//$error 					= '';

	$�������������_�����_�������  = preg_match('/^[A-Za-z0-9]{2,20}$/', $�������������_�����);
	$�������������_email_�������  = preg_match('/^([a-zA-Z0-9])+([a-zA-Z0-9._-])*@([a-zA-Z0-9_-])+(\.[a-zA-Z0-9]+[a-zA-Z0-9_-]*)+$/', $�������������_email);
	$�������������_�����_������� = preg_match('/^[A-Za-z0-9]{2,20}$/', $�������������_�����);

	if ($�������������_����� == '' and $�������������_email == '') {
		$error .= '������� ��� ����� ��� email!<br>';
	}
	if ($�������������_����� != '') {
			if ($�������������_�����_������� == false) 				{ $error .= '�� ���������� �����<br>';}
		}
    if ($�������������_email != '') {
			if ($�������������_email_������� == false) 				{ $error .= '�� ���������� email<br>';}
    	}


	if ($�������������_����� == '') 				 				{ $error .= '�� ����� ���<br>';}  else
		{ if ($�������������_�����_������� == false) 				{ $error .= '�� ���������� ���<br>';} else {
			include_once (ENGINE_DIR.'/securimage/securimage.php');
			$securimage = new Securimage();

			$�����_�������� = $securimage->check($�������������_�����);
			if ($�������������_����� == '') { $error .= '������� ���������� ��� �� �����������<br>';}   else {
        		   if ($�����_�������� == false) { $error .= '���������� ����� ���<br>'; }
			}
			}
		}

	//������� �� ������������
	if ( $�������������_�����_������� == true and $�������������_����� != '' and $�����_�������� == true)
	{
		$email_query = @mysql_fetch_array(@mysql_query("SELECT * FROM clients WHERE login='".filter($�������������_�����)."'"));
		$email = $email_query['email'];
		if ($email !=0 or $email != '') { $�������������_��� = 'login';}
	}

	//������� �� email
	if ( $�������������_email_������� == true and $�������������_email != '' and $�����_�������� == true)
	{
		$email_query = @mysql_fetch_array(@mysql_query("SELECT * FROM clients WHERE email='".filter($�������������_email)."'"));
		$email = $email_query['email'];
		if ($email !=0 or $email != '') { $�������������_��� = 'email';}
	}

	//���� ������ ������ � ��� ������ ��������� ������
	if ( $error == '' and $email != '')
	{
		//���������� ������������ ��� md5(email+������ ������)
		$key = md5($email_query['email'].$email_query['pass']);
		@mysql_query("UPDATE clients SET key_reset='".$key."' WHERE email='".filter($email)."'");
		//�������� ����� ������������� �� email

		    $���������_������ = @mysql_fetch_array(@mysql_query("SELECT * FROM casino_settings"));
			$��_email = $���������_������['emailadmin'];
			$priority = 3;
			$format="text/html";
			$msg  = '�� ��������� ������������� ������ �� �����: '.$���������_������['siteadress'].'<br>';
			$msg .= '���� <a href="http://'.$���������_������['siteadress'].'/ru/forgot_key&key='.$key.'">������ ��� �������������� ������</a>, ���� �� ����������� �������������� ������ �� ���������� ��������� �� ��������� ������. ���� ���, ������ ��� ��������������� ������ ���������!.<br>';
			$msg .= "\n\n\n--------------\n<br> ���. ��������� �������� ������ ".sitename();
			@mail($email, '������������� ������: '.$���������_������['siteadress'], $msg, "From: $��_email\nContent-Type:$format;charset=windows-1251\nMIME-Version: 1.0\nContent-Transfer-Encoding: 8bit\nX-Priority: $priority\nX-Mailer:Casino mail v2");

			echo "<script> alert('���������� �� ������������� ������, ����������� ��� �� email ��������� ��� �����������!');</script>";
			echo '<script>location.href="/'.$_SESSION['language'].'/forgot_key";</script>';
			die() or exit();

	}
	//���� ���� ������
	//���� ������� ��� �� ������ ��� ��������� ���������, error = '';
	if ($�������������_����� == '' and $�������������_email == '' and $�������������_����� == '')
	   { $error = ''; }

	include(ENGINE_DIR."forms/main_forgot_password.php");
?>
