<?php #::[ ������ ������������ ������� ]::#
//$table_players    =  "players"  ;
//$pole_username    =  "username" ;
//$pole_partnername =  "partner"  ;


// ���������� ���� ��� ������ � ��������
define ( "MY_TABLE_PLAYERS","players"    ) ;// ������� ������ 
define ( "MY_USER_NUMID",   "id"         ) ;// 0  ����
define ( "MY_USER_USERS",   "username"   ) ;// 1  ����
define ( "MY_USER_PASS",    "password"   ) ;// 2  ���� 
define ( "MY_USER_EMAIL",   "email"      ) ;// 3  ����
define ( "MY_USER_PRIVATE","personaldata") ;// 4  ������������ ������
define ( "MY_USER_WHEREPAY","wherepay"   ) ;// 5  ��������� ������
define ( "MY_USER_DATE",    "regdate"    ) ;// 6  ���� ����
define ( "MY_USER_REGIP",   "regip"      ) ;// 7  ip ��� ����������� 
define ( "MY_USER_CASH",    "accountsum" ) ;// 8  ������ ������ 
define ( "MY_USER_CASHIN",  "deposit"    ) ;// 9  ���� ������ 
define ( "MY_USER_CASHOUT", "withdraw"   ) ;//10   ����� ������ 
define ( "MY_USER_CPS",     "cps_summ"   ) ;//11   ����������� ������ ��������
define ( "MY_USER_CPS_PROC","cps_proc"   ) ;//11   ����������� ������ �������� �������
define ( "MY_USER_CPS_ADD", "cps_bon"    ) ;//11   ����������� 
define ( "MY_USER_CPS_REF", "cps_friend" ) ;//11   ����������� 
define ( "MY_USER_HOLD",    "holdset"    ) ;//12   ��� ������ ���� � ������� �����                
define ( "MY_USER_WINDBL",  "win_double" ) ;//13  ��������                                       
define ( "MY_USER_MODE",    "mode"       ) ;//14  ��������� �����                                
define ( "MY_USER_MODE2",   "mode2"      ) ;//15  ���������                                      
define ( "MY_USER_MODE3",   "mode3"      ) ;//16  ��������� �����������                          
define ( "MY_USER_MODE4",   "mode4"      ) ;//17  ip � ����� ����� 
define ( "MY_USER_RIGHT",   "permision"  ) ;//18  ����� 
//  1    2     3                                                    10                                               17
//name bank proc winmax income bonus bonus2 bonusready bonusproc bonusmode jackpot jpotproc mode mode2 mode3 mode4 incash 
define ( "MY_TABLE_BANK",   "game_bank"  ) ;//00 ������� ������ 
define ( "MY_BANK_NAME",    "name"       ) ;//01 �������� �����
define ( "MY_BANK_SUMM",    "bank"       ) ;//02 ����� ����� 
define ( "MY_BANK_PROC",    "proc"       ) ;//03 ������� (��� ������������� �� ������� ��������)
define ( "MY_BANK_MAX",     "winmax"     ) ;//04 ������������ ����� Win �� 1 ���� 
define ( "MY_BANK_IN",      "income"     ) ;//05 ������� ������� �������� Ѩ�� 
define ( "MY_BANK_BONUS",   "bonus"      ) ;//06 ����� ������ 
define ( "MY_BANK_BONUS2",  "bonus2"     ) ;//07 ����� ������� ������ 
define ( "MY_BANK_BONREADY","bonusready" ) ;//08 ����� ���������� ������ ������
define ( "MY_BANK_BONPROC", "bonusproc"  ) ;//09 ������� ����������� � ���� ������ 
define ( "MY_BANK_BONMODE", "bonusmode"  ) ;//10 ������� ����������� � ���� ������ 
define ( "MY_BANK_JP",      "jackpot"    ) ;//11 ����� �����  JP
define ( "MY_BANK_JPPROC",  "jpotproc"   ) ;//12 ������� ����������� � ����  JP 
define ( "MY_BANK_MODE",    "mode"       ) ;//13 ��������� ����� 
define ( "MY_BANK_MODE2",   "mode2"      ) ;//14 �������� �����  
define ( "MY_BANK_MODE3",   "mode3"      ) ;//15 ������� ����� 
define ( "MY_BANK_MODE4",   "mode4"      ) ;//16 ���������� ������� ����� 
define ( "MY_BANK_INCASH",  "incash"     ) ;//17 ����� ����� �����                              
define ( "MY_PUBLIC",       "ttuz"       ) ;//-- ����� ����                                     

define ( "MY_TABLE_PARTNER", "partner"   ) ;// ������� ���������
define ( "MY_PARTNER_PARTN", "cps"       ) ;//0 �������
define ( "MY_PARTNER_USER",  "user"      ) ;//1 �������
define ( "MY_PARTNER_DATE",  "data"      ) ;//2 ���� ���� ��������
define ( "MY_PARTNER_CASH",  "usd"       ) ;//3 ������� �� ����� ��������� ���������
//id  op_1  op_2  op_3  op_4  op_5  op_6  
define ( "MY_TABLE_IOPTIONS", "interface_options" ) ;// ������� ��������� �����, ��������� � �.�.
define ( "MY_IOPTIONS_MESS",  "id"      ) ;// ���� ��������� <-��� ���???
define ( "MY_IOPTIONS_ID",    "id"      ) ;// ���� ��������� 
define ( "MY_IOPTIONS_OP1",   "op_1"    ) ;// ����� 1 
define ( "MY_IOPTIONS_OP2",   "op_2"    ) ;// ����� 2 
define ( "MY_IOPTIONS_OP3",   "op_3"    ) ;// ����� 3 
define ( "MY_IOPTIONS_OP4",   "op_4"    ) ;// ����� 4 
define ( "MY_IOPTIONS_OP5",   "op_5"    ) ;// ����� 5 
define ( "MY_IOPTIONS_OP6",   "op_6"    ) ;// ����� 6
//  nameid  passwd  access  project_email  project_url  project_name  project_icq  project_phone  project_addr 
// project_license  mrh_login  mrh_pass1  mrh_pass2  cps_percent  paymail  regsend  zakmail  icq  cas_bon 
// wmid  wmz  wme  wmu  wmb  wmy  exchange_rate  other  
define ( "MY_TABLE_SETTINGS", "settings" ) ; // ������� �������� ��������� , �������
define ( "MY_SETTINGS_USER",  "nameid"   ) ; // ��� ������������� ��� �������
define ( "MY_SETTINGS_PWD",   "passwd"   ) ; // ������ ������������� ��� �������
define ( "MY_SETTINGS_ACSSES","access"   ) ; // ����� �������
define ( "MY_SETTINGS_PMAIL","project_email" ) ; // �����
define ( "MY_SETTINGS_PURL", "project_url"   ) ; // 
define ( "MY_SETTINGS_PNAME","project_name"  ) ; // 
define ( "MY_SETTINGS_PICQ", "project_icq"   ) ; // 
define ( "MY_SETTINGS_PTEL", "project_phone" ) ; // 
define ( "MY_SETTINGS_PADDR","project_addr"  ) ; // 
define ( "MY_SETTINGS_PLSN","project_license") ; // 
define ( "MY_SETTINGS_PAYLOGIN","mrh_login"  ) ; // 
define ( "MY_SETTINGS_PAYPASS1","mrh_pass1"  ) ; // 
define ( "MY_SETTINGS_PAYPASS2","mrh_pass2"  ) ; // 
define ( "MY_SETTINGS_CPS","cps_percent" ) ; // % ���������
define ( "MY_SETTINGS_PAYMAIL","paymail" ) ; // 
define ( "MY_SETTINGS_REGSEND","regsend" ) ; // 
define ( "MY_SETTINGS_OUTMAUL","zakmail" ) ; // 
define ( "MY_SETTINGS_ICQ",  "icq"       ) ; // 
define ( "MY_SETTINGS_PAYBONUS","cas_bon") ; // 
define ( "MY_SETTINGS_WMID", "wmid"      ) ; // 
define ( "MY_SETTINGS_WMZ",  "wmz"       ) ; // 
define ( "MY_SETTINGS_WME",  "wmE"       ) ; // 
define ( "MY_SETTINGS_WMU",  "wmU"       ) ; // 
define ( "MY_SETTINGS_WMB",  "wmB"       ) ; // 
define ( "MY_SETTINGS_WMY",  "wmy"       ) ; // 
define ( "MY_SETTINGS_EXCHRATE","exchange_rate" ) ; // �������� ��������� , ������� ����� �����
define ( "MY_SETTINGS_OTHER", "other"    ) ; // �������� ��������� , ������� ������ ���������
define ( "MY_SETTINGS_AMAIL","adm_email" ) ; // ���� ������ - ��� ������ ���� ���
//id  username  data  time  summ  type_operations  systempay  flag 
define ( "MY_TABLE_STATPAY", "stat_pay"   ) ; // ������� ���������� ��������
define ( "MY_STATPAY_ID",    "id"         ) ; //0 ID ������ ��������
define ( "MY_STATPAY_USER",  "username"   ) ; //1 ���� ����������� ������
define ( "MY_STATPAY_DATA",  "data"       ) ; //2 ���� ��������
define ( "MY_STATPAY_PAY",   "pay"        ) ; //3 ���� �������� � ������ ������������
//define ( "MY_STATPAY_TIME",  "time"       ) ; //3 ����� ��������
define ( "MY_STATPAY_SUMM",  "summ"       ) ; //4 ����� �������� � ������� ������ �������
define ( "MY_STATPAY_TO","type_operations") ; //5 ��� ��������
define ( "MY_STATPAY_SP",    "systempay"  ) ; //6 ������� ��������/�������
define ( "MY_STATPAY_FLAG",  "flag"       ) ; //7 ���� ��������� �������

