<?php

//�������� �� ������
if(!defined('CASINOENGINE')) { die("��� �������!<script>location.href='/';</script>"); }

	$���������_email		= $_POST['email'];
	$���������_����			= $_POST['subject'];
	$���������_���������	= $_POST['message'];
	$���������_�����		= $_POST['captcha_code'];
	$error = '';

	$���������_email_�������  = preg_match('/^([a-zA-Z0-9])+([a-zA-Z0-9._-])*@([a-zA-Z0-9_-])+(\.[a-zA-Z0-9]+[a-zA-Z0-9_-]*)+$/', $���������_email);
	$���������_����_�������	  = true;//preg_match('/^[!,.?A-Za-z0-9�-��-� ]{2,60}$/', $���������_����);
	$���������_�����_�������  = preg_match('/^[A-Za-z0-9]{2,20}$/', $���������_�����);

	if ($���������_email == '') 					 			{ $error .= '�� ����� email<br>';}  else
	{ if ($���������_email_������� == false) 					{ $error .= '�� ���������� email<br>';} }
	if ($���������_���� == '') 					 				{ $error .= '�� ������� ���� ���������<br>';}  else
	{ if ($���������_����_������� == false) 					{ $error .= '�� ���������� ���� ���������<br>';} }
	if ($���������_��������� == '') 					 		{ $error .= '�� ������ ���������<br>';}

		if ($���������_����� == '') 				 			{ $error .= '�� ����� ���<br>';}  else
		{ if ($���������_�����_������� == false) 				{ $error .= '�� ���������� ���<br>';} else {
			include_once (ENGINE_DIR.'/securimage/securimage.php');
			$securimage = new Securimage();

			$�����_�������� = $securimage->check($���������_�����);
			if ($���������_����� == '') { $error .= '������� ���������� ��� �� �����������<br>';}   else {
        		   if ($�����_�������� == false) { $error .= '���������� ����� ���<br>'; }
			}
			}
		}

	//���� ������ ������ � ��� ������ ��������� �������� ���������
	if (
	$error == '' and
	$���������_email_������� == true and
	$���������_����_������� == true and
	$���������_�����_������� == true
	) 	{
		if ($_SESSION['login'] != '') { $login_support = $_SESSION['login']; } else { $login_support = 'guest'; }
		$date = date ("Y-m-d");
		$time = date ("H:i:s");

		@mysql_query("INSERT INTO casino_messages
		(`id` ,`login`, `date`, `time`, `title`, `message`, `email`) VALUES
		(NULL,'".$login_support."','".$date."', '".$time."', '". mysql_escape_string($���������_����)."', '".mysql_escape_string($���������_���������)."' , '".$���������_email."')");


		//�������� ��������� ������
		//���� email ���. ���������
		//����������

		        $���������_������ = mysql_fetch_array(mysql_query("SELECT * FROM casino_settings"));
			$��_email = $���������_������['emailadmin'];
			$priority = 3;
			$format="text/html";
			$msg = htmltext($���������_���������).'<br>';
			$msg .= "\n\n\n--------------\n<br> ���. ��������� �������� ������ ".sitename();
			mail($��_email, '��� ���������: '.htmltext($���������_����), $msg, "From: $���������_email\nContent-Type:$format;charset=windows-1251\nMIME-Version: 1.0\nContent-Transfer-Encoding: 8bit\nX-Priority: $priority\nX-Mailer:Casino mail v2");

			echo "<script> alert('���� ��������� �����������! ��� ������� � ����� ��������� �����.'); window.history.back();</script>";

	}


	//���� ������� ��� �� ������ ��� ��������� ���������, error = '';
	if ($���������_email == '' and $���������_���� == '' and $���������_��������� == '')
	{ $error = ''; }

	include(ENGINE_DIR."forms/main_support.php");
?>