<?php
defined('CASINOENGINE') or die("������ ��������!");
include_once( "templates/admin_top.php" );
include_once( "templates/admin_menu.php" );
echo "\r\n";
if ( $����� == "" )
{
    echo "\r\n     <TD vAlign=top>\r\n       <TABLE cellSpacing=0 cellPadding=0 width=\"100%\" border=0><!--begin top row-->\r\n         <TBODY>\r\n         <TR>\r\n           <TD><IMG height=13\r\n             src=\"templates/images/spacer.gif\"></TD></TR>\r\n         <TR class=printHidden>\r\n           <TD class=bannerline><IMG height=5\r\n             src=\"templates/images/spacer.gif\" width=2></TD></TR><!--end top row-->\r\n         <TR><!--be";
    echo "gin top banner-->\r\n           <TD class=banner height=40><!--add the tab navigation -->\r\n             <TABLE class=printHidden style=\"MARGIN-LEFT: 10px\" cellSpacing=0\r\n             cellPadding=0 width=\"100%\" border=0>\r\n               <TBODY>\r\n               <TR><!--section header-->\r\n                 <TD align=left>\r\n                   <DIV id=container>";
    echo "<S";
    echo "PAN class=pageheader>������� > ";
    echo "<S";
    echo "PAN class=subhead>������ </SPAN></SPAN><BR><BR>\r\n                   <UL id=nav>\r\n                     <DIV><A href=\"admin_pay_deposit.php?mode=pending\">� �������� (";
    echo mysql_num_rows( @mysql_query( "SELECT * FROM pay_deposits WHERE status='2'" ) );
    echo ")</A>\r\n\t\t\t\t\t <DIV><A href=\"admin_pay_deposit.php?mode=complied\">��������� (";
    echo mysql_num_rows( @mysql_query( "SELECT * FROM pay_deposits WHERE status='1'" ) );
    echo ")</A>\r\n\t\t\t\t\t <DIV><A href=\"admin_pay_deposit.php?mode=decline\">���������� (";
    echo mysql_num_rows( @mysql_query( "SELECT * FROM pay_deposits WHERE status='3'" ) );
    echo ")</A>\r\n\t\t\t\t\t <DIV><A href=\"admin_pay_deposit.php?mode=error\">������������� (";
    echo mysql_num_rows( @mysql_query( "SELECT * FROM pay_deposits WHERE status='0'" ) );
    echo ")</A>\r\n\t\t\t\t\t <DIV><A class=selected href=\"admin_pay_deposit.php\">��� (";
    echo mysql_num_rows( @mysql_query( "SELECT * FROM pay_deposits" ) );
    echo ")</A>\r\n \t\t\t\t  </UL></DIV></TD></TR></TBODY></TABLE><!--end of tab navigation--></TD></TR><!--end banner -->\r\n         <TR><!--begin main content tables --->\r\n           <TD vAlign=top>\r\n             <TABLE cellSpacing=0 cellPadding=0 width=\"100%\">\r\n               <TBODY>\r\n               <TR>\r\n                 <TD width=10><IMG height=8\r\n                   src=\"templates/images/spacer.gif\"\r\n                 width=10>";
    echo "</TD>\r\n                 <TD>               </TD></TR></TBODY></TABLE>\r\n             ";
    echo "<S";
    echo "TYLE type=text/css>.drag {\r\n \tCURSOR: hand\r\n }\r\n </STYLE>\r\n             <DIV id=dHTMLToolTip\r\n             style=\"Z-INDEX: 1000; LEFT: 0px; VISIBILITY: hidden; WIDTH: 10px; POSITION: absolute; TOP: 0px; HEIGHT: 10px\"></DIV>\r\n           </TD></TR><FORM name=editst action=\"engine.php?form=generalsettings\" method=post>\r\n             <TD class=tableheader>���������� �������� �������������</TD>\r\n         <TR>\r\n";
    echo "           <TD height=\"241\" vAlign=top>\r\n                   <TABLE cellSpacing=0 cellPadding=0 width=\"100%\" bgColor=#cccccc border=0>\r\n                     <TBODY>\r\n                     <TR>\r\n                       <TD>\r\n           \t\t\t\t\t<TABLE cellSpacing=1 cellPadding=3 width=\"100%\" border=0>\r\n                           <TBODY>\r\n                           <TR class=colheader>\r\n\r\n                         ";
    echo "    <TD width=\"5%\"><div align=\"center\">������������</div></TD>\r\n                             <TD width=\"10%\"><div align=\"center\">���</div></TD>\r\n                             <TD width=\"5%\"><div align=\"center\">�����</div></TD>\r\n                             <TD width=\"5%\"><div align=\"center\">����</div></TD>\r\n                             <TD width=\"5%\"><div align=\"center\">�����</div></TD>\r\n                             <T";
    echo "D width=\"10%\"><div align=\"center\">������</div></TD>\r\n                             <TD width=\"10%\"><div align=\"center\">IP</div></TD>\r\n                             <TD width=\"35%\"><div align=\"center\">����������</div></TD>\r\n                           </TR>\r\n";
    $��������_����_������ = @mysql_query( "select * from pay_deposits ORDER BY id DESC" );
    while ( $����_����_���� = @mysql_fetch_array( $��������_����_������ ) )
    {
        echo "                             <tr>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center><a href=\"admin_userlist.php?mode=viewuser&id=";
        $id_������������_������ = @mysql_fetch_array( @mysql_query( "SELECT * FROM clients WHERE login='".$����_����_����[1]."'" ) );
        echo $id_������������_������['id'];
        echo "\">";
        echo $����_����_����[1];
        echo "</a></div></td>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center>\r\n                           ";
        echo $����_����_����[6];
        echo $����_����_����[7];
        echo "                           </div></td>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center>";
        echo $����_����_����[2];
        echo "</div></td>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center>";
        echo $����_����_����[3];
        echo "</div></td>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center>";
        echo $����_����_����[4];
        echo "</div></td>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center>\r\n                           ";
        if ( $����_����_����[8] == "0" )
        {
            echo "�� ��������";
        }
        if ( $����_����_����[8] == "1" )
        {
            echo "<font color=green>�������</font>";
        }
        if ( $����_����_����[8] == "2" )
        {
            echo "<font color=orange>� ���������</font>";
        }
        if ( $����_����_����[8] == "3" )
        {
            echo "<font color=red>������������</font>";
        }
        echo "                           </div></td>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center>";
        echo $����_����_����[5];
        echo "</div></td>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center>\r\n                           \t\t�������� ��� - <a href=\"admin_pay_deposit.php?mode=status_pending&id=";
        echo $����_����_����[0];
        echo "\">���������</a> - <a href=\"admin_pay_deposit.php?mode=status_decline&id=";
        echo $����_����_����[0];
        echo "\">�����������</a> - <a href=\"admin_pay_deposit.php?mode=delete&id=";
        echo $����_����_����[0];
        echo "\">�������</a>\r\n                           </div></td>\r\n                           </tr>\r\n";
    }
    echo "\r\n\r\n                           </TBODY>\r\n                           </TABLE>\r\n                \t\t</TD>\r\n                </TR>\r\n                </TBODY>\r\n           </TABLE>\r\n         </TD>\r\n         </TR></TBODY></TABLE></TD>\r\n     <TD><IMG src=\"templates/images/spacer.gif\" width=10></TD></TR>\r\n\r\n\r\n";
}
echo "\r\n";
if ( $����� == "pending" )
{
    echo "\r\n     <TD vAlign=top>\r\n       <TABLE cellSpacing=0 cellPadding=0 width=\"100%\" border=0><!--begin top row-->\r\n         <TBODY>\r\n         <TR>\r\n           <TD><IMG height=13\r\n             src=\"templates/images/spacer.gif\"></TD></TR>\r\n         <TR class=printHidden>\r\n           <TD class=bannerline><IMG height=5\r\n             src=\"templates/images/spacer.gif\" width=2></TD></TR><!--end top row-->\r\n         <TR><!--be";
    echo "gin top banner-->\r\n           <TD class=banner height=40><!--add the tab navigation -->\r\n             <TABLE class=printHidden style=\"MARGIN-LEFT: 10px\" cellSpacing=0\r\n             cellPadding=0 width=\"100%\" border=0>\r\n               <TBODY>\r\n               <TR><!--section header-->\r\n                 <TD align=left>\r\n                   <DIV id=container>";
    echo "<S";
    echo "PAN class=pageheader>������� > ";
    echo "<S";
    echo "PAN class=subhead>������ </SPAN></SPAN><BR><BR>\r\n                   <UL id=nav>\r\n                     <DIV><A class=selected href=\"admin_pay_deposit.php?mode=pending\">� �������� (";
    echo mysql_num_rows( @mysql_query( "SELECT * FROM pay_deposits WHERE status='2'" ) );
    echo ")</A>\r\n\t\t\t\t\t <DIV><A href=\"admin_pay_deposit.php?mode=complied\">��������� (";
    echo mysql_num_rows( @mysql_query( "SELECT * FROM pay_deposits WHERE status='1'" ) );
    echo ")</A>\r\n\t\t\t\t\t <DIV><A href=\"admin_pay_deposit.php?mode=decline\">���������� (";
    echo mysql_num_rows( @mysql_query( "SELECT * FROM pay_deposits WHERE status='3'" ) );
    echo ")</A>\r\n\t\t\t\t\t <DIV><A href=\"admin_pay_deposit.php?mode=error\">������������� (";
    echo mysql_num_rows( @mysql_query( "SELECT * FROM pay_deposits WHERE status='0'" ) );
    echo ")</A>\r\n\t\t\t\t\t <DIV><A href=\"admin_pay_deposit.php\">��� (";
    echo mysql_num_rows( mysql_query( "SELECT * FROM pay_deposits" ) );
    echo ")</A>\r\n \t\t\t\t  </UL></DIV></TD></TR></TBODY></TABLE><!--end of tab navigation--></TD></TR><!--end banner -->\r\n         <TR><!--begin main content tables --->\r\n           <TD vAlign=top>\r\n             <TABLE cellSpacing=0 cellPadding=0 width=\"100%\">\r\n               <TBODY>\r\n               <TR>\r\n                 <TD width=10><IMG height=8\r\n                   src=\"templates/images/spacer.gif\"\r\n                 width=10>";
    echo "</TD>\r\n                 <TD>               </TD></TR></TBODY></TABLE>\r\n             ";
    echo "<S";
    echo "TYLE type=text/css>.drag {\r\n \tCURSOR: hand\r\n }\r\n </STYLE>\r\n             <DIV id=dHTMLToolTip\r\n             style=\"Z-INDEX: 1000; LEFT: 0px; VISIBILITY: hidden; WIDTH: 10px; POSITION: absolute; TOP: 0px; HEIGHT: 10px\"></DIV>\r\n           </TD></TR><FORM name=editst action=\"engine.php?form=generalsettings\" method=post>\r\n             <TD class=tableheader>��������� �������� �������������</TD>\r\n         <TR>\r\n ";
    echo "          <TD height=\"241\" vAlign=top>\r\n                   <TABLE cellSpacing=0 cellPadding=0 width=\"100%\" bgColor=#cccccc border=0>\r\n                     <TBODY>\r\n                     <TR>\r\n                       <TD>\r\n           \t\t\t\t\t<TABLE cellSpacing=1 cellPadding=3 width=\"100%\" border=0>\r\n                           <TBODY>\r\n                           <TR class=colheader>\r\n\r\n                          ";
    echo "   <TD width=\"5%\"><div align=\"center\">������������</div></TD>\r\n                             <TD width=\"10%\"><div align=\"center\">���</div></TD>\r\n                             <TD width=\"5%\"><div align=\"center\">�����</div></TD>\r\n                             <TD width=\"5%\"><div align=\"center\">����</div></TD>\r\n                             <TD width=\"5%\"><div align=\"center\">�����</div></TD>\r\n                             <TD";
    echo " width=\"10%\"><div align=\"center\">������</div></TD>\r\n                             <TD width=\"10%\"><div align=\"center\">IP</div></TD>\r\n                             <TD width=\"35%\"><div align=\"center\">����������</div></TD>\r\n                           </TR>\r\n";
    $��������_����_������ = @mysql_query( "select * from pay_deposits WHERE status='2' ORDER BY id DESC" );
    while ( $����_����_���� = @mysql_fetch_array( $��������_����_������ ) )
    {
        echo "                             <tr>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center><a href=\"admin_userlist.php?mode=viewuser&id=";
        $id_������������_������ = @mysql_fetch_array( @mysql_query( "SELECT * FROM clients WHERE login='".$����_����_����[1]."'" ) );
        echo $id_������������_������['id'];
        echo "\">";
        echo $����_����_����[1];
        echo "</a></div></td>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center>\r\n                           ";
        echo $����_����_����[6];
        echo $����_����_����[7];
        echo "                           </div></td>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center>";
        echo $����_����_����[2];
        echo "</div></td>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center>";
        echo $����_����_����[3];
        echo "</div></td>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center>";
        echo $����_����_����[4];
        echo "</div></td>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center>\r\n                           ";
        if ( $����_����_����[8] == "0" )
        {
            echo "�� ��������";
        }
        if ( $����_����_����[8] == "1" )
        {
            echo "<font color=green>�������</font>";
        }
        if ( $����_����_����[8] == "2" )
        {
            echo "<font color=orange>� ���������</font>";
        }
        if ( $����_����_����[8] == "3" )
        {
            echo "<font color=red>������������</font>";
        }
        echo "                           </div></td>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center>";
        echo $����_����_����[5];
        echo "</div></td>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center>\r\n                           \t\t�������� ��� - <a href=\"admin_pay_deposit.php?mode=status_pending&id=";
        echo $����_����_����[0];
        echo "\">���������</a> - <a href=\"admin_pay_deposit.php?mode=status_decline&id=";
        echo $����_����_����[0];
        echo "\">�����������</a> - <a href=\"admin_pay_deposit.php?mode=delete&id=";
        echo $����_����_����[0];
        echo "\">�������</a>\r\n                           </div></td>\r\n                           </tr>\r\n";
    }
    echo "\r\n\r\n                           </TBODY>\r\n                           </TABLE>\r\n                \t\t</TD>\r\n                </TR>\r\n                </TBODY>\r\n           </TABLE>\r\n         </TD>\r\n         </TR></TBODY></TABLE></TD>\r\n     <TD><IMG src=\"templates/images/spacer.gif\" width=10></TD></TR>\r\n";
}
echo "\r\n";
if ( $����� == "complied" )
{
    echo "\r\n     <TD vAlign=top>\r\n       <TABLE cellSpacing=0 cellPadding=0 width=\"100%\" border=0><!--begin top row-->\r\n         <TBODY>\r\n         <TR>\r\n           <TD><IMG height=13\r\n             src=\"templates/images/spacer.gif\"></TD></TR>\r\n         <TR class=printHidden>\r\n           <TD class=bannerline><IMG height=5\r\n             src=\"templates/images/spacer.gif\" width=2></TD></TR><!--end top row-->\r\n         <TR><!--be";
    echo "gin top banner-->\r\n           <TD class=banner height=40><!--add the tab navigation -->\r\n             <TABLE class=printHidden style=\"MARGIN-LEFT: 10px\" cellSpacing=0\r\n             cellPadding=0 width=\"100%\" border=0>\r\n               <TBODY>\r\n               <TR><!--section header-->\r\n                 <TD align=left>\r\n                   <DIV id=container>";
    echo "<S";
    echo "PAN class=pageheader>������� > ";
    echo "<S";
    echo "PAN class=subhead>������ </SPAN></SPAN><BR><BR>\r\n                   <UL id=nav>\r\n                     <DIV><A href=\"admin_pay_deposit.php?mode=pending\">� �������� (";
    echo mysql_num_rows( mysql_query( "SELECT * FROM pay_deposits WHERE status='2'" ) );
    echo ")</A>\r\n\t\t\t\t\t <DIV><A class=selected href=\"admin_pay_deposit.php?mode=complied\">��������� (";
    echo mysql_num_rows( mysql_query( "SELECT * FROM pay_deposits WHERE status='1'" ) );
    echo ")</A>\r\n\t\t\t\t\t <DIV><A href=\"admin_pay_deposit.php?mode=decline\">���������� (";
    echo mysql_num_rows( mysql_query( "SELECT * FROM pay_deposits WHERE status='3'" ) );
    echo ")</A>\r\n\t\t\t\t\t <DIV><A href=\"admin_pay_deposit.php?mode=error\">������������� (";
    echo mysql_num_rows( mysql_query( "SELECT * FROM pay_deposits WHERE status='0'" ) );
    echo ")</A>\r\n\t\t\t\t\t <DIV><A href=\"admin_pay_deposit.php\">��� (";
    echo mysql_num_rows( mysql_query( "SELECT * FROM pay_deposits" ) );
    echo ")</A>\r\n \t\t\t\t  </UL></DIV></TD></TR></TBODY></TABLE><!--end of tab navigation--></TD></TR><!--end banner -->\r\n         <TR><!--begin main content tables --->\r\n           <TD vAlign=top>\r\n             <TABLE cellSpacing=0 cellPadding=0 width=\"100%\">\r\n               <TBODY>\r\n               <TR>\r\n                 <TD width=10><IMG height=8\r\n                   src=\"templates/images/spacer.gif\"\r\n                 width=10>";
    echo "</TD>\r\n                 <TD>               </TD></TR></TBODY></TABLE>\r\n             ";
    echo "<S";
    echo "TYLE type=text/css>.drag {\r\n \tCURSOR: hand\r\n }\r\n </STYLE>\r\n             <DIV id=dHTMLToolTip\r\n             style=\"Z-INDEX: 1000; LEFT: 0px; VISIBILITY: hidden; WIDTH: 10px; POSITION: absolute; TOP: 0px; HEIGHT: 10px\"></DIV>\r\n           </TD></TR><FORM name=editst action=\"engine.php?form=generalsettings\" method=post>\r\n             <TD class=tableheader>���������� �������� �������������</TD>\r\n         <TR>\r\n";
    echo "           <TD height=\"241\" vAlign=top>\r\n                   <TABLE cellSpacing=0 cellPadding=0 width=\"100%\" bgColor=#cccccc border=0>\r\n                     <TBODY>\r\n                     <TR>\r\n                       <TD>\r\n           \t\t\t\t\t<TABLE cellSpacing=1 cellPadding=3 width=\"100%\" border=0>\r\n                           <TBODY>\r\n                           <TR class=colheader>\r\n\r\n                         ";
    echo "    <TD width=\"5%\"><div align=\"center\">������������</div></TD>\r\n                             <TD width=\"10%\"><div align=\"center\">���</div></TD>\r\n                             <TD width=\"5%\"><div align=\"center\">�����</div></TD>\r\n                             <TD width=\"5%\"><div align=\"center\">����</div></TD>\r\n                             <TD width=\"5%\"><div align=\"center\">�����</div></TD>\r\n                             <T";
    echo "D width=\"10%\"><div align=\"center\">������</div></TD>\r\n                             <TD width=\"10%\"><div align=\"center\">IP</div></TD>\r\n                             <TD width=\"35%\"><div align=\"center\">����������</div></TD>\r\n                           </TR>\r\n";
    $��������_����_������ = @mysql_query( "select * from pay_deposits WHERE status='1' ORDER BY id DESC" );
    while ( $����_����_���� = @mysql_fetch_array( $��������_����_������ ) )
    {
        echo "                             <tr>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center><a href=\"admin_userlist.php?mode=viewuser&id=";
        $id_������������_������ = @mysql_fetch_array( @mysql_query( "SELECT * FROM clients WHERE login='".$����_����_����[1]."'" ) );
        echo $id_������������_������['id'];
        echo "\">";
        echo $����_����_����[1];
        echo "</a></div></td>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center>\r\n                           ";
        echo $����_����_����[6];
        echo $����_����_����[7];
        echo "                           </div></td>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center>";
        echo $����_����_����[2];
        echo "</div></td>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center>";
        echo $����_����_����[3];
        echo "</div></td>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center>";
        echo $����_����_����[4];
        echo "</div></td>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center>\r\n                           ";
        if ( $����_����_����[8] == "0" )
        {
            echo "�� ��������";
        }
        if ( $����_����_����[8] == "1" )
        {
            echo "<font color=green>�������</font>";
        }
        if ( $����_����_����[8] == "2" )
        {
            echo "<font color=orange>� ���������</font>";
        }
        if ( $����_����_����[8] == "3" )
        {
            echo "<font color=red>������������</font>";
        }
        echo "                           </div></td>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center>";
        echo $����_����_����[5];
        echo "</div></td>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center>\r\n                           \t\t�������� ��� - <a href=\"admin_pay_deposit.php?mode=status_pending&id=";
        echo $����_����_����[0];
        echo "\">���������</a> - <a href=\"admin_pay_deposit.php?mode=status_decline&id=";
        echo $����_����_����[0];
        echo "\">�����������</a> - <a href=\"admin_pay_deposit.php?mode=delete&id=";
        echo $����_����_����[0];
        echo "\">�������</a>\r\n                           </div></td>\r\n                           </tr>\r\n";
    }
    echo "\r\n\r\n                           </TBODY>\r\n                           </TABLE>\r\n                \t\t</TD>\r\n                </TR>\r\n                </TBODY>\r\n           </TABLE>\r\n         </TD>\r\n         </TR></TBODY></TABLE></TD>\r\n     <TD><IMG src=\"templates/images/spacer.gif\" width=10></TD></TR>\r\n\r\n\r\n";
}
echo "\r\n";
if ( $����� == "decline" )
{
    echo "        <TD vAlign=top>\r\n       <TABLE cellSpacing=0 cellPadding=0 width=\"100%\" border=0><!--begin top row-->\r\n         <TBODY>\r\n         <TR>\r\n           <TD><IMG height=13\r\n             src=\"templates/images/spacer.gif\"></TD></TR>\r\n         <TR class=printHidden>\r\n           <TD class=bannerline><IMG height=5\r\n             src=\"templates/images/spacer.gif\" width=2></TD></TR><!--end top row-->\r\n         <TR><!--b";
    echo "egin top banner-->\r\n           <TD class=banner height=40><!--add the tab navigation -->\r\n             <TABLE class=printHidden style=\"MARGIN-LEFT: 10px\" cellSpacing=0\r\n             cellPadding=0 width=\"100%\" border=0>\r\n               <TBODY>\r\n               <TR><!--section header-->\r\n                 <TD align=left>\r\n                   <DIV id=container>";
    echo "<S";
    echo "PAN class=pageheader>������� > ";
    echo "<S";
    echo "PAN class=subhead>������ </SPAN></SPAN><BR><BR>\r\n                   <UL id=nav>\r\n                     <DIV><A href=\"admin_pay_deposit.php?mode=pending\">� �������� (";
    echo mysql_num_rows( mysql_query( "SELECT * FROM pay_deposits WHERE status='2'" ) );
    echo ")</A>\r\n\t\t\t\t\t <DIV><A href=\"admin_pay_deposit.php?mode=complied\">��������� (";
    echo mysql_num_rows( mysql_query( "SELECT * FROM pay_deposits WHERE status='1'" ) );
    echo ")</A>\r\n\t\t\t\t\t <DIV><A class=selected href=\"admin_pay_deposit.php?mode=decline\">���������� (";
    echo mysql_num_rows( mysql_query( "SELECT * FROM pay_deposits WHERE status='3'" ) );
    echo ")</A>\r\n\t\t\t\t\t <DIV><A href=\"admin_pay_deposit.php?mode=error\">������������� (";
    echo mysql_num_rows( mysql_query( "SELECT * FROM pay_deposits WHERE status='0'" ) );
    echo ")</A>\r\n\t\t\t\t\t <DIV><A href=\"admin_pay_deposit.php\">��� (";
    echo mysql_num_rows( mysql_query( "SELECT * FROM pay_deposits" ) );
    echo ")</A>\r\n \t\t\t\t  </UL></DIV></TD></TR></TBODY></TABLE><!--end of tab navigation--></TD></TR><!--end banner -->\r\n         <TR><!--begin main content tables --->\r\n           <TD vAlign=top>\r\n             <TABLE cellSpacing=0 cellPadding=0 width=\"100%\">\r\n               <TBODY>\r\n               <TR>\r\n                 <TD width=10><IMG height=8\r\n                   src=\"templates/images/spacer.gif\"\r\n                 width=10>";
    echo "</TD>\r\n                 <TD>               </TD></TR></TBODY></TABLE>\r\n             ";
    echo "<S";
    echo "TYLE type=text/css>.drag {\r\n \tCURSOR: hand\r\n }\r\n </STYLE>\r\n             <DIV id=dHTMLToolTip\r\n             style=\"Z-INDEX: 1000; LEFT: 0px; VISIBILITY: hidden; WIDTH: 10px; POSITION: absolute; TOP: 0px; HEIGHT: 10px\"></DIV>\r\n           </TD></TR><FORM name=editst action=\"engine.php?form=generalsettings\" method=post>\r\n             <TD class=tableheader>�����ͨ���� �������� �������������</TD>\r\n         <TR>\r";
    echo "\n           <TD height=\"241\" vAlign=top>\r\n                   <TABLE cellSpacing=0 cellPadding=0 width=\"100%\" bgColor=#cccccc border=0>\r\n                     <TBODY>\r\n                     <TR>\r\n                       <TD>\r\n           \t\t\t\t\t<TABLE cellSpacing=1 cellPadding=3 width=\"100%\" border=0>\r\n                           <TBODY>\r\n                           <TR class=colheader>\r\n\r\n                        ";
    echo "     <TD width=\"5%\"><div align=\"center\">������������</div></TD>\r\n                             <TD width=\"10%\"><div align=\"center\">���</div></TD>\r\n                             <TD width=\"5%\"><div align=\"center\">�����</div></TD>\r\n                             <TD width=\"5%\"><div align=\"center\">����</div></TD>\r\n                             <TD width=\"5%\"><div align=\"center\">�����</div></TD>\r\n                             ";
    echo "<TD width=\"10%\"><div align=\"center\">������</div></TD>\r\n                             <TD width=\"10%\"><div align=\"center\">IP</div></TD>\r\n                             <TD width=\"35%\"><div align=\"center\">����������</div></TD>\r\n                           </TR>\r\n";
    $��������_����_������ = @mysql_query( "select * from pay_deposits WHERE status='3' ORDER BY id DESC" );
    while ( $����_����_���� = @mysql_fetch_array( $��������_����_������ ) )
    {
        echo "                             <tr>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center><a href=\"admin_userlist.php?mode=viewuser&id=";
        $id_������������_������ = @mysql_fetch_array( @mysql_query( "SELECT * FROM clients WHERE login='".$����_����_����[1]."'" ) );
        echo $id_������������_������['id'];
        echo "\">";
        echo $����_����_����[1];
        echo "</a></div></td>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center>\r\n                           ";
        echo $����_����_����[6];
        echo $����_����_����[7];
        echo "                           </div></td>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center>";
        echo $����_����_����[2];
        echo "</div></td>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center>";
        echo $����_����_����[3];
        echo "</div></td>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center>";
        echo $����_����_����[4];
        echo "</div></td>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center>\r\n                           ";
        if ( $����_����_����[8] == "0" )
        {
            echo "�� ��������";
        }
        if ( $����_����_����[8] == "1" )
        {
            echo "<font color=green>�������</font>";
        }
        if ( $����_����_����[8] == "2" )
        {
            echo "<font color=orange>� ���������</font>";
        }
        if ( $����_����_����[8] == "3" )
        {
            echo "<font color=red>������������</font>";
        }
        echo "                           </div></td>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center>";
        echo $����_����_����[5];
        echo "</div></td>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center>\r\n                           \t\t�������� ��� - <a href=\"admin_pay_deposit.php?mode=status_pending&id=";
        echo $����_����_����[0];
        echo "\">���������</a> - <a href=\"admin_pay_deposit.php?mode=status_decline&id=";
        echo $����_����_����[0];
        echo "\">�����������</a> - <a href=\"admin_pay_deposit.php?mode=delete&id=";
        echo $����_����_����[0];
        echo "\">�������</a>\r\n                           </div></td>\r\n                           </tr>\r\n";
    }
    echo "\r\n\r\n                           </TBODY>\r\n                           </TABLE>\r\n                \t\t</TD>\r\n                </TR>\r\n                </TBODY>\r\n           </TABLE>\r\n         </TD>\r\n         </TR></TBODY></TABLE></TD>\r\n     <TD><IMG src=\"templates/images/spacer.gif\" width=10></TD></TR>\r\n";
}
echo "\r\n";
if ( $����� == "error" )
{
    echo "\r\n     <TD vAlign=top>\r\n       <TABLE cellSpacing=0 cellPadding=0 width=\"100%\" border=0><!--begin top row-->\r\n         <TBODY>\r\n         <TR>\r\n           <TD><IMG height=13\r\n             src=\"templates/images/spacer.gif\"></TD></TR>\r\n         <TR class=printHidden>\r\n           <TD class=bannerline><IMG height=5\r\n             src=\"templates/images/spacer.gif\" width=2></TD></TR><!--end top row-->\r\n         <TR><!--be";
    echo "gin top banner-->\r\n           <TD class=banner height=40><!--add the tab navigation -->\r\n             <TABLE class=printHidden style=\"MARGIN-LEFT: 10px\" cellSpacing=0\r\n             cellPadding=0 width=\"100%\" border=0>\r\n               <TBODY>\r\n               <TR><!--section header-->\r\n                 <TD align=left>\r\n                   <DIV id=container>";
    echo "<S";
    echo "PAN class=pageheader>������� > ";
    echo "<S";
    echo "PAN class=subhead>������ </SPAN></SPAN><BR><BR>\r\n                   <UL id=nav>\r\n                     <DIV><A href=\"admin_pay_deposit.php?mode=pending\">� �������� (";
    echo mysql_num_rows( mysql_query( "SELECT * FROM pay_deposits WHERE status='2'" ) );
    echo ")</A>\r\n\t\t\t\t\t <DIV><A href=\"admin_pay_deposit.php?mode=complied\">��������� (";
    echo mysql_num_rows( mysql_query( "SELECT * FROM pay_deposits WHERE status='1'" ) );
    echo ")</A>\r\n\t\t\t\t\t <DIV><A href=\"admin_pay_deposit.php?mode=decline\">���������� (";
    echo mysql_num_rows( mysql_query( "SELECT * FROM pay_deposits WHERE status='3'" ) );
    echo ")</A>\r\n\t\t\t\t\t <DIV><A class=selected href=\"admin_pay_deposit.php?mode=error\">������������� (";
    echo mysql_num_rows( mysql_query( "SELECT * FROM pay_deposits WHERE status='0'" ) );
    echo ")</A>\r\n\t\t\t\t\t <DIV><A href=\"admin_pay_deposit.php\">��� (";
    echo mysql_num_rows( mysql_query( "SELECT * FROM pay_deposits" ) );
    echo ")</A>\r\n \t\t\t\t  </UL></DIV></TD></TR></TBODY></TABLE><!--end of tab navigation--></TD></TR><!--end banner -->\r\n         <TR><!--begin main content tables --->\r\n           <TD vAlign=top>\r\n             <TABLE cellSpacing=0 cellPadding=0 width=\"100%\">\r\n               <TBODY>\r\n               <TR>\r\n                 <TD width=10><IMG height=8\r\n                   src=\"templates/images/spacer.gif\"\r\n                 width=10>";
    echo "</TD>\r\n                 <TD>               </TD></TR></TBODY></TABLE>\r\n             ";
    echo "<S";
    echo "TYLE type=text/css>.drag {\r\n \tCURSOR: hand\r\n }\r\n </STYLE>\r\n             <DIV id=dHTMLToolTip\r\n             style=\"Z-INDEX: 1000; LEFT: 0px; VISIBILITY: hidden; WIDTH: 10px; POSITION: absolute; TOP: 0px; HEIGHT: 10px\"></DIV>\r\n           </TD></TR><FORM name=editst action=\"engine.php?form=generalsettings\" method=post>\r\n             <TD class=tableheader>������������� �������� �������������</TD>\r\n         <TR";
    echo ">\r\n           <TD height=\"241\" vAlign=top>\r\n                   <TABLE cellSpacing=0 cellPadding=0 width=\"100%\" bgColor=#cccccc border=0>\r\n                     <TBODY>\r\n                     <TR>\r\n                       <TD>\r\n           \t\t\t\t\t<TABLE cellSpacing=1 cellPadding=3 width=\"100%\" border=0>\r\n                           <TBODY>\r\n                           <TR class=colheader>\r\n\r\n                      ";
    echo "       <TD width=\"5%\"><div align=\"center\">������������</div></TD>\r\n                             <TD width=\"10%\"><div align=\"center\">���</div></TD>\r\n                             <TD width=\"5%\"><div align=\"center\">�����</div></TD>\r\n                             <TD width=\"5%\"><div align=\"center\">����</div></TD>\r\n                             <TD width=\"5%\"><div align=\"center\">�����</div></TD>\r\n                           ";
    echo "  <TD width=\"10%\"><div align=\"center\">������</div></TD>\r\n                             <TD width=\"10%\"><div align=\"center\">IP</div></TD>\r\n                             <TD width=\"35%\"><div align=\"center\">����������</div></TD>\r\n                           </TR>\r\n";
    $��������_����_������ = @mysql_query( "select * from pay_deposits WHERE status='0' ORDER BY id DESC" );
    while ( $����_����_���� = @mysql_fetch_array( $��������_����_������ ) )
    {
        echo "                             <tr>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center><a href=\"admin_userlist.php?mode=viewuser&id=";
        $id_������������_������ = @mysql_fetch_array( @mysql_query( "SELECT * FROM clients WHERE login='".$����_����_����[1]."'" ) );
        echo $id_������������_������['id'];
        echo "\">";
        echo $����_����_����[1];
        echo "</a></div></td>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center>\r\n                           ";
        echo $����_����_����[6];
        echo $����_����_����[7];
        echo "                           </div></td>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center>";
        echo $����_����_����[2];
        echo "</div></td>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center>";
        echo $����_����_����[3];
        echo "</div></td>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center>";
        echo $����_����_����[4];
        echo "</div></td>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center>\r\n                           ";
        if ( $����_����_����[8] == "0" )
        {
            echo "�� ��������";
        }
        if ( $����_����_����[8] == "1" )
        {
            echo "<font color=green>�������</font>";
        }
        if ( $����_����_����[8] == "2" )
        {
            echo "<font color=orange>� ���������</font>";
        }
        if ( $����_����_����[8] == "3" )
        {
            echo "<font color=red>������������</font>";
        }
        echo "                           </div></td>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center>";
        echo $����_����_����[5];
        echo "</div></td>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center>\r\n                           \t\t�������� ��� - <a href=\"admin_pay_deposit.php?mode=status_pending&id=";
        echo $����_����_����[0];
        echo "\">���������</a> - <a href=\"admin_pay_deposit.php?mode=status_decline&id=";
        echo $����_����_����[0];
        echo "\">�����������</a> - <a href=\"admin_pay_deposit.php?mode=delete&id=";
        echo $����_����_����[0];
        echo "\">�������</a>\r\n                           </div></td>\r\n                           </tr>\r\n";
    }
    echo "\r\n\r\n                           </TBODY>\r\n                           </TABLE>\r\n                \t\t</TD>\r\n                </TR>\r\n                </TBODY>\r\n           </TABLE>\r\n         </TD>\r\n         </TR></TBODY></TABLE></TD>\r\n     <TD><IMG src=\"templates/images/spacer.gif\" width=10></TD></TR>\r\n\r\n\r\n";
}
echo "\r\n";
if ( $����� == "login" && $id != "" && $id_������� == true )
{
    echo "\t";
    $���_������������_������ = mysql_fetch_array( mysql_query( "SELECT * FROM clients WHERE id='".$id."'" ) );
    $���_������������ = $���_������������_������['login'];
    echo "\r\n     <TD vAlign=top>\r\n       <TABLE cellSpacing=0 cellPadding=0 width=\"100%\" border=0><!--begin top row-->\r\n         <TBODY>\r\n         <TR>\r\n           <TD><IMG height=13\r\n             src=\"templates/images/spacer.gif\"></TD></TR>\r\n         <TR class=printHidden>\r\n           <TD class=bannerline><IMG height=5\r\n             src=\"templates/images/spacer.gif\" width=2></TD></TR><!--end top row-->\r\n         <TR><!--be";
    echo "gin top banner-->\r\n           <TD class=banner height=40><!--add the tab navigation -->\r\n             <TABLE class=printHidden style=\"MARGIN-LEFT: 10px\" cellSpacing=0\r\n             cellPadding=0 width=\"100%\" border=0>\r\n               <TBODY>\r\n               <TR><!--section header-->\r\n                 <TD align=left>\r\n                   <DIV id=container>";
    echo "<S";
    echo "PAN class=pageheader>������� > ";
    echo "<S";
    echo "PAN class=subhead>������ </SPAN></SPAN><BR><BR>\r\n                   <UL id=nav>\r\n                     <DIV><A href=\"admin_pay_deposit.php?mode=pending\">� �������� (";
    echo mysql_num_rows( mysql_query( "SELECT * FROM pay_deposits WHERE status='2'" ) );
    echo ")</A>\r\n\t\t\t\t\t <DIV><A href=\"admin_pay_deposit.php?mode=complied\">��������� (";
    echo mysql_num_rows( mysql_query( "SELECT * FROM pay_deposits WHERE status='1'" ) );
    echo ")</A>\r\n\t\t\t\t\t <DIV><A href=\"admin_pay_deposit.php?mode=decline\">���������� (";
    echo mysql_num_rows( mysql_query( "SELECT * FROM pay_deposits WHERE status='3'" ) );
    echo ")</A>\r\n\t\t\t\t\t <DIV><A href=\"admin_pay_deposit.php?mode=error\">������������� (";
    echo mysql_num_rows( mysql_query( "SELECT * FROM pay_deposits WHERE status='0'" ) );
    echo ")</A>\r\n\t\t\t\t\t <DIV><A class=selected href=\"admin_pay_deposit.php?mode=login&id=";
    echo $id;
    echo "\">���: ";
    echo $���_������������;
    echo " (";
    echo mysql_num_rows( mysql_query( "SELECT * FROM pay_deposits WHERE user='".$���_������������."'" ) );
    echo ")</A>\r\n \t\t\t\t  </UL></DIV></TD></TR></TBODY></TABLE><!--end of tab navigation--></TD></TR><!--end banner -->\r\n         <TR><!--begin main content tables --->\r\n           <TD vAlign=top>\r\n             <TABLE cellSpacing=0 cellPadding=0 width=\"100%\">\r\n               <TBODY>\r\n               <TR>\r\n                 <TD width=10><IMG height=8\r\n                   src=\"templates/images/spacer.gif\"\r\n                 width=10>";
    echo "</TD>\r\n                 <TD>               </TD></TR></TBODY></TABLE>\r\n             ";
    echo "<S";
    echo "TYLE type=text/css>.drag {\r\n \tCURSOR: hand\r\n }\r\n </STYLE>\r\n             <DIV id=dHTMLToolTip\r\n             style=\"Z-INDEX: 1000; LEFT: 0px; VISIBILITY: hidden; WIDTH: 10px; POSITION: absolute; TOP: 0px; HEIGHT: 10px\"></DIV>\r\n           </TD></TR><FORM name=editst action=\"engine.php?form=generalsettings\" method=post>\r\n             <TD class=tableheader>������������� �������� �������������</TD>\r\n         <TR";
    echo ">\r\n           <TD height=\"241\" vAlign=top>\r\n                   <TABLE cellSpacing=0 cellPadding=0 width=\"100%\" bgColor=#cccccc border=0>\r\n                     <TBODY>\r\n                     <TR>\r\n                       <TD>\r\n           \t\t\t\t\t<TABLE cellSpacing=1 cellPadding=3 width=\"100%\" border=0>\r\n                           <TBODY>\r\n                           <TR class=colheader>\r\n\r\n                      ";
    echo "       <TD width=\"5%\"><div align=\"center\">������������</div></TD>\r\n                             <TD width=\"10%\"><div align=\"center\">���</div></TD>\r\n                             <TD width=\"5%\"><div align=\"center\">�����</div></TD>\r\n                             <TD width=\"5%\"><div align=\"center\">����</div></TD>\r\n                             <TD width=\"5%\"><div align=\"center\">�����</div></TD>\r\n                           ";
    echo "  <TD width=\"10%\"><div align=\"center\">������</div></TD>\r\n                             <TD width=\"10%\"><div align=\"center\">IP</div></TD>\r\n                             <TD width=\"35%\"><div align=\"center\">����������</div></TD>\r\n                           </TR>\r\n";
    $��������_����_������ = @mysql_query( "select * from pay_deposits WHERE user='".$���_������������."' ORDER BY id DESC" );
    while ( $����_����_���� = @mysql_fetch_array( $��������_����_������ ) )
    {
        echo "                             <tr>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center><a href=\"admin_userlist.php?mode=viewuser&id=";
        $id_������������_������ = @mysql_fetch_array( @mysql_query( "SELECT * FROM clients WHERE login='".$����_����_����[1]."'" ) );
        echo $id_������������_������['id'];
        echo "\">";
        echo $����_����_����[1];
        echo "</a></div></td>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center>\r\n                           ";
        echo $����_����_����[6];
        echo $����_����_����[7];
        echo "                           </div></td>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center>";
        echo $����_����_����[2];
        echo "</div></td>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center>";
        echo $����_����_����[3];
        echo "</div></td>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center>";
        echo $����_����_����[4];
        echo "</div></td>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center>\r\n                           ";
        if ( $����_����_����[8] == "0" )
        {
            echo "�� ��������";
        }
        if ( $����_����_����[8] == "1" )
        {
            echo "<font color=green>�������</font>";
        }
        if ( $����_����_����[8] == "2" )
        {
            echo "<font color=orange>� ���������</font>";
        }
        if ( $����_����_����[8] == "3" )
        {
            echo "<font color=red>������������</font>";
        }
        echo "                           </div></td>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center>";
        echo $����_����_����[5];
        echo "</div></td>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center>\r\n                           \t\t�������� ��� - <a href=\"admin_pay_deposit.php?mode=status_pending&id=";
        echo $����_����_����[0];
        echo "\">���������</a> - <a href=\"admin_pay_deposit.php?mode=status_decline&id=";
        echo $����_����_����[0];
        echo "\">�����������</a> - <a href=\"admin_pay_deposit.php?mode=delete&id=";
        echo $����_����_����[0];
        echo "\">�������</a>\r\n                           </div></td>\r\n                           </tr>\r\n";
    }
    echo "\r\n\r\n                           </TBODY>\r\n                           </TABLE>\r\n                \t\t</TD>\r\n                </TR>\r\n                </TBODY>\r\n           </TABLE>\r\n         </TD>\r\n         </TR></TBODY></TABLE></TD>\r\n     <TD><IMG src=\"templates/images/spacer.gif\" width=10></TD></TR>\r\n\r\n\r\n";
}
echo "\r\n";
include_once( "templates/admin_footer.php" );
?>