// id 	login 	cash 	rekvizit 	sumout 	datein 	flag 	dateout
define ( "MY_TABLE_ORDER",    "withdraw"  ) ;// ������� ������� ��������
define ( "MY_ORDER_ID",       "id"        ) ;// �� �� ��������
define ( "MY_ORDER_USER",     "login"     ) ;// ��� ������������ ������������� ��������
define ( "MY_ORDER_BALANCE",  "cash"      ) ;// ������ �� ������ ���������� ��������
define ( "MY_ORDER_PAYMENT",  "rekvizit"  ) ;// ��������� ��������
define ( "MY_ORDER_PAYOUT",   "payout"    ) ;// ��������� ��������
//define ( "MY_ORDER_TIMESTAMP","time"     ) ;// ��������� �������
define ( "MY_ORDER_SUM",      "sumout"    ) ;// ����� ��������
define ( "MY_ORDER_APPO", "appointment"   ) ;// �/� ���� �����������
define ( "MY_ORDER_IN",       "datein"    ) ;// ����� ������
define ( "MY_ORDER_FLAG",     "flag"      ) ;// ���� �������� � �\��������
define ( "MY_ORDER_OUT",      "dateout"   ) ;// ����� ���������

//id  username  oldpass  time  codes  marker  flag 
define ( "MY_TABLE_FORGOT",  "forgotten" ) ;// ������� ��������������� �������
define ( "MY_FORGOT_ID",     "id"        ) ;//  ID ������
define ( "MY_FORGOT_TIME",   "time"      ) ;//  ����� �������
define ( "MY_FORGOT_USER",   "username"  ) ;//  ��� �����
define ( "MY_FORGOT_COD",    "codes"     ) ;//  ��� �������������
define ( "MY_FORGOT_KEY",    "marker"    ) ;//  ����
define ( "MY_FORGOT_FLAG",   "flag"      ) ;//  ���� ���������
//0    1     2      3      4      5     6    7 
//id  data  vrem  login  balans  stav  win  game  
define ( "MY_TABLE_STATGAME", "stat_game") ;// ������� ���
define ( "MY_STATGAME_ID",    "id"       ) ;// ID # ���� 
define ( "MY_STATGAME_DATA",  "data"     ) ;// ���� ����� ����
define ( "MY_STATGAME_TIME",  "vrem"     ) ;// ����� ����� ���� 
define ( "MY_STATGAME_USER",  "login"    ) ;// ����� ������ 
define ( "MY_STATGAME_CASH",  "balans"   ) ;// ������ ������ �� �����  
define ( "MY_STATGAME_BET",   "stav"     ) ;// ������ ������ 
define ( "MY_STATGAME_WIN",   "win"      ) ;// ������� ������ 
define ( "MY_STATGAME_GAME",  "game"     ) ;// �������� ���� 

define ( "MY_TABLE_STATADM", "stat_admin") ;// ������� ���������� �������
define ( "MY_STATADM_ID",            "id") ;// id ���������� 
define ( "MY_STATADM_IP",            "ip") ;// ip ������
define ( "MY_STATADM_TIME",       "times") ;// ����� �������

//slotlist_setting  id  amount  folder  lng  btngm_w  btngm_h  img_w  img_h  mode  hz 
// �������� ��������� ����-�����
define ( "MY_TABLE_SLOTLISTSET", "slotlist_setting") ;// ������� ��������� ������ ������
define ( "MY_SLOTLISTSET_ID",    "id"     ) ;// �������� ���������
define ( "MY_SLOTLISTSET_COLVO", "amount" ) ;// ���-�� ����� �� ���.
define ( "MY_SLOTLISTSET_PATH",  "folder" ) ;// ��� ����� ��� �����
define ( "MY_SLOTLISTSET_LNG",   "lng"    ) ;// ����
define ( "MY_SLOTLISTSET_BTNW",  "btngm_w") ;// ������ ������ W
define ( "MY_SLOTLISTSET_BTNH",  "btngm_h") ;// ������ ������ H
define ( "MY_SLOTLISTSET_SIZEW", "img_w"  ) ;// ������ ������ W
define ( "MY_SLOTLISTSET_SIZEH", "img_h"  ) ;// ������ ������ H
define ( "MY_SLOTLISTSET_MODE",  "mode"   ) ;// ����
define ( "MY_SLOTLISTSET_HZ",    "hz"     ) ;// ��� ������ �����

// slotlist id  slot  images  size_w  size_h  title  alt  ahref  stake_1  stake_2  stake_3  send  run  
define ( "MY_TABLE_SLOTLIST", "slotlist" ) ; // ������� ������ ������
define ( "MY_SLOTLIST_ID",    "id"       ) ; //0  ID-��������� Slota
define ( "MY_SLOTLIST_UID",   "uid"      ) ; //1 UID "������ �����" Slota
define ( "MY_SLOTLIST_SLOT",  "slot"     ) ; //2 ����
define ( "MY_SLOTLIST_IMAGE", "images"   ) ; //3 ��� ����� ��������
define ( "MY_SLOTLIST_SIZEW", "size_w"   ) ; //4 ������ w
define ( "MY_SLOTLIST_SIZEH", "size_h"   ) ; //5 ������ H
define ( "MY_SLOTLIST_TITLE", "title"    ) ; //6 title
define ( "MY_SLOTLIST_ALT",   "alt"      ) ; //7 alt
define ( "MY_SLOTLIST_HREF",  "ahref"    ) ; //8 ������� ������
define ( "MY_SLOTLIST_MIN1",  "stake_1"  ) ; //9 ������ ��� 1
define ( "MY_SLOTLIST_MIN2",  "stake_2"  ) ; //10������ ��� 2
define ( "MY_SLOTLIST_MIN3",  "stake_3"  ) ; //11 ������ ��� 3
define ( "MY_SLOTLIST_SEND",  "send"     ) ; //12 ������
define ( "MY_SLOTLIST_CAT",   "cathegory") ; //13 ��������� �����
define ( "MY_SLOTLIST_TYPE",  "type"     ) ; //14 ������������� (�������� �����)
define ( "MY_SLOTLIST_RUN",   "rating"   ) ; //15 ������� �����
// id 	data 	image 	text   
define ( "MY_TABLE_NEWS",      "news"    ) ; // ������� �������
define ( "MY_NEWS_ID",         "id"      ) ; // id ������
define ( "MY_NEWS_TIME",       "data"    ) ; // ���� ������
define ( "MY_NEWS_SHORT",      "short"   ) ; // �������� ���������
define ( "MY_NEWS_IMG",        "image"   ) ; // ��������
define ( "MY_NEWS_TXT",        "text"    ) ; // ����
define ( "MY_NEWS_STATUS",     "status"  ) ; // ������ ���������

// id 	mess     
define ( "MY_TABLE_ALERT",     "alert"   ) ; // ������� c��������
define ( "MY_ALERT_ID",        "id"      ) ; // id c��������
define ( "MY_ALERT_MESS",      "mess"    ) ; // ���� c��������

// subscription id 	mess     
define ( "MY_TABLE_SUBSCRIPTION", "subscription" ) ; // ������� ��������
define ( "MY_SUBSCRIPTION_ID",        "id"       ) ; // id c��������
define ( "MY_SUBSCRIPTION_INFO", "questionnaire" ) ; // id c��������
define ( "MY_SUBSCRIPTION_EMAIL",     "email"    ) ; // ���� 
define ( "MY_SUBSCRIPTION_STATUS",    "status"   ) ; // ������
define ( "MY_SUBSCRIPTION_UID",       "uid"      ) ; // id ������ �����
define ( "MY_SUBSCRIPTION_NOTE",      "note"     ) ; // ����������

// webmaster      
define ( "MY_TABLE_WEBMASTER",  "webmaster" ) ; // ������� ����������
define ( "MY_WEBMASTER_ID",     "id"        ) ; // id 
define ( "MY_WEBMASTER_USER",   "cps"       ) ; // ����� 
define ( "MY_WEBMASTER_URL",    "url"       ) ; // ��� �����
define ( "MY_WEBMASTER_STATUS", "status"    ) ; // ������ ����
define ( "MY_WEBMASTER_CHECK",  "checker"   ) ; // ����������� ����� ����

// messages      
define ( "MY_TABLE_MESSAGES",  "messages" ) ; // ������� ���������
define ( "MY_MESSAGES_ID",     "id"       ) ; // id 
define ( "MY_MESSAGES_DATE",   "timestamp") ; // ���� ����� 
define ( "MY_MESSAGES_THEME",  "theme"    ) ; // ���� ���������  
define ( "MY_MESSAGES_USER",   "user"     ) ; // ����� 
define ( "MY_MESSAGES_MAIL",   "email"    ) ; // ����� ��� ������
define ( "MY_MESSAGES_MESS",   "message"  ) ; // ���� ���������
define ( "MY_MESSAGES_STATUS", "status"   ) ; // ������ 
define ( "MY_MESSAGES_SEND",   "send"     ) ; // ����� 

