<?      
//������ ���� �������
define ( 'CASINOENGINE', true );
//��������� ������
session_start();
//��������� �� ���� � ������
include_once('../../engine/core/games/game_secure.php');

$game = $_GET['game'];
if ($_SESSION['mode'] == 'fun') { $mode = 'demo';} else { $mode = 'real';}
?>
<html>
<head>


<title>Novomatic (���������������) | <?=$game?></title>

<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript" src="pages/swfobject.js"></SCRIPT>
<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript" src="pages/main.js"></SCRIPT>
</head>
<body topmargin="0" bottommargin="0" leftmargin="0" rightmargin="0" bgcolor="#333333">
<center>

<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=10,0,0,0" width="100%" height="100%" id="loader" align="middle">
<param name="allowScriptAccess" value="sameDomain" />
<param name="allowFullScreen" value="true" />
<param name="movie" value="/games/novomatic/slots/slotmenu.swf?backurl=/game.php&game=<?=$game?>&min=1&user=real&cur=RUR&denoms=1|2|3|4|5|10|15|20|30|40|50|100&loadpath=/games/novomatic/slots/" />
<param name="quality" value="high" />
<param name="bgcolor" value="#000000" />
<embed src="/games/novomatic/slots/slotmenu.swf?backurl=/game.php&game=<?=$game?>&min=1&user=real&cur=RUR&denoms=1|2|3|4|5|10|15|20|30|40|50|100&loadpath=/games/novomatic/slots/" quality="high" bgcolor="#333333" width="100%" height="100%" name="loader" align="middle" allowScriptAccess="sameDomain" allowFullScreen="true" type="application/x-shockwave-flash" pluginspage="http://www.adobe.com/go/getflashplayer" />
</object>

</center></body></html>