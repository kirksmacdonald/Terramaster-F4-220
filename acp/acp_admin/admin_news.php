<?php
//�������������
session_start();

//���������� ���������������� �� login
if(isset($_SESSION['session_admin'])) $adm_login = $_SESSION['session_admin'];
else die("<script>location.href=\"/acp/acp_admin/login.php\";</script>");

define("CASINOENGINE", true);
define("ENGINE_DIR", $_SERVER['DOCUMENT_ROOT']."/engine_acp");

require_once($_SERVER['DOCUMENT_ROOT']."/engine/core/mysql_log.php");
require_once( ENGINE_DIR."/config/config.php" );
include_once("content/functions.php");

$title = "������ �������������� - �������";
$menu = "article";
$menu_sub = "admin_news.php";
$error = "";

if(isset($_GET['mode'])) $����� = $_GET['mode']; else $����� = '';
$�����_������� = preg_match( "/^[a-z]{2,20}\$/D", $����� );
if(isset($_GET['id'])) $id = $_GET['id']; else $id = '';
$id_������� = preg_match( "/^[0-9]{1,5}\$/D", $id );
if ( $����� == "delete" && $id != "" && $id_������� == true )
{
    if ( $_SESSION['session_admin'] != $demo )
    {
        @mysql_query( "DELETE FROM casino_news WHERE id = '{$id}' LIMIT 1" );
        echo "<script>alert(\"������� ������� ������!\");</script>";
        echo "<script>location.href=\"/acp/acp_admin/admin_news.php\";</script>";
    }
    else
    {
        echo "<script>alert(\"�� �� ������ ������� ������ � ���� ������!\");</script>";
        echo "<script>history.back();</script>";
    }
}
if ( $����� == "addnews" && $�����_������� == true )
{
    $�����_title = $_POST['title'];
    $�����_date = $_POST['date'];
    //$�����_news_short = @mysql_real_escape_string( $_POST['news_short'] );
    $�����_news_short = $_POST['news_short'] ;
    //$�����_news_full = @mysql_real_escape_string( $_POST['news_full'] );
    $�����_news_full =  $_POST['news_full'];
    $keywords = @mysql_real_escape_string( $_POST['keywords'] );
    $descr = @mysql_real_escape_string( $_POST['descr'] );
    $�����_date_������� = preg_match( "/^[0-9-]{10}\$/D", $�����_date );
    $�����_title_������� = preg_match( "/^[\n\r\\?!,.�-��-�A-Za-z0-9 ]{2,999}\$/D", $�����_title );
    if ( $�����_date == "" )
    {
        $error .= "�� ������ ����<br>";
    }
    else if ( $�����_date_������� == false )
    {
        $error .= "�� ��������� ����<br>";
    }
    if ( $�����_title == "" )
    {
        $error .= "�� ������ �������� �������<br>";
    }
    else if ( $�����_title_������� == false )
    {
        $error .= "�� ��������� �������� �������<br>";
    }
    if ( $�����_news_short == "" )
    {
        $error .= "�� ������� �������� �������<br>";
    }
    if ( $�����_news_full == "" )
    {
        $error .= "�� ������� ������ �������<br>";
    }
    if ( $error == "" )
    {
        @mysql_query( "INSERT INTO casino_news\r\n\t(`id`, `date` ,`title`, `short_story`, `full_story`,`keywords`, `descr`) VALUES\r\n\t(NULL,'".$�����_date."','".$�����_title."', '".$�����_news_short."', '".$�����_news_full."','".$keywords."','".$descr."')" );
        echo "<script>alert(\"������� ������� ����������!\");</script>";
        echo "<script>location.href=\"/acp/acp_admin/admin_news.php\";</script>";
        exit( );
        if ( !TRUE )
        {
            exit( );
        }
    }
    if ( $�����_date == "" && $�����_title == "" && $�����_news_short == "" && $�����_news_full == "" )
    {
        $error = "";
    }
}
if ( $����� == "edit" && $�����_������� == true && $id != "" && $id_������� == true )
{
    $�����_title = $_POST['title'];
    $�����_date = $_POST['date'];
    //$�����_news_short = @mysql_real_escape_string( $_POST['news_short'] );
    //$�����_news_full = @mysql_real_escape_string( $_POST['news_full'] );
    $�����_news_short = $_POST['news_short'] ;
    $�����_news_full =  $_POST['news_full'];
    $keywords = @mysql_real_escape_string( $_POST['keywords'] );
    $descr = @mysql_real_escape_string( $_POST['descr'] );
    $�����_date_������� = preg_match( "/^[0-9-]{10}\$/D", $�����_date );
    $�����_title_������� = preg_match( "/^[\n\r\\?!,.�-��-�A-Za-z0-9 ]{2,999}\$/D", $�����_title );
    if ( $�����_date == "" )
    {
        $error .= "�� ������ ����<br>";
    }
    else if ( $�����_date_������� == false )
    {
        $error .= "�� ��������� ����<br>";
    }
    if ( $�����_title == "" )
    {
        $error .= "�� ������ �������� �������<br>";
    }
    else if ( $�����_title_������� == false )
    {
        $error .= "�� ��������� �������� �������<br>";
    }
    if ( $�����_news_short == "" )
    {
        $error .= "�� ������� �������� �������<br>";
    }
    if ( $�����_news_full == "" )
    {
        $error .= "�� ������� ������ �������<br>";
    }
    if ( $error == "" )
    {
        if ( $_SESSION['session_admin'] != $demo )
        {
            @mysql_query( "update casino_news set\r\n\t\t\t\tdate = '{$�����_date}',\r\n\t\t\t\ttitle = '{$�����_title}',\r\n\t\t\t\tshort_story = '{$�����_news_short}',\r\n\t\t\t\tfull_story = '{$�����_news_full}',\r\n\t\t\t\tkeywords = '{$keywords}',\r\n\t\t\t\tdescr = '{$descr}'\r\n\t\t\t\twhere id='{$id}'\r\n\t\t\t\t" );
            echo "<script>alert(\"������� ������� ����������������!\");</script>";
            echo "<script>location.href=\"/acp/acp_admin/admin_news.php\";</script>";
            exit( );
            if ( !TRUE )
            {
                exit( );
            }
        }
        else
        {
            echo "<script>alert(\"�� �� ������ ������� ������ � ���� ������!\");</script>";
            echo "<script>history.back();</script>";
        }
    }
    if ( $�����_date == "" && $�����_title == "" && $�����_news_short == "" && $�����_news_full == "" )
    {
        $error = "";
    }
}
include_once( "content/content_news.php" );
?>