//
define ( "MY_TABLE_TAGS",    "tags" ) ; // ������� ����� 
define ( "MY_TAGS_ID",       "id"   ) ; // ����� ���� 
define ( "MY_TAGS_TYPE",     "type" ) ; // ��� ���� 
define ( "MY_TAGS_NAME",     "name" ) ; // ��� ����( ������ ) 
define ( "MY_TAGS_EXTENDET", "ext"  ) ; // �������������� ��� ���� (��������)
define ( "MY_TAGS_TELO",     "tag"  ) ; // ��� ��� 
// Navigation Bars      
define ( "MY_TABLE_NAVIGATION",  "navigation_bar" ) ; // ������� ���������
define ( "MY_NAVIGATION_ID",     "id"             ) ; // ID
define ( "MY_NAVIGATION_ORDER",  "regime"         ) ; // ����������
define ( "MY_NAVIGATION_TYPE",   "type"           ) ; // ��� ������
define ( "MY_NAVIGATION_DIRECT", "direction"      ) ; // ���� 
define ( "MY_NAVIGATION_BUTTON", "button"         ) ; // ������
define ( "MY_NAVIGATION_HOVER",  "button_hover"   ) ; // ������ ��� ���������
define ( "MY_NAVIGATION_SCRIPT", "script"         ) ; // ������ ����
define ( "MY_NAVIGATION_ALT",    "text_alt"       ) ; // ����� ���� ��� ��������
define ( "MY_NAVIGATION_TITLE",  "text_title"     ) ; // ����
define ( "MY_NAVIGATION_TARGET", "target"         ) ; // ��� ������
define ( "MY_NAVIGATION_NAME",   "name"           ) ; // ��� ������
define ( "MY_NAVIGATION_TID",    "id_type"        ) ; // ���������� ���� ��� ���� ������ 
define ( "MY_NAVIGATION_STYLE",  "style"          ) ; // ����� css
define ( "MY_NAVIGATION_W",      "width"          ) ; // ������
define ( "MY_NAVIGATION_H",      "heigth"         ) ; // ������
//������� ��������� ������
define ( "MY_TABLE_PS",  "payment_operator" ) ;
define ( "MY_ID",        "id"               ) ;
define ( "MY_PS_PS",     "paysys"           ) ;
define ( "MY_PS_STATUS", "status"           ) ;
define ( "MY_PS_SITE",   "siteps"           ) ;
define ( "MY_PS_LOGO",   "logops"           ) ;
define ( "MY_PS_PAY",    "payps"            ) ;
define ( "MY_PS_DESC",   "description"      ) ;
define ( "MY_PS_PROC",   "perc"             ) ;
define ( "MY_PS_RATE",   "rates"            ) ;
define ( "MY_PS_BULK",   "bulk"             ) ;
define ( "MY_PS_MAXLEN", "maxlength"        ) ;
define ( "MY_PS_TIT",    "titl"             ) ;
define ( "MY_PS_REMARK", "remark"           ) ;
define ( "MY_PS_NOTICE", "notice"           ) ;

#=================sis=================================================
define ( "S_INPUT_WALET", "����� Z ��������" ) ;// ����� ���� ���������� ������ 
define ( "S_INPUT_SUMM",  "������� �����"    ) ;// ����� ���� ����� ������ 
define ( "S_INPUT_WIDRW", "USD"              ) ;// ����� ������������ ����� 
define ( "S_INPUT_DEMO",  "FUN"              ) ;// ����� ������������ ����� 
define ( "S_USER_DEMO_NAME",    "Visitor"    ) ;// ��� ���� �����                                      
define ( "S_USER_DEMO_BALANCE", "1000"       ) ;// ��������� ������ ���� �����                                      
define ( "S_ADM_OPERATION", "operator"       ) ;// �������� ������� - �������������                                      

define ( "MY_USER_DEMO",    "Visitor"        ) ;// ��� ���� �����  - debricade                                      

define ( "P_PASS_LENGTH", 16                 ) ;// ����� ���� ������                                     
define ( "P_PASS_SIMBOL", "^0-9a-zA-Z@_.-"   ) ;// ���������� ������� � ���� ������                                     
define ( "IPVRF", "http://www.ip-ping.ru/ipinfo/?ipinfo=") ; // ����� �������� IP


$length = 16 ;

/* ������� ��������� 
pus  user  data  usd 
*/
/* ������� ��� ������ � �������� _my_...........*/
function _my_conveter_dat_user ( $play=false ) // ��������� ���� ��� ������
 {
             //  ��� ������� ������� 
             ############# ��� ��������� ���� ����� ��������� ###########################################
             /*##*/  // ������������ ��� ������������� ��������� ������ �������
             /*##*/  $result = mysql_query ( "select * from ".MY_TABLE_PLAYERS ." ORDER BY `".MY_USER_NUMID ."`" ) ;
             /*##*/  //$result = mysql_query ( "select * from ".$table ." ORDER BY `".MY_USER_NUMID ."`" ) ;
             /*##*/  while ( $row = mysql_fetch_array ( $result ) )
             /*##*/  preg_match ( "|([0-9]{1,2}).([0-9]{1,2}).([0-9]{2})|i", $row[MY_USER_DATE], $regs ) ;
             /*##*/  // preg_match ( "|([0-9]{2}):([0-9]{2}):([0-9]{2})|i", $last_ent[1], $regs1 ) ;
             /*##*/  $timestamp = strtotime ( $regs[3]."-".$regs[2]."-".$regs[1]." ".date("H:i:s") ) ;
             /*##*/  //if ( isset ( $_POST['datecurent'] ) ) $timestamp = time () ;
             /*##*/  //if ( $timestamp == true ) $set = MY_NEWS_TIME ."='". $timestamp ."', " ;
             /*##*/ unset ( $regs ) ;
             /*##*/ if ( $timestamp == true ) //$last_ent[0]  MY_USER_DATE
             /*##*/  {
             /*##*/    if ( $play == true ) mysql_query("UPDATE ".MY_TABLE_PLAYERS." SET ".MY_USER_DATE."='".$timestamp  ."' WHERE ".MY_USER_USERS."='".$row[MY_USER_USERS]."'");
             /*##*/   echo '$timestamp='.$timestamp."����= $regs[1].$regs[2].$regs[3]"."strftime=".strftime('%e.%m.%Y %T', $timestamp )." IP=".$last_ent[2] ."<br/>";
             /*##*/  }        
             ######## // ��������� ##################################################################
 
 }
function _my_conveter_dat_game ( $play=false ) // ��������� ���� ��� ���������� ����
 {           //MY_STATGAME_DATA
             //MY_STATGAME_TIME
             ############# ��� ��������� ���� ����� ��������� ###########################################
             /*##*/  // ��� ������������� ���������� ��������� ������ �������
             /*##*/  $result = mysql_query ( "select * from ".MY_TABLE_STATGAME ." ORDER BY `".MY_STATGAME_ID ."`" ) ;
             /*##*/  //$result = mysql_query ( "select * from ".$table ." ORDER BY `".MY_USER_NUMID ."`" ) ;
             /*##*/  while ( $row = mysql_fetch_array ( $result ) )
             /*##*/  {
             /*##*/   preg_match ( "|([0-9]{1,2}).([0-9]{1,2}).([0-9]{2})|i", $row[MY_STATGAME_DATA], $regs ) ;
             /*##*/   // preg_match ( "|([0-9]{2}):([0-9]{2}):([0-9]{2})|i", $last_ent[1], $regs1 ) ;
             /*##*/   $timestamp = strtotime ( $regs[3]."-".$regs[2]."-".$regs[1]." ".$row[MY_STATGAME_TIME] ) ;
             /*##*/   //if ( isset ( $_POST['datecurent'] ) ) $timestamp = time () ;
             /*##*/   //if ( $timestamp == true ) $set = MY_NEWS_TIME ."='". $timestamp ."', " ;
             /*##*/  
             /*##*/   if ( $timestamp == true ) //$last_ent[0]  MY_USER_DATE
             /*##*/    {
             /*##*/     if ( $play == true ) mysql_query("UPDATE ".MY_TABLE_STATGAME." SET ".MY_STATGAME_DATA."='".$timestamp  ."' WHERE ".MY_STATGAME_ID."='".$row[MY_STATGAME_ID]."'");
             /*##*/     echo $c++.' $timestamp='.$timestamp."����= $regs[1].$regs[2].$regs[3]"."strftime=".strftime('%e.%m.%Y %T', $timestamp )." IP=".$last_ent[2] ."<br/>";
             /*##*/    }
             /*##*/      unset ( $regs ) ;       
             /*##*/   }       
             ######## // ��������� ##################################################################
 
 }
function _my_count_rows ( $name ) // ��������� 
 {
     return mysql_num_rows ( mysql_query ( "SELECT * FROM ".$name ) ) ;
 }

