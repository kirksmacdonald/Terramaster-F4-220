<?php
defined('CASINOENGINE') or die('������ ��������');

include_once("templates/admin_top.php");
include_once("templates/admin_menu.php");

if (!$mode) {
    echo "\r\n     <TD vAlign=top>\r\n       <TABLE cellSpacing=0 cellPadding=0 width=\"100%\" border=0><!--begin top row-->\r\n         <TBODY>\r\n         <TR>\r\n           <TD><IMG height=13\r\n             src=\"templates/images/spacer.gif\"></TD></TR>\r\n         <TR class=printHidden>\r\n           <TD class=bannerline><IMG height=5\r\n             src=\"templates/images/spacer.gif\" width=2></TD></TR><!--end top row-->\r\n         <TR><!--be";
    echo "gin top banner-->\r\n           <TD class=banner height=40><!--add the tab navigation -->\r\n             <TABLE class=printHidden style=\"MARGIN-LEFT: 10px\" cellSpacing=0\r\n             cellPadding=0 width=\"100%\" border=0>\r\n               <TBODY>\r\n               <TR><!--section header-->\r\n                 <TD align=left>\r\n                   <DIV id=container>";
    echo "<S";
    echo "PAN class=pageheader>��������� ������ > ";
    echo "<S";
    echo "PAN class=subhead>��������� ��������� </SPAN></SPAN><BR><BR>\r\n                   <UL id=nav>\r\n                     <LI><A class=selected href=\"admin_config_pay.php\">WebMoney</A>\r\n             </LI></UL></DIV></TD></TR></TBODY></TABLE><!--end of tab navigation--></TD></TR><!--end banner -->\r\n         <TR><!--begin main content tables --->\r\n           <TD vAlign=top>\r\n             <TABLE cellSpacing=0 cellPadding=0 width=";
    echo "\"100%\">\r\n               <TBODY>\r\n               <TR>\r\n                 <TD width=10><IMG height=8\r\n                   src=\"templates/images/spacer.gif\"\r\n                 width=10></TD>\r\n                 <TD>               </TD></TR></TBODY></TABLE>\r\n             ";
    echo "<S";
    echo "TYLE type=text/css>.drag {\r\n \tCURSOR: hand\r\n }\r\n </STYLE>\r\n             <DIV id=dHTMLToolTip\r\n             style=\"Z-INDEX: 1000; LEFT: 0px; VISIBILITY: hidden; WIDTH: 10px; POSITION: absolute; TOP: 0px; HEIGHT: 10px\"></DIV>\r\n           </TD></TR><FORM name=editst action=\"engine.php?form=generalsettings\" method=post>\r\n             <TD class=tableheader>��������� ���������</TD>\r\n         <TR>\r\n           <TD ";
    echo "height=\"241\" vAlign=top>\r\n                   <TABLE cellSpacing=0 cellPadding=0 width=\"100%\" bgColor=#cccccc border=0>\r\n                     <TBODY>\r\n                     <TR>\r\n                       <TD>\r\n\r\n\r\n";

    //������� ����
    /*$in = array('INTERKASSA'=>0, 'liqpay'=>0, 'ROBOKASSA'=>0, 'WEBMONEY'=>0, 'A1PAY'=>0);
    $out = array('INTERKASSA'=>0, 'liqpay'=>0, 'ROBOKASSA'=>0, 'WEBMONEY'=>0, 'A1PAY'=>0);*/
	$in = array('INTERKASSA'=>0, 'liqpay'=>0, 'ROBOKASSA'=>0, 'FREEKASSA'=>0, 'WEBMONEY'=>0, 'A1PAY'=>0);
    $out = array('INTERKASSA'=>0, 'liqpay'=>0, 'ROBOKASSA'=>0, 'FREEKASSA'=>0, 'WEBMONEY'=>0, 'A1PAY'=>0);
    $sql = mysql_query ("SELECT `amount`, `type` FROM `pay_deposits`");
    while($payment = mysql_fetch_assoc($sql)) $in[$payment['type']] += $payment['amount'];
    
    //������� �����
    $sql = mysql_query ("SELECT `amount`, `type` FROM `pay_withdrawals`");
    while($payment = mysql_fetch_assoc($sql))  $out[$payment['type']] += $payment['amount'];
    
    $webmoney_all_in = sprintf("%01.2f", $in['WEBMONEY']);
    $webmoney_all_out = sprintf("%01.2f", $out['WEBMONEY']);
    $webmoney_query = mysql_fetch_array(mysql_query("select * from pay_modules_webmoney"));

    $interkassa_all_in = sprintf("%01.2f", $in['INTERKASSA']);
    $interkassa_all_out = sprintf("%01.2f", $out['INTERKASSA']);
    $interkassa_query = mysql_fetch_array(mysql_query("select * from pay_modules_interkassa"));
	
	//liqpay
	$liqpay_all_in = sprintf("%01.2f", $in['liqpay']);
    $liqpay_all_out = sprintf("%01.2f", $out['liqpay']);
    $liqpay_query = mysql_fetch_array(mysql_query("select * from pay_modules_liqpay"));
	//robokassa
 
    $robokassa_all_in = sprintf("%01.2f", $in['ROBOKASSA']);
    $robokassa_all_out = sprintf("%01.2f", $out['ROBOKASSA']);
    $robokassa_query = mysql_fetch_array(mysql_query("select * from pay_modules_robokassa"));
	
	//free-kassa.ru
	$freekassa_all_in = sprintf("%01.2f", $in['FREEKASSA']);
    $freekassa_all_out = sprintf("%01.2f", $out['FREEKASSA']);
    $freekassa_query = mysql_fetch_array(mysql_query("select * from pay_modules_freekassa"));
	//aipay

    $a1pay_all_in = sprintf("%01.2f", $in['A1PAY']);
    $a1pay_all_out = sprintf("%01.2f", $out['A1PAY']);
    $a1pay_query = mysql_fetch_array(mysql_query("select * from pay_modules_a1pay"));
    
    echo "\r\n           \t\t\t\t\t<TABLE cellSpacing=1 cellPadding=3 width=\"100%\" border=0>\r\n                           <TBODY>\r\n                           <TR class=colheaderIT>\r\n                           <TD colspan=7>&nbsp;������</TD>\r\n                           </TR>\r\n                           <TR class=colheader>\r\n\r\n                             <TD width=\"10%\"><div align=\"center\">�����������</div></TD>\r\n             ";
    echo "                <TD width=\"10%\"><div align=\"center\">������</div></TD>\r\n                             <TD width=\"10%\"><div align=\"center\">������</div></TD>\r\n                             <TD width=\"10%\"><div align=\"center\">������</div></TD>\r\n                             <TD width=\"5%\"><div align=\"center\">����</div></TD>\r\n                             <TD width=\"5%\"><div align=\"center\">�����</div></TD>\r\n                  ";
    echo "           <TD width=\"50%\"><div align=\"center\">���������</div></TD>\r\n                           </TR>\r\n                           <tr>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center><img src=\"/modules/images/logo_wm.gif\" border=\"0\"></div></td>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center>WebMoney</div></td>\r\n                           <td cla";
    echo "ss=\"tabledata\" vAlign=middle><div align=center>";
    if ( $webmoney_query['status'] == 1 )
    {
        echo "�������";
    }
    else
    {
        echo "��������";
    }
    echo "</div></td>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center>";
    echo $webmoney_query['version'];
    echo "</div></td>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center>";
    echo $webmoney_all_in;
    echo "</div></td>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center>";
    echo $webmoney_all_out;
    echo "</div></td>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center><a href=\"admin_config_pay.php?mode=block_webmoney\">��������\\���������</a> - <a href=\"admin_config_pay.php?mode=edit_webmoney\">���������</a> </div></td>\r\n                           </tr>\r\n                           <tr>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center><img src=\"/modules/i";
    echo "mages/interkassa.png\" border=\"0\"></div></td>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center>InterKassa</div></td>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center>";


	//liqpay
	    if ( $interkassa_query['status'] == 1 )
    {
        echo "�������";
    }
    else
    {
        echo "��������";
    }
    echo "</div></td>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center>";
    echo $liqpay_query['version'];
    echo "</div></td>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center>";
    echo $liqpay_all_in;
    echo "</div></td>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center>";
    echo $liqpay_all_out;
    echo "</div></td>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center><a href=\"admin_config_pay.php?mode=block_interkassa\">��������\\���������</a> - <a href=\"admin_config_pay.php?mode=edit_liqpay\">���������</a> </div></td>\r\n                           </tr>\r\n                           <tr>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center><img src=\"/modules/i";
    echo "mages/liqpay.jpg\" border=\"0\"></div></td>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center>liqpay</div></td>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center>";
	//liqpay



    if ( $liqpay_query['status'] == 1 )
    {
        echo "�������";
    }
    else
    {
        echo "��������";
    }
    echo "</div></td>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center>";
    echo $interkassa_query['version'];
    echo "</div></td>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center>";
    echo $interkassa_all_in;
    echo "</div></td>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center>";
    echo $interkassa_all_out;
    echo "</div></td>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center><a href=\"admin_config_pay.php?mode=block_liqpay\">��������\\���������</a> - <a href=\"admin_config_pay.php?mode=edit_interkassa\">���������</a> </div></td>\r\n                           </tr>\r\n                           <tr>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center><img src=\"/modul";
    echo "es/images/robokassa.jpg\" border=\"0\"></div></td>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center>RoboKassa</div></td>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center>";

    if ( $robokassa_query['status'] == 1 )
    {
        echo "�������";
    }
    else
    {
        echo "��������";
    }
    echo "</div></td>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center>";
    echo $robokassa_query['version'];
    echo "</div></td>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center>";
    echo $robokassa_all_in;
    echo "</div></td>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center>";
    echo $robokassa_all_out;
    echo "</div></td>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center><a href=\"admin_config_pay.php?mode=block_robokassa\">��������\\���������</a> - <a href=\"admin_config_pay.php?mode=edit_robokassa\">���������</a> </div></td>\r\n                           </tr>\r\n                          <tr>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center><img src=\"/modules/";
    /*echo "images/a1pay.jpeg\" border=\"0\"></div></td>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center>A1Pay</div></td>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center>";*/
	
	
	echo "images/free-kassa.gif\" border=\"0\"></div></td>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center>Payeer</div></td>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center>";
	if ( $freekassa_query['status'] == 1 )
    {
        echo "�������";
    }
    else
    {
        echo "��������";
    }
    echo "</div></td>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center>";
    echo $freekassa_query['version'];
    echo "</div></td>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center>";
    echo $freekassa_all_in;
    echo "</div></td>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center>";
    echo $freekassa_all_out;
    echo "</div></td>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center><a href=\"admin_config_pay.php?mode=block_freekassa\">��������\\���������</a> - <a href=\"admin_config_pay.php?mode=edit_freekassa\">���������</a> </div></td>\r\n                           </tr>\r\n                          <tr>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center><img src=\"/modules/";
	
	
	
    echo "images/a1pay.jpeg\" border=\"0\"></div></td>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center>A1Pay</div></td>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center>";	
    if ( $a1pay_query['status'] == 1 )
    {
        echo "�������";
    }
    else
    {
        echo "��������";
    }
    echo "</div></td>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center>";
    echo $a1pay_query['version'];
    echo "</div></td>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center>";
    echo $a1pay_all_in;
    echo "</div></td>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center>";
    echo $a1pay_all_out;
    echo "</div></td>\r\n                           <td class=\"tabledata\" vAlign=middle><div align=center><a href=\"admin_config_pay.php?mode=block_a1pay\">��������\\���������</a> - <a href=\"admin_config_pay.php?mode=edit_a1pay\">���������</a> </div></td>\r\n                           </tr>\r\n\r\n                           </TBODY>\r\n                           </TABLE>\r\n                \t\t</TD>\r\n                </TR>\r\n                ";
    echo "</TBODY>\r\n           </TABLE>\r\n         </TD>\r\n         </TR></TBODY></TABLE></TD>\r\n     <TD><IMG src=\"templates/images/spacer.gif\" width=10></TD></TR>\r\n\r\n";
}

