<?php
function game_bet( $_obfuscate_DREOKSMjETUaARw_Jj9cDCQKKioiLjI�, $_obfuscate_DRYcLSYxJx42MBIxCAMyAyQzEjYCBAE�, $_obfuscate_DRUDFxAJGCkTGx4MEBQCGR4qNjgjIyI� )
{
    $_obfuscate_DSU9EwowJT0iCg04Fx0JKxU2JigRJjI� = @mysql_fetch_array( @mysql_query( "select equalize,cashbonus,cash from clients where login='{$_obfuscate_DRUDFxAJGCkTGx4MEBQCGR4qNjgjIyI�}' limit 1" ) );
    if ( $_SESSION['mode'] == "wmr" )
    {
        $_obfuscate_DQ8qJQwJMSQhLycUJCgLHwIiBRUdAwE� = mysql_fetch_array( mysql_query( "select cash from clients where login='{$_obfuscate_DRUDFxAJGCkTGx4MEBQCGR4qNjgjIyI�}'" ) );
        $_obfuscate_DTsMFBQoDRgIGSEtHSZcBTwQBg0HBQE� = $_obfuscate_DQ8qJQwJMSQhLycUJCgLHwIiBRUdAwE�['cash'];
    }
    if ( $_SESSION['mode'] == "fun" )
    {
        $_obfuscate_DQ8qJQwJMSQhLycUJCgLHwIiBRUdAwE� = mysql_fetch_array( mysql_query( "select cashfun from clients where login='{$_obfuscate_DRUDFxAJGCkTGx4MEBQCGR4qNjgjIyI�}'" ) );
        $_obfuscate_DTsMFBQoDRgIGSEtHSZcBTwQBg0HBQE� = $_obfuscate_DQ8qJQwJMSQhLycUJCgLHwIiBRUdAwE�['cashfun'];
    }
    $_obfuscate_DRUnPigDPzQXJSMZBCNcLRELLBsfDwE� = $_obfuscate_DTsMFBQoDRgIGSEtHSZcBTwQBg0HBQE�;
    if ( $_SESSION['mode'] == "wmr" )
    {
        $_obfuscate_DQUKPTcUQBsTKAowHzQtNCozJxwEGRE� = $_obfuscate_DREOKSMjETUaARw_Jj9cDCQKKioiLjI�;
    }
    if ( $_SESSION['mode'] == "fun" )
    {
        $_obfuscate_DQUKPTcUQBsTKAowHzQtNCozJxwEGRE� = $_obfuscate_DREOKSMjETUaARw_Jj9cDCQKKioiLjI�;
    }
    $_obfuscate_DREqGzMfASgLOAYaCgQKIR0aHx8IPjI� = $_obfuscate_DRUnPigDPzQXJSMZBCNcLRELLBsfDwE� - $_obfuscate_DQUKPTcUQBsTKAowHzQtNCozJxwEGRE�;
    if ( 0 < $_obfuscate_DREqGzMfASgLOAYaCgQKIR0aHx8IPjI� )
    {
        if ( $_SESSION['mode'] == "wmr" )
        {
            $_obfuscate_DQ8rLDA3HjUyGhMyGTYCDTIYJRkDDCI� = $_obfuscate_DSU9EwowJT0iCg04Fx0JKxU2JigRJjI�['equalize'];
            if ( $_obfuscate_DQ8rLDA3HjUyGhMyGTYCDTIYJRkDDCI� == "0" )
            {
                @mysql_query( "update clients set cash=cash-{$_obfuscate_DQUKPTcUQBsTKAowHzQtNCozJxwEGRE�} where login='{$_obfuscate_DRUDFxAJGCkTGx4MEBQCGR4qNjgjIyI�}'" );
                $_obfuscate_DTUNEQoVKw0TETw4LQUmMRc2QBofHSI� = mysql_fetch_array( mysql_query( "select * from games where name='{$_obfuscate_DRYcLSYxJx42MBIxCAMyAyQzEjYCBAE�}'" ) );
                $_obfuscate_DSwIPA8KCUA3EwozKjMDGw83ExIMXCI� = $_obfuscate_DTUNEQoVKw0TETw4LQUmMRc2QBofHSI�['id_bank'];
                @mysql_query( "update games_bank set bank=bank+{$_obfuscate_DQUKPTcUQBsTKAowHzQtNCozJxwEGRE�} where id='{$_obfuscate_DSwIPA8KCUA3EwozKjMDGw83ExIMXCI�}'" );
                $_obfuscate_DQoyLBMrXDknCjs_AiMSEg8qGzQ0CiI� = $_obfuscate_DSU9EwowJT0iCg04Fx0JKxU2JigRJjI�['cashbonus'];
                if ( 0 < $_obfuscate_DQoyLBMrXDknCjs_AiMSEg8qGzQ0CiI� )
                {
                    @mysql_query( "update clients set equalize=1 where login='{$_obfuscate_DRUDFxAJGCkTGx4MEBQCGR4qNjgjIyI�}'" );
                }
            }
            if ( $_obfuscate_DQ8rLDA3HjUyGhMyGTYCDTIYJRkDDCI� == "1" )
            {
                @mysql_query( "update clients set cashbonus=cashbonus-{$_obfuscate_DQUKPTcUQBsTKAowHzQtNCozJxwEGRE�} where login='{$_obfuscate_DRUDFxAJGCkTGx4MEBQCGR4qNjgjIyI�}'" );
                $_obfuscate_DSsUDxkuCQM4CzwOIg4CQCsjFwgZIyI� = $_obfuscate_DSU9EwowJT0iCg04Fx0JKxU2JigRJjI�['cash'];
                if ( 0 < $_obfuscate_DSsUDxkuCQM4CzwOIg4CQCsjFwgZIyI� )
                {
                    @mysql_query( "update clients set equalize=0 where login='{$_obfuscate_DRUDFxAJGCkTGx4MEBQCGR4qNjgjIyI�}'" );
                }
            }
        }
        $_obfuscate_DSoRGhgeBgU2MSM0DRgWJQgIIiMBKRE� = "true";
    }
    else
    {
        $_obfuscate_DSoRGhgeBgU2MSM0DRgWJQgIIiMBKRE� = 0;
        @log_reporting( "�����: ".$_SESSION['login']." ����� �������, �� ����� ���� ������ ������ ��������� :client_balance_check:".$_obfuscate_DREqGzMfASgLOAYaCgQKIR0aHx8IPjI�.":client_balance:".$_obfuscate_DRUnPigDPzQXJSMZBCNcLRELLBsfDwE�.":betall_real:".$_obfuscate_DQUKPTcUQBsTKAowHzQtNCozJxwEGRE�, 0 );
    }
    return $_obfuscate_DSoRGhgeBgU2MSM0DRgWJQgIIiMBKRE�;
}

function log_reporting( $_obfuscate_DTMIxYCLTMtHik2CFwnLQtbFBESOCI�, $_obfuscate_DQ0kPyEkCzgwHBlAGjAhLAwXWzk4PgE� )
{
    $_obfuscate_DQoGEA8HJ1wGEw8wLAsyMxYxPiwkMRE� = $_SESSION['login'];
    echo $_obfuscate_DTMIxYCLTMtHik2CFwnLQtbFBESOCI�;
}

?>