function _my_navigation_bar ( $bar=false , $condition=false, $limit=false ) // ��������� 
 { 
   //if ( $bar == false and $condition == false and $limit == false) 
   if ( $bar == false ) 
    {
     if ( $limit != false ) $limit =  " LIMIT ".$limit  ;//1 = ��������� ������� , 2 = ����� ���������
     $trig =   MY_NAVIGATION_ORDER .$condition." ORDER BY ".MY_NAVIGATION_ID.", ".MY_NAVIGATION_ORDER." ASC ".$limit ;
    
    }
   else 
    {
       $trig =  MY_NAVIGATION_ORDER .$condition." AND ".MY_NAVIGATION_TYPE ."='".$bar ."' ORDER BY ".MY_NAVIGATION_ORDER." ASC" ;
     
    }
   static $resset = "1" ;
   static $result = false ;
   if ( $bar != $resset ) 
    {
     $result = mysql_query ( "SELECT * FROM ".MY_TABLE_NAVIGATION ." WHERE ". $trig ) ;
     $resset = $bar ;
    }
   return mysql_fetch_assoc ( $result ) ; 
   //$sort ORDER BY id ASC 
   // ����� = ASC,
   // � ��� = DESC"// ���������� ��������
   //$condition = ">0"  ;//������� �������
   //$limit = 8 ;// ����� �������
   //$table =  'top_user';       
   //$bar =  'top_user'; // ������      
 }
function _my_subscription_db ( $play=false ) // �������� ��������, ��������� ���� �������� �� ������ �������������
 {          
   $c = 0 ;
   $mylo[$c] = '' ;
   $result = mysql_query ( "SELECT * FROM ".MY_TABLE_PLAYERS ." WHERE " .MY_USER_NUMID ) ;
   while ( $row = mysql_fetch_assoc ( $result ) )
    {
     if ( !in_array( $row[MY_USER_EMAIL], $mylo ) ) if ( $play == true ) mysql_query ( "INSERT INTO ". MY_TABLE_SUBSCRIPTION ." VALUES ( NULL,'".$row[MY_USER_EMAIL]."', '1000000111','".$row[MY_USER_NUMID]."','�������� �� ����, ������� �� ��' )" ) ;
     $mylo[$c++] = $row[MY_USER_EMAIL] ;
    }       
 }
function mode ( $game, $tm, $type='on' ) // ���������� �����������
 {
   //$c = 0 ;
   $i = 0 ;
   $a = array("0001","0002","0004","0010","0020","0040","0100","0200","0400","1000","2000","4000","1001","1002","1004","1010","1020","1040","A001","A002","A003","A004");
   if ( $type == "on" ) $off = "off" ;
   else $off = false ;
   foreach ( $a as $k ) $mode[$k] = $off ; 
   for ( $c = 1 ; $c <= 6; $c++ ) 
    { 
     if ( $tm['m'.$c] == 1 or $tm['m'.$c] == 3 or $tm['m'.$c] == 5 or $tm['m'.$c] == 7 ) : $mode[$a[$i++]] = $type ; $mode['A00'.$c] = 0; else : $i++; endif;
     if ( $tm['m'.$c] == 2 or $tm['m'.$c] == 3 or $tm['m'.$c] == 6 or $tm['m'.$c] == 7 ) : $mode[$a[$i++]] = $type ; $mode['A00'.$c] = 3; else : $i++; endif;
     if ( $tm['m'.$c] == 4 or $tm['m'.$c] == 5 or $tm['m'.$c] == 6 or $tm['m'.$c] == 7 ) : $mode[$a[$i++]] = $type ; $mode['A00'.$c] = 6; else : $i++; endif;
    }
/*    
   $mode['0001'] ����� ����
   $mode['0002'] 9 ����� ����
   $mode['0004'] �������� ����
   $mode['0010'] �������� � ���� ���
   $mode['0020'] 1000000034 ������������� ����������
   $mode['0040']  ���� ON �� ����� � �������
   $mode['0100']  // ���� ON �� ����� + ����� ������ - 
   //Copyright "NiKA" sz-tashtagol.ru 
*/
 return $mode ;
 }

function pager ( $amount, $pageslot, $slotlistid, $table, $search, $element, $true, $sort = false ) // ����������� ����, ������ ������, � ��.
 { 
   $row = array () ; 
   $amount = 10 ; //������� ���������� ������� �����������
   //$element = DOMAINNAME.LNG."?action=games&gamelistid=" ;
   //$pageslot= 12 ; // ���-�� ������ ������������ �� ��������
   //$slotlistid = 1 ;// ������� ��������
   //$table = MY_TABLE_SLOTLIST ;// ��� ����
   //$search = MY_SLOTLIST_RUN .">0" ;//������ � ������� ������(�������)
   //$sort ORDER BY id  ASC"// ���������� ��������
   $strocall = mysql_num_rows ( mysql_query ( "SELECT * FROM ". $table ." WHERE ".$search ) ); //��������� ����� ������� 
   $allpages =  ceil( $strocall / $pageslot ) ;//������� ������� �����
   if ( $slotlistid > $allpages or $slotlistid < 1 )$slotlistid = 1 ;
   $limit =  ( $slotlistid * $pageslot ) - $pageslot ;
   if ( !isset( $element ) or isset( $true ) )
    { 
     $c = 0 ; 
     if ( $sort == true ) $sort = " ORDER BY ".$sort ." " ;  
     $res = mysql_query ( "SELECT * FROM ".$table ." WHERE ".$search .$sort ." LIMIT ". $limit.", ".$pageslot ) ;// ������ ���������� �������,����������, �������� �����
     while ( $row[$c++] = mysql_fetch_assoc ( $res ) ) ;
    }
   if( isset( $element ) )
    {  
     $block =  ceil( $slotlistid  / 10 )-1 ;// ������� � ��� ������ 
     $c = ( $block * $amount );
     $el = false ; //"\n" ;
     $left = $c - 1 ;// ��������� "������" ��������
     if ( $allpages > 100 ) echo '<a href="'.$element.'1'.'">&lt;&lt; </a>'.$el ; 
     echo '<a href="'.$element ; 
     if ( $slotlistid > 1 and $left > 0 ) echo $left ;// ��������� �� ����� �� "������" ���.
     else echo "1" ; // ���� ����� �� ������� 1 (���� ����� �������������� ����� �� ������-����� ������ ����, �� ��� �� ������)
     echo'">&laquo;</a>'.$el ; 
     $stoplist =  ( $block * $amount ) + $amount ;
     while ( /*$allpages-- > 0 */ true) 
      { 
        ++$c ;
       echo '<a href="'.$element.$c.'"' ;
       if ( $c == $slotlistid ) echo 'class="selected"';
       echo '>'.$c.'</a>'.$el ;
       if ( $c >= $stoplist or $c >= $allpages ) break ;
      }
     echo '<a href="'.$element ; 
     if ( $slotlistid < $c and $stoplist < $allpages ) echo $c+1 ; //( $slotlistid + 1 );
     elseif ( $stoplist < $allpages ) echo $c + 1;
     else echo $c ;
     echo '">&raquo;</a>'.$el ;
     if ( $allpages > 100 ) echo '<a href="'.$element.$allpages.'"> &gt;&gt; </a>'.$el ; 
    }
  return $row ;
 }
function _my_stat_partner ( ) // ���������� ���������, ��� ��������
 {
   $res[0] = mysql_num_rows ( mysql_query ( "SELECT * FROM ".MY_TABLE_PARTNER ." WHERE ".MY_PARTNER_PARTN ."='".$_SESSION['l']."'" ) ) ;// ���-�� ������������
   $res[1] = mysql_num_rows ( mysql_query ( "SELECT * FROM ".MY_TABLE_PARTNER ." WHERE usd>0 and ".MY_PARTNER_PARTN ."='".$_SESSION['l']."'" ) ) ;// ���-�� �����������(��������)
   $res[2] = round ( mysql_result ( mysql_query ( "SELECT SUM(usd) FROM ".MY_TABLE_PARTNER ." WHERE usd>0 and ".MY_PARTNER_PARTN ."='".$_SESSION['l']."'" ),0,0 ),2 );// ����������� �����
   $res[3] = round ( mysql_result ( mysql_query ( "SELECT ".MY_USER_CPS." FROM ".MY_TABLE_PLAYERS ." WHERE ".MY_USER_USERS ."='".$_SESSION['l']."'" ),0,MY_USER_CPS ),2 ) ;  // ����������� �����        
   return $res ;
 }


function _my_user_stat_pay ( $login, $amount, $start )// ���������� �������� ����� !!! � ���������� ����� ���������� �� ������������, � ������� ������ �� "������" 
 { 
   $res = mysql_query ( "SELECT * FROM ".MY_TABLE_STATPAY." WHERE ".MY_STATPAY_USER."='".$login."' LIMIT ". $amount.", ".$start ) ;// 
   $c = 0 ; 
   while ( $row[$c++] = mysql_fetch_assoc ( $res ) ) ;
   $row[$c]['count'] = mysql_num_rows ( mysql_query ( "SELECT * FROM ". MY_TABLE_STATPAY ." WHERE ".MY_STATPAY_USER."='".$login."' " ) );
   return $row ;
 }


