<?php
//��������� ������ ������
defined('CASINOENGINE') or die('������ ��������');

//��������� ����� � ����
include_once("templates/admin_top.php");
include_once("templates/admin_menu.php");

//���������� ���������
if(isset($_GET['sub'])) $sub = $_GET['sub']; else $sub='';
if(isset($_GET['do'])) $do = $_GET['do']; else $do='';
if(isset($_GET['message'])) $message = filter($_GET['message']); else $message='';

//�������������� ������ ����-����������
if ($id and $sub) {
	switch($sub) {
	
		//�������� ������
		case 'delete':
			if ($adm_login!=$demo) {
				mysql_query("DELETE FROM `casino_tickets` WHERE `id`=".$id);
				mysql_query("DELETE FROM `casino_tickets` WHERE `parentid`=".$id);
				if(mysql_error()) die(mysql_error());
				die("<script>alert(\"����� ������� ������!\");location.href=\"/acp/acp_admin/index.php\";</script>");
			} else die("<script>alert(\"�� �� ������ ������� ������ � ���� ������!\");history.back()</script>");
		break;
		
		//����� ������
		case 'view':
			$sql = mysql_query("SELECT * FROM `casino_tickets` WHERE `id`=".$id." OR `parentid`=".$id." ORDER BY `dt` ASC" );
			if(mysql_error()) die(mysql_error());
			if (mysql_num_rows($sql) == 0) echo "<script>alert(\"����� �� ������. �������� �� ��� ������.\");location.href=\"/acp/acp_admin/index.php\";</script>";
			else {
				mysql_query("UPDATE `casino_tickets` SET `newforadmin`='0' WHERE `id`=".$id);
				if(mysql_error()) die(mysql_error());
				echo "\r\n     <TD vAlign=top>\r\n       <TABLE cellSpacing=0 cellPadding=0 width=\"100%\" border=0>\r\n         <TBODY>\r\n         <TR>\r\n           <TD><IMG height=13 src=\"templates/images/spacer.gif\"></TD></TR>\r\n         <TR class=printHidden>\r\n           <TD class=bannerline><IMG height=5 src=\"templates/images/spacer.gif\" width=2></TD></TR>\r\n         <TR>\r\n           <TD class=banner height=40>\r\n             <TABLE class=pri";
				echo "ntHidden style=\"MARGIN-LEFT: 10px\" cellSpacing=0 cellPadding=0 width=\"100%\" border=0>\r\n               <TBODY>\r\n               <TR>\r\n                 <TD align=left>\r\n                   <DIV id=container>";
				echo "<S";
				echo "PAN class=pageheader style=\"float:left;\">����� ����������� � ��������� > </span>";
				echo "<S";
				echo "PAN class=subhead> <b>&nbsp;�������� ������� ������</b></SPAN>";
				echo "<S";
				echo "PAN class=subhead style=\"float:right;vertical-align:top;\"><b>������� �� �������������&nbsp;</b></SPAN><BR><BR>\r\n                   <UL id=nav>\r\n\t                 <LI><A class=\"selected\" href=\"#replay\">����� �� �����</A>\r\n                 \t <DIV><A ";
				if($status == "open") echo "class=selected";
				echo " href=\"?do=tickets\">�������� (";
				$res = mysql_fetch_assoc(mysql_query("
					SELECT COUNT(*) AS open_count,
					(SELECT COUNT(*) FROM `casino_tickets` WHERE `status`='closed' AND `parentid`='0') AS closed_count
					FROM `casino_tickets` WHERE `status`='open' AND `parentid`='0'"));
				echo $res['open_count'];
				echo ")</A>\r\n                     <DIV><A ";
				if($status == "closed") echo "class=selected";
				echo " href=\"?do=tickets&status=closed\">�������� (";
				echo $res['closed_count'];
				echo ")</A>\r\n                     <LI style=\"float:right;\"><A ";
				if($sub == "news_update") echo "class=selected";
				echo " href=\"index.php?sub=news_update\">����������</A>\r\n                     <LI style=\"float:right;\"><A ";
				if($sub == "news_site") echo "class=selected";
				echo " href=\"index.php?sub=news_site\">�������</A>\r\n                   </UL>\r\n                   </DIV>\r\n                 </TD>\r\n               </TR>\r\n               </TBODY>\r\n             </TABLE>\r\n           </TD>\r\n         </TR>\r\n         <TR>\r\n           <TD vAlign=top>\r\n             <TABLE cellSpacing=0 cellPadding=0 width=\"100%\">\r\n               <TBODY>\r\n               <TR>\r\n                 <TD width=10><IMG heig";
				echo "ht=8 src=\"templates/images/spacer.gif\" width=10></TD>\r\n               </TR>\r\n               </TBODY>\r\n             </TABLE>\r\n             <DIV id=dHTMLToolTip style=\"Z-INDEX: 1000; LEFT: 0px; VISIBILITY: hidden; WIDTH: 10px; POSITION: absolute; TOP: 0px; HEIGHT: 10px\"></DIV>\r\n           </TD></TR>\r\n             <TD class=tableheader>\r\n             \t���������: <a href=\"index.php\" class=\"style2\" style=\"color:";
				echo "#FFFFFF;\">��������� �����</a>\r\n              </TD>\r\n           </TR></TBODY></TABLE>\r\n                   <TABLE cellSpacing=0 cellPadding=0 width=\"100%\" bgColor=#cccccc border=0>\r\n                     <TBODY>\r\n                     <TR>\r\n                       <TD>\r\n\r\n\r\n\r\n<table cellspacing=0 cellpadding=0 width=\"100%\">\r\n\t\t\t\t<tbody>\r\n\r\n\r\n</table>\r\n\r\n           ";
				$cnt=0;
				while ($ticket = mysql_fetch_object($sql)) {
					++$cnt;
					if ($ticket->userid) $type = "���������"; else $type = "�����";
			 		if ($cnt == 1) {
						        $priority = "| ��������: <img src=\"./_rootimages/priority_".$ticket->priority.".gif\" alt=\"�������� "._priority($ticket->priority)."\" title=\"�������� "._priority($ticket->priority)."\">";
						        $status = "| ������: <img src=\"./_rootimages/ticket_".$ticket->status.".gif\" alt=\"����� "._statusTicket($ticket->status)."\" title=\"����� "._statusTicket($ticket->status)."\">";
						        if ($ticket->status == "open") $close = "<A href=?do=".$do."&sub=close&id=".$id." onclick=\"javascript: return confirm('�� �������, ��� ������ ������� �����?');\"><img src=./_rootimages/close.gif border=0 alt='������� �����' title='������� �����'> ������� �����</a> | ";
						        $user = GetUserById($ticket->userid);
						        $user = " | ������: <A href='admin_userlist.php?mode=viewuser&id={$ticket->userid}'>{$user->login}</a>";
						        echo "<tr><td class='cell_2' width='15%'><div align='center' style='font-size:12px;'>�������� ������: ".$ticket->subject."<B></b></div></td></tr>\r\n\t\t\t\t\t\t<tr><td class='cell_empty'><b><div align='center'>����: ".$ticket->dt." | ��������: ".$priority." ".$status." ".$user."</div></b></td></tr>\r\n\t\t\t\t\t\t";
					} else {
						$priority = "";
						$status = "";
						$user = "";
					}
					$ticket->message = str_replace("\r\n", "<BR>", stripslashes($ticket->message));
					echo "<tr><td class='cell_empty'><div align='left'>&nbsp;<b>#".$cnt." - ".$type."</b> | <b>����: ".$ticket->dt." </b></div></td></tr>";
					echo "<tr><td class='cell_empty'><div align='left'>".$ticket->message."<br></div></td></tr>";
				}
				echo "\r\n\r\n\r\n\r\n\t\t\t        <table border=0 width=100% class=editTable align=center><form method=\"get\">\r\n\t\t        \t<tr>\r\n\t\t        \t\t<td colspan=2 align=center><B>�������� �� �����:</b></td>\r\n\t\t        \t</tr>\r\n\t\t        \t<a name=\"replay\"></a>\r\n\t\t\t        <input type=hidden name=do value=";
				echo $do;
				echo ">\r\n\t\t\t        <input type=hidden name=sub value=reply>\r\n\t\t\t        <input type=hidden name=id value=";
				echo $id;
				echo ">\r\n\t\t\t        <tr align=center><td align=center><textarea name=message cols=120 rows=10>";
				echo $message;
				echo "</textarea></td></tr>\r\n\t\t\t        <tr><td colspan=2 align=center bgcolor=";
				echo $font_head;
				echo "><input class=lgbutton type=Submit value=\"��������\"></td></tr></table><BR></form>\r\n\r\n\t\t\t        </td></tr></table>\r\n";
				echo "<table width='100%'><tr><td><center>";
				echo $close." <A href=?do=".$do."&sub=delete&id=".$id." onclick=\"javascript: return confirm('�� �������, ��� ������ ������� �����?');\"><img src=./_rootimages/del.gif border=0 alt='������� �����' title='������� �����'> ������� �����</a><br><br>\r\n\t\t\t\t</center></td></tr></table>\r\n\t\t\t\t";
				echo "\r\n\t\t\t\t";
			}
		break;
		
		//����� �� �����
		case 'reply':
			if ($message) {

				//������ � �� �� ���������� � ���������� ����������
				$message = $_GET['message'];//filter($message);
var_dump($message);
				$message = preg_replace("/(\\r\\n)/", "<br/>", $message);
var_dump($message, preg_replace("/(\\r\\n)/", "<br/>", $message));
				mysql_query("UPDATE `casino_tickets` SET `newforuser`='1',`status`='open' WHERE `id`=".$id);
				mysql_query("INSERT INTO `casino_tickets` (`parentid`,`dt`,`message`) VALUES('".$id."',NOW(),'".@addslashes($message)."')");
				if(mysql_error()) die(mysql_error());

				//������� ������ �� ����
				$ticketid = mysql_insert_id();
				$sql = mysql_query("
					SELECT `a`.`parentid` AS parentid,
						`b`.`subject` AS subject,
						`c`.`login` AS login,
						`c`.`email` AS email,
						(SELECT `siteadress` FROM `casino_settings`) AS siteadress,
						(SELECT `emailcasino` FROM `casino_settings`) AS emailcasino
					FROM `casino_tickets` AS `a`
					LEFT JOIN `casino_tickets` AS `b` ON `a`.`parentid`=`b`.`id`
					LEFT JOIN `clients` AS `c` ON `b`.`userid`=`c`.`id`
					WHERE `a`.`id`='".$ticketid."'");
	
				//������������� ������
				$ticket_data 	= mysql_fetch_assoc($sql);
				$parent_id 		= $ticket_data['parentid'];
				$subject 		= $ticket_data['subject'];
				$user_name 		= $ticket_data['login'];
				$user_email 	= $ticket_data['email'];
				$site 			= $ticket_data['siteadress'];
				$email_support 	= $ticket_data['emailcasino'];
				$priority 		= 3;
	
				//���������� ���������
				$format = "text/html";
				$msg = '';
				$msg .= "������������, ".$user_name.",<br>";
				$msg .= "������ ��������� �������� ��� � �����: <b>".addslashes($subject)."</b> (ID #".$ticketid.")<br><br>";
				$msg .= "������� � ������ ����� �� ������: <a href=\"http://".$site."/ru/messages/view/".$parent_id."\">http://".$site."/ru/messages/view/".$parent_id."</a><br>";
				$msg .= "---------------------<br>";
				$msg .= "� ���������� �����������,<br>";
				$msg .= "������������� ��������-������ ".$site."<br>";
	
				//��������
				mail($user_email, "����� � �����: ".$subject.", �������� ������: ".$site, $msg, "From: ".$email_support."\nContent-Type:".$format.";charset=windows-1251\nMIME-Version: 1.0\nContent-Transfer-Encoding: 8bit\nX-Priority: ".$priority."\nX-Mailer:CasinoEngine mail v1.0" );
	
				//������� ������
				$subject = "";
				$priority = "";
				$message = "";
				echo "<script>alert(\"��������� ������� ���������.\");location.href=\"index.php\";</script>";
			} else echo "<font color=red>�� ������� ���������.</font><br><br>";
		break;
		
		//�������� ������
		case 'close':
			mysql_query("UPDATE `casino_tickets` SET `status`='closed' WHERE `id`=".$id);
			mysql_query("INSERT INTO `casino_tickets` (`parentid`,`dt`,`message`) VALUES('".$id."',NOW(),'����� ������ ���������������.')");
			if(mysql_error()) die(mysql_error());
			echo "<script>alert(\"����� ������� ������.\");location.href=\"index.php\";</script>";
		break;
		
		//�������� ������
		case 'open':
			mysql_query("UPDATE `casino_tickets` SET `status`='open' WHERE `id`=".$id);
			mysql_query("INSERT INTO `casino_tickets` (`parentid`,`dt`,`message`) VALUES('".$id."',NOW(),'����� ������ ���������������.')");
			if(mysql_error()) die(mysql_error());
			echo "<script>alert(\"����� ������� ������.\");location.href=\"index.php\";</script>";
		break;
	}
} elseif($sub and in_array($sub, array('delete', 'view', 'reply', 'close', 'open'))) echo "<font color=red>������ ������������� ������.</font><br><br>";

//������� ���
if (!$sub) {
	if(isset($_GET['status'])) $status = $_GET['status']; else $status = '';
    if (!$status || $status == "open") $status = "open"; else $status = "closed";
    


	//������ �������
    $sql = mysql_query("SELECT `status` FROM `casino_tickets` WHERE `parentid`=0 ORDER BY `id` DESC");
    $open_num = 0;
    $closed_num = 0;
    while($result = mysql_fetch_assoc($sql)) if($result['status']=='open') ++$open_num; else ++$closed_num;
	switch($status) {
    	case 'open':
    		$view = "<a class='style3' href=?do=tickets&status=closed>�������� �������� ������</a>";
    		$row_num =  $open_num;
    	break;
    	case 'closed':
    		$view = "<a class='style3' href=?do=tickets>�������� �������� ������</a>";
    		$row_num =  $closed_num;
    	break;
    }
    
	//������������� ����� ������
    if(isset($_GET['page'])) $start = (int)$_GET['page'] - 1; else $start = 0;
    $per_page = 10;
    if($row_num>$per_page) $page_num = ceil($row_num/$per_page); else $page_num=0;
    if($page_num) {
		$browse_menu = '<div style="text-align:center">';
		for($i=1;$i<$page_num+1;$i++) {
			if($do) $query='do='.$do.'&page='.$i; else $query='page='.$i;
			$browse_menu .= '<a href="index.php?'.$query.'">'.$i.'</a> ';
		}
		$browse_menu .= '</div>';
	} else $browse_menu = '';
	
	//���������� �����
	echo "     <TD vAlign=top>\r\n       <TABLE cellSpacing=0 cellPadding=0 width=\"100%\" border=0>\r\n         <TBODY>\r\n         <TR>\r\n           <TD><IMG height=13 src=\"templates/images/spacer.gif\"></TD></TR>\r\n         <TR class=printHidden>\r\n           <TD class=bannerline><IMG height=5 src=\"templates/images/spacer.gif\" width=2></TD></TR>\r\n         <TR>\r\n           <TD class=banner height=40>\r\n             <TABLE class=print";
    echo "Hidden style=\"MARGIN-LEFT: 10px\" cellSpacing=0 cellPadding=0 width=\"100%\" border=0>\r\n               <TBODY>\r\n               <TR>\r\n                 <TD align=left>\r\n                   <DIV id=container>";
    echo "<S";
    echo "PAN class=pageheader style=\"float:left;\">����� ����������� � ��������� > ";
    if ($status == "open") echo "�������� ������"; else echo "�������� ������";
    echo "</SPAN>";
    echo "<S";
    echo "PAN class=subhead style=\"float:right;\"><b>������� �� �������������&nbsp;</b></SPAN><BR><BR>\r\n                   <UL id=nav>\r\n                     <DIV><A ";
    if ($status == "open") echo "class=selected";
    echo " href=\"?do=tickets\">�������� (";
    echo $open_num;
    echo ")</A>\r\n                     <DIV><A ";
    if ($status == "closed") echo "class=selected";
    echo " href=\"?do=tickets&status=closed\">�������� (";
    echo $closed_num;
    echo ")</A>\r\n                     <LI style=\"float:right;\"><A ";
    if ($sub == "news_update") echo "class=selected";
    echo " href=\"index.php?sub=news_update\">����������</A>\r\n                     <LI style=\"float:right;\"><A ";
    if ($sub == "news_site") echo "class=selected";
    echo " href=\"index.php?sub=news_site\">�������</A>\r\n             </LI></UL></DIV></TD></TR></TBODY></TABLE><!--end of tab navigation--></TD></TR><!--end banner -->\r\n         <TR><!--begin main content tables --->\r\n           <TD vAlign=top>\r\n             <TABLE cellSpacing=0 cellPadding=0 width=\"100%\">\r\n               <TBODY>\r\n               <TR>\r\n                 <TD width=10><IMG height=8\r\n                   src=\"template";
    echo "s/images/spacer.gif\"\r\n                 width=10></TD>\r\n                 <TD>               </TD></TR></TBODY></TABLE>\r\n             ";
    echo "<S";
    echo "TYLE type=text/css>.drag {\r\n \tCURSOR: hand\r\n }\r\n </STYLE>\r\n             <DIV id=dHTMLToolTip\r\n             style=\"Z-INDEX: 1000; LEFT: 0px; VISIBILITY: hidden; WIDTH: 10px; POSITION: absolute; TOP: 0px; HEIGHT: 10px\"></DIV>\r\n           </TD></TR>\r\n             <TD class=tableheader>\r\n             \t<a class='style3' href='index.php?sub=new'>�������� ����� �����</a>\r\n              </TD>\r\n           </TR></TBOD";
    echo "Y></TABLE>\r\n                   <TABLE cellSpacing=0 cellPadding=0 width=\"100%\" bgColor=#cccccc border=0>\r\n                     <TBODY>\r\n                     <TR>\r\n                       <TD>\r\n                         <TABLE cellSpacing=1 cellPadding=3 width=\"100%\" border=0>\r\n                           <TBODY>\r\n\t\t\t\t\t\t\t<tr><td colspan=6 bgcolor=\"#FFFFFF;\" align=center><b>������:</b></td></tr>\r\n                  ";
    echo "         <TR class=colheader>\r\n                             <TD width=\"5%\"><div align=\"center\">������</div></TD>\r\n                             <TD width=\"70%\"><div align=\"center\">���� ������</div></TD>\r\n                             <TD width=\"10%\"><div align=\"center\">��</div></TD>\r\n                             <TD width=\"5%\"><div align=\"center\">����</div></TD>\r\n                             <TD width=\"5%\"><div align=";
    echo "\"center\">�������</div></TD>\r\n                             <TD width=\"10%\"><div align=\"center\">����������</div></TD>\r\n                           </TR>\r\n\r\n\t        ";
    
    //�������� ����� �������
    $sql = mysql_query("
    	SELECT `a`.*,
    	(SELECT COUNT(*) FROM `casino_tickets` WHERE `parentid`=`a`.`id`) AS reply_num,
    	`b`.`login` AS user_login
    	FROM `casino_tickets` AS a
    	LEFT JOIN `clients` AS b ON `a`.`userid`=`b`.`id`
    	WHERE `a`.`status`='".$status."' AND `a`.`parentid`=0 ORDER BY `a`.`id` DESC LIMIT ".$start.",".$per_page);
	if(mysql_error()) die(mysql_error());
    $cnt = 0;
    while ($ticket=mysql_fetch_object($sql)) {
        ++$cnt;
        $subj = stripslashes($ticket->subject);
        if ($ticket->newforadmin) $subj = "<b>".$subj."</b>";
        $dt = split(" ", $ticket->dt);
        $dt = mydate($dt[0]);
        $link = "?do=".$do."&sub=view&id=".$ticket->id;
        $delete = "<A href=?do=".$do."&sub=delete&id=".$ticket->id." onclick=\"javascript: return confirm('�� �������, ��� ������ ������� �����?');\"><img src=./_rootimages/del.gif border=0 alt='������� �����' title='������� �����'></a>";
        $close = " <A href=?do=".$do."&sub=close&id=".$ticket->id." onclick=\"javascript: return confirm('�� �������, ��� ������ ������� �����?');\"><img src=./_rootimages/close.gif border=0 alt='������� �����' title='������� �����'></a>";
        $open = " <A href=?do=".$do."&sub=open&id=".$ticket->id." onclick=\"javascript: return confirm('�� �������, ��� ������ ������� �����?');\"><img src=./_rootimages/ticket_open.gif border=0 alt='������� �����' title='������� �����'></a>";
        $user = "<A href='admin_userlist.php?mode=viewuser&id=".$ticket->userid."'>".$ticket->user_login."</a>";
        echo "\t\t\t<tr class=tabledata height=30>\r\n\t\t\t<td valign=middle width=50 align=center>&nbsp;<img src=\"./_rootimages/priority_";
        echo $ticket->priority;
        echo ".gif\" alt=\"�������� ";
        echo _priority($ticket->priority);
        echo "\" title=\"�������� ";
        echo _priority($ticket->priority);
        echo "\"> <img src=\"./_rootimages/ticket_";
        echo $ticket->status;
        echo ".gif\" alt=\"����� ";
        echo _statusTicket($ticket->status);
        echo "\" title=\"����� ";
        echo _statusTicket($ticket->status);
        echo "\">&nbsp;</td>\r\n\t\t\t<td>&nbsp;<a href=";
        echo $link;
        echo ">";
        echo $subj;
        echo "</a>&nbsp;</td>\r\n\t\t\t<td align=center>&nbsp;";
        echo $user;
        echo "&nbsp;</td>\r\n\t\t\t<td align=center>&nbsp;";
        echo $dt;
        echo "&nbsp;</td>\r\n\t\t\t<td align=center>";
        echo $ticket->reply_num;
        echo "</td>\r\n\t\t\t<td align=center>";
        if ($ticket->status == "open") echo $close; else echo $open;
        echo " ";
        echo $delete;
        echo "</td>\r\n\t\t\t</tr>\r\n\t\t\t";
    }
    echo "\t\t<tr>\r\n\t\t\t<Td bgcolor=\"#FFFFFF;\" colspan=6>\r\n\t\t\t<div style=\"text-align:right;\">";
    echo $browse_menu;
    echo "</div><br>\r\n\t\t\t<center>����� �������: ";
    echo $row_num;
    echo ", ������� �� ��������: ";
    echo $cnt;
    echo "</center><br>\r\n\t\t\t</td>\r\n\t\t</tr>\r\n\t\t</table><br>\r\n                       </TBODY></TABLE>\r\n\r\n                       </TD></TR></TBODY></TABLE></TD></TR><!-- closes 3 tables -->\r\n               <TR>\r\n                 <TD colSpan=2 height=10><IMG\r\n                   src=\"templates/images/spacer.gif\"\r\n                 width=1 height=\"1\"></TD>\r\n               </TR>\r\n\r\n";
}

//����� �����
if ($sub == "new") {
	//������� �������� � �������� ������
	$sql = mysql_query("SELECT `status` FROM `casino_tickets` WHERE `parentid`=0 ORDER BY `id` DESC");
	$open_num=0;
	$closed_num=0;
	while($result = mysql_fetch_assoc($sql)) if($result['status']=='open') ++$open_num; else ++$closed_num;
	
	//������� �����
    echo "     <TD vAlign=top>\r\n       <TABLE cellSpacing=0 cellPadding=0 width=\"100%\" border=0>\r\n         <TBODY>\r\n         <TR>\r\n           <TD><IMG height=13 src=\"templates/images/spacer.gif\"></TD></TR>\r\n         <TR class=printHidden>\r\n           <TD class=bannerline><IMG height=5 src=\"templates/images/spacer.gif\" width=2></TD></TR>\r\n         <TR>\r\n           <TD class=banner height=40>\r\n             <TABLE class=print";
    echo "Hidden style=\"MARGIN-LEFT: 10px\" cellSpacing=0 cellPadding=0 width=\"100%\" border=0>\r\n               <TBODY>\r\n               <TR>\r\n                 <TD align=left>\r\n                   <DIV id=container>";
    echo "<S";
    echo "PAN class=pageheader style=\"float:left;\">����� ����������� � ��������� > ����� ���������</SPAN>";
    echo "<S";
    echo "PAN class=subhead style=\"float:right;\"><b>������� �� �������������&nbsp;</b></SPAN><BR><BR>\r\n                   <UL id=nav>\r\n\t                 <LI><A class=\"selected\" href=\"#replay\">����� �����</A>\r\n                 \t <DIV><A ";
    if ($status == "open") echo "class=selected";
    echo " href=\"?do=tickets\">�������� (";
    echo $open_num;
    echo ")</A>\r\n                     <DIV><A ";
    if ($status=="closed") echo "class=selected";
    echo " href=\"?do=tickets&status=closed\">�������� (";
    echo $closed_num;
    echo ")</A>\r\n                     <LI style=\"float:right;\"><A ";
    if ($sub == "news_update") echo "class=selected";
    echo " href=\"index.php?sub=news_update\">����������</A>\r\n                     <LI style=\"float:right;\"><A ";
    if ($sub == "news_site") echo "class=selected";
    echo " href=\"index.php?sub=news_site\">�������</A>                   </UL>\r\n                   </DIV>\r\n                 </TD>\r\n               </TR>\r\n               </TBODY>\r\n             </TABLE>\r\n           </TD>\r\n         </TR>\r\n         <TR>\r\n           <TD vAlign=top>\r\n             <TABLE cellSpacing=0 cellPadding=0 width=\"100%\">\r\n               <TBODY>\r\n               <TR>\r\n                 <TD width=10><IMG height";
    echo "=8 src=\"templates/images/spacer.gif\" width=10></TD>\r\n               </TR>\r\n               </TBODY>\r\n             </TABLE>\r\n <DIV id=dHTMLToolTip style=\"Z-INDEX: 1000; LEFT: 0px; VISIBILITY: hidden; WIDTH: 10px; POSITION: absolute; TOP: 0px; HEIGHT: 10px\"></DIV>\r\n           </TD></TR>\r\n             <TD class=tableheader>\r\n             \t���������: <a href=\"index.php\" class=\"style2\" style=\"color:#F";
    echo "FFFFF;\">��������� �����</a>\r\n              </TD>\r\n           </TR></TBODY></TABLE>\r\n                   <TABLE cellSpacing=0 cellPadding=0 width=\"100%\" bgColor=#cccccc border=0>\r\n                     <TBODY>\r\n                     <TR>\r\n                       <TD>\r\n\r\n\r\n\r\n<table cellspacing=0 cellpadding=0 width=\"100%\">\r\n\t\t\t\t<tbody>\r\n\r\n\r\n</table>\r\n\t\t\t        <table border=0 class=editTable align=center";
    echo ">\r\n\t\t\t        <form method=\"post\" action=\"index.php?sub=new_pm\">\r\n\r\n                          <TBODY>\r\n                       \t   <TR>\r\n                             <TD class=colheader colSpan=4>����� �����</TD>\r\n                           </TR>\r\n                           <TR>\r\n                             <TD class=tabledata>������������:</TD>\r\n                             <TD class=tabledata c";
    echo "olSpan=3><input type=\"text\" size=\"20\" id=\"searchuser\" name=\"user\" id=\"casinoemail\" value=\"";
    echo "\" maxLength=500/></TD>\r\n                           </TR>\r\n                           <TR>\r\n                             <TD class=tabledata>����:</TD>\r\n                             <TD class=tabledata colSpan=3><INPUT size=\"105\" name=\"subject\" ></TD>\r\n                           </TR>\r\n                           <TR>\r\n                             <TD class=tabledata>��������:</TD>\r\n                            ";
    echo " <TD class=tabledata colSpan=3>";
    GetPrioritySelect();
    echo "</TD>\r\n
    </TR>\r\n\r\n\r\n\t\t        \t<tr>\r\n\t\t        \t\t<td class=colheader colspan=4 align=left><B>���������:</b></td>\r\n\t\t        \t</tr>\r\n\t\t\t        <tr align=left>\r\n\t\t\t        <td colspan=4 align=left>\r\n\t\t\t        \t<textarea name=message cols=120 rows=10>";
    echo $message;
    echo "</textarea>\r\n\t\t\t        </td>\r\n\t\t\t        </tr>\r\n\t\t\t        <tr><td colspan=4 align=left bgcolor=";
    echo $font_head;
    echo "><input type=Submit value=\"��������\"></td></tr></table><BR></form>\r\n\r\n\t\t\t        </td></tr></table>\r\n\r\n";
}


//���������� ������
if ($sub == "new_pm")
{
    $error = "";
    $user = filter( $_POST['user'] );
    $subject = filter( $_POST['subject'] );
    $priority = filter( $_POST['priority'] );
    $message = filter( $_POST['message'] );
    if ( $user == "" )
    {
        $error .= "������� ��� ������������!\\n";
    }
    if ( $subject == "" )
    {
        $error .= "������� ���� ���������!\\n";
    }
    if ( $priority == "" )
    {
        $error .= "������� �������� ���������!\\n";
    }
    if ( $message == "" )
    {
        $error .= "������� ���������!\\n";
    }
    if ( $error != "" )
    {
        echo "<script>alert(\"".$error."\");</script>";
        echo "<script>history.back();</script>";
    }
    if ( $error == "" )
    {
        $user_id_query = @mysql_fetch_array( @mysql_query( "select * from clients where login='".$user."'" ) );
        $user_id = $user_id_query['id'];
        $user_email = $user_id_query['email'];
        $config_query = @mysql_fetch_array( @mysql_query( "select * from casino_settings" ) );
        $site = $config_query['siteadress'];
        $email_support = $config_query['emailcasino'];
        if ( !@mysql_query( "insert into casino_tickets (priority,dt,subject,userid,message,newforuser,newforadmin) values('{$priority}',NOW(),'".@addslashes( $subject )."','".$user_id."','".@addslashes( $message )."','1','0')" ) )
        {
            exit( mysql_error( ) );
        }
        $ticketid = mysql_insert_id( );
        $priority = 3;
        $format = "text/html";
        $msg = '';
        $msg .= "������������, ".$user.",<br>";
        $msg .= "������ ��������� ������� ����� �����: <b>".addslashes( $subject )."</b> (ID # ".$ticketid.")<br><br>";
        $msg .= "������� � ������ ����� �� ������: <a href=\"http://".$site."/ru/messages/view/".$ticketid."\">http://".$site."/ru/messages/view/".$ticketid."</a><br>";
        $msg .= "---------------------<br>";
        $msg .= "� ���������� �����������,<br>";
        $msg .= "������������� ��������-������ ".$site."<br>";
        mail( $user_email, "����� �����: {$subject}, �������� ������: ".$site, $msg, "From: {$email_support}\nContent-Type:{$format};charset=windows-1251\nMIME-Version: 1.0\nContent-Transfer-Encoding: 8bit\nX-Priority: {$priority}\nX-Mailer:CasinoEngine mail v1.0" );
        $subject = "";
        $priority = "";
        $message = "";
        echo "<script>alert(\"��������� ������������: ".$user.", ������� �����������!\");</script>";
        echo "<script>location.href=\"/acp/acp_admin/index.php\";</script>";
        exit( );
        if ( !TRUE )
        {
            exit( );
        }
    }
    echo "\r\n";
}

//�������
if ($sub == "news_site")
{
    $news = @file_get_contents( "http://wm-scripts.ru" );
    echo "\r\n     <TD vAlign=top>\r\n       <TABLE cellSpacing=0 cellPadding=0 width=\"100%\" border=0>\r\n         <TBODY>\r\n         <TR>\r\n           <TD><IMG height=13 src=\"templates/images/spacer.gif\"></TD></TR>\r\n         <TR class=printHidden>\r\n           <TD class=bannerline><IMG height=5 src=\"templates/images/spacer.gif\" width=2></TD></TR>\r\n         <TR>\r\n           <TD class=banner height=40>\r\n             <TABLE class=pri";
    echo "ntHidden style=\"MARGIN-LEFT: 10px\" cellSpacing=0 cellPadding=0 width=\"100%\" border=0>\r\n               <TBODY>\r\n               <TR>\r\n                 <TD align=left>\r\n                   <DIV id=container>";
    echo "<S";
    echo "PAN class=pageheader style=\"float:left;\">����� ����������� � ��������� > ���� �������</SPAN>";
    echo "<S";
    echo "PAN class=subhead style=\"float:right;\"><b>������� �� �������������&nbsp;</b></SPAN><BR><BR>\r\n                   <UL id=nav>\r\n                 \t <DIV><A ";
    if ( $status == "open" )
    {
        echo "class=selected";
    }
    echo " href=\"?do=tickets\">�������� (";
    echo mysql_num_rows( mysql_query( "SELECT * FROM casino_tickets WHERE status='open' and parentid='0'" ) );
    echo ")</A>\r\n                     <DIV><A ";
    if ( $status == "closed" )
    {
        echo "class=selected";
    }
    echo " href=\"?do=tickets&status=closed\">�������� (";
    echo mysql_num_rows( mysql_query( "SELECT * FROM casino_tickets WHERE status='closed' and parentid='0'" ) );
    echo ")</A>\r\n                     <LI style=\"float:right;\"><A ";
    if ( $sub == "news_update" )
    {
        echo "class=selected";
    }
    echo " href=\"index.php?sub=news_update\">����������</A>\r\n                     <LI style=\"float:right;\"><A ";
    if ( $sub == "news_site" )
    {
        echo "class=selected";
    }
    echo " href=\"index.php?sub=news_site\">�������</A>\r\n                   </UL>\r\n                   </DIV>\r\n                 </TD>\r\n               </TR>\r\n               </TBODY>\r\n             </TABLE>\r\n           </TD>\r\n         </TR>\r\n         <TR>\r\n           <TD vAlign=top>\r\n             <TABLE cellSpacing=0 cellPadding=0 width=\"100%\">\r\n               <TBODY>\r\n               <TR>\r\n                 <TD width=10><IMG heig";
    echo "ht=8 src=\"templates/images/spacer.gif\" width=10></TD>\r\n               </TR>\r\n               </TBODY>\r\n             </TABLE>\r\n             <DIV id=dHTMLToolTip style=\"Z-INDEX: 1000; LEFT: 0px; VISIBILITY: hidden; WIDTH: 10px; POSITION: absolute; TOP: 0px; HEIGHT: 10px\"></DIV>\r\n           </TD></TR>\r\n             <TD class=tableheader>\r\n             \t���������: <a href=\"index.php\" class=\"style2\" style=\"color:";
    echo "#FFFFFF;\">��������� �����</a>\r\n              </TD>\r\n           </TR></TBODY></TABLE>\r\n           \t\t\t\t   <TABLE class=editTable cellSpacing=0 cellPadding=5 border=0>\r\n                           <TBODY>\r\n                       \t   <TR>\r\n                             <TD class=colheader colSpan=4>���� �������</TD>\r\n                           </TR>\r\n                           <TR>\r\n                             <TD ";
    echo "class=tabledata colSpan=4>";
    echo $news;
    echo "</TD>\r\n                           </TR>\r\n\t\t\t\t\t   </TD>\r\n\t\t\t\t\t</TR>\r\n\t\t\t\t\t</TBODY>\r\n\t\t\t\t\t</TABLE>\r\n\r\n";
}

echo "\r\n";

//����������
if ($sub == "news_update")
{
    $news = @file_get_contents( "http://wm-scripts.ru" );
    echo "\r\n     <TD vAlign=top>\r\n       <TABLE cellSpacing=0 cellPadding=0 width=\"100%\" border=0>\r\n         <TBODY>\r\n         <TR>\r\n           <TD><IMG height=13 src=\"templates/images/spacer.gif\"></TD></TR>\r\n         <TR class=printHidden>\r\n           <TD class=bannerline><IMG height=5 src=\"templates/images/spacer.gif\" width=2></TD></TR>\r\n         <TR>\r\n           <TD class=banner height=40>\r\n             <TABLE class=pri";
    echo "ntHidden style=\"MARGIN-LEFT: 10px\" cellSpacing=0 cellPadding=0 width=\"100%\" border=0>\r\n               <TBODY>\r\n               <TR>\r\n                 <TD align=left>\r\n                   <DIV id=container>";
    echo "<S";
    echo "PAN class=pageheader style=\"float:left;\">����� ����������� � ��������� > ����� ���������� � ������</SPAN>";
    echo "<S";
    echo "PAN class=subhead style=\"float:right;\"><b>������� �� �������������&nbsp;</b></SPAN><BR><BR>\r\n                   <UL id=nav>\r\n                 \t <DIV><A ";
    if ( $status == "open" )
    {
        echo "class=selected";
    }
    echo " href=\"?do=tickets\">�������� (";
    echo mysql_num_rows( mysql_query( "SELECT * FROM casino_tickets WHERE status='open' and parentid='0'" ) );
    echo ")</A>\r\n                     <DIV><A ";
    if ( $status == "closed" )
    {
        echo "class=selected";
    }
    echo " href=\"?do=tickets&status=closed\">�������� (";
    echo mysql_num_rows( mysql_query( "SELECT * FROM casino_tickets WHERE status='closed' and parentid='0'" ) );
    echo ")</A>\r\n                     <LI style=\"float:right;\"><A ";
    if ( $sub == "news_update" )
    {
        echo "class=selected";
    }
    echo " href=\"index.php?sub=news_update\">����������</A>\r\n                     <LI style=\"float:right;\"><A ";
    if ( $sub == "news_site" )
    {
        echo "class=selected";
    }
    echo " href=\"index.php?sub=news_site\">�������</A>\r\n                   </UL>\r\n                   </DIV>\r\n                 </TD>\r\n               </TR>\r\n               </TBODY>\r\n             </TABLE>\r\n           </TD>\r\n         </TR>\r\n         <TR>\r\n           <TD vAlign=top>\r\n             <TABLE cellSpacing=0 cellPadding=0 width=\"100%\">\r\n               <TBODY>\r\n               <TR>\r\n                 <TD width=10><IMG heig";
    echo "ht=8 src=\"templates/images/spacer.gif\" width=10></TD>\r\n               </TR>\r\n               </TBODY>\r\n             </TABLE>\r\n             <DIV id=dHTMLToolTip style=\"Z-INDEX: 1000; LEFT: 0px; VISIBILITY: hidden; WIDTH: 10px; POSITION: absolute; TOP: 0px; HEIGHT: 10px\"></DIV>\r\n           </TD></TR>\r\n             <TD class=tableheader>\r\n             \t���������: <a href=\"index.php\" class=\"style2\" style=\"color:";
    echo "#FFFFFF;\">��������� �����</a>\r\n              </TD>\r\n           </TR></TBODY></TABLE>\r\n           \t\t\t\t   <TABLE class=editTable cellSpacing=0 cellPadding=5 border=0>\r\n                           <TBODY>\r\n                       \t   <TR>\r\n                             <TD class=colheader colSpan=4>����� � ����������</TD>\r\n                           </TR>\r\n                           <TR>\r\n                          ";
    echo "   <TD class=tabledata colSpan=4>";
    echo $news;
    echo "</TD>\r\n                           </TR>\r\n\t\t\t\t\t   </TD>\r\n\t\t\t\t\t</TR>\r\n\t\t\t\t\t</TBODY>\r\n\t\t\t\t\t</TABLE>\r\n\r\n";
}

//��������� �����
include_once( "templates/admin_footer.php" );
?>
