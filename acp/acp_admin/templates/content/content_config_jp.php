<?php
defined('CASINOENGINE') or die("������ ��������!");
include_once( "templates/admin_top.php" );
include_once( "templates/admin_menu.php" );
echo "\r\n";
if ($mode == "" )
{
    echo "     <TD vAlign=top>\r\n       <TABLE cellSpacing=0 cellPadding=0 width=\"100%\" border=0><!--begin top row-->\r\n         <TBODY>\r\n         <TR>\r\n           <TD><IMG height=13\r\n             src=\"templates/images/spacer.gif\"></TD></TR>\r\n         <TR class=printHidden>\r\n           <TD class=bannerline><IMG height=5\r\n             src=\"templates/images/spacer.gif\" width=2></TD></TR><!--end top row-->\r\n         <TR><!--begi";
    echo "n top banner-->\r\n           <TD class=banner height=40><!--add the tab navigation -->\r\n             <TABLE class=printHidden style=\"MARGIN-LEFT: 10px\" cellSpacing=0\r\n             cellPadding=0 width=\"100%\" border=0>\r\n               <TBODY>\r\n               <TR><!--section header-->\r\n                 <TD align=left>\r\n                   <DIV id=container>";
    echo "<S";
    echo "PAN class=pageheader>��������� ������ &nbsp;";
    echo "<S";
    echo "PAN class=subhead>> ��������� ��������� </SPAN></SPAN><BR><BR>\r\n                   <UL id=nav>\r\n                     <LI><A class=selected href=\"admin_config_jp.php\">��� ��������</A>\r\n\r\n             </LI></UL></DIV></TD></TR></TBODY></TABLE><!--end of tab navigation--></TD></TR><!--end banner -->\r\n         <TR><!--begin main content tables --->\r\n           <TD vAlign=top>\r\n             <TABLE cellSpacing=0 cellPadding=0";
    echo " width=\"100%\">\r\n               <TBODY>\r\n               <TR>\r\n                 <TD width=10><IMG height=8\r\n                   src=\"templates/images/spacer.gif\"\r\n                 width=10></TD>\r\n                 <TD>               </TD></TR></TBODY></TABLE>\r\n             ";
    echo "<S";
    echo "TYLE type=text/css>.drag {\r\n \tCURSOR: hand\r\n }\r\n </STYLE>\r\n             <DIV id=dHTMLToolTip\r\n             style=\"Z-INDEX: 1000; LEFT: 0px; VISIBILITY: hidden; WIDTH: 10px; POSITION: absolute; TOP: 0px; HEIGHT: 10px\"></DIV>\r\n           </TD></TR>\r\n             <TD class=tableheader>\r\n             \t<a href=\"admin_config_jp.php?mode=add\" class=\"style3\">�������� �������</a>\r\n              </TD>\r\n           </T";
    echo "R></TBODY></TABLE>\r\n                   <TABLE cellSpacing=0 cellPadding=0 width=\"100%\" bgColor=#cccccc border=0>\r\n                     <TBODY>\r\n                     <TR>\r\n                       <TD>\r\n                         <TABLE cellSpacing=1 cellPadding=3 width=\"100%\" border=0>\r\n                           <TBODY>\r\n                           <TR class=colheader>\r\n\r\n                             <TD width=";
    echo "\"5%\"><div align=\"center\">��������</div></TD>\r\n                             <TD width=\"7%\"><div align=\"center\">����� � �����</div></TD>\r\n                             <TD width=\"5%\"><div align=\"center\">������� ��������</div></TD>\r\n\t\t\t\t\t\t\t <TD width=\"5%\"><div align=\"center\">����� �������������</div></TD>\r\n                             <TD width=\"50%\"><div align=\"center\">������������ ����</div></TD>\r\n                    ";
    echo "         <TD width=\"15%\"><div align=\"center\">����������</div></TD>\r\n                           </TR>\r\n ";
    $����_�������� = "";
    $����_���� = "";
    $�������_������ = @mysql_query( "select * from games_jp ORDER BY id ASC" );
    while ( $�������_���� = @mysql_fetch_array( $�������_������ ) )
    {
        echo "\r\n                           <TR>\r\n                             <TD class=tabledata width=\"10%\" vAlign=top><div align=center>{$�������_����['1']}</div></TD>\r\n                             <TD class=tabledata vAlign=top><div align=center>{$�������_����['2']}���.</div></TD>\r\n                             <TD class=tabledata vAlign=top><div align=center>{$�������_����['3']}%</div></TD>\r\n \t\t\t\t\t\t\t<TD class=tabledata vAlign=top><div align=center>{$�������_����['4']}���.</div></TD>\r\n                             <TD class=tabledata vAlign=top><div align=center>\r\n                             ";
        $����_������ = @mysql_query( "select * from games where id_jp='{$�������_����['0']}'" );
        while ( $����_���� = @mysql_fetch_array( $����_������ ) )
        {
            if ( $����_����['extended'] == "0" )
            {
                echo "<a href=\"admin_config_games.php?mode=edit&id=".$����_����['id']."\">".$����_����['name']."</a>, ";
            }
            else
            {
                echo "<a href=\"admin_config_games.php?mode=edit_extended&id=".$����_����['id']."\">".$����_����['name']."</a>, ";
            }
        }
        echo "</div></TD>\r\n\r\n\r\n                             <TD class=tabledata vAlign=top>\r\n\t\t\t\t\t\t\t <div align=center>\r\n\t\t\t\t\t\t\t \t<A href=admin_config_jp.php?mode=edit&id={$�������_����['0']}>�������������</A> -\r\n \t\t\t\t\t\t\t \t<a href=admin_config_jp.php?mode=delete&id={$�������_����['0']}>[X]</a>\r\n\t\t\t\t\t\t\t</div>\r\n\t\t\t\t\t\t\t</TD>\r\n                           </TR>\r\n \t\t\t\t\t\t  ";
    }
    echo "                       </TBODY></TABLE></TD></TR>\r\n                        <tr><td bgColor=#FFFFFF>\r\n                       <font color=\"red\"><center>��������! ��������� ������� '�����' � '��������' �������� �� ����� ���� ������ 100%</center></font>\r\n                       </td></tr>\r\n                       </TBODY></TABLE></TD></TR><!-- closes 3 tables -->\r\n               <TR>\r\n                 <TD colSpan=2 height";
    echo "=10><IMG\r\n                   src=\"templates/images/spacer.gif\"\r\n                 width=1 height=\"1\"></TD>\r\n               </TR>\r\n";
}
echo "\r\n";
if ($mode == "edit" && $id)
{
    $�������_������ = @mysql_fetch_array( @mysql_query( "select * from games_jp where id='{$id}'" ) );
    echo "\r\n     <TD vAlign=top>\r\n       <TABLE cellSpacing=0 cellPadding=0 width=\"100%\" border=0><!--begin top row-->\r\n         <TBODY>\r\n         <TR>\r\n           <TD><IMG height=13\r\n             src=\"templates/images/spacer.gif\"></TD></TR>\r\n         <TR class=printHidden>\r\n           <TD class=bannerline><IMG height=5\r\n             src=\"templates/images/spacer.gif\" width=2></TD></TR><!--end top row-->\r\n         <TR><!--be";
    echo "gin top banner-->\r\n           <TD class=banner height=40><!--add the tab navigation -->\r\n             <TABLE class=printHidden style=\"MARGIN-LEFT: 10px\" cellSpacing=0\r\n             cellPadding=0 width=\"100%\" border=0>\r\n               <TBODY>\r\n               <TR><!--section header-->\r\n                 <TD align=left>\r\n                   <DIV id=container>";
    echo "<S";
    echo "PAN class=pageheader>��������� ��������� &nbsp;";
    echo "<S";
    echo "PAN class=subhead>> �������������� �������� </SPAN></SPAN><BR><BR>\r\n                   <UL id=nav>\r\n                     <LI><A href=\"admin_config_jp.php\">��� ��������</A>\r\n\r\n             </LI></UL></DIV></TD></TR></TBODY></TABLE><!--end of tab navigation--></TD></TR><!--end banner -->\r\n         <TR><!--begin main content tables --->\r\n           <TD vAlign=top>\r\n             <TABLE cellSpacing=0 cellPadding=0 width=\"100";
    echo "%\">\r\n               <TBODY>\r\n               <TR>\r\n                 <TD width=10><IMG height=8\r\n                   src=\"templates/images/spacer.gif\"\r\n                 width=10></TD>\r\n                 <TD>               </TD></TR></TBODY></TABLE>\r\n             ";
    echo "<S";
    echo "TYLE type=text/css>.drag {\r\n \tCURSOR: hand\r\n }\r\n </STYLE>\r\n             <DIV id=dHTMLToolTip\r\n             style=\"Z-INDEX: 1000; LEFT: 0px; VISIBILITY: hidden; WIDTH: 10px; POSITION: absolute; TOP: 0px; HEIGHT: 10px\"></DIV>\r\n           </TD></TR>\r\n             <TD class=tableheader>\r\n\t\t\t\t��������: <a href=\"admin_config_jp.php\" class=\"style2\" style=\"color:#FFFFFF;\">��������� �����</a>\r\n              </TD>\r\n";
    echo "           </TR></TBODY></TABLE>\r\n\r\n            \t\t\t\t<form method=\"post\" action=\"admin_config_jp.php?mode=edit&id=";
    echo $id;
    echo "\">\r\n           \t\t\t\t   <TABLE class=editTable cellSpacing=0 cellPadding=5 border=0>\r\n                           <TBODY>\r\n                       \t   <TR>\r\n                             <TD class=colheader colSpan=4>�������������� ��������</TD>\r\n                           </TR>\r\n                           <TR>\r\n                             <TD class=tabledata>ID:</TD>\r\n                             <TD class=tab";
    echo "ledata colSpan=3>";
    echo $�������_������['id'];
    echo "</TD>\r\n                           </TR>\r\n                           <TR>\r\n                             <TD class=colheader colSpan=4>��������� ��������</TD>\r\n                           </TR>\r\n                           <TR>\r\n                             <TD width=\"50%\" class=tabledata>�������� ��������:</TD>\r\n                             <TD class=tabledata colSpan=3><INPUT name=name id=\"affilpercentage\" val";
    echo "ue=\"";
    echo $�������_������['name'];
    echo "\" size=50 maxLength=50></TD>\r\n                           </TR>\r\n                           <TR>\r\n                             <TD width=\"50%\" class=tabledata>������� �������� ��������:</TD>\r\n                             <TD class=tabledata colSpan=3><INPUT name=bank id=\"affilpercentage\" value=\"";
    echo $�������_������['jp'];
    echo "\" size=20 maxLength=20>���. </TD>\r\n                           </TR>\r\n                           <TR>\r\n                             <TD width=\"50%\" class=tabledata>������� �� ������ ������ ������ �� �������:</TD>\r\n                             <TD class=tabledata colSpan=3><INPUT name=proc id=\"affilpercentage\" value=\"";
    echo $�������_������['proc'];
    echo "\" size=3 maxLength=3>% </TD>\r\n                           </TR>\r\n                           <TR>\r\n                             <TD width=\"50%\" class=tabledata>����� ������������:</TD>\r\n                             <TD class=tabledata colSpan=3><INPUT name=action id=\"affilpercentage\" value=\"";
    echo $�������_������['action'];
    echo "\" size=10 maxLength=10>���. </TD>\r\n                           </TR>\r\n                           <TR>\r\n                             <TD width=\"50%\" class=tabledata>������ ������ ������������ ��������:</TD>\r\n                             <TD class=tabledata colSpan=3><INPUT name=jp_up id=\"affilpercentage\" value=\"";
    echo $�������_������['jp_up'];
    echo "\" size=10 maxLength=10>���. </TD>\r\n                           </TR>\r\n                           <TR>\r\n                             <TD width=\"50%\" class=tabledata>������� ������ ������������ ��������:</TD>\r\n                             <TD class=tabledata colSpan=3><INPUT name=jp_down id=\"affilpercentage\" value=\"";
    echo $�������_������['jp_down'];
    echo "\" size=10 maxLength=10>���. </TD>\r\n                           </TR>\r\n                           <TR>\r\n                             <TD colSpan=4>\r\n                               <HR>                            </TD>\r\n                           <TR>\r\n                             <TD height=\"47\" colSpan=3 class=control><INPUT class=lgbutton type=submit value=\"��������\" name=Submit> ";
    if ( $error != "" )
    {
        echo "<font color=red>".$error."</font>";
    }
    echo " </form>                            </TD>\r\n                             <TD class=tabledata>&nbsp;</TD></TR></TBODY></TABLE>\r\n                           </form>\r\n               <TR>\r\n                 <TD colSpan=2 height=10><IMG\r\n                   src=\"templates/images/spacer.gif\"\r\n                 width=1 height=\"1\"></TD>\r\n               </TR>\r\n\r\n\r\n";
}
echo "\r\n";
if ($mode == "add" )
{
    echo "\r\n     <TD vAlign=top>\r\n       <TABLE cellSpacing=0 cellPadding=0 width=\"100%\" border=0><!--begin top row-->\r\n         <TBODY>\r\n         <TR>\r\n           <TD><IMG height=13\r\n             src=\"templates/images/spacer.gif\"></TD></TR>\r\n         <TR class=printHidden>\r\n           <TD class=bannerline><IMG height=5\r\n             src=\"templates/images/spacer.gif\" width=2></TD></TR><!--end top row-->\r\n         <TR><!--be";
    echo "gin top banner-->\r\n           <TD class=banner height=40><!--add the tab navigation -->\r\n             <TABLE class=printHidden style=\"MARGIN-LEFT: 10px\" cellSpacing=0\r\n             cellPadding=0 width=\"100%\" border=0>\r\n               <TBODY>\r\n               <TR><!--section header-->\r\n                 <TD align=left>\r\n                  <DIV id=container>";
    echo "<S";
    echo "PAN class=pageheader>��������� ��������� &nbsp;";
    echo "<S";
    echo "PAN class=subhead>> �������� ������� </SPAN></SPAN><BR><BR>\r\n                   <UL id=nav>\r\n                     <LI><A href=\"admin_config_jp.php\">��� ��������</A>\r\n             </LI></UL></DIV></TD></TR></TBODY></TABLE><!--end of tab navigation--></TD></TR><!--end banner -->\r\n         <TR><!--begin main content tables --->\r\n           <TD vAlign=top>\r\n             <TABLE cellSpacing=0 cellPadding=0 width=\"100%\">\r\n    ";
    echo "           <TBODY>\r\n               <TR>\r\n                 <TD width=10><IMG height=8\r\n                   src=\"templates/images/spacer.gif\"\r\n                 width=10></TD>\r\n                 <TD>               </TD></TR></TBODY></TABLE>\r\n             ";
    echo "<S";
    echo "TYLE type=text/css>.drag {\r\n \tCURSOR: hand\r\n }\r\n </STYLE>\r\n             <DIV id=dHTMLToolTip\r\n             style=\"Z-INDEX: 1000; LEFT: 0px; VISIBILITY: hidden; WIDTH: 10px; POSITION: absolute; TOP: 0px; HEIGHT: 10px\"></DIV>\r\n           </TD></TR>\r\n             <TD class=tableheader>\r\n\t\t\t\t��������: <a href=\"admin_config_jp.php\" class=\"style2\" style=\"color:#FFFFFF;\">��������� �����</a>\r\n              </TD>\r\n";
    echo "           </TR></TBODY></TABLE>\r\n\r\n            \t\t\t\t<form method=\"post\" action=\"admin_config_jp.php?mode=add\">\r\n           \t\t\t\t   <TABLE class=editTable cellSpacing=0 cellPadding=5 border=0>\r\n                           <TBODY>\r\n                       \t   <TR>\r\n                             <TD class=colheader colSpan=4>���������� ��������</TD>\r\n                           </TR>\r\n                           <TR>";
    echo "\r\n                             <TD width=\"50%\" class=tabledata>�������� ��������:</TD>\r\n                             <TD class=tabledata colSpan=3><INPUT name=name id=\"affilpercentage\" value=\"\" size=50 maxLength=50></TD>\r\n                           </TR>\r\n                           <TR>\r\n                             <TD width=\"50%\" class=tabledata>������� �������� ��������:</TD>\r\n                          ";
    echo "   <TD class=tabledata colSpan=3><INPUT name=bank id=\"affilpercentage\" value=\"\" size=20 maxLength=20>���. </TD>\r\n                           </TR>\r\n                           <TR>\r\n                             <TD width=\"50%\" class=tabledata>������� �� ������ ������ ������ �� �������:</TD>\r\n                             <TD class=tabledata colSpan=3><INPUT name=proc id=\"affilpercentage\" value=\"\" size=3 maxLe";
    echo "ngth=3>% </TD>\r\n                           </TR>\r\n                           <TR>\r\n                             <TD width=\"50%\" class=tabledata>����� ������������:</TD>\r\n                             <TD class=tabledata colSpan=3><INPUT name=action id=\"affilpercentage\" value=\"\" size=10 maxLength=10>���. </TD>\r\n                           </TR>\r\n                           <TR>\r\n                             <TD ";
    echo "width=\"50%\" class=tabledata>������ ������ ������������ ��������:</TD>\r\n                             <TD class=tabledata colSpan=3><INPUT name=jp_up id=\"affilpercentage\" value=\"\" size=10 maxLength=10>���. </TD>\r\n                           </TR>\r\n                           <TR>\r\n                             <TD width=\"50%\" class=tabledata>������� ������ ������������ ��������:</TD>\r\n                         ";
    echo "    <TD class=tabledata colSpan=3><INPUT name=jp_down id=\"affilpercentage\" value=\"\" size=10 maxLength=10>���. </TD>\r\n                           </TR>\r\n                           <TR>\r\n                             <TD colSpan=4>\r\n                               <HR>                            </TD>\r\n                           <TR>\r\n                             <TD height=\"47\" colSpan=3 class=control><INPUT cla";
    echo "ss=lgbutton type=submit value=\"��������\" name=Submit> ";
    if ( $error != "" )
    {
        echo "<font color=red>".$error."</font>";
    }
    echo " </form>                            </TD>\r\n                             <TD class=tabledata>&nbsp;</TD></TR></TBODY></TABLE>\r\n                           </form>\r\n               <TR>\r\n                 <TD colSpan=2 height=10><IMG\r\n                   src=\"templates/images/spacer.gif\"\r\n                 width=1 height=\"1\"></TD>\r\n               </TR>\r\n\r\n";
}
echo "\r\n";
include_once( "templates/admin_footer.php" );
?>