function _my_game_set ( $game ) // ������� ���������� ����� ����������� 
 {
   return mysql_fetch_assoc(mysql_query( "SELECT *, substring(cast(".MY_BANK_MODE." as char),10,1) as m1, substring(cast(".MY_BANK_MODE." as char),9,1) as m2, substring(cast(".MY_BANK_MODE." as char),8,1) as m3, substring(cast(".MY_BANK_MODE." as char),7,1) as m4, substring(cast(".MY_BANK_MODE." as char),6,1) as m5, substring(cast(".MY_BANK_MODE." as char),5,1) as m6 FROM `".MY_TABLE_BANK."` WHERE ".MY_BANK_NAME." = '".$game."' " ) ) ;
 }
 
 
function _my_subscription ( $set, $param = 0, $data = '' ) // �������� �������� ��������/�������, ������
 {  // param 0 - �������, 1- ���.���������, 9-��������� ������
  if ( 0 == $param ) return mysql_fetch_assoc ( mysql_query ( "SELECT ".$data ." substring(cast(".MY_SUBSCRIPTION_STATUS." as char),10,1) as m1, substring(cast(".MY_SUBSCRIPTION_STATUS." as char),9,1) as m2, substring(cast(".MY_SUBSCRIPTION_STATUS." as char),8,1) as m3, substring(cast(".MY_SUBSCRIPTION_STATUS." as char),7,1) as m4 FROM `".MY_TABLE_SUBSCRIPTION."` WHERE ".MY_SUBSCRIPTION_EMAIL."='".$set[/*MY_SUBSCRIPTION_ID*/'email']."' " ) ) ;
  if ( 0 >  $param ) return mysql_fetch_assoc ( mysql_query ( "SELECT ".MY_SUBSCRIPTION_INFO ." FROM ".MY_TABLE_SUBSCRIPTION . " WHERE ".MY_SUBSCRIPTION_EMAIL."='".$set[MY_SUBSCRIPTION_ID]."' " ) ) ;
  if ( 0 <  $param )
   {
     if ( $param == 9 ) $trigger = MY_SUBSCRIPTION_INFO."='".$data."' " ;
     else $trigger = MY_SUBSCRIPTION_STATUS."='". ( $param + 1000000000)."'" ;//$status = $param + 1000000000 ;
     mysql_query ( "UPDATE ".MY_TABLE_SUBSCRIPTION." SET ".$trigger ." WHERE ".MY_SUBSCRIPTION_ID."='".$set[MY_USER_NUMID]."' " ) ;
   }
/*
define ( "MY_TABLE_SUBSCRIPTION", "subscription" ) ; // ������� ��������
define ( "MY_SUBSCRIPTION_ID",        "id"       ) ; // id c��������
define ( "MY_SUBSCRIPTION_INFO", "questionnaire" ) ; // id c��������
define ( "MY_SUBSCRIPTION_EMAIL",     "email"    ) ; // ���� 
define ( "MY_SUBSCRIPTION_STATUS",    "status"   ) ; // ������
define ( "MY_SUBSCRIPTION_UID",       "uid"      ) ; // id ������ �����
define ( "MY_SUBSCRIPTION_NOTE",      "note"     ) ; // ����������
*/


 }
function _my_subscriptionget ( $set ) //  ������
 {
  return mysql_fetch_assoc ( mysql_query ( "SELECT ".MY_SUBSCRIPTION_INFO ." FROM ".MY_TABLE_SUBSCRIPTION . " WHERE ".MY_SUBSCRIPTION_EMAIL."='".$set[MY_SUBSCRIPTION_ID]."' " ) ) ;
 } 

function _my_news ( $amount, $start, $admin = 1 ) // ����������� �������
 { 
   $c = 0 ;
   $res = mysql_query ( "SELECT * FROM ".MY_TABLE_NEWS." WHERE ".MY_NEWS_STATUS.">".$admin ."  ORDER BY ". MY_NEWS_TIME ." DESC LIMIT ". $amount.", ".$start ) ;
   while ( $row[$c++] = mysql_fetch_assoc ( $res ) ) ;
   if ( $start < 1 )$row[$c]['count'] = mysql_num_rows ( mysql_query ( "SELECT ".MY_NEWS_ID." FROM ". MY_TABLE_NEWS ." WHERE ".MY_NEWS_STATUS.">".$admin  ) );
   else  array_pop ( $row ) ;// ������� ����.������ �������
   return  $row ;
 }


function _my_stat_adm ( )// ��������� ���������� ����� � �������
 { 
   mysql_query ( "INSERT INTO ". MY_TABLE_STATADM ." VALUES ( NULL,'".$_SERVER['REMOTE_ADDR']."', '".time ( ) ."' )" ) ;
 }


function _my_slotlist_setting ( $id ) // ����������� ��������� ����-�����
 {
  return mysql_fetch_assoc ( mysql_query ( "SELECT * FROM ".MY_TABLE_SLOTLISTSET." WHERE ".MY_SLOTLISTSET_ID."='".$id."'" ) );
 }

function _my_slotlist ( $amount, $start ) // ����������� ������ ������
 { 
   $c = 0 ;
   $res = mysql_query ( "SELECT * FROM ".MY_TABLE_SLOTLIST." WHERE ".MY_SLOTLIST_RUN.">0 LIMIT ". $amount.", ".$start ) ;// ������ ���������� �������, ������ �������� �����
   while ( $row[$c++] = mysql_fetch_assoc ( $res ) ) ;
  return $row ;
 }
 
 
 
function _my_alert_mess ( $alert, $param = false )// ������� ��������� 
 {
   $row = mysql_fetch_assoc ( mysql_query ( "SELECT * FROM ".MY_TABLE_ALERT." WHERE ".MY_ALERT_ID."='".$alert."' " ) );
   if ( $param == true ) return $row ;
   else return $row[MY_ALERT_MESS] ;
   
 }
 
function _my_check_coincidence ( $login, $email )// �������� ������������ ������ 
 { 
   $set = mysql_fetch_assoc ( mysql_query ( "SELECT ".MY_USER_USERS.", ".MY_USER_EMAIL ." FROM ".MY_TABLE_PLAYERS." WHERE ".MY_USER_USERS."='".$login."' OR ".MY_USER_EMAIL."='".$email."'" ) );
   if ( $set == false ) 
    {
      $text = strtolower ( _my_alert_mess ( 'inadmissible_nam' ) ) ;//�������� ����������� �����
      $array = explode ( ',', $text ) ;
      if ( in_array ( strtolower ( $login ), $array ) ) $set[MY_USER_USERS] = $login ;   
    }
   return $set ;
 }


function _my_selected ( $login )// ����������� ���� �����
 {
  return mysql_fetch_assoc ( mysql_query ( "SELECT * FROM ".MY_TABLE_PLAYERS." WHERE ".MY_USER_USERS."='".$login."'" ) );
  //return $set ;
 }

function _my_settings ( )//������� �������� �������
 {
  return mysql_fetch_array ( mysql_query ( "SELECT * FROM ".MY_TABLE_SETTINGS ) );
  //return $set ;
 }		


function _my_num_pay ( )// ������� ������������ ID �� ���� ��������
 {
    return mysql_result (mysql_query ( "SELECT  max(".MY_STATPAY_ID.") FROM ".MY_TABLE_STATPAY ) , 0, 0 ) ;
 }
 
function _my_set_ip_user ( $login ) // ���������� IP � ����� �����
 {
    mysql_query( "UPDATE ".MY_TABLE_PLAYERS." SET ".MY_USER_MODE4."='".time ( )."|".$_SERVER['REMOTE_ADDR']."' WHERE ".MY_USER_USERS."='".$login."'" ) ; 
 }


/* ���������� ���� ����� */
function _my_private_add ( $login, $data, $xz )
 {
   mysql_query ( "UPDATE ".MY_TABLE_PLAYERS." SET ".MY_USER_PRIVATE."='".$data."' WHERE ".MY_USER_USERS."='".$login."'" ) ;
 }


/* ���� */
function _my_insert_reg ( $login, $pass, $e_mail, $insert_ref )
 {
   mysql_query( "INSERT INTO ".MY_TABLE_PLAYERS."( ".MY_USER_NUMID .", ".MY_USER_USERS .", ".MY_USER_PASS .", ".MY_USER_EMAIL .", ".MY_USER_DATE.",".MY_USER_REGIP .",". MY_USER_CPS_REF ." ) VALUES(NULL,'".$login."','".$pass."','".$e_mail."','".time ( ) ."','".$_SERVER['REMOTE_ADDR']."','".$insert_ref."' )" );// ��������� ������ �����
   $set = mysql_fetch_assoc ( mysql_query ( "SELECT ". MY_USER_NUMID ." FROM ". MY_TABLE_PLAYERS ." WHERE ".MY_USER_USERS ."='".$login ."'" ) ) ;
   mysql_query( "INSERT INTO ".MY_TABLE_SUBSCRIPTION."( ".MY_SUBSCRIPTION_ID .", ".MY_SUBSCRIPTION_EMAIL .", ".MY_SUBSCRIPTION_STATUS .", ".MY_SUBSCRIPTION_UID .", ".MY_SUBSCRIPTION_NOTE." ) VALUES(NULL,'".$e_mail."','1000000111','".$set[MY_USER_NUMID]."','".time ( ) ."' )" );// ��������� ���������� �-���� � ������ ��������
   if ( $insert_ref ) mysql_query ( "INSERT INTO ".MY_TABLE_PARTNER." VALUES ( '".$insert_ref."','".$login."','".time ( )."','0.00')" );// ������ ��������
   //�������� ������� ����
 }
 
