<?php



//�������� �� ������

if(!defined('CASINOENGINE')) { die("��� �������!<script>location.href='/';</script>"); }
	$�������������_key 	= $_POST['key'];
	$�������������_key_������� = preg_match("/^[A-Za-z0-9]{1,64}$/", $�������������_key);
	$�������������_key_GET 	= $_GET['key'];
	$�������������_key_GET_������� = preg_match("/^[A-Za-z0-9]{1,64}$/", $�������������_key_GET);
	if ( $�������������_key == '') { $error .= '����� �� �����!'; } else
		{ if ($�������������_key_������� == false ) { $error .= '����� �� ���������!';} }
	if ($�������������_key_GET != '' and $�������������_key_GET_������� == false ) { $error .= '����� �� ���������!';}
	if ( $�������������_key_GET != '' and $�������������_key_GET_������� == true )
	{
		//�������������� ����� ���������� ����� ������ ����, ������ � ��������� �� email ������������
		//�������� ��������� �� ������������ �����
		$key_user_query = @mysql_fetch_array(@mysql_query("SELECT * FROM clients WHERE key_reset='".filter($�������������_key_GET)."'"));
		if ( $key_user_query != '' and $key_user_query != 0 )
		{
			//���������� 8�� ������� ����� ������
			$new_pass = @new_pass();
			//���������� � md5, ��� ����
			$new_pass_md5 = md5($new_pass);
			//������ ������ � ����
			@mysql_query("UPDATE clients SET pass='".$new_pass_md5."' WHERE key_reset='".filter($�������������_key_GET)."'");
			//���� ����� �� ����� ��������
			$user_login_query =	@mysql_fetch_array(@mysql_query("SELECT * FROM clients WHERE key_reset='".$�������������_key_GET."'"));
			$user_login = $user_login_query['login'];
			$user_email = $user_login_query['email'];
			//�������� �����
			@mysql_query("UPDATE clients SET key_reset='' WHERE login='".filter($user_login)."'");
			//�������� ������
			//������� ������ � �����������
		    $���������_������ = mysql_fetch_array(mysql_query("SELECT * FROM casino_settings"));
			$��_email = $���������_������['emailadmin'];
			$priority = 3;
			$format="text/html";
			$msg .= '������������, '.$user_login.',<br>';
			$msg .= '������ ������ �������� ����� ���������� ��� ������� � ������ �������� ��������:<br>';
			$msg .= '<br>';
			$msg .= '�����   : '.$user_login.'<br>';
			$msg .= '������  : '.$new_pass.'<br>';
			$msg .= '<br>';
			$msg .= '---------------------<br>';
			$msg .= '� ���������� �����������,<br>';
			$msg .= '������������� ��������-������ '.$���������_������['siteadress'].'<br>';
			@mail($user_email, '����� ������ ��� �����: '.$���������_������['siteadress'], $msg, "From: $��_email\nContent-Type:$format;charset=windows-1251\nMIME-Version: 1.0\nContent-Transfer-Encoding: 8bit\nX-Priority: $priority\nX-Mailer:Casino mail v2");
			//����������� ������������ � ��������� �� ��������� � ������� � �������
			echo "<script> alert('����� ������, ���������� ��� �� email ��������� ��� �����������!');</script>";
			echo '<script>location.href="/'.$_SESSION['language'].'/login";</script>';
			die() or exit();
		} else { $error .= '������� ������ �����!'; }
	}
	if ( $�������������_key != '' and $�������������_key_������� == true )
	{
		//�������������� ����� ���������� ����� ������ ����, ������ � ��������� �� email ������������
		//�������� ��������� �� ������������ �����
		$key_user_query = @mysql_fetch_array(@mysql_query("SELECT * FROM clients WHERE key_reset='".filter($�������������_key)."'"));
		if ( $key_user_query != '' and $key_user_query != 0 )
		{			//���������� 8�� ������� ����� ������			$new_pass = @new_pass();
			//���������� � md5, ��� ����
			$new_pass_md5 = md5($new_pass);
			//������ ������ � ����
			@mysql_query("UPDATE clients SET pass='".$new_pass_md5."' WHERE key_reset='".filter($�������������_key)."'");
			//���� ����� �� ����� ��������
			$user_login_query =	@mysql_fetch_array(@mysql_query("SELECT * FROM clients WHERE key_reset='".filter($�������������_key)."'"));
			$user_login = $user_login_query['login'];
			$user_email = $user_login_query['email'];
			//�������� �����
			@mysql_query("UPDATE clients SET key_reset='' WHERE login='".filter($user_login)."'");
			//�������� ������

			//������� ������ � �����������

		    $���������_������ = mysql_fetch_array(mysql_query("SELECT * FROM casino_settings"));

			$��_email = $���������_������['emailadmin'];

			$priority = 3;

			$format="text/html";



			$msg .= '������������, '.$user_login.',<br>';

			$msg .= '������ ������ �������� ����� ���������� ��� ������� � ������ �������� ��������:<br>';

			$msg .= '<br>';

			$msg .= '�����   : '.$user_login.'<br>';

			$msg .= '������  : '.$new_pass.'<br>';

			$msg .= '<br>';

			$msg .= '---------------------<br>';

			$msg .= '� ���������� �����������,<br>';

			$msg .= '������������� ��������-������ '.$���������_������['siteadress'].'<br>';



			@mail($user_email, '����� ������ ��� �����: '.$���������_������['siteadress'], $msg, "From: $��_email\nContent-Type:$format;charset=windows-1251\nMIME-Version: 1.0\nContent-Transfer-Encoding: 8bit\nX-Priority: $priority\nX-Mailer:Casino mail v2");



			//����������� ������������ � ��������� �� ��������� � ������� � �������

			echo "<script> alert('����� ������, ���������� ��� �� email ��������� ��� �����������!');</script>";

			echo '<script>location.href="/'.$_SESSION['language'].'/login";</script>';

			die() or exit();



		} else { $error .= '������� ������ �����!'; }

	}



	if ($error != '') { include(ENGINE_DIR."forms/main_forgot_key.php");}

?>