if ($mode == "edit_webmoney")
{
    $������_webmoney_������ = mysql_fetch_array( mysql_query( "select * from pay_modules_webmoney" ) );
    echo "\r\n     <TD vAlign=top>\r\n       <TABLE cellSpacing=0 cellPadding=0 width=\"100%\" border=0><!--begin top row-->\r\n         <TBODY>\r\n         <TR>\r\n           <TD><IMG height=13\r\n             src=\"templates/images/spacer.gif\"></TD></TR>\r\n         <TR class=printHidden>\r\n           <TD class=bannerline><IMG height=5\r\n             src=\"templates/images/spacer.gif\" width=2></TD></TR><!--end top row-->\r\n         <TR><!--be";
    echo "gin top banner-->\r\n           <TD class=banner height=40><!--add the tab navigation -->\r\n             <TABLE class=printHidden style=\"MARGIN-LEFT: 10px\" cellSpacing=0\r\n             cellPadding=0 width=\"100%\" border=0>\r\n               <TBODY>\r\n               <TR><!--section header-->\r\n                 <TD align=left>\r\n                 <TD align=left>\r\n                   <DIV id=container>";
    echo "<S";
    echo "PAN class=pageheader>��������� ��������� > ";
    echo "<S";
    echo "PAN class=subhead> ��������� WebMoney</SPAN></SPAN><BR><BR>\r\n                   <UL id=nav>\r\n                     <LI><A class=selected href=\"admin_config_pay.php\">WebMoney</A>\r\n             </LI></UL></DIV></TD></TR></TBODY></TABLE><!--end of tab navigation--></TD></TR><!--end banner -->\r\n         <TR><!--begin main content tables --->\r\n           <TD vAlign=top>\r\n             <TABLE cellSpacing=0 cellPadding=0 width=\"";
    echo "100%\">\r\n               <TBODY>\r\n               <TR>\r\n                 <TD width=10><IMG height=8\r\n                   src=\"templates/images/spacer.gif\"\r\n                 width=10></TD>\r\n                 <TD>               </TD></TR></TBODY></TABLE>\r\n             ";
    echo "<S";
    echo "TYLE type=text/css>.drag {\r\n \tCURSOR: hand\r\n }\r\n </STYLE>\r\n             <DIV id=dHTMLToolTip\r\n             style=\"Z-INDEX: 1000; LEFT: 0px; VISIBILITY: hidden; WIDTH: 10px; POSITION: absolute; TOP: 0px; HEIGHT: 10px\"></DIV>\r\n           </TD></TR>\r\n             <TD class=tableheader>\r\n             \t��������� ���������: <a href=\"admin_config_pay.php\" class=\"style2\" style=\"color:#FFFFFF;\">��������� �����</a>";
    echo "\r\n              </TD>\r\n           </TR></TBODY></TABLE>\r\n\r\n            \t\t\t\t<form method=\"post\" action=\"admin_config_pay.php?mode=edit_webmoney\">\r\n           \t\t\t\t   <TABLE class=editTable cellSpacing=0 cellPadding=5 border=0>\r\n                           <TBODY>\r\n                       \t   <TR>\r\n                             <TD class=colheader colSpan=4>�������������� WebMoney ��������</TD>\r\n                 ";
    echo "          </TR>\r\n                           <TR>\r\n                             <TD width=\"20%\" class=tabledata>Secret Key:</TD>\r\n                             <TD class=tabledata colSpan=3><INPUT name=skey id=\"affilpercentage\" value=\"";
    echo $������_webmoney_������['skey'];
    echo "\" size=50 maxLength=50></TD>\r\n                           </TR>\r\n                       \t   <TR>\r\n                             <TD class=colheader colSpan=4>��������� ��������� ����������� �������</TD>\r\n                           </TR>\r\n                           <TR>\r\n                             <TD width=\"20%\" class=tabledata>WMR:</TD>\r\n                             <TD class=tabledata colSpan=3><INPUT name";
    echo "=WMR id=\"affilpercentage\" value=\"";
    echo $������_webmoney_������['WMR'];
    echo "\" size=20 maxLength=20></TD>\r\n                           </TR>\r\n                           <TR>\r\n                             <TD width=\"20%\" class=tabledata>WMZ:</TD>\r\n                             <TD class=tabledata colSpan=3><INPUT name=WMZ id=\"affilpercentage\" value=\"";
    echo $������_webmoney_������['WMZ'];
    echo "\" size=20 maxLength=20></TD>\r\n                           </TR>\r\n                           <TR>\r\n                             <TD width=\"20%\" class=tabledata>WME:</TD>\r\n                             <TD class=tabledata colSpan=3><INPUT name=WME id=\"affilpercentage\" value=\"";
    echo $������_webmoney_������['WME'];
    echo "\" size=20 maxLength=20></TD>\r\n                           </TR>\r\n                           <TR>\r\n                             <TD width=\"20%\" class=tabledata>WMU:</TD>\r\n                             <TD class=tabledata colSpan=3><INPUT name=WMU id=\"affilpercentage\" value=\"";
    echo $������_webmoney_������['WMU'];
    echo "\" size=20 maxLength=20></TD>\r\n                           </TR>\r\n                           <TR>\r\n                             <TD colSpan=4>\r\n                               <HR>                            </TD>\r\n                           <TR>\r\n                             <TD height=\"47\" colSpan=3 class=control><INPUT class=lgbutton type=submit value=\"��������\" name=Submit>  </form>                        ";
    echo "    </TD>\r\n                             <TD class=tabledata>";
    if ( $error != "" )
    {
        echo "<font color=red>".$error."</font>";
    }
    echo "</TD>\r\n\t\t\t\t\t\t\t</TR></TBODY></TABLE>\r\n                           </form>\r\n\r\n        </TD>\r\n     <TD><IMG src=\"templates/images/spacer.gif\" width=10></TD></TR>\r\n\r\n\r\n\r\n";
}