function _my_insert_ref ($reffa, $login ) // ������ ��������
 { # ��������
   mysql_query ( "INSERT INTO ".MY_TABLE_PARTNER." VALUES ( '".$reffa."','".$login."','".date ( "d.m.y" )."','0.00')" );
 } 
// end reg
function _my_interface_options ( $set )//senduser
 {
  return mysql_fetch_array ( mysql_query ( "SELECT * FROM ".MY_TABLE_IOPTIONS." WHERE ".MY_IOPTIONS_MESS."='".$set."'" ) );
 }		

/* ���������� ������� */
function _my_pay ( $chips, $login, $operation, $summ, $type = false )
 {
   $trigout  = 0 ;
   $trigin = preg_replace ( "/[^0-9.]/", "",$chips) ; 
   if( 0 > $chips ) 
    {
     $type    = "out" ;
     $trigout  = preg_replace ( "/[^0-9.]/", "",$chips) ;     
     $trigin = 0 ;
    }
   else if ( $type == false )$type = "in" ;
   
   if ( $operation != S_ADM_OPERATION ) 
    { 
     $flag = "1"  ;
     $con = _my_settings ( ) ;
     $pcash  = $chips / 100 * $con[MY_SETTINGS_CPS] ; //��������� �����������
     if ( $con[MY_SETTINGS_CPS_ADD] == true ) $pbonus = $chips / 100 * $con[MY_SETTINGS_CPS_ADD] ; //��������� ����������� ��������������-�����
     else $pbonus = $chips / 100 * 30 ; //��������� ����������� ��������������-�����
     $set =  mysql_fetch_assoc ( mysql_query ( "SELECT * FROM ".MY_TABLE_PARTNER." WHERE ".MY_PARTNER_USER."='".$login."'" ) ) ;// ������� ����� �������� 
     mysql_query ( "UPDATE ".MY_TABLE_PARTNER." SET ".MY_PARTNER_CASH."=".MY_PARTNER_CASH."+'".$pcash."' WHERE ".MY_PARTNER_USER."='".$login."'" ) ;// ��������� �������� � ��������� 
     if ( 0 < $pcash ) mysql_query ( "UPDATE ".MY_TABLE_PLAYERS." SET ".MY_USER_CPS."=".MY_USER_CPS."+'".$pcash."' WHERE ".MY_USER_USERS."='".$set[MY_PARTNER_PARTN]."'"); // ��������� �������� �� ����� ����������� ����
    }
   else 
    {
     $pbonus = 0 ;
     $flag   = 0 ;
     $pcash  = 0 ; 
    }
   $usr = mysql_fetch_assoc ( mysql_query ( "SELECT ".MY_USER_CASH ." FROM ".MY_TABLE_PLAYERS." WHERE ".MY_USER_USERS."='".$login."'" ) ) ;// ����������� ����� �� ������� ������
   mysql_query ( "UPDATE ".MY_TABLE_PLAYERS." SET ".MY_USER_CASH."=".MY_USER_CASH."+'".$chips."', ".MY_USER_CASHIN."=".MY_USER_CASHIN."+'".$chips."', ".MY_USER_CPS_PROC."=".MY_USER_CPS_PROC."+'".$pcash."', ".MY_USER_CPS_ADD."=".MY_USER_CPS_ADD."+'".$pbonus."' WHERE ".MY_USER_USERS."='".$login."'" ) ;  // ��������� ����� �� ������ � ���������� ����� ����� ���������
   mysql_query ( "INSERT INTO ".MY_TABLE_STATPAY ." VALUES(NULL,'".$login."','".time ( ) ."','".preg_replace ( "/[^0-9.]/", "",$summ)."','".preg_replace ( "/[^0-9.]/", "",$chips)."','".$type."','".$operation."', '".$flag."')" ) ; // ��������� ��� ���� ������  � ������� ����������
   mysql_query ( "INSERT INTO ".MY_TABLE_STATGAME." VALUES(NULL,'".time ( )."','','".$login."','".$usr[MY_USER_CASH]."','".$trigout."','".$trigin."', '".$type."-".$operation."')" ) ; // ��������� ���������� � ���� ��� ������������� ����
 } 
#================================================
/* ����� �������*/

function _my_select_paysys ( $status, $ps = false )//������� ��������� ������ (� ���������)
 {
  static $res = false ;
  if ( $ps  == true )$trig = " AND ".MY_PS_PS ."='".$ps."' " ;
  else $trig = false ;
  if ( $res != true ) $res = mysql_query ( "SELECT * FROM ". MY_TABLE_PS ." WHERE ".MY_PS_STATUS .">='".$status."' ".$trig  ) ;
  return  mysql_fetch_assoc ( $res );
 }

function _my_select_order ( $login, $status )//�������  ������ �������� ��� ����� (� ���������)
 {
  static $res = false ;
  if ( $res != true ) $res = mysql_query ( "SELECT * FROM ". MY_TABLE_ORDER ." WHERE ". MY_ORDER_USER ."='".$login."' AND ".MY_ORDER_FLAG.">'".$status."' " ) ;
  return  mysql_fetch_assoc ( $res );
 }

function _my_withdraw ( $sumout, $login )//withdraw 
 {
   mysql_query("UPDATE ".MY_TABLE_PLAYERS." SET ".MY_USER_CASH."=".MY_USER_CASH."-'".$sumout."', ".MY_USER_CASHOUT."=".MY_USER_CASHOUT."+'".$sumout."' WHERE ".MY_USER_USERS."='".$login."'");
 }


function _my_order ( $login, $cash, $wherepay, $outsumm, $status  )// ������ �������� 
 {
   // mysql_query("INSERT INTO ".MY_TABLE_ORDER." VALUES(NULL,'".$login."','".$cash."','".$wherepay."','".$outsumm."','".$status."')");
   //if ( $status == "1")
   // {
      //$datein  = date ( "d.m.y" ) ; 
      //$datein .= date ( "H:i:s" ) ; 
      $dateout = "�� ����������" ; 
   // }
   //else
     
   //mysql_query("INSERT INTO ".MY_TABLE_ORDER." VALUES(NULL,'".$login."','".$cash."','".$wherepay."','".$outsumm."','".date ( "d.m.y" )." / ".date ( "H:i:s" )."','".$status."','".$dateout."')");
   mysql_query("INSERT INTO ".MY_TABLE_ORDER." VALUES(NULL,'".$login."','".$cash."','".$wherepay."','".$outsumm."','".$outsumm."','".time ( )."','".$status."','".$dateout."')");
 }
 
/* ����� �������*/
function _my_withdraw_all ( $login, $cash, $outsumm, $paysum, $wherepay, $appointment  )//withdraw // MY_ORDER_APPO
 {     //                   �����|    | ���������|  �����  | ���������|   ���������|
       //                     ����� ��|     �����| ��������| ���������|     �������|
   $status = "1" ;//$appointment = ������������ ��� ���������� �������, ��� ������ ������� ���������� �� �\� �� ������� ��� ������ �����
   $dateout = "�� ����������" ; 
   $usr =  mysql_fetch_assoc ( mysql_query ( "SELECT ".MY_USER_CASH ." FROM ".MY_TABLE_PLAYERS." WHERE ".MY_USER_USERS."='".$login."'" ) ) ;// ����������� ����� �� ������� ������
   mysql_query ( "UPDATE ".MY_TABLE_PLAYERS." SET ".MY_USER_CASH."=".MY_USER_CASH."-'".$outsumm."', ".MY_USER_CASHOUT."=".MY_USER_CASHOUT."+'".$outsumm."' WHERE ".MY_USER_USERS."='".$login."'");
   mysql_query ( "INSERT INTO ".MY_TABLE_ORDER." VALUES ( NULL,'".$login."','".$cash."','".$wherepay."','".$outsumm."','".$paysum."','".$appointment."','".time ( )."','".$status."','".$dateout."' ) " ) ;
   mysql_query ( "INSERT INTO ".MY_TABLE_STATGAME." VALUES(NULL,'".time ( )."','','".$login."','".$usr[MY_USER_CASH]."','".$outsumm."','0', 'out-".$appointment."')" ) ; // ��������� ���������� � ���� ��� ������������� ����
   //_my_stat_pay_m ( $login, $paysum, $outsumm, 'out', $wherepay, $status ) ;
   mysql_query ( "INSERT INTO ".MY_TABLE_STATPAY." VALUES(NULL,'".$login."','".time ( ) ."','".$paysum."','".$outsumm."','out','".$wherepay."', '".$status."')" ) ;// ������ ���������� ��������
   //_my_stat_pay_m ( $login, $summ, $chip, $type, $systempay, $flag )// ������ ���������� ��������

 }
 
 
 
 
 
 
 
 
