<?php
//�������� �� ������
if(!defined('CASINOENGINE')) { die("��� �������!<script>location.href='/';</script>"); }
?>
<h1 style="color: rgb(255, 255, 255); font-size: 1.5em; line-height: 1em; font-weight: normal; margin-bottom: 23px; visibility: visible;">������������� ������.</h1>
<? if($error != '') { echo "<font style='font-size:10px;color:#FF4500'>������: ".htmltext($error)."</font><br>"; } ?>
<form name="form" action="/<?=$_SESSION['language']?>/forgot_password" method="post">

	<b>������� ��� ����� �� �����</b><br>
	<INPUT class='input' style='width:200px;' name='forgot_login' maxLength='30' value="<?=htmltext($�������������_�����)?>"><br>
	<b>��� ��� �������� ������ ��������� ��� �����������</b><br>
	<INPUT class='input' style='width:200px;' name='forgot_email' maxLength='30' value="<?=htmltext($�������������_email)?>"><br>
	<b>���</b><br>
	<img id="captcha" src="/engine/securimage/securimage_show_example.php "><br><a href="#" onclick="document.getElementById('captcha').src = '/engine/securimage/securimage_show_example.php?' + Math.random(); return false">�������� �����������</a><br>
	<b>������� ���</b><br>
	<input class='input' style="width:200px;" type="text" name="captcha_code" size="25" maxlength="8" value="<?=htmltext($�������������_�����)?>" />
	<br><br>
	<INPUT type="submit" value="�����������" name="submit" style="font-weight:bold;color:#000;">
</form>