if ($mode == "edit_interkassa")
{
    $interkassa_query = mysql_fetch_array( mysql_query( "select * from pay_modules_interkassa" ) );
    echo "\r\n\r\n     <TD vAlign=top>\r\n       <TABLE cellSpacing=0 cellPadding=0 width=\"100%\" border=0><!--begin top row-->\r\n         <TBODY>\r\n         <TR>\r\n           <TD><IMG height=13\r\n             src=\"templates/images/spacer.gif\"></TD></TR>\r\n         <TR class=printHidden>\r\n           <TD class=bannerline><IMG height=5\r\n             src=\"templates/images/spacer.gif\" width=2></TD></TR><!--end top row-->\r\n         <TR><!--";
    echo "begin top banner-->\r\n           <TD class=banner height=40><!--add the tab navigation -->\r\n             <TABLE class=printHidden style=\"MARGIN-LEFT: 10px\" cellSpacing=0\r\n             cellPadding=0 width=\"100%\" border=0>\r\n               <TBODY>\r\n               <TR><!--section header-->\r\n                 <TD align=left>\r\n                 <TD align=left>\r\n                   <DIV id=container>";
    echo "<S";
    echo "PAN class=pageheader>��������� ��������� > ";
    echo "<S";
    echo "PAN class=subhead> ��������� InterKassa</SPAN></SPAN><BR><BR>\r\n                   <UL id=nav>\r\n                     <LI><A class=selected href=\"admin_config_pay.php\">InterKassa</A>\r\n             </LI></UL></DIV></TD></TR></TBODY></TABLE><!--end of tab navigation--></TD></TR><!--end banner -->\r\n         <TR><!--begin main content tables --->\r\n           <TD vAlign=top>\r\n             <TABLE cellSpacing=0 cellPadding=0 wid";
    echo "th=\"100%\">\r\n               <TBODY>\r\n               <TR>\r\n                 <TD width=10><IMG height=8\r\n                   src=\"templates/images/spacer.gif\"\r\n                 width=10></TD>\r\n                 <TD>               </TD></TR></TBODY></TABLE>\r\n             ";
    echo "<S";
    echo "TYLE type=text/css>.drag {\r\n \tCURSOR: hand\r\n }\r\n </STYLE>\r\n             <DIV id=dHTMLToolTip\r\n             style=\"Z-INDEX: 1000; LEFT: 0px; VISIBILITY: hidden; WIDTH: 10px; POSITION: absolute; TOP: 0px; HEIGHT: 10px\"></DIV>\r\n           </TD></TR>\r\n             <TD class=tableheader>\r\n             \t��������� ���������: <a href=\"admin_config_pay.php\" class=\"style2\" style=\"color:#FFFFFF;\">��������� �����</a>";
    echo "\r\n              </TD>\r\n           </TR></TBODY></TABLE>\r\n\r\n            \t\t\t\t<form method=\"post\" action=\"admin_config_pay.php?mode=edit_interkassa\">\r\n           \t\t\t\t   <TABLE class=editTable cellSpacing=0 cellPadding=5 border=0>\r\n                           <TBODY>\r\n                       \t   <TR>\r\n                             <TD class=colheader colSpan=4>�������������� InterKassa ��������</TD>\r\n             ";
    echo "              </TR>\r\n                           <TR>\r\n                             <TD width=\"20%\" class=tabledata>������������� �������� <br>(ik_shop_id):</TD>\r\n                             <TD class=tabledata colSpan=3><INPUT name=ik_shop_id id=\"affilpercentage\" value=\"";
    echo $interkassa_query['ik_shop_id'];
    echo "\" size=50 maxLength=50></TD>\r\n                           </TR>\r\n                           <TR>\r\n                             <TD width=\"20%\" class=tabledata>��� ������� ��������� ���� <br>(secret_key):</TD>\r\n                             <TD class=tabledata colSpan=3><INPUT name=ik_key id=\"affilpercentage\" value=\"";
    echo $interkassa_query['ik_key'];
    echo "\" size=50 maxLength=50></TD>\r\n                           </TR>\r\n                            <TR>\r\n                             <TD colSpan=4>\r\n                               <HR>                            </TD>\r\n                           <TR>\r\n                             <TD height=\"47\" colSpan=3 class=control><INPUT class=lgbutton type=submit value=\"��������\" name=Submit>  </form>                       ";
    echo "     </TD>\r\n                             <TD class=tabledata>";
    if ( $error != "" )
    {
        echo "<font color=red>".$error."</font>";
    }
    echo "</TD>\r\n\t\t\t\t\t\t\t</TR></TBODY></TABLE>\r\n                           </form>\r\n\r\n        </TD>\r\n     <TD><IMG src=\"templates/images/spacer.gif\" width=10></TD></TR>\r\n\r\n\r\n\r\n\r\n";
}