/* ������������� ������ */
function _my_forgotten ( $login, $oldpass, $newpass, $key, $flag  )// ������������ ������ 
 {
   mysql_query("INSERT INTO ".MY_TABLE_FORGOT." VALUES(NULL,'".$login."','".$oldpass."','".time()."','".$newpass."','".$key."', '".$flag ."')");
 }

function _my_select_forgotten ( $login, $key, $flag )// ����������� ���� ����� �� ���� ������������� ������
 {
   if ( $login <> "" and $key  == "" and $flag <> "" ) $set = mysql_fetch_array ( mysql_query ( "SELECT * FROM ".MY_TABLE_FORGOT." WHERE ".MY_FORGOT_USER."='".$login."' AND  ".MY_FORGOT_FLAG."='".$flag."'" ) );
   if ( $login == "" and $key  <> "" and $flag == "" ) $set = mysql_fetch_array ( mysql_query ( "SELECT * FROM ".MY_TABLE_FORGOT." WHERE ".MY_FORGOT_KEY. "='".$key."'" ) );
   if ( $login <> "" and $key  <> "" and $flag == "" ) $set = mysql_fetch_array ( mysql_query ( "SELECT * FROM ".MY_TABLE_FORGOT." WHERE ".MY_FORGOT_USER."='".$login."' AND ".MY_FORGOT_COD. "='".$key."'"   ) );
   return $set ;
 }
// ����� ������� 
function _my_select_forgotten_d ( $id, $login, $key, $flag )// ����������� ���� �� ���� ������������� ������
 {
   if ( $login <> "" and $key  == "" and $flag <> "" ) return mysql_fetch_array ( mysql_query ( "SELECT * FROM ".MY_TABLE_FORGOT." WHERE ".MY_FORGOT_USER."='".$login."' AND  ".MY_FORGOT_FLAG."='".$flag."' AND ".MY_FORGOT_ID."='".$id."'" ) );// ���� ������� ��������� �� ������ ����� � � ������ "1" �� �������� ����� ���������
   if ( $login == "" and $key  <> "" and $flag == "" ) return mysql_fetch_array ( mysql_query ( "SELECT * FROM ".MY_TABLE_FORGOT." WHERE ".MY_FORGOT_KEY. "='".$key."'" ) );
   if ( $login <> "" and $key  <> "" and $flag == "" ) return mysql_fetch_array ( mysql_query ( "SELECT * FROM ".MY_TABLE_FORGOT." WHERE ".MY_FORGOT_USER."='".$login."' AND ".MY_FORGOT_COD. "='".$key."'"   ) );
   //return $set ;
 }


function _my_del_flag_forgotten ( $flag, $key )// ������� ���� ���� ������ ��������� 
 {
   mysql_query("UPDATE ".MY_TABLE_FORGOT." SET ".MY_FORGOT_FLAG."='".$flag."' WHERE ".MY_FORGOT_KEY."='".$key."'");
 }

function _my_newpass_forgotten ( $newpass, $login )// ������� ���� ���� ������ ��������� 
 {
   mysql_query("UPDATE ".MY_TABLE_PLAYERS." SET ".MY_USER_PASS."='".$newpass."' WHERE ".MY_USER_USERS."='".$login."'");
 }
function _my_id_forgotten ( $login )
 {  
   $set = mysql_result (mysql_query ( "SELECT  max(".MY_FORGOT_ID.") FROM  ".MY_TABLE_FORGOT." WHERE ".MY_FORGOT_USER."='".$login."'" ) , 0, 0 ) ;
   return $set ;
 }
 
# end ������������� ������ 

function _my_messages ( $theme, $login=false, $email, $message, $status, $reply=false )// �������� �����, ���������
 {  
   if ( $login == false and isset ( $_SESSION['l'] ) ) $login =  $_SESSION['l'] ;
   elseif ( $login == false and isset ( $_SESSION['v']['name'] ) ) $login =  $_SESSION['v']['name'] ;
   elseif ( $login == false )$login = "Guest" ;
   //echo "<pre>\n".$message ;
   $bring = mysql_escape_string ( stripslashes ( trim ( $message ) ) ) ;
   mysql_query ( "INSERT INTO ". MY_TABLE_MESSAGES ." VALUES ( NULL,'".time() ."', '".$theme."','".$login."','".$email."','".$bring."','".$status."','".$reply."' )" ) ;
/*

// messages      
define ( "MY_TABLE_MESSAGES",  "messages" ) ; // ������� ���������
define ( "MY_MESSAGES_ID",     "id"       ) ; // id 
define ( "MY_MESSAGES_DATE", "timestamp"  ) ; // ���� ����� 
define ( "MY_MESSAGES_THEME",  "theme"    ) ; // ���� ���������  
define ( "MY_MESSAGES_USER",   "user"     ) ; // ����� 
define ( "MY_MESSAGES_MAIL",   "email"    ) ; // ����� ��� ������
define ( "MY_MESSAGES_MESS",   "message"  ) ; // ���� ���������
define ( "MY_MESSAGES_STATUS", "status"   ) ; // ������ 
960 906 46 22  32446 ���������

*/ 
 
 
 }
////////////////////////////////////////////////////

function _user_mem ( $login, $e_mail ) //���������� ���� (��� ����)
 {
  // global $login , $e_mail ;
   $_SESSION['login'] = $login   ;
   $_SESSION['e_mail'] = $e_mail ;
 }

function _user_unset ( $act ) //������� ���� �� �����
 { 
   if ( $act == "rega" or $act == "reg" )// ������� ���� �� �����  (����� ������� ����)
    {
      unset ( $_SESSION['login']  ) ;
      unset ( $_SESSION['e_mail'] ) ;
      unset ( $_SESSION['capcha'] ) ;
    }
   if ( $act == "reg" ) unset ( $_SESSION['rega'])  ; // ������� ���� �� �����  � ��� ����� �� �����
 }
/* ��������� �������*/
function passgen ( )
 { 
   $length = P_PASS_LENGTH ;                  // ������ ������ ������
   $gen_massiv� = range('"','z' ) ;           // ������� ������� �� �������� �� ������� " �� ������� z 
   srand( ( double ) microtime( ) * 1000000 ); 
   shuffle ( $gen_massiv� );                  // ������������ ������
   $gen_massiv� = implode ($gen_massiv�);     // ��������� ����� � ������ 
   $gen_massiv� = preg_replace ( "/[".P_PASS_SIMBOL."]/",    '', $gen_massiv�  ) ; // ��������� ������� ������� ����� ������������ � �������� ������ 
   $gen_massiv� = substr($gen_massiv�,0,$length) ; // �������� ������ �� ���a�a�� ���-�� ��������
   return $gen_massiv� ;
 }
function exchange_rate () // ����� ����� 
 {
   $settings = _my_settings ( ) ;
   //$exchange_rate = explode ( "|", $settings[MY_SETTINGS_EXCHRATE] ) ;
   //$exchange_rate� =  implode ("&",$exchange_rate);// ��������� ����� ����� � ������ � ������������ "&" //parse_str ($result);
   //$exchange_rate� =  $settings[MY_SETTINGS_EXCHRATE] ;// ��������� ����� ����� � ������ � ������������ "&" //parse_str ($result);
   //return $exchange_rate� ;//wmr=0.00&wmz=1.00&wme=1.32&wmu=0.13&wmb=0.00&wmy=0.00&wmg=0.00&
   return $settings[MY_SETTINGS_EXCHRATE] ;//wmr=0.00&wmz=1.00&wme=1.32&wmu=0.13&wmb=0.00&wmy=0.00&wmg=0.00&
 }
function mode_switch ( $loc ) // mode ������������� ������
 {
  if ( isset ( $_SESSION['l'] ) ) 
   {
    $l = $_SESSION['l'] ;
    if ( isset ( $_POST['mode'] ) ) 
     {
      $mode = preg_replace ("/[^0-9A-Za-z-_]/", "", $_POST['mode'] ) ;  
      if ( $mode == "REAL" ) 
       {
         $_SESSION['gamemode'] = "real" ;
         $fun = $_SESSION['f'] ;
         session_destroy ( )   ;
         session_start ( )     ;
         $_SESSION['l'] = $l   ;
         $_SESSION['f'] = $fun ;
       }
      else $_SESSION['gamemode'] = "fun" ;
     }
    else $_SESSION['gamemode'] = "fun" ;
    if ( $_SESSION['gamemode'] == "fun" ) //������������� ������ ���� �� "�������"
     {
       $fun = $_SESSION['f'] ;
       session_destroy ( )   ;
       session_start ( )     ;
       $_SESSION['l'] = $l   ;
       $_SESSION['gamemode'] = "fun" ;
       $_SESSION['f'] = $fun ;
     } 
   }
  elseif ( isset ( $_SESSION['v'] ) ) $l = $_SESSION['v']['name'] ;//"Visitor" ;
  else die( header( "Location: /?action=login" ) ) ;
  ############ end 
 }  
 
function urlref ( $url ) // ������� ���� ��� ����
 {
   $row = mysql_fetch_assoc ( mysql_query ( "SELECT * FROM ".MY_TABLE_WEBMASTER." WHERE ".MY_WEBMASTER_URL."='".$url."' " ) ) ;// ������ ���������� �������, ������ �������� �����
   return $row ; 
  } 
