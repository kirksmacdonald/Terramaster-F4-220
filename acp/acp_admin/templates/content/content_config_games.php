<?php
defined('CASINOENGINE') or die("������ ��������!");
include_once( "templates/admin_top.php" );
include_once( "templates/admin_menu.php" );
echo "\r\n";
if ( $����� == "" )
{
    echo "     <TD vAlign=top>\r\n       <TABLE cellSpacing=0 cellPadding=0 width=\"100%\" border=0><!--begin top row-->\r\n         <TBODY>\r\n         <TR>\r\n           <TD><IMG height=13\r\n             src=\"templates/images/spacer.gif\"></TD></TR>\r\n         <TR class=printHidden>\r\n           <TD class=bannerline><IMG height=5\r\n             src=\"templates/images/spacer.gif\" width=2></TD></TR><!--end top row-->\r\n         <TR><!--begi";
    echo "n top banner-->\r\n           <TD class=banner height=40><!--add the tab navigation -->\r\n             <TABLE class=printHidden style=\"MARGIN-LEFT: 10px\" cellSpacing=0\r\n             cellPadding=0 width=\"99%\" border=0>\r\n               <TBODY>\r\n               <TR><!--section header-->\r\n                 <TD align=left>\r\n                   <DIV id=container>";
    echo "<S";
    echo "PAN class=pageheader>���� &nbsp;";
    echo "<S";
    echo "PAN class=subhead>> ��������� ���</SPAN></SPAN><BR><BR>\r\n                   <UL id=nav>\r\n                     <LI><A class=selected href=\"admin_config_games.php\">��� ���� (";
    echo mysql_num_rows( @mysql_query( "SELECT * FROM games" ) );
    echo ")</A>\r\n             </LI></UL></DIV></TD></TR></TBODY></TABLE><!--end of tab navigation--></TD></TR><!--end banner -->\r\n         <TR><!--begin main content tables --->\r\n           <TD vAlign=top>\r\n             <TABLE cellSpacing=0 cellPadding=0 width=\"100%\">\r\n               <TBODY>\r\n               <TR>\r\n                 <TD width=10><IMG height=8\r\n                   src=\"templates/images/spacer.gif\"\r\n                ";
    echo " width=10></TD>\r\n                 <TD>               </TD></TR></TBODY></TABLE>\r\n             ";
    echo "<S";
    echo "TYLE type=text/css>.drag {\r\n \tCURSOR: hand\r\n }\r\n </STYLE>\r\n             <DIV id=dHTMLToolTip\r\n             style=\"Z-INDEX: 1000; LEFT: 0px; VISIBILITY: hidden; WIDTH: 10px; POSITION: absolute; TOP: 0px; HEIGHT: 10px\"></DIV>\r\n           </TD></TR>\r\n           </TR></TBODY></TABLE>\r\n                   <TABLE cellSpacing=0 cellPadding=0 width=\"100%\" bgColor=#cccccc border=0>\r\n                     <TBODY>\r\n    ";
    echo "                 <TR>\r\n                       <TD>\r\n                         <TABLE cellSpacing=1 cellPadding=3 width=\"100%\" border=0>\r\n                           <TBODY>\r\n                           <TR class=colheader>\r\n                             <TD width=\"10%\"><div align=\"center\">��������</div></TD>\r\n                             <TD width=\"15%\"><div align=\"center\">����(%)</div></TD>\r\n                     ";
    echo "        <TD width=\"15%\"><div align=\"center\">�������(%)</div></TD>\r\n                             <TD width=\"15%\"><div align=\"center\">���� FUN(%)</div></TD>\r\n                             <TD width=\"25%\"><div align=\"center\">����������</div></TD>\r\n                           </TR>\r\n ";

    $����_����_������ = @mysql_query( "select * from games ORDER BY id ASC" );
    while ( $����_����_���� = @mysql_fetch_array( $����_����_������ ) )
    {
        echo "\r\n                           <TR>\r\n                             <TD class=tabledata width=\"10%\" vAlign=top><div align=center>{$����_����_����['1']}</div></TD>\r\n                             <TD class=tabledata vAlign=top><div align=center>";
        $����_�������_������ = @mysql_fetch_array( @mysql_query( "select * from games_bank where id='{$����_����_����['3']}'" ) );
        echo "<a href=\"admin_config_bank.php?mode=edit&id=".$����_����_����[3]."\">".$����_�������_������['name']."</a> (".$����_�������_������['proc'];
        echo "%</a>)</div>\r\n                             <TD class=tabledata vAlign=top><div align=center>";
        $�������_�������_������ = @mysql_fetch_array( @mysql_query( "select * from games_jp where id='{$����_����_����['5']}'" ) );
        echo "<a href=\"admin_config_jp.php?mode=edit&id=".$����_����_����[5]."\">".$�������_�������_������['name']."</a> (".$�������_�������_������['proc'];
        echo "%</a>)\r\n                             <TD class=tabledata vAlign=top><div align=center>";
        $����_�������_������ = @mysql_fetch_array( @mysql_query( "select * from games_bank where id='{$����_����_����['4']}'" ) );
        echo "<a href=\"admin_config_bank.php?mode=edit&id=".$����_����_����[4]."\">".$����_�������_������['name']."</a> (".$����_�������_������['proc'];
        echo "%</a>)\r\n                             </div></TD>\r\n                             <TD class=tabledata vAlign=top>\r\n\t\t\t\t\t\t\t <div align=center>\r\n\t\t\t\t\t\t\t ";
        if ( $����_����_����['edit'] == 1 )
        {
            if ( $����_����_����['extended'] == 0 )
            {
                echo "<A href=admin_config_games.php?mode=edit&id=".$����_����_����[0].">���������</A>";
            }
            else
            {
                echo "<A href=admin_config_games.php?mode=edit_extended&id=".$����_����_����[0].">���������</A>";
            }
        }
        echo "\r\n\r\n\t\t\t\t\t\t\t</div>\r\n\t\t\t\t\t\t\t</TD>\r\n                           </TR>\r\n \t\t\t\t\t\t  ";
    }
    echo "                       </TBODY></TABLE></TD></TR></TBODY></TABLE></TD></TR><!-- closes 3 tables -->\r\n               <TR>\r\n                 <TD colSpan=2 height=10><IMG\r\n                   src=\"templates/images/spacer.gif\"\r\n                 width=1 height=\"1\"></TD>\r\n               </TR>\r\n";
}
echo "\r\n";
if ( $����� == "edit" && $id != "" && $id_������� == true )
{
    $����_������ = @mysql_fetch_array( @mysql_query( "select * from games where id='{$id}'" ) );
    echo "\r\n     <TD vAlign=top>\r\n       <TABLE cellSpacing=0 cellPadding=0 width=\"100%\" border=0><!--begin top row-->\r\n         <TBODY>\r\n         <TR>\r\n           <TD><IMG height=13\r\n             src=\"templates/images/spacer.gif\"></TD></TR>\r\n         <TR class=printHidden>\r\n           <TD class=bannerline><IMG height=5\r\n             src=\"templates/images/spacer.gif\" width=2></TD></TR><!--end top row-->\r\n         <TR><!--be";
    echo "gin top banner-->\r\n           <TD class=banner height=40><!--add the tab navigation -->\r\n             <TABLE class=printHidden style=\"MARGIN-LEFT: 10px\" cellSpacing=0\r\n             cellPadding=0 width=\"100%\" border=0>\r\n               <TBODY>\r\n               <TR><!--section header-->\r\n                 <TD align=left>\r\n                   <DIV id=container>";
    echo "<S";
    echo "PAN class=pageheader>���� &nbsp;";
    echo "<S";
    echo "PAN class=subhead>> ��������� ����</SPAN></SPAN><BR><BR>\r\n                   <UL id=nav>\r\n                     <LI><A href=\"admin_config_games.php\">��� ���� (";
    echo mysql_num_rows( @mysql_query( "SELECT * FROM games" ) );
    echo ")</A>\r\n             </LI></UL></DIV></TD></TR></TBODY></TABLE><!--end of tab navigation--></TD></TR><!--end banner -->\r\n         <TR><!--begin main content tables --->\r\n           <TD vAlign=top>\r\n             <TABLE cellSpacing=0 cellPadding=0 width=\"100%\">\r\n               <TBODY>\r\n               <TR>\r\n                 <TD width=10><IMG height=8\r\n                   src=\"templates/images/spacer.gif\"\r\n                ";
    echo " width=10></TD>\r\n                 <TD>               </TD></TR></TBODY></TABLE>\r\n             ";
    echo "<S";
    echo "TYLE type=text/css>.drag {\r\n \tCURSOR: hand\r\n }\r\n </STYLE>\r\n             <DIV id=dHTMLToolTip\r\n             style=\"Z-INDEX: 1000; LEFT: 0px; VISIBILITY: hidden; WIDTH: 10px; POSITION: absolute; TOP: 0px; HEIGHT: 10px\"></DIV>\r\n           </TD></TR>\r\n             <TD class=tableheader>������� ��������� </TD>\r\n         <TR>\r\n           <TD height=\"241\" vAlign=top>\r\n                           <form method=\"post\"";
    echo " action=\"admin_config_games.php?mode=edit_save\">\r\n                           <input name=\"id\" type=\"hidden\" value=\"";
    echo $id;
    echo "\">\r\n           \t\t\t\t   <TABLE class=editTable cellSpacing=0 cellPadding=5 border=0 style='border: 0px solid red ;'>\r\n                           <TBODY>\r\n                       \t   <TR>\r\n                             <TD class=colheader colSpan=4>��������� ����: ";
    
    
    echo $����_������['name'] ;
    echo "</TD></TR>" ;
    if( $����_������['name'] == "Geniewild")
     { 
            define ( 'GAMATIC_DIR', 'gamatic/' ) ;
            $game = $����_������['name'] ;
            echo "<TR><TD class=tabledata colSpan=4 Syle=text-align: center ;>\r\n\t\t\t\t\t\t\t ";
            include ( GAMATIC_DIR.'nyx/index.php' ) ;
     } 
    else {
    
    echo "<TR><TD class=tabledata>�������� ���� ����:</TD>\r\n                             <TD class=tabledata colSpan=3>\r\n\t\t\t\t\t\t\t ";
    echo "<s";
    echo "elect size=\"1\" name=\"main_bank\">\r\n";
    $main_bank_list = @mysql_query( "select * from games_bank" );
    while ( $row = mysql_fetch_array( $main_bank_list, MYSQL_ASSOC ) )
    {
        if ( $row['id'] == $����_������['id_bank'] )
        {
            echo "<option selected value=\"".$row['id']."\">".$row['name']."</option>";
        }
        else
        {
            echo "<option value=\"".$row['id']."\">".$row['name']."</option>";
        }
    }
    echo "\t\t\t\t\t\t\t </select>\r\n\t\t\t\t\t\t\t <a target=\"_blank\" href=\"/acp/acp_admin/admin_config_bank.php?mode=add\">������� �������� ����</a>\r\n                             </TD>\r\n                           </TR>\r\n                           <TR>\r\n                             <TD class=tabledata>�������� FUN ���� ����:</TD>\r\n                             <TD class=tabledata colSpan=3>\r\n\t\t\t\t\t\t\t ";
    echo "<s";
    echo "elect size=\"1\" name=\"main_fun_bank\">\r\n";
    $main_bank_list = @mysql_query( "select * from games_bank" );
    while ( $row = mysql_fetch_array( $main_bank_list, MYSQL_ASSOC ) )
    {
        if ( $row['id'] == $����_������['id_funbank'] )
        {
            echo "<option selected value=\"".$row['id']."\">".$row['name']."</option>";
        }
        else
        {
            echo "<option value=\"".$row['id']."\">".$row['name']."</option>";
        }
    }
    echo "\t\t\t\t\t\t\t </select>\r\n                             <a target=\"_blank\" href=\"/acp/acp_admin/admin_config_bank.php?mode=add\">������� FUN ����</a>\r\n                             </TD>\r\n                           </TR>\r\n                           <TR>\r\n                             <TD class=tabledata>������� ����:</TD>\r\n                             <TD class=tabledata colSpan=3>\r\n\t\t\t\t\t\t\t ";
    echo "<s";
    echo "elect size=\"1\" name=\"main_jp_bank\">\r\n";
    $main_bank_list = @mysql_query( "select * from games_jp" );
    while ( $row = mysql_fetch_array( $main_bank_list, MYSQL_ASSOC ) )
    {
        if ( $row['id'] == $����_������['id_jp'] )
        {
            echo "<option selected value=\"".$row['id']."\">".$row['name']."</option>";
        }
        else
        {
            echo "<option value=\"".$row['id']."\">".$row['name']."</option>";
        }
    }
    echo "\t\t\t\t\t\t\t </select>\r\n                             <a target=\"_blank\" href=\"/acp/acp_admin/admin_config_jp.php?mode=add\">������� ������� ����</a>\r\n\r\n                             </TD>\r\n                           </TR>\r\n                       \t   <TR>\r\n                             <TD class=colheader colSpan=4>��������� ����� ����� ����:</TD>\r\n                           </TR>\r\n";
    $risk_bonus_array = $����_������['bonus'];
    $risk_bonus = explode( "|", $risk_bonus_array );
    $risk_bonus_desc_array = $����_������['bonus_desc'];
    $risk_bonus_desc = explode( "|", $risk_bonus_desc_array );
    $i = 0;
    foreach ( $risk_bonus as $key => $value )
    {
        if ( $value != "" )
        {
            echo "\t\t                    <TR>\r\n                             <TD class=tabledata>";
            echo $risk_bonus_desc[$i];
            echo "</TD>\r\n\t\t\t\t\t\t\t <TD class=tabledata colSpan=3>1 �� <input name=\"risk_bonus_";
            echo $i;
            echo "\" style=\"width:20px;\" maxLength=2 type=\"text\" value=\"";
            echo $value;
            echo "\"></TD>\r\n                            </TR>\r\n        ";
        }
        ++$i;
    }
    echo "\r\n                       \t   <TR>\r\n                             <TD class=colheader colSpan=4>��������� ����� � ����������� �� ���������� ������� �����:</TD>\r\n                           </TR>\r\n";
    $risk_bonus_array = $����_������['win'];
    $risk_bonus = explode( "|", $risk_bonus_array );
    $i = 1;
    foreach ( $risk_bonus as $key => $value )
    {
        if ( $value != "" )
        {
            echo "\t\t                    <TR>\r\n                             <TD class=tabledata>����� ";
            echo $i;
            echo "</TD>\r\n\t\t\t\t\t\t\t <TD class=tabledata colSpan=3>1 �� <input name=\"risk_win_";
            echo $i;
            echo "\" style=\"width:20px;\" maxLength=2 type=\"text\" value=\"";
            echo $value;
            echo "\"></TD>\r\n                            </TR>\r\n        ";
        }
        $i = $i + 2;
    }
    echo "                       \t   <TR>\r\n                             <TD class=colheader colSpan=4>��������� ����� ���� ����:</TD>\r\n                           </TR>\r\n";
    $risk_bonus_array = $����_������['ddouble'];
    $risk_bonus = explode( "|", $risk_bonus_array );
    foreach ( $risk_bonus as $key => $value )
    {
        echo "\t\t                    <TR>\r\n                             <TD class=tabledata>���� ���� (���������)</TD>\r\n\t\t\t\t\t\t\t <TD class=tabledata colSpan=3>1 �� <input name=\"risk_ddouble\" style=\"width:20px;\" maxLength=2 type=\"text\" value=\"";
        echo $value;
        echo "\"></TD>\r\n                            </TR>\r\n        ";
    }
    echo "                           <TR>\r\n                             <TD colSpan=4>\r\n                               <HR>                            </TD>\r\n                           <TR>\r\n                             <TD height=\"47\" colSpan=3 class=control><INPUT class=lgbutton type=submit value=\"��������\" name=Submit> ";
    if ( $error != "" )
    {
        echo "<font color=red>".$error."</font>";
    }
    echo " </form>                            </TD>\r\n                             <TD class=tabledata>&nbsp;</TD></TR></TBODY></TABLE>\r\n                           </form>\r\n         </TD>\r\n         </TR></TBODY></TABLE></TD>\r\n     <TD><IMG src=\"templates/images/spacer.gif\" width=10></TD></TR>\r\n\r\n";
}
}
echo "\r\n";
if ( $����� == "edit_extended" && $id != "" && $id_������� == true )
{
    $����_������ = @mysql_fetch_array( @mysql_query( "select * from games where id='{$id}'" ) );
    echo "\r\n     <TD vAlign=top>\r\n       <TABLE cellSpacing=0 cellPadding=0 width=\"100%\" border=0><!--begin top row-->\r\n         <TBODY>\r\n         <TR>\r\n           <TD><IMG height=13\r\n             src=\"templates/images/spacer.gif\"></TD></TR>\r\n         <TR class=printHidden>\r\n           <TD class=bannerline><IMG height=5\r\n             src=\"templates/images/spacer.gif\" width=2></TD></TR><!--end top row-->\r\n         <TR><!--be";
    echo "gin top banner-->\r\n           <TD class=banner height=40><!--add the tab navigation -->\r\n             <TABLE class=printHidden style=\"MARGIN-LEFT: 10px\" cellSpacing=0\r\n             cellPadding=0 width=\"100%\" border=0>\r\n               <TBODY>\r\n               <TR><!--section header-->\r\n                 <TD align=left>\r\n                   <DIV id=container>";
    echo "<S";
    echo "PAN class=pageheader>���� &nbsp;";
    echo "<S";
    echo "PAN class=subhead>> ��������� ����</SPAN></SPAN><BR><BR>\r\n                   <UL id=nav>\r\n                     <LI><A href=\"admin_config_games.php\">��� ���� (";
    echo mysql_num_rows( @mysql_query( "SELECT * FROM games" ) );
    echo ")</A>\r\n             </LI></UL></DIV></TD></TR></TBODY></TABLE><!--end of tab navigation--></TD></TR><!--end banner -->\r\n         <TR><!--begin main content tables --->\r\n           <TD vAlign=top>\r\n             <TABLE cellSpacing=0 cellPadding=0 width=\"100%\">\r\n               <TBODY>\r\n               <TR>\r\n                 <TD width=10><IMG height=8\r\n                   src=\"templates/images/spacer.gif\"\r\n                ";
    echo " width=10></TD>\r\n                 <TD>               </TD></TR></TBODY></TABLE>\r\n             ";
    echo "<S";
    echo "TYLE type=text/css>.drag {\r\n \tCURSOR: hand\r\n }\r\n </STYLE>\r\n             <DIV id=dHTMLToolTip\r\n             style=\"Z-INDEX: 1000; LEFT: 0px; VISIBILITY: hidden; WIDTH: 10px; POSITION: absolute; TOP: 0px; HEIGHT: 10px\"></DIV>\r\n           </TD></TR>\r\n             <TD class=tableheader>������� ��������� </TD>\r\n         <TR>\r\n           <TD height=\"241\" vAlign=top>\r\n                           <form method=\"post\"";
    echo " action=\"admin_config_games.php?mode=edit_extended_save\">\r\n                           <input name=\"id\" type=\"hidden\" value=\"";
    echo $id;
    echo "\">\r\n           \t\t\t\t   <TABLE class=editTable cellSpacing=0 cellPadding=5 border=0>\r\n                           <TBODY>\r\n                       \t   <TR>\r\n                             <TD class=colheader colSpan=4>��������� ����: ";
    echo $����_������['name'];
    echo "</TD>\r\n                           </TR>\r\n\r\n                           <TR>\r\n                             <TD class=tabledata>�������� ���� ����:</TD>\r\n                             <TD class=tabledata colSpan=3>\r\n\t\t\t\t\t\t\t ";
    echo "<s";
    echo "elect size=\"1\" name=\"main_bank\">\r\n";
    $main_bank_list = @mysql_query( "select * from games_bank" );
    while ( $row = mysql_fetch_array( $main_bank_list, MYSQL_ASSOC ) )
    {
        if ( $row['id'] == $����_������['id_bank'] )
        {
            echo "<option selected value=\"".$row['id']."\">".$row['name']."</option>";
        }
        else
        {
            echo "<option value=\"".$row['id']."\">".$row['name']."</option>";
        }
    }
    echo "\t\t\t\t\t\t\t </select>\r\n\t\t\t\t\t\t\t <a target=\"_blank\" href=\"/acp/acp_admin/admin_config_bank.php?mode=add\">������� �������� ����</a>\r\n                             </TD>\r\n                           </TR>\r\n                           <TR>\r\n                             <TD class=tabledata>�������� FUN ���� ����:</TD>\r\n                             <TD class=tabledata colSpan=3>\r\n\t\t\t\t\t\t\t ";
    echo "<s";
    echo "elect size=\"1\" name=\"main_fun_bank\">\r\n";
    $main_bank_list = @mysql_query( "select * from games_bank" );
    while ( $row = mysql_fetch_array( $main_bank_list, MYSQL_ASSOC ) )
    {
        if ( $row['id'] == $����_������['id_funbank'] )
        {
            echo "<option selected value=\"".$row['id']."\">".$row['name']."</option>";
        }
        else
        {
            echo "<option value=\"".$row['id']."\">".$row['name']."</option>";
        }
    }
    echo "\t\t\t\t\t\t\t </select>\r\n                             <a target=\"_blank\" href=\"/acp/acp_admin/admin_config_bank.php?mode=add\">������� FUN ����</a>\r\n                             </TD>\r\n                           </TR>\r\n                           <TR>\r\n                             <TD class=tabledata>������� ����:</TD>\r\n                             <TD class=tabledata colSpan=3>\r\n\t\t\t\t\t\t\t ";
    echo "<s";
    echo "elect size=\"1\" name=\"main_jp_bank\">\r\n";
    $main_bank_list = @mysql_query( "select * from games_jp" );
    while ( $row = mysql_fetch_array( $main_bank_list, MYSQL_ASSOC ) )
    {
        if ( $row['id'] == $����_������['id_jp'] )
        {
            echo "<option selected value=\"".$row['id']."\">".$row['name']."</option>";
        }
        else
        {
            echo "<option value=\"".$row['id']."\">".$row['name']."</option>";
        }
    }
    echo "\t\t\t\t\t\t\t </select>\r\n                             <a target=\"_blank\" href=\"/acp/acp_admin/admin_config_jp.php?mode=add\">������� ������� ����</a>\r\n\r\n                             </TD>\r\n                           </TR>\r\n\r\n";
    $games_poker_query = @mysql_fetch_array( @mysql_query( "select * from ".$����_������['extended_table']." where id='".$id."'" ) );
    $risk_game1_array = $games_poker_query['vp_shanswin1'];
    $risk_game1 = explode( "|", $risk_game1_array );
    $i = 1;
    if ( $risk_game1[0] != "" )
    {
        echo "                       \t   <TR>\r\n                             <TD class=colheader colSpan=4>���� - ������ ������� ����, �� ���������� ����������:</TD>\r\n                           </TR>\r\n";
    }
    foreach ( $risk_game1 as $key => $value )
    {
        if ( $value != "" )
        {
            echo "\t\t                    <TR>\r\n                             <TD class=tabledata>������ ";
            echo $i;
            echo "</TD>\r\n\t\t\t\t\t\t\t <TD class=tabledata colSpan=3>1 �� <input name=\"risk_game1_";
            echo $i;
            echo "\" style=\"width:20px;\" maxLength=2 type=\"text\" value=\"";
            echo $value;
            echo "\"></TD>\r\n                            </TR>\r\n        ";
        }
        ++$i;
    }
    echo "\r\n\r\n";
    $games_poker_query = @mysql_fetch_array( @mysql_query( "select * from ".$����_������['extended_table']." where id='".$id."'" ) );
    $risk_game1_array = $games_poker_query['vp_shanswin2'];
    $risk_game1 = explode( "|", $risk_game1_array );
    $i = 1;
    if ( $risk_game1[0] != "" )
    {
        echo "                           <TR>\r\n                             <TD class=colheader colSpan=4>���� - ������ ������� ����, �� ���������� ����������:</TD>\r\n                           </TR>\r\n";
    }
    foreach ( $risk_game1 as $key => $value )
    {
        if ( $value != "" )
        {
            echo "\t\t                    <TR>\r\n                             <TD class=tabledata>������ ";
            echo $i;
            echo "</TD>\r\n\t\t\t\t\t\t\t <TD class=tabledata colSpan=3>1 �� <input name=\"risk_game2_";
            echo $i;
            echo "\" style=\"width:20px;\" maxLength=2 type=\"text\" value=\"";
            echo $value;
            echo "\"></TD>\r\n                            </TR>\r\n        ";
        }
        ++$i;
    }
    echo "                           <TR>\r\n                             <TD colSpan=4>\r\n                               <HR>                            </TD>\r\n                           <TR>\r\n                             <TD height=\"47\" colSpan=3 class=control><INPUT class=lgbutton type=submit value=\"��������\" name=Submit> ";
    if ( $error != "" )
    {
        echo "<font color=red>".$error."</font>";
    }
    echo " </form>                            </TD>\r\n                             <TD class=tabledata>&nbsp;</TD></TR></TBODY></TABLE>\r\n                           </form>\r\n         </TD>\r\n         </TR></TBODY></TABLE></TD>\r\n     <TD><IMG src=\"templates/images/spacer.gif\" width=10></TD></TR>\r\n\r\n";
}
include_once( "templates/admin_footer.php" );
echo "\r\n";
?>
