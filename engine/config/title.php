<?php 
// �������� �� ������
if (!defined('CASINOENGINE')) {
	die("��� �������!<script>location.href='/';</script>");
} 
// ���� �������� ������
$sitename_query = @mysql_fetch_array(@mysql_query("SELECT * FROM casino_settings"));

$sitename = strip_tags($sitename_query['sitename']);

if ($page_filter == true) {
	if ($_SESSION['language'] == 'ru') { // ������ ���������
		if ($page == 'index') {
			$title = $sitename;
		} 

		if ($page == 'login') {
			$title = '���� - ' . $sitename;
		} 

		if ($page == 'terms') {
			$title = '������� ������������� - ' . $sitename;
		} 

		if ($page == 'support') {
			$title = '������ ��������� - ' . $sitename;
		} 

		if ($page == 'forgot_password') {
			$title = '������������� ������ - ' . $sitename;
		} 

		if ($page == 'open_account') {
			$title = '����������� - ' . $sitename;
		} 

		if ($page == 'games') {
			$title = '���� - ' . $sitename;
		} 

		if ($page == 'faq') {
			$title = '����� ���������� ������� - ' . $sitename;
		} 
		// ���������������� �����
		if ($page == 'messages') {
			$title = '������ ��������� - ' . $sitename;
		} 

		if ($page == 'in') {
			$title = '���������� ����� - ' . $sitename;
		} 

		if ($page == 'out') {
			$title = '����� ������� - ' . $sitename;
		} 
		
		if ($page == 'partner') {
			$title = '���������� ��������� - ' . $sitename;
		}		
	} 

	if ($_SESSION['language'] == 'en') {
		if ($page == 'index') {
			$title = 'Casino Megastart wm-scripts.ru';
		} 

		if ($page == 'login') {
			$title = 'Enter site - Casino Megastart wm-scripts.ru';
		} 
	} 
} 

?>