//������ liqpay
if ($mode == "edit_liqpay")
{
    $liqpay_query = mysql_fetch_array( mysql_query( "select * from pay_modules_liqpay" ) );
    echo "\r\n\r\n     <TD vAlign=top>\r\n       <TABLE cellSpacing=0 cellPadding=0 width=\"100%\" border=0><!--begin top row-->\r\n         <TBODY>\r\n         <TR>\r\n           <TD><IMG height=13\r\n             src=\"templates/images/spacer.gif\"></TD></TR>\r\n         <TR class=printHidden>\r\n           <TD class=bannerline><IMG height=5\r\n             src=\"templates/images/spacer.gif\" width=2></TD></TR><!--end top row-->\r\n         <TR><!--";
    echo "begin top banner-->\r\n           <TD class=banner height=40><!--add the tab navigation -->\r\n             <TABLE class=printHidden style=\"MARGIN-LEFT: 10px\" cellSpacing=0\r\n             cellPadding=0 width=\"100%\" border=0>\r\n               <TBODY>\r\n               <TR><!--section header-->\r\n                 <TD align=left>\r\n                 <TD align=left>\r\n                   <DIV id=container>";
    echo "<S";
    echo "PAN class=pageheader>��������� ��������� > ";
    echo "<S";
    echo "PAN class=subhead> ��������� liqpay</SPAN></SPAN><BR><BR>\r\n                   <UL id=nav>\r\n                     <LI><A class=selected href=\"admin_config_pay.php\">liqpay</A>\r\n             </LI></UL></DIV></TD></TR></TBODY></TABLE><!--end of tab navigation--></TD></TR><!--end banner -->\r\n         <TR><!--begin main content tables --->\r\n           <TD vAlign=top>\r\n             <TABLE cellSpacing=0 cellPadding=0 wid";
    echo "th=\"100%\">\r\n               <TBODY>\r\n               <TR>\r\n                 <TD width=10><IMG height=8\r\n                   src=\"templates/images/spacer.gif\"\r\n                 width=10></TD>\r\n                 <TD>               </TD></TR></TBODY></TABLE>\r\n             ";
    echo "<S";
    echo "TYLE type=text/css>.drag {\r\n \tCURSOR: hand\r\n }\r\n </STYLE>\r\n             <DIV id=dHTMLToolTip\r\n             style=\"Z-INDEX: 1000; LEFT: 0px; VISIBILITY: hidden; WIDTH: 10px; POSITION: absolute; TOP: 0px; HEIGHT: 10px\"></DIV>\r\n           </TD></TR>\r\n             <TD class=tableheader>\r\n             \t��������� ���������: <a href=\"admin_config_pay.php\" class=\"style2\" style=\"color:#FFFFFF;\">��������� �����</a>";
    echo "\r\n              </TD>\r\n           </TR></TBODY></TABLE>\r\n\r\n            \t\t\t\t<form method=\"post\" action=\"admin_config_pay.php?mode=edit_interkassa\">\r\n           \t\t\t\t   <TABLE class=editTable cellSpacing=0 cellPadding=5 border=0>\r\n                           <TBODY>\r\n                       \t   <TR>\r\n                             <TD class=colheader colSpan=4>�������������� liqpay ��������</TD>\r\n             ";
    echo "              </TR>\r\n                           <TR>\r\n                             <TD width=\"20%\" class=tabledata>������������� �������� <br>(merchant_id):</TD>\r\n                             <TD class=tabledata colSpan=3><INPUT name=merchant_id id=\"affilpercentage\" value=\"";
    echo $liqpay_query['merchant_id'];
    echo "\" size=50 maxLength=50></TD>\r\n                           </TR>\r\n                           <TR>\r\n                             <TD width=\"20%\" class=tabledata>��� ������� ��������� ���� <br>(secret_key):</TD>\r\n                             <TD class=tabledata colSpan=3><INPUT name=merchant_password id=\"affilpercentage\" value=\"";
    echo $liqpay_query['merchant_password'];
    echo "\" size=50 maxLength=50></TD>\r\n                           </TR>\r\n                            <TR>\r\n                             <TD colSpan=4>\r\n                               <HR>                            </TD>\r\n                           <TR>\r\n                             <TD height=\"47\" colSpan=3 class=control><INPUT class=lgbutton type=submit value=\"��������\" name=Submit>  </form>                       ";
    echo "     </TD>\r\n                             <TD class=tabledata>";
    if ( $error != "" )
    {
        echo "<font color=red>".$error."</font>";
    }
    echo "</TD>\r\n\t\t\t\t\t\t\t</TR></TBODY></TABLE>\r\n                           </form>\r\n\r\n        </TD>\r\n     <TD><IMG src=\"templates/images/spacer.gif\" width=10></TD></TR>\r\n\r\n\r\n\r\n\r\n";
}
//����� ������ liqpay