function urllist ( $login ) // ������ �������
 {
   $res = mysql_query ( "SELECT * FROM ".MY_TABLE_WEBMASTER." WHERE ".MY_WEBMASTER_USER."='".$login."' " ) ;// ������ ���������� �������, ������ �������� �����
   $c = 0 ; 
   while ( $row[$c++] = mysql_fetch_assoc ( $res ) ) ;
   return $row ; // \\192.168.12.196
  } 
  
function urlchecker ( $str ) // ������ �����
 {
   $error = 0 ;
   $host = '' ;
   $url = preg_replace ( "/[^0-9A-Za-z.\-_]/", '',str_replace ( 'http:', '', preg_replace ( "/[^0-9A-Za-z.\-_:]/", '', $str ) ) ) ; // �������� ������ �������, ������ http:, ����� �������� : - �� ����.������
   if ( isset ( $_SESSION['checkurl'] ) ) 
    {
     if ( $_SESSION['checkurl'] == true ) $url = $_SESSION['checkurl'] ;
    }
   if ( $url == false ) $error = "2" ; // ���� �� ����� ���� ������
   
   $parse_url = parse_url( "http://".$url."/" ) ;                                              // ��������� ����� �� ������, ������� ����� ��������� ����, ���� � ������ ����������.
   if ( isset ( $parse_url["path"]  ) ) $path  = $parse_url["path"]        ;else $path = '' ; // ���� �� �����(/patch/file.php)
   if ( isset ( $parse_url["query"] ) ) $path .= "?" . $parse_url["query"] ;                  // ��������� � ���� ������ ����������
   if ( isset ( $parse_url["host"]  ) ) $host  = $parse_url["host"]        ;else $host = '' ; // ��� �������� ����
   if ( mysql_fetch_assoc ( mysql_query ( "SELECT ".MY_WEBMASTER_URL." FROM ".MY_TABLE_WEBMASTER." WHERE ".MY_WEBMASTER_URL."='".$host."' " ) ) ) 
    {
     $error = 3 ; // ��������� ��� �� ������ url 
     unset ( $_SESSION['checkurl'] ) ;
     unset ( $host ) ;
     
    }   
   
   //echo "<font color=red>&  hostf=".$host ."& urlfs=".$url." !!!</font>" ;   
   if ( isset ( $_SESSION['checkurl'] ) and $error == 0 ) 
    {
     $fp = fsockopen ( $host, 80, $errno, $errstr, 50 ) ;
      if ( !$fp ) 
       {
        $error = 1 ;
        unset ( $_SESSION['checkurl'] ) ;
       }
        
    }
   else $fp = false ;
   if ( $fp == true )
    {
      fputs ( $fp, "GET ".$path ." HTTP/1.0 \n"  // ��������� ���������, ������������� ������� ������
                   ."Accept: image/gif, image/x-xbitmap, image/jpeg, image/pjpeg, application/vnd.ms-excel, application/vnd.ms-powerpoint, application/msword, application/x-ms-application, application/x-ms-xbap, application/vnd.ms-xpsdocument, application/xaml+xml, application/x-shockwave-flash, */* \n"
                   ."Accept-Language: ru \n"
                   ."User-Agent: Mozilla/4.0 (compatible; MSIE 6.0; Unix ubuntu4.2; SV1; Gamatic.ru powered; .NET CLR 2.0.50727; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729) \n"
                   ."Host: ".$host." \n"
                   ."Connection: Keep-Alive \n\n" ) ;// ���������� ������
      //fputs( $fp, $out); // ���������� ������
      $c = 0 ;
      $i = 0 ;
      $check = false ;
      while( !feof ( $fp ) ) // ��������� ��������� �����
       { 
         $gets  = fgets ( $fp   ) ;
         //$fgets = trim  ( $gets ) ;
         $head  = explode ( "head", strtolower ( $gets ) ) ;
         if ( isset ( $head[1] ) )$i++ ; 
         $result = explode ( "meta", strtolower ( $gets ) )  ;
         if ( isset ( $result[1] ) ) 
          { 
             $error = 5 ;
              parse_str (  str_replace ( ' ', '&', preg_replace ( "/[^0-9A-Za-z.\-_= ]/", '', $result[1]  ) ) ) ;// �������� ������ �� ���������
              if ( isset ( $name )    ) 
               {
                 if ( $name  == preg_replace( "/[^0-9a-zA-Z]/", '',$_SERVER['SERVER_NAME'])."urlchecker" ) $check = true ;
                 //echo "\n �������� � 1 �������� ������� !<br />\n".$name."\n<br />\n" ;
               unset ( $name ) ;
               }
              if ( isset ( $content ) and $check == true ) 
               {
                 $res = mysql_fetch_assoc ( mysql_query ( "SELECT * FROM ".MY_TABLE_WEBMASTER." WHERE ".MY_WEBMASTER_URL."='".$url."' " /* LIMIT ". $amount.", ".$start */ ) ) ;// ������ ���������� �������, ������ �������� �����
                 //if ( $res == false ) return "error=5" ;
                 if ( $content == md5 ( md5 ( $_SESSION['l'] ).":".md5 ( $host ) ) ) 
                  {
                    // mysql_query ( "UPDATE ".MY_TABLE_WEBMASTER." SET ".MY_WEBMASTER_STATUS."='0' WHERE ".MY_WEBMASTER_URL."='".$res[MY_WEBMASTER_URL]."'" ) ;
                     mysql_query ( "INSERT INTO ".MY_TABLE_WEBMASTER." VALUES( NULL,'".$_SESSION['l']."','".$_SESSION['checkurl']."','1' ) " ) ;
                    //echo "<font color=red> <h1>�������� !!!!!</font>" ;
                    $error = 4 ;
                    break ;//echo "\n �������� � 2 �������� ������� !<br />\n".$content."\n<br />\n" ;
                  }
                unset ( $content ) ;
               }
           //echo "<font color=red> meta ����� �� �������� �� ������� !!!</font>" ;
          }
         $c++ ;
         if ( $i > 1 ) break ;
        }
        fclose($fp);
       //echo "<font color=red> ���� ����� �� �������� �� ������� !!!</font>" ;
    }
   //elseif ( isset ( $_SESSION['checkurl'] ) ) $error = 1 ;//$_SESSION['checkurl'] = $host ; //echo "<font color=red> ���� �� ����� !!!</font>" ;
   //elseif ( !isset ( $_SESSION['checkurl'] )  ) /*$error = 1 ;//*/ $_SESSION['checkurl'] = $host ; //echo "<font color=red> ���� �� ����� !!!</font>" ;
   elseif ( !isset ( $_SESSION['checkurl'] ) and $error == 0 ) /*$error = 1 ;//*/ $_SESSION['checkurl'] = $host ; //echo "<font color=red> ���� �� ����� !!!</font>" ;
   $a = array ( 'error' => $error, 'host' => $host ) ;
   return $a ;
/*
MY_TABLE_WEBMASTER",  "webmaster" )
MY_WEBMASTER_ID",     "id"        )
MY_WEBMASTER_USER",   "cps"       )
MY_WEBMASTER_URL",    "url"       )   
MY_WEBMASTER_STATUS", "status"    )   
MY_WEBMASTER_CHECK",  "checker"   )   
   */
 }  


function other_set () // ����� ����� 
 {
   $settings = _my_settings ( ) ;
   $other_set = explode ( "|", $settings[MY_SETTINGS_OTHER] ) ;   
   return $other_set ;//wmr=0.00&wmz=1.00&wme=1.32&wmu=0.13&wmb=0.00&wmy=0.00&wmg=0.00&
 }
function messend ( $mess ) 
 {
  exit ( $mess );
 }  

function mround( $number, $precision = 0 ) //���������� � ������ ������� ������� ����� 0.9999999999999
 {  
    $precision = ( $precision == 0 ? 1 : $precision ) ;     
    $pow = pow ( 10, $precision ) ;  
    return sprintf( "%01.2f", ( floor ( $number * $pow ) / $pow ) ) ;  
 }

function _debug_ ( $in=false, $file = "debug.txt",$msg = false ) // ������ � ����
 {
  $data = "_POST:&" ;
  for ( Reset ( $_POST ) ; ( $k = key ( $_POST ) ) ; Next ( $_POST ) ) $data .= $k . "=". $_POST[$k] . "&" ;// ���� POST'�
  $data .= "_GET:&" ;
  for ( Reset ( $_GET ) ; ( $k = key ( $_GET ) ) ; Next ( $_GET ) ) $data .= $k . "=". $_GET[$k] . "&" ;// ���� POST'�

  $dop .= "\n".date("d.m.Y").' | '.date( "H:i:s" )."\n";
  $dop .= 'Status='.$msg."\n" ;
  $dop .= $in ;
  $out  = str_replace ( "&",    "\n", $data  ) ;
  $out .= $dop."\n&".$data ;
  $out .= "\n".'=========================='."\n" ;
  $fp = fopen( $file, "a" ) or die ( "�� ������� ������� ����" );// ��������� ����� �� ������ � ���������� ����� � �����
  fputs( $fp, $out ); // ���������� ���� 
  fclose( $fp ); // ��������� ����

 
 }
function anti_spy() {exit ( base64_decode ( 'IDwvYm9keT4KPC9odG1sPg==') ) ;}

?>