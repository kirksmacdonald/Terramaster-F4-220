<?
error_reporting(0);
 

//$dur = "wmr";//$vl;
$dur = $_SESSION['dur'];

$result = mysql_query("select * from games where name='markopolo'");
$rowg = mysql_fetch_array( $result );
$bank_id = $rowg["id_bank"];
$jp_id = $rowg["id_jp"];

$result = mysql_query("select * from games_bank where id='$bank_id'");
$rowg = mysql_fetch_array( $result );
$jproc = 100 - $rowg["proc"];

$action = $_POST['action'];
if ( $action == "spin" )
{

if ( $dur == "wmr" )
{
    $stat_txt = "markopolo";


}


if ( $dur == "fun" )
{
    $stat_txt = "markopolo_FUN";


}

    $date = date( "d.m.y" );
    $time = date( "H:i:s" );
    $allbet = $bet;
$lineBet = $bet/$lines;
$delitel = 81/$allbet;
$_SESSION['delitel'] = $delitel;
    $win1 = 0;
    $win2 = 0;
    $win3 = 0;
    $win4 = 0;
    $win5 = 0;
    $win6 = 0;
    $win7 = 0;
    $win8 = 0;
    $win9 = 0;
    $win10 = 0;
    $winall = 0;
    $_SESSION['d'] = 0;
$_SESSION['freewin'] = 0;
$_SESSION['mud'] = 0;
$rowb9 = mysql_fetch_array ( mysql_query ( "select * from games_bank where id=$bank_id" ) );
$proc4 = $rowb9['proc'];
$allbet23 = $allbet / 100 * $proc4;
$jpbet = $allbet / 100 * $jproc;
if ( $dur == "wmr" )
{
	mysql_query(" update clients set cash=cash-'$allbet' where login='$l'" );
    mysql_query(" update games_bank set bank=bank+'$allbet23' where id=$bank_id" );
    mysql_query(" update games_jp set jp=jp+'$jpbet' where id=$jp_id" );
}


if ( $dur == "fun" )
{
    mysql_query( "update clients set cashfun=cashfun-'".$allbet."' where login='$l'" );

}

$mx2 = array( 1, 1, 1, 1, 2, 2, 2, 2, 3, 3, 3, 3, 4, 4, 4, 4, 5, 5, 5, 5, 6, 6, 6, 6, 7, 7, 7, 7, 8, 8, 8, 8, 9, 9, 10, 10 );
    $psym[1] = array( 0, 0, 0, 5, 20, 100 );   //  
    $psym[2] = array( 0, 0, 0, 5, 20, 100 );   //  
    $psym[3] = array( 0, 0, 0, 5, 25, 150 );   // 
    $psym[4] = array( 0, 0, 0, 5, 25, 150 );  // 
    $psym[5] = array( 0, 0, 0, 10, 40, 200 );  // 
    $psym[6] = array( 0, 0, 5, 20, 75, 500 );  // 
    $psym[7] = array( 0, 0, 5, 25, 100, 750 ); //  
    $psym[8] = array( 0, 0, 5, 50, 200, 2000 );// 
    $psym[9] = array( 0, 0, 10, 100, 1000, 5000 );// 


    $m_line = array( 2, 5, 8, 11, 14, 1, 4, 7, 10, 13, 3, 6, 9, 12, 15, 1, 5, 9, 11, 13, 3, 5, 7, 11, 15, 2, 6, 9, 12, 14, 2, 4, 7, 10, 14, 3, 6, 8, 10, 13, 1, 4, 8, 12, 15 );
    $km2 = 0;
    $m_ln = 0;
    for ( ; $m_ln <= 8; ++$m_ln )
    {
        $km = 0;
        for ( ; $km <= 4; ++$km )
        {
            $lin[$m_ln][$km] = $m_line[$km2];
            ++$km2;
            continue;
        }
    }
    $row_bon = mysql_fetch_array( mysql_query( "select * from games_settings where name='MarkoPolo'" ) );
    $mode = $row_bon['mode'];
    $shs2 = explode( "|", $mode );
    $mode1 = $shs2[0];
    $mode2 = $shs2[1];
    $mode3 = $shs2[2];
    $ooo2 = $row_bon['mode2'];
    $shs = explode( "|", $ooo2 );
    if ( $lines == 1 )
    {
        $ooo2 = $shs[0];
    }
    if ( $lines == 3 )
    {
        $ooo2 = $shs[1];
    }
    if ( $lines == 5 )
    {
        $ooo2 = $shs[2];
    }
    if ( $lines == 7 )
    {
        $ooo2 = $shs[3];
    }
    if ( $lines == 9 )
    {
        $ooo2 = $shs[4];
    }
if ( $dur == "wmr" )
{
        $roww = mysql_fetch_array ( mysql_query ( "select * from games_bank where id=$bank_id" ) );
$casbank = $roww['bank'] / 100 * $roww['proc'];

}


if ( $dur == "fun" )
{
    $casbank = 999999999999;

}
    if ( $casbank < $allbet )
    {
        $ooo2 = 2000;
    }
    $rnd_bonus1 = rand( 1, $mode1 );

    $rnd_result = rand( 1, $ooo2 );

    
    if ( $rnd_result == 1 && $rnd_bonus1 <> 1 )
    {
        $mas_win = 1;
    }
    else
    {
        $mas_win = 0;
    }
  



    $am = 0;
    while ( $am < 100000 )
    {
        $map_win1 = array( 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0 );

        $map_win21 = 0;
        $map_win3 = array( 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0 );
        $map_win4 = array( 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0 );

        srand( ( double )microtime( ) * 1000000 );
        shuffle( &$mx2 );
        $k = 0;
        for ( ; $k <= 15; ++$k )
        {
            $map[$k] = $mx2[$k];




 if ( $map[$k] == 9 && ($k == 1 || $k == 2 || $k == 3))
{
 $map[$k] = rand( 1, 8 );
}


 if ( $map[$k] == 10 && $rnd_bonus1 == 1 )
{
 $map[$k] = rand( 1, 8 );
}


 if ( $map[$k] == 10 && ( $k == 4 || $k == 5 || $k == 6 || $k == 10 || $k == 11 || $k == 12 ))
{
 $map[$k] = rand( 1, 8 );
}



  if ( $map[$k] == $map[$k-1] )
{
 $map[$k] = rand( 1, 8 );
}

 if ( $map[$k] == $map[$k-2] && ( $k == 3 || $k == 6 || $k == 9 || $k == 12 || $k == 15 ) )
{
 $map[$k] = rand( 1, 8 );
}

  if ( $map[$k] == $map[$k-1] )
{
 $map[$k] = rand( 1, 8 );
}

 if ( $map[$k] == $map[$k-2] && ( $k == 3 || $k == 6 || $k == 9 || $k == 12 || $k == 15 ) )
{
 $map[$k] = rand( 1, 8 );
}


  if ( $map[$k] == $map[$k-1] )
{
 $map[$k] = rand( 1, 8 );
}

 if ( $map[$k] == $map[$k-2] && ( $k == 3 || $k == 6 || $k == 9 || $k == 12 || $k == 15 ) )
{
 $map[$k] = rand( 1, 8 );
}


  if ( $map[$k] == $map[$k-1] )
{
 $map[$k] = rand( 1, 8 );
}

 if ( $map[$k] == $map[$k-2] && ( $k == 3 || $k == 6 || $k == 9 || $k == 12 || $k == 15 ) )
{
 $map[$k] = rand( 1, 8 );
}

  if ( $map[$k] == $map[$k-1] )
{
 $map[$k] = rand( 1, 8 );
}

 if ( $map[$k] == $map[$k-2] && ( $k == 3 || $k == 6 || $k == 9 || $k == 12 || $k == 15 ) )
{
 $map[$k] = rand( 1, 8 );
}




${ "sym".$k }  = $map[$k];


        }

        $mud = 0;
        $no1 = 0;
        $no2 = 0;
        $no3 = 0;
        $no4 = 0;
        $no5 = 0;
$rus = 0;
        $ln = 0;
        for ( ; $ln <= 8; ++$ln )
        {
            $s1 = $map[$lin[$ln][0]];
            $s2 = $map[$lin[$ln][1]];
            $s3 = $map[$lin[$ln][2]];
            $s4 = $map[$lin[$ln][3]];
            $s5 = $map[$lin[$ln][4]];





                       $j = 0;
                        for ( ;  $j <= 9; ++$j )
                        {




                            if ($s1 == $j && $s2 == $j)
                            {
                                $map_win1[$ln] = $psym[$j][2];
                            }
                            if ($s1 == 9 || $s2 == 9 )
                            {
                            if (($s1 == $j || $s1 == 9) && ($s2 == $j || $s2 == 9))
                            {
                                $map_win1[$ln] = $psym[$j][2];
                            } 
                            }





                            if ($s1 == $j && $s2 == $j && $s3 == $j)
                            {
                                $map_win1[$ln] = $psym[$j][3];
                            }
                            if ($s1 == 9 || $s2 == 9 || $s3 == 9 )
                            {
                            if (($s1 == $j || $s1 == 9) && ($s2 == $j || $s2 == 9) && ($s3 == $j || $s3 == 9))
                            {
                                $map_win1[$ln] = $psym[$j][3];
                            }
                            }




                            if ($s1 == $j && $s2 == $j && $s3 == $j && $s4 == $j)
                            {
$rus = 1;
                                $map_win1[$ln] = $psym[$j][4];
                            }
                            if ($s1 == 9 || $s2 == 9 || $s3 == 9 || $s4 == 9 )
                            {
                            if (($s1 == $j || $s1 == 9) && ($s2 == $j || $s2 == 9) && ($s3 == $j || $s3 == 9) && ($s4 == $j || $s4 == 9))
                            {

                                $map_win1[$ln] = $psym[$j][4];
                            }
                            }





                            if ( $s1 == $j && $s2 == $j && $s3 == $j && $s4 == $j && $s5 == $j)
                            {
$rus = 1;
                                $map_win1[$ln] = $psym[$j][5];

                            }
                            if ($s1 == 9 || $s2 == 9 || $s3 == 9 || $s4 == 9 || $s5 == 9 )
                            {
                            if (($s1 == $j || $s1 == 9) && ($s2 == $j || $s2 == 9) && ($s3 == $j || $s3 == 9) && ($s4 == $j || $s4 == 9) && ($s5 == $j || $s5 == 9))
                            {
$rus = 1;
                                $map_win1[$ln] = $psym[$j][5];
                            }
                            }



        }





        }














        $k = 0;
        for ( ; $k <= 8; ++$k )
        {
            $map_win[$k] = $map_win1[$k];
        }



        $k = 1;
        for ( ; $k <= 9; ++$k )
        {
            ${ "win".$k } = $lineBet * $map_win[$k - 1];
        }


        if ( $lines == 1 )
        {
            $win2 = 0;
            $win3 = 0;
            $win4 = 0;
            $win5 = 0;
            $win6 = 0;
            $win7 = 0;
            $win8 = 0;
            $win9 = 0;

        }
        if ( $lines == 2 )
        {
            $win3 = 0;
            $win4 = 0;
            $win5 = 0;
            $win6 = 0;
            $win7 = 0;
            $win8 = 0;
            $win9 = 0;

        }
        if ( $lines == 3 )
        {
            $win4 = 0;
            $win5 = 0;
            $win6 = 0;
            $win7 = 0;
            $win8 = 0;
            $win9 = 0;

        }
        if ( $lines == 4 )
        {
            $win5 = 0;
            $win6 = 0;
            $win7 = 0;
            $win8 = 0;
            $win9 = 0;

        }
        if ( $lines == 5 )
        {
            $win6 = 0;
            $win7 = 0;
            $win8 = 0;
            $win9 = 0;

        }
        if ( $lines == 6 )
        {
            $win7 = 0;
            $win8 = 0;
            $win9 = 0;

        }
        if ( $lines == 7 )
        {
            $win8 = 0;
            $win9 = 0;

        }

        if ( $lines == 8 )
        {
            $win9 = 0;

        }

 


        $winall = $win1 + $win2 + $win3 + $win4 + $win5 + $win6 + $win7 + $win8 + $win9;
        ++$am;
        if ( $mas_win == 1 && $winall == 0 )
        {
            $am = 10;
        }
        if ( $mas_win == 0 && $winall == 0 )
        {
            $am = 120000;
        }

        if ( $mas_win == 0 && $winall == 0 && $rnd_bonus1 == 1 )
        {
            $am = 120000;
            $startbon1 = 1;
        }
        if ( $mas_win == 1 && 0 < $winall )
        {
            $am = 120000;
        }
$ruusll = rand( 0, 1000 );
        if ( $mas_win == 1 && 0 < $winall && $rus == 0 && $casbank > $bet*50 && $ruusll <> 3 && $dur == "fun" )
        {
            $am = 10;
        }


if ( $casbank <= $winall )
{
$winall = 0;
$mas_win = 0; 
$am = 10;

        }

    }



    if ( 0 < $winall )
    {

$info = 1;
    }


if ( $startbon1 == 1 && $casbank >= $bet*15 )
{
        $tttb2 = array( 1, 2, 3 );
        $tttb3 = array( 7, 8, 9 );
        $tttb4 = array( 13, 14, 15 );

        shuffle( &$tttb2 );
        shuffle( &$tttb3 );
        shuffle( &$tttb4 );

        $rnd_sym_bon1 = $tttb2[0];
        $rnd_sym_bon2 = $tttb3[0];
        $rnd_sym_bon3 = $tttb4[0];


        ${ "sym".$rnd_sym_bon1 } = 10;
        ${ "sym".$rnd_sym_bon2 } = 10;

        ${ "sym".$rnd_sym_bon3 } = 10;



}






if ( $dur == "wmr" )
{
$row = mysql_fetch_array( mysql_query( "select * from clients where login='".$l."'" ) );
$user_balance = floor( $row[3] );
}


if ( $dur == "fun" )
{
$row = mysql_fetch_array( mysql_query( "select * from clients where login='".$l."'" ) );
$user_balance = floor( $row[6] );
}
    if ( 0 < $winall )
    {

$info = 1;

if ( $dur == "wmr" )
{
		mysql_query(" update clients set cash=cash+'$winall' where login='$l'");
		mysql_query("update games_bank set bank=bank-'$winall' where id=$bank_id");	
}
if ( $dur == "fun" )
{
    mysql_query( "update clients set cashfun=cashfun+$winall where login='$l'" );

}


    }
echo "result=ok&info=$info|$sym1|$sym2|$sym3|$sym4|$sym5|$sym6|$sym7|$sym8|$sym9|$sym10|$sym11|$sym12|$sym13|$sym14|$sym15|$lineBet|$lines|$bet|$winall|$mud|$bet|$winall|0|1|$mud&id=$l&balance=$user_balance";
    mysql_query( "INSERT INTO games_stats VALUES('NULL','".$date."','{$time}','$l','{$user_balance}','{$allbet}','{$winall}','{$stat_txt}')" );

        $_SESSION['win'] = $winall;
$_SESSION['freewin'] = $winall;
}