if ($mode == "edit_robokassa")
{
    $interkassa_query = mysql_fetch_array( mysql_query( "select * from pay_modules_robokassa" ) );	
    echo "\r\n\r\n     <TD vAlign=top>\r\n       <TABLE cellSpacing=0 cellPadding=0 width=\"100%\" border=0><!--begin top row-->\r\n         <TBODY>\r\n         <TR>\r\n           <TD><IMG height=13\r\n             src=\"templates/images/spacer.gif\"></TD></TR>\r\n         <TR class=printHidden>\r\n           <TD class=bannerline><IMG height=5\r\n             src=\"templates/images/spacer.gif\" width=2></TD></TR><!--end top row-->\r\n         <TR><!--";
    echo "begin top banner-->\r\n           <TD class=banner height=40><!--add the tab navigation -->\r\n             <TABLE class=printHidden style=\"MARGIN-LEFT: 10px\" cellSpacing=0\r\n             cellPadding=0 width=\"100%\" border=0>\r\n               <TBODY>\r\n               <TR><!--section header-->\r\n                 <TD align=left>\r\n                 <TD align=left>\r\n                   <DIV id=container>";
    echo "<S";
    echo "PAN class=pageheader>��������� ��������� > ";
    echo "<S";
    echo "PAN class=subhead> ��������� RoboKassa</SPAN></SPAN><BR><BR>\r\n                   <UL id=nav>\r\n                     <LI><A class=selected href=\"admin_config_pay.php\">RoboKassa</A>\r\n             </LI></UL></DIV></TD></TR></TBODY></TABLE><!--end of tab navigation--></TD></TR><!--end banner -->\r\n         <TR><!--begin main content tables --->\r\n           <TD vAlign=top>\r\n             <TABLE cellSpacing=0 cellPadding=0 width";
    echo "=\"100%\">\r\n               <TBODY>\r\n               <TR>\r\n                 <TD width=10><IMG height=8\r\n                   src=\"templates/images/spacer.gif\"\r\n                 width=10></TD>\r\n                 <TD>               </TD></TR></TBODY></TABLE>\r\n             ";
    echo "<S";
    echo "TYLE type=text/css>.drag {\r\n \tCURSOR: hand\r\n }\r\n </STYLE>\r\n             <DIV id=dHTMLToolTip\r\n             style=\"Z-INDEX: 1000; LEFT: 0px; VISIBILITY: hidden; WIDTH: 10px; POSITION: absolute; TOP: 0px; HEIGHT: 10px\"></DIV>\r\n           </TD></TR>\r\n             <TD class=tableheader>\r\n             \t��������� ���������: <a href=\"admin_config_pay.php\" class=\"style2\" style=\"color:#FFFFFF;\">��������� �����</a>";
    echo "\r\n              </TD>\r\n           </TR></TBODY></TABLE>\r\n\r\n            \t\t\t\t<form method=\"post\" action=\"admin_config_pay.php?mode=edit_robokassa\">\r\n           \t\t\t\t   <TABLE class=editTable cellSpacing=0 cellPadding=5 border=0>\r\n                           <TBODY>\r\n                       \t   <TR>\r\n                             <TD class=colheader colSpan=4>��������������  RoboKassa ��������</TD>\r\n               ";
    echo "            </TR>\r\n                           <TR>\r\n                             <TD width=\"20%\" class=tabledata>����� � ������� RoboKassa:</TD>\r\n                             <TD class=tabledata colSpan=3><INPUT name=mrh_login id=\"affilpercentage\" value=\"";
    echo $interkassa_query['mrh_login'];
    echo "\" size=50 maxLength=50></TD>\r\n                           </TR>\r\n                           <TR>\r\n                             <TD width=\"20%\" class=tabledata>������ 1:</TD>\r\n                             <TD class=tabledata colSpan=3><INPUT name=mrh_pass1 id=\"affilpercentage\" value=\"";
    echo $interkassa_query['mrh_pass1'];
    echo "\" size=50 maxLength=50></TD>\r\n                           </TR>\r\n                           <TR>\r\n                             <TD width=\"20%\" class=tabledata>������ 2:</TD>\r\n                             <TD class=tabledata colSpan=3><INPUT name=mrh_pass2 id=\"affilpercentage\" value=\"";
    echo $interkassa_query['mrh_pass2'];
    echo "\" size=50 maxLength=50></TD>\r\n                           </TR>\r\n                            <TR>\r\n                             <TD colSpan=4>\r\n                               <HR>                            </TD>\r\n                           <TR>\r\n                             <TD height=\"47\" colSpan=3 class=control><INPUT class=lgbutton type=submit value=\"��������\" name=Submit>  </form>                       ";
    echo "     </TD>\r\n                             <TD class=tabledata>";
    if ( $error != "" )
    {
        echo "<font color=red>".$error."</font>";
    }
    echo "</TD>\r\n\t\t\t\t\t\t\t</TR></TBODY></TABLE>\r\n                           </form>\r\n\r\n        </TD>\r\n     <TD><IMG src=\"templates/images/spacer.gif\" width=10></TD></TR>\r\n\r\n\r\n\r\n\r\n";
}



