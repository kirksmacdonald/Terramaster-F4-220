<?php
//�������� �� ������
if(!defined('CASINOENGINE')) { die("��� �������!<script>location.href='/';</script>"); }
?>

                                                                        <h1 style="color: rgb(255, 255, 255); font-size: 1.5em; line-height: 1em; font-weight: normal; margin-bottom: 23px; visibility: visible;">���� �� ����!</h1>

<? if ($_SESSION['sid'] == '' or $_SESSION['login'] == '') {

	if($error != '') { echo "<font style='font-size:10px;color:#FF4500'>������: ".htmltext($error)."</font><br>"; }
?>

<?=$redirect?>

<form name="form" action="/<?=$_SESSION['language']?>/login" method="post">

	<b><?=$lang['login']?></b><br>
	<INPUT class='input' style='width:200px;' name='login' maxLength='50' <? if($����� != '') { echo 'value="'.htmltext($�����).'"';} ?>><br>
	<b><?=$lang['password']?></b><br>
	<INPUT class='input' style='width:200px;' name='password' type='password' maxLength='12' <? if($������ != '') { echo 'value="'.htmltext($������).'"';} ?>><br>
	<b><?=$lang['sec_code']?></b><br>
	<img id="captcha" src="/engine/securimage/securimage_show_example.php "><br><a href="#" onclick="document.getElementById('captcha').src = '/engine/securimage/securimage_show_example.php?' + Math.random(); return false">�������� �����������</a><br>
	<b><?=$lang['enter_sec_code']?></b><br>
	<input class='input' style="width:200px;" type="text" name="captcha_code" size="25" maxlength="6" value="<?=htmltext($�����)?>" />
	<br><br>
	<INPUT type="submit" value="�����" name="submit" style="font-weight:bold;color:#000;">
</form>
<? } else {
	//����� �������� ��� ���� ��� ����������
	echo '�� ��� �����.����� ����� ����� ������� ����� <a href="/?logout">exit</a>';
	}
?>


