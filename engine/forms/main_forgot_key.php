<?php
//�������� �� ������
if(!defined('CASINOENGINE')) { die("��� �������!<script>location.href='/';</script>"); }
?>

<h1 style="color: rgb(255, 255, 255); font-size: 1.5em; line-height: 1em; font-weight: normal; margin-bottom: 23px; visibility: visible;">������������� ������.</h1>
<? if($error != '') { echo "<font style='font-size:10px;color:#FF4500'>������: ".htmltext($error)."</font><br>"; } ?>

<form name="form" action="/<?=$_SESSION['language']?>/forgot_key" method="post">
	������� ���� ��������� ��� �� email:<br>
	<input class='input' style="width:200px;" type="text" name="key" size="25" maxlength="64" value="<?=htmltext($�������������_key)?>" />
	<br><br>
	<INPUT type="submit" value="�����������" name="submit" style="font-weight:bold;color:#000;">
</form>

