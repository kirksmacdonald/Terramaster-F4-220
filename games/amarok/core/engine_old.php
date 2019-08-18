<?php
/* ������ ��� ��� Amarok
 * ���������� ��� Casino-Engine.ru
 * ������������� php5.*
 */

define('CASINOENGINE', true);
include_once('../../../engine/config/config_db.php');
mysql_connect($dbhost,$dbuname,$dbpass);
mysql_select_db($dbname);

//�������������
session_start();
$rules_url="./rules.html";    		// ������ ��� ��������� ������� ����
$help_url="./help.html";      		// ������ ��� ��������� ������� �� ������
$bank_url="./bank.html";       		// ������ �� ������� ������������
$gamelist_url="./casino.html";  	// ������ �� ������ ���

define("_CHANCE_DEFAULT_MAX", 12);
define("_CHANCE_DEFAULT_LEVEL", 7);
define("_AMAROK_DELITEL", 100);
if(defined("AMAROK_GAME_NAME")) $_SESSION['GAME_NAME']=AMAROK_GAME_NAME;
Game::getConfig();

//API
class Game {
	private static $cache=array();
	public static $config=array();
	
	//��������� �����������
	private function __construct() {}
	private function __clone() {}
	
	//������ �������� ������������
	public static function isUser($user=NULL) {
		if(is_array(self::$cache['user'])) return true;
		if(!$user and isset($_SESSION['login'])) $user = $_SESSION['login'];
		if($user) {
	   		$sql = mysql_query("SELECT * FROM `clients` WHERE `login`='".$user."'");
	   		if($sql) {
	   			self::$cache['user']=mysql_fetch_assoc($sql);
	   			return true;
	   		} else return false;
   		} else return false;
    }
    
    //������ ������ ������������
    public static function userBalance() {
    	if(!self::isUser()) return false;
    	$user=self::$cache['user'];
		switch($_SESSION['mode']) {
			case 'fun': return $user['cashfun']; break;
			case 'wmr': return $user['cash']; break;
			default: return false;
		}
	}
	
	//�������� ������ ������������
	public static function userAdd($cash) {
		if(!self::isUser()) return false;
		$user=self::$cache['user'];
		switch($_SESSION['mode']) {
			case 'fun': 
				mysql_query("UPDATE `clients` SET `cashfun`=`cashfun`+\"{$cash}\" WHERE `id`=\"{$user['id']}\""); 
				self::$cache['user']['cashfun']+=$cash;
				return true;
			break;
			case 'wmr':
				mysql_query("UPDATE `clients` SET `cash`=`cash`+\"{$cash}\" WHERE `id`=\"{$user['id']}\"");
				self::$cache['user']['cash']+=$cash;
				return true;
			break;
			default: return false;
		}
  	}
  	
  	//�������� ������ ������������
  	public static function userPay($cash) {
		if(!self::isUser()) return false;
		$user=self::$cache['user'];
		switch($_SESSION['mode']) {
			case 'fun': 
				mysql_query("UPDATE `clients` SET `cashfun`=`cashfun`-\"{$cash}\" WHERE `id`=\"{$user['id']}\""); 
				self::$cache['user']['cashfun']-=$cash;
				return true;
			break;
			case 'wmr':
				mysql_query("UPDATE `clients` SET `cash`=`cash`-\"{$cash}\" WHERE `id`=\"{$user['id']}\"");
				self::$cache['user']['cash']-=$cash;
				return true;
			break;
			default: return false;
		}
  	}
  	
  	//��������� $id �����
	public static function isBank() {
		if(is_array(self::$cache['bank'])) return true;
		if($_SESSION['mode']=='fun') $id=self::$config['id_funbank'];
		elseif($_SESSION['mode']=='wmr') $id=self::$config['id_bank'];
		if($id) {
			$sql=mysql_query("SELECT * FROM `games_bank` WHERE `id`=\"{$id}\"");
			if($sql) {
				self::$cache['bank']=mysql_fetch_assoc($sql);
				return true;
			} else return false;
		} else return false;
	}
	
	//��������� ������� ������� � �����
	public static function bankBalance() {
		if(!self::isBank()) return false;
		return self::$cache['bank']['bank'];
	}
	
	//������ �������� � ����
	public static function bankAdd ($cash) {
		if(!self::isBank()) return false;
		if($_SESSION['mode']=='fun') $id=self::$config['id_funbank'];
		elseif($_SESSION['mode']=='wmr') $id=self::$config['id_bank'];
		mysql_query("UPDATE `games_bank` SET `bank`=`bank`+\"{$cash}\" WHERE `id`=\"{$id}\"");
		self::$cache['bank']['bank']+=$cash;
		return true;
	}
	
	//�������� �������� �� �����
	public static function bankPay($cash) {
		if(!self::isBank()) return false;
		if($_SESSION['mode']=='fun') $id=self::$config['id_funbank'];
		elseif($_SESSION['mode']=='wmr') $id=self::$config['id_bank'];
		mysql_query("UPDATE `games_bank` SET `bank`=`bank`-\"{$cash}\" WHERE `id`=\"{$id}\"");
		self::$cache['bank']['bank']-=$cash;
		return true;
	}
	
	//�������� ������������ ����
	public static function getConfig() {
		if(isset(self::$config['name'])) return true;
		if($name=$_SESSION['GAME_NAME']) {
			$sql=mysql_query("SELECT * FROM `games` WHERE `name`=\"{$name}\"");
			if($sql) {
				self::$config=mysql_fetch_assoc($sql);
				return true;
			} else return false;
		} else return false;
	}

	//������ ����������
	public static function writeStat($bet, $win) {
		if(!self::isBank() or !self::isUser()) return false;
		$user=self::$cache['user'];
		$bank=self::$cache['bank'];
		switch($_SESSION['mode']) {
			case 'wmr': $cash=$user['cash']; break;
			case 'fun': $cash=$user['cashfun']; break;
		}
		$date=date('d.m.y', time());
		mysql_query("INSERT INTO `games_stats` (`data`, `time`, `login`, `cash`, `bank`, `bet`, `win`, `game`, `mode`) VALUES (\"{$date}\",NOW(),\"{$user['login']}\", \"{$cash}\", \"{$bank['bank']}\", \"{$bet}\", \"{$win}\", \"{$_SESSION['GAME_NAME']}\", \"{$_SESSION['mode']}\")");
	}
}


//����� ��������
function printVar($varname, $value=null) {
	if (is_null($value)) echo $varname;
	else echo "&".$varname."=".$value;
}

//������ �����
function chance($value=null, $max=null) {
	$result=-1;
	if (is_null($value)) $value=_CHANCE_DEFAULT_LEVEL;
	else $value=intval($value);
	if (is_null($max)) $max=_CHANCE_DEFAULT_MAX;
	else $max=intval($max);
	if ($value==$max) return false;
	else $result=myRand(1, $value);
    if ($result==1) return true;
    else return false;
}

//������ ���������� ��������
function myRand($min=null, $max=null) {
	if(is_null($min)) $min=_MY_RAND_DEFAULT_MIN;
	if(is_null($max)) $max=_MY_RAND_DEFAULT_MAX;
	mt_srand();
	return mt_rand($min, $max);
}
?> 