if ( $action == "freegame" )
{

if ( $dur == "wmr" )
{
    $stat_txt = "markopolo_free";


}


if ( $dur == "fun" )
{
    $stat_txt = "markopolo_free_FUN";


}


    $date = date( "d.m.y" );
    $time = date( "H:i:s" );
    $allbet = $bet;
$lineBet = $bet/$lines;
$delitel = 81/$allbet;
$_SESSION['delitel'] = $delitel;
    $win1 = 0;
    $win2 = 0;
    $win3 = 0;
    $win4 = 0;
    $win5 = 0;
    $win6 = 0;
    $win7 = 0;
    $win8 = 0;
    $win9 = 0;
    $win10 = 0;
    $winall = 0;

$mx2 = array( 1, 1, 1, 1, 2, 2, 2, 2, 3, 3, 3, 3, 4, 4, 4, 4, 5, 5, 5, 5, 6, 6, 6, 6, 7, 7, 7, 7, 8, 8, 8, 8, 9, 9, 10, 10 );
    $psym[1] = array( 0, 0, 0, 5, 20, 100 );   //  
    $psym[2] = array( 0, 0, 0, 5, 20, 100 );   //  
    $psym[3] = array( 0, 0, 0, 5, 25, 150 );   // 
    $psym[4] = array( 0, 0, 0, 5, 25, 150 );  // 
    $psym[5] = array( 0, 0, 0, 10, 40, 200 );  // 
    $psym[6] = array( 0, 0, 5, 20, 75, 500 );  // 
    $psym[7] = array( 0, 0, 5, 25, 100, 750 ); //  
    $psym[8] = array( 0, 0, 5, 50, 200, 2000 );// 
    $psym[9] = array( 0, 0, 10, 100, 1000, 5000 );// 

    $m_line = array( 2, 5, 8, 11, 14, 1, 4, 7, 10, 13, 3, 6, 9, 12, 15, 1, 5, 9, 11, 13, 3, 5, 7, 11, 15, 2, 6, 9, 12, 14, 2, 4, 7, 10, 14, 3, 6, 8, 10, 13, 1, 4, 8, 12, 15 );
    $km2 = 0;
    $m_ln = 0;
    for ( ; $m_ln <= 8; ++$m_ln )
    {
        $km = 0;
        for ( ; $km <= 4; ++$km )
        {
            $lin[$m_ln][$km] = $m_line[$km2];
            ++$km2;
            continue;
        }
    }
    $row_bon = mysql_fetch_array( mysql_query( "select * from games_settings where name='MarkoPolo'" ) );

    $ooo2 = $row_bon['mode2'];
    $shs = explode( "|", $ooo2 );
        $ooo2 = 5;

if ( $dur == "wmr" )
{
        $roww = mysql_fetch_array ( mysql_query ( "select * from games_bank where id=$bank_id" ) );
$casbank = $roww['bank'];

}


if ( $dur == "fun" )
{
    $casbank = 999999999;

}

    if ( $casbank < $allbet )
    {
        $ooo2 = 2000;
    }

    $rnd_result = rand( 1, $ooo2 );

    
    if ( $rnd_result <> 3 )
    {
        $mas_win = 1;
    }
    else
    {
        $mas_win = 0;
    }
  



    $am = 0;
    while ( $am < 100000 )
    {
        $map_win1 = array( 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0 );

        $map_win21 = 0;
        $map_win3 = array( 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0 );
        $map_win4 = array( 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0 );

        srand( ( double )microtime( ) * 1000000 );
        shuffle( &$mx2 );
        $k = 0;
        for ( ; $k <= 15; ++$k )
        {
            $map[$k] = $mx2[$k];


 if ( $map[$k] == 10 && ( $k == 1 || $k == 2 || $k == 3 || $k == 4 || $k == 5 || $k == 6 || $k == 10 || $k == 11 || $k == 12 ))
{
 $map[$k] = rand( 1, 8 );
}
 if ( $map[$k] == 9 && ($k == 1 || $k == 2 || $k == 3))
{
 $map[$k] = rand( 1, 8 );
}

  if ( $map[$k] == $map[$k-1] )
{
 $map[$k] = rand( 1, 8 );
}

 if ( $map[$k] == $map[$k-2] && ( $k == 3 || $k == 6 || $k == 9 || $k == 12 || $k == 15 ) )
{
 $map[$k] = rand( 1, 8 );
}

  if ( $map[$k] == $map[$k-1] )
{
 $map[$k] = rand( 1, 8 );
}

 if ( $map[$k] == $map[$k-2] && ( $k == 3 || $k == 6 || $k == 9 || $k == 12 || $k == 15 ) )
{
 $map[$k] = rand( 1, 8 );
}

  if ( $map[$k] == $map[$k-1] )
{
 $map[$k] = rand( 1, 8 );
}

 if ( $map[$k] == $map[$k-2] && ( $k == 3 || $k == 6 || $k == 9 || $k == 12 || $k == 15 ) )
{
 $map[$k] = rand( 1, 8 );
}

  if ( $map[$k] == $map[$k-1] )
{
 $map[$k] = rand( 1, 8 );
}

 if ( $map[$k] == $map[$k-2] && ( $k == 3 || $k == 6 || $k == 9 || $k == 12 || $k == 15 ) )
{
 $map[$k] = rand( 1, 8 );
}


  if ( $map[$k] == $map[$k-1] )
{
 $map[$k] = rand( 1, 8 );
}

 if ( $map[$k] == $map[$k-2] && ( $k == 3 || $k == 6 || $k == 9 || $k == 12 || $k == 15 ) )
{
 $map[$k] = rand( 1, 8 );
}



${ "sym".$k }  = $map[$k];


        }


$rus = 0;
        $ln = 0;
        for ( ; $ln <= 8; ++$ln )
        {
            $s1 = $map[$lin[$ln][0]];
            $s2 = $map[$lin[$ln][1]];
            $s3 = $map[$lin[$ln][2]];
            $s4 = $map[$lin[$ln][3]];
            $s5 = $map[$lin[$ln][4]];

                           $j = 0;
                        for ( ;  $j <= 9; ++$j )
                        {




                            if ($s1 == $j && $s2 == $j)
                            {
                                $map_win1[$ln] = $psym[$j][2];
                            }
                            if ( $s1 == 9 || $s2 == 9 || $s1 == 10 || $s2 == 10 )
                            {
                            if (($s1 == $j || $s1 == 9 || $s1 == 10 ) && ($s2 == $j || $s2 == 9 || $s2 == 10 ))
                            {
                                $map_win1[$ln] = $psym[$j][2];
                            } 
                            }





                            if ($s1 == $j && $s2 == $j && $s3 == $j)
                            {
                                $map_win1[$ln] = $psym[$j][3];
                            }
                            if ($s1 == 9 || $s2 == 9 || $s3 == 9 || $s1 == 10 || $s2 == 10 || $s3 == 10 )
                            {
                            if (($s1 == $j || $s1 == 9 || $s1 == 10 ) && ($s2 == $j || $s2 == 9 || $s2 == 10) && ($s3 == $j || $s3 == 9 || $s3 == 10))
                            {
                                $map_win1[$ln] = $psym[$j][3];
                            }
                            }




                            if ($s1 == $j && $s2 == $j && $s3 == $j && $s4 == $j)
                            {


$rus = 1;
                                $map_win1[$ln] = $psym[$j][4];
                            }
                            if ( $s1 == 9 || $s2 == 9 || $s3 == 9 || $s4 == 9 || $s1 == 10 || $s2 == 10 || $s3 == 10 || $s4 == 10 )
                            {
                            if (($s1 == $j || $s1 == 9 || $s1 == 10) && ($s2 == $j || $s2 == 9 || $s2 == 10) && ($s3 == $j || $s3 == 9 || $s3 == 10) && ($s4 == $j || $s4 == 9 || $s4 == 10))
                            {

$rus = 1;
                                $map_win1[$ln] = $psym[$j][4];
                            }
                            }





                            if ( $s1 == $j && $s2 == $j && $s3 == $j && $s4 == $j && $s5 == $j)
                            {

$rus = 1;
                                $map_win1[$ln] = $psym[$j][5];

                            }
                            if ( $s1 == 9 || $s2 == 9 || $s3 == 9 || $s4 == 9 || $s5 == 9 || $s1 == 10 || $s2 == 10 || $s3 == 10 || $s4 == 10 || $s5 == 10)
                            {
                            if (($s1 == $j || $s1 == 9 || $s1 == 10) && ($s2 == $j || $s2 == 9 || $s2 == 10) && ($s3 == $j || $s3 == 9 || $s3 == 10) && ($s4 == $j || $s4 == 9 || $s4 == 10) && ($s5 == $j || $s5 == 9 || $s5 == 10))
                            {

$rus = 1;
                                $map_win1[$ln] = $psym[$j][5];
                            }
                            }




        }





        }










        $k = 0;
        for ( ; $k <= 8; ++$k )
        {
            $map_win[$k] = $map_win1[$k];
        }



        $k = 1;
        for ( ; $k <= 9; ++$k )
        {
            ${ "win".$k } = $lineBet * $map_win[$k - 1];
        }


        if ( $lines == 1 )
        {
            $win2 = 0;
            $win3 = 0;
            $win4 = 0;
            $win5 = 0;
            $win6 = 0;
            $win7 = 0;
            $win8 = 0;
            $win9 = 0;

        }
        if ( $lines == 2 )
        {
            $win3 = 0;
            $win4 = 0;
            $win5 = 0;
            $win6 = 0;
            $win7 = 0;
            $win8 = 0;
            $win9 = 0;

        }
        if ( $lines == 3 )
        {
            $win4 = 0;
            $win5 = 0;
            $win6 = 0;
            $win7 = 0;
            $win8 = 0;
            $win9 = 0;

        }
        if ( $lines == 4 )
        {
            $win5 = 0;
            $win6 = 0;
            $win7 = 0;
            $win8 = 0;
            $win9 = 0;

        }
        if ( $lines == 5 )
        {
            $win6 = 0;
            $win7 = 0;
            $win8 = 0;
            $win9 = 0;

        }
        if ( $lines == 6 )
        {
            $win7 = 0;
            $win8 = 0;
            $win9 = 0;

        }
        if ( $lines == 7 )
        {
            $win8 = 0;
            $win9 = 0;

        }

        if ( $lines == 8 )
        {
            $win9 = 0;

        }

 


        $winall = $win1 + $win2 + $win3 + $win4 + $win5 + $win6 + $win7 + $win8 + $win9;
        $winall *= 2;
        ++$am;
        if ( $mas_win == 1 && $winall == 0 )
        {
            $am = 10;
        }
        if ( $mas_win == 0 && $winall == 0 )
        {
            $am = 120000;
        }


        if ( $mas_win == 1 && 0 < $winall )
        {
            $am = 120000;
        }
$ruusll = rand( 0, 1000 );
        if ( $mas_win == 1 && 0 < $winall && $rus == 0 && $casbank > $bet*50 && $ruusll <> 3 )
        {
            $am = 10;
        }


$freewin2 = $_SESSION['freewin'];

$winall2 =  $winall + $freewin2;


if ( $casbank <= $winall )
{
$winall = 0;
$mas_win = 0; 
$am = 10;

        }

    }





$freewin2 = $_SESSION['freewin'];
//if ( $winall > 0 )
//{
$freewin =  $winall + $freewin2;
//}
$_SESSION['freewin'] = $freewin;







if ( $dur == "wmr" )
{
$row = mysql_fetch_array( mysql_query( "select * from clients where login='".$l."'" ) );
$user_balance = floor( $row[3] );
}


if ( $dur == "fun" )
{
$row = mysql_fetch_array( mysql_query( "select * from clients where login='".$l."'" ) );
$user_balance = floor( $row[6] );
}

$user_balance -= $freewin2;

if ( 0 < $winall )
{

if ( $dur == "wmr" )
{
		mysql_query(" update clients set cash=cash+'$winall' where login='$l'");
		mysql_query("update games_bank set bank=bank-'$winall' where id=$bank_id");	
}
if ( $dur == "fun" )
{
    mysql_query( "update clients set cashfun=cashfun+$winall where login='$l'" );

}

}

$winall = $freewin;
echo "result=ok&info=$info|$sym1|$sym2|$sym3|$sym4|$sym5|$sym6|$sym7|$sym8|$sym9|$sym10|$sym11|$sym12|$sym13|$sym14|$sym15|$lineBet|$lines|$bet|$winall|$mud|$bet|$winall|0|1|$mud&id=$l&balance=$user_balance";
    mysql_query( "INSERT INTO games_stats VALUES('NULL','".$date."','{$time}','$l','{$user_balance}','{$win10}','{$winall}','{$stat_txt}')" );

        $_SESSION['win'] = $winall;

}










