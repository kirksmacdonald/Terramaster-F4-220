<?php
//�������� �� ������
if(!defined('CASINOENGINE')) { die("��� �������!<script>location.href='/';</script>"); }
?>
                                                                        <h1 style="color: rgb(255, 255, 255); font-size: 1.5em; line-height: 1em; font-weight: normal; margin-bottom: 23px; visibility: visible;">�����������</h1>

<? if($error != '') { echo "<font style='font-size:10px;color:#FF4500'>������: ".$error."</font><br>"; } ?>


<form name="reg_your_details" method="post" action="/<?=$_SESSION['language']?>/open_account">
	<b>�����:</b><br>
	<input name="login" type="text" class='input' id="uid" style="width:180px;" value="<?  echo htmltext($�����������_�����); ?>" maxlength="12"><br>
	����� ����� �������� �� ���� � ���� ����������� ��������. �� ��� �� �������� ��������.<br>������: JohnDoe54
    <br><br>
	<b>������:</b><br>
	<input name="password" type="password" class='input' id="pass1" style="width:180px;" value="<?  echo htmltext($�����������_������); ?>"><br>
	������ ����� �������� �� ���� � ���� ����������� ��������. �� ��� �� �������� ��������.
	<br><br>
	<b>��������� ������:</b><br>
	<input name="password2" type="password" class='input' id="pass2" style="width:180px;" value="<?  echo htmltext($�����������_������2); ?>">
	<br><br>
	<b>��� email �����:</b><br>
	<input name="email" type="text" maxLength='30' class='input' id="email" style="width:180px;" value="<?  echo htmltext($�����������_email); ?>"><br>
	������: yourname@email.com
	<br><br>
	���:<br>
	<img id="captcha" src="/engine/securimage/securimage_show_example.php " alt="CAPTCHA Image" />
	<br>
	<a href="#" onclick="document.getElementById('captcha').src = '/engine/securimage/securimage_show_example.php?' + Math.random(); return false">�������� �����������</a><br>
	������� ���:<br>
	<input class='input' type="text" name="captcha_code" size="10" maxlength="8" value="<?=htmltext($�����)?>" />
 	<br><br>

	<input id="reg_your_details_submit" style="float:left; width:200px;color:#000000;" type="submit" value="�����������������">
</form>

                                                                        <br class="clear">

