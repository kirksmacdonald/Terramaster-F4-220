<?php 
// �������� �� ������
if (!defined('CASINOENGINE')) {
	die("��� �������!<script>location.href='/';</script>");
} 
// ������� ������
error_reporting(0);
$language_default = 'ru'; //���� �� ��������� ��� �����
$apache_geoip = false; //����������� ������ ���������� ���� geoip ������ ��� ����� ������� �� ���������, ����� ���� ������������ � ������
$template = 'casinovulkan'; //������ �����
$path = '/kazino/'; //����� � ����� 


// ���� ������� �� true ����� false
$debug = true;
$notlocal = false;
$demo = 'demologin';
// ��������� ����
require_once('config_db.php');

?>