if ( $action == "double"  )
{

$delitel = $_SESSION['delitel'];
$d = $_SESSION['d'] + 1;
$_SESSION['d'] = $d;
$winall = $_SESSION['win'];
if ( $dur == "wmr" )
{
		mysql_query(" update clients set cash=cash-'$winall' where login='$l'");
		mysql_query("update games_bank set bank=bank+'$winall' where id=$bank_id");	
}
if ( $dur == "fun" )
{
    mysql_query( "update clients set cashfun=cashfun-$winall where login='$l'" );

}
$row_bon=mysql_fetch_array(mysql_query("select * from games_settings where name='MarkoPolo'"));
$g_shansdouble=$row_bon['mode3'];
$shans = rand( 1, $g_shansdouble );
if ( $shans == 1 )
{
$winall2 = $winall * 2;
}

if ( $dur == "wmr" )
{
        $roww = mysql_fetch_array ( mysql_query ( "select * from games_bank where id=$bank_id" ) );
$casbank = $roww['bank'];

}


if ( $dur == "fun" )
{
    $casbank = 999999999999;

}


    if ( $casbank <= $winall2 || $shans <> 1 || $winall2 >= 10000 || $d >= 5 )
    {
$winall = 0;
$winall2 = 0;
    }

if ( $winall2 > 0 )
{
if ( $bet == 0 )
{
$deler = 3;
}
if ( $bet == 1 )
{
$deler = 1;
}
}

if ( $winall2 <= 0 )
{
if ( $bet == 0 )
{
$deler = 1;
}
if ( $bet == 1 )
{
$deler = 3;
}
}



if ( $dur == "wmr" )
{
    $stat_txt = "markopolo_double";


}


if ( $dur == "fun" )
{
    $stat_txt = "markopolo_double_FUN";


}






if ( $dur == "wmr" )
{
$row = mysql_fetch_array( mysql_query( "select * from clients where login='".$l."'" ) );
$user_balance = floor( $row[3] );
}


if ( $dur == "fun" )
{
$row = mysql_fetch_array( mysql_query( "select * from clients where login='".$l."'" ) );
$user_balance = floor( $row[6] );
}
if ( 0 < $winall2 )
{
if ( $dur == "wmr" )
{
		mysql_query(" update clients set cash=cash+'$winall2' where login='$l'");
   mysql_query("update games_bank set bank=bank-'$winall2' where id=$bank_id");	
}
if ( $dur == "fun" )
{
    mysql_query( "update clients set cashfun=cashfun+$winall2 where login='$l'" );

}

}
echo "result=ok&info=$deler&id=$l&balance=$user_balance";
mysql_query( "INSERT INTO games_stats VALUES('NULL','".$date."','{$time}','$l','{$user_balance}','{$bet}','{$winall2}','{$stat_txt}')" );
$_SESSION['win'] = $winall2;

}






if ( $action == "finish"  )
{

if ( $dur == "wmr" )
{
    $stat_txt = "markopolo_finish";


}


if ( $dur == "fun" )
{
    $stat_txt = "markopolo_finish_FUN";


}



        $winall = $_SESSION['win'];

if ( $dur == "wmr" )
{
$row = mysql_fetch_array( mysql_query( "select * from clients where login='".$l."'" ) );
$user_balance = floor( $row[3] );
}


if ( $dur == "fun" )
{
$row = mysql_fetch_array( mysql_query( "select * from clients where login='".$l."'" ) );
$user_balance = floor( $row[6] );
}
mysql_query( "INSERT INTO games_stats VALUES('NULL','".$date."','{$time}','$l','{$user_balance}','{$bet}','{$winall}','{$stat_txt}')" );

echo "result=ok&state=0&min=1&jack=$jack&id=$l&balance=$user_balance";
}

?>