if ($mode == "edit_freekassa")
{
    $freekassa_query = mysql_fetch_array( mysql_query( "select * from pay_modules_freekassa" ) );	
    echo "\r\n\r\n     <TD vAlign=top>\r\n       <TABLE cellSpacing=0 cellPadding=0 width=\"100%\" border=0><!--begin top row-->\r\n         <TBODY>\r\n         <TR>\r\n           <TD><IMG height=13\r\n             src=\"templates/images/spacer.gif\"></TD></TR>\r\n         <TR class=printHidden>\r\n           <TD class=bannerline><IMG height=5\r\n             src=\"templates/images/spacer.gif\" width=2></TD></TR><!--end top row-->\r\n         <TR><!--";
    echo "begin top banner-->\r\n           <TD class=banner height=40><!--add the tab navigation -->\r\n             <TABLE class=printHidden style=\"MARGIN-LEFT: 10px\" cellSpacing=0\r\n             cellPadding=0 width=\"100%\" border=0>\r\n               <TBODY>\r\n               <TR><!--section header-->\r\n                 <TD align=left>\r\n                 <TD align=left>\r\n                   <DIV id=container>";
    echo "<S";
    echo "PAN class=pageheader>��������� ��������� > ";
    echo "<S";
    echo "PAN class=subhead> ��������� Payeer</SPAN></SPAN><BR><BR>\r\n                   <UL id=nav>\r\n                     <LI><A class=selected href=\"admin_config_pay.php\">Payeer</A>\r\n             </LI></UL></DIV></TD></TR></TBODY></TABLE><!--end of tab navigation--></TD></TR><!--end banner -->\r\n         <TR><!--begin main content tables --->\r\n           <TD vAlign=top>\r\n             <TABLE cellSpacing=0 cellPadding=0 width";
    echo "=\"100%\">\r\n               <TBODY>\r\n               <TR>\r\n                 <TD width=10><IMG height=8\r\n                   src=\"templates/images/spacer.gif\"\r\n                 width=10></TD>\r\n                 <TD>               </TD></TR></TBODY></TABLE>\r\n             ";
    echo "<S";
    echo "TYLE type=text/css>.drag {\r\n \tCURSOR: hand\r\n }\r\n </STYLE>\r\n             <DIV id=dHTMLToolTip\r\n             style=\"Z-INDEX: 1000; LEFT: 0px; VISIBILITY: hidden; WIDTH: 10px; POSITION: absolute; TOP: 0px; HEIGHT: 10px\"></DIV>\r\n           </TD></TR>\r\n             <TD class=tableheader>\r\n             \t��������� ���������: <a href=\"admin_config_pay.php\" class=\"style2\" style=\"color:#FFFFFF;\">��������� �����</a>";
    echo "\r\n              </TD>\r\n           </TR></TBODY></TABLE>\r\n\r\n            \t\t\t\t<form method=\"post\" action=\"admin_config_pay.php?mode=edit_freekassa\">\r\n           \t\t\t\t   <TABLE class=editTable cellSpacing=0 cellPadding=5 border=0>\r\n                           <TBODY>\r\n                       \t   <TR>\r\n                             <TD class=colheader colSpan=4>�������������� Payeer ��������</TD>\r\n               ";
    echo "            </TR>\r\n                           <TR>\r\n                             <TD width=\"20%\" class=tabledata>merchant_id ID �������� � ������� Payeer:</TD>\r\n                             <TD class=tabledata colSpan=3><INPUT name=mrh_login id=\"affilpercentage\" value=\"";
    echo $freekassa_query['mrh_login'];
    echo "\" size=50 maxLength=50></TD>\r\n                           </TR>\r\n                           <TR>\r\n                             <TD width=\"20%\" class=tabledata>��������� ����� 1:</TD>\r\n                             <TD class=tabledata colSpan=3><INPUT name=mrh_pass1 id=\"affilpercentage\" value=\"";
    echo $freekassa_query['mrh_pass1'];
    echo "\" size=50 maxLength=50></TD>\r\n                           </TR>\r\n                           <TR>\r\n                             <TD width=\"20%\" class=tabledata>��������� ����� 2:</TD>\r\n                             <TD class=tabledata colSpan=3><INPUT name=mrh_pass2 id=\"affilpercentage\" value=\"";
    echo $freekassa_query['mrh_pass2'];
    echo "\" size=50 maxLength=50></TD>\r\n                           </TR>\r\n                            <TR>\r\n                             <TD colSpan=4>\r\n                               <HR>                            </TD>\r\n                           <TR>\r\n                             <TD height=\"47\" colSpan=3 class=control><INPUT class=lgbutton type=submit value=\"��������\" name=Submit>  </form>                       ";
    echo "     </TD>\r\n                             <TD class=tabledata>";
    if ( $error != "" )
    {
        echo "<font color=red>".$error."</font>";
    }
    echo "</TD>\r\n\t\t\t\t\t\t\t</TR></TBODY></TABLE>\r\n                           </form>\r\n\r\n        </TD>\r\n     <TD><IMG src=\"templates/images/spacer.gif\" width=10></TD></TR>\r\n\r\n\r\n\r\n\r\n";
}




if ($mode == "edit_a1pay")
{
    $a1pay_query = mysql_fetch_array( mysql_query( "select * from pay_modules_a1pay" ) );
    echo "\r\n\r\n     <TD vAlign=top>\r\n       <TABLE cellSpacing=0 cellPadding=0 width=\"100%\" border=0><!--begin top row-->\r\n         <TBODY>\r\n         <TR>\r\n           <TD><IMG height=13\r\n             src=\"templates/images/spacer.gif\"></TD></TR>\r\n         <TR class=printHidden>\r\n           <TD class=bannerline><IMG height=5\r\n             src=\"templates/images/spacer.gif\" width=2></TD></TR><!--end top row-->\r\n         <TR><!--";
    echo "begin top banner-->\r\n           <TD class=banner height=40><!--add the tab navigation -->\r\n             <TABLE class=printHidden style=\"MARGIN-LEFT: 10px\" cellSpacing=0\r\n             cellPadding=0 width=\"100%\" border=0>\r\n               <TBODY>\r\n               <TR><!--section header-->\r\n                 <TD align=left>\r\n                 <TD align=left>\r\n                   <DIV id=container>";
    echo "<S";
    echo "PAN class=pageheader>��������� ��������� > ";
    echo "<S";
    echo "PAN class=subhead> ��������� A1Pay</SPAN></SPAN><BR><BR>\r\n                   <UL id=nav>\r\n                     <LI><A class=selected href=\"admin_config_pay.php\">A1Pay</A>\r\n             </LI></UL></DIV></TD></TR></TBODY></TABLE><!--end of tab navigation--></TD></TR><!--end banner -->\r\n         <TR><!--begin main content tables --->\r\n           <TD vAlign=top>\r\n             <TABLE cellSpacing=0 cellPadding=0 width=\"100%\">";
    echo "\r\n               <TBODY>\r\n               <TR>\r\n                 <TD width=10><IMG height=8\r\n                   src=\"templates/images/spacer.gif\"\r\n                 width=10></TD>\r\n                 <TD>               </TD></TR></TBODY></TABLE>\r\n             ";
    echo "<S";
    echo "TYLE type=text/css>.drag {\r\n \tCURSOR: hand\r\n }\r\n </STYLE>\r\n             <DIV id=dHTMLToolTip\r\n             style=\"Z-INDEX: 1000; LEFT: 0px; VISIBILITY: hidden; WIDTH: 10px; POSITION: absolute; TOP: 0px; HEIGHT: 10px\"></DIV>\r\n           </TD></TR>\r\n             <TD class=tableheader>\r\n             \t��������� ���������: <a href=\"admin_config_pay.php\" class=\"style2\" style=\"color:#FFFFFF;\">��������� �����</a>";
    echo "\r\n              </TD>\r\n           </TR></TBODY></TABLE>\r\n\r\n            \t\t\t\t<form method=\"post\" action=\"admin_config_pay.php?mode=edit_a1pay\">\r\n           \t\t\t\t   <TABLE class=editTable cellSpacing=0 cellPadding=5 border=0>\r\n                           <TBODY>\r\n                       \t   <TR>\r\n                             <TD class=colheader colSpan=4>�������������� A1Pay ��������</TD>\r\n                       ";
    echo "    </TR>\r\n                           <TR>\r\n                             <TD width=\"20%\" class=tabledata>��������� ����:</TD>\r\n                             <TD class=tabledata colSpan=3><INPUT name=secret id=\"affilpercentage\" value=\"";
    echo $a1pay_query['secret'];
    echo "\" size=50 maxLength=50>������ �������: A-Z,a-z,0-9</TD>\r\n                           </TR>\r\n                            <TR>\r\n                             <TD colSpan=4>\r\n                               <HR>                            </TD>\r\n                           <TR>\r\n                             <TD height=\"47\" colSpan=3 class=control><INPUT class=lgbutton type=submit value=\"��������\" name=Submit>  </f";
    echo "orm>                            </TD>\r\n                             <TD class=tabledata>";
    if ( $error != "" )
    {
        echo "<font color=red>".$error."</font>";
    }
    echo "</TD>\r\n\t\t\t\t\t\t\t</TR></TBODY></TABLE>\r\n                           </form>\r\n\r\n        </TD>\r\n     <TD><IMG src=\"templates/images/spacer.gif\" width=10></TD></TR>\r\n\r\n\r\n\r\n\r\n";
}
echo "\r\n\r\n\r\n";

include_once( "templates/admin_footer.php" );
?>
