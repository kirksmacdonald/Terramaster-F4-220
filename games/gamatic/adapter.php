<?php

define ( 'CASINOENGINE',   true ) ;//  


require_once( '../../../engine/config/config_db.php' );
// ���������� ���� ��� ������ � ��������
define ( 'MY_TABLE_BANK',   'games_bank' ) ;// ������� ������ 
define ( 'MY_BANK_NAME',    'name'       ) ;// �������� �����
define ( 'MY_BANK_SUMM',    'bank'       ) ;// ����� ����� 
define ( 'MY_BANK_PROC',    'proc'       ) ;// ������� (��� ������������� �� ������� ��������)
define ( 'MY_BANK_MAX',     'winmax'     ) ;// ������������ ����� Win �� 1 ���� 
define ( 'MY_BANK_IN',      'income'     ) ;// ������� ������� �������� Ѩ��  
define ( 'MY_BANK_BONUS',   'bonus'      ) ;// ����� ������ 
define ( 'MY_BANK_BONUS2',  'bonus2'     ) ;// ����� ������� ������ 
define ( 'MY_BANK_BONREADY','bonusready' ) ;// ����� ���������� ������ ������
define ( 'MY_BANK_BONPROC', 'bonusproc'  ) ;// ������� ����������� � ���� ������ 
define ( 'MY_BANK_JP',      'jackpot'    ) ;// ����� �����  JP
define ( 'MY_BANK_JPPROC',  'jpotproc'   ) ;// ������� ����������� � ����  JP 
define ( 'MY_BANK_MODE',    'mode'       ) ;// ��������� ����� 
define ( 'MY_BANK_MODE2',   'mode2'      ) ;// �������� �����  
define ( 'MY_BANK_MODE3',   'mode3'      ) ;// ������� ����� 
define ( 'MY_BANK_MODE4',   'mode4'      ) ;// ���������� ������� ����� 
define ( 'MY_BANK_INCASH',  'incash'     ) ;// ����� ����� �����                              
define ( 'MY_PUBLIC',       'ttuz'       ) ;// ����� ����                                     
define ( 'MY_PARTNER',      'partnering' ) ;// ����� ����                                     
//  0    1          2        3         4           5         6        7       8          9        10
// id  username  password  email  personaldata  wherepay  regdate  regip  accountsum  deposit  withdraw
//    11         12        13        14       15         16        17    18     19     20
// cps_summ  cps_proc  cps_bon  cps_friend  holdset  win_double  mode  mode2  mode3  mode4  
/*
id  login  pass  cash  cashin  cashout  cashfun  cashfunin  cashfunout
fun_date  email  date  check_mail  ip_reg  ip_last  admin_notes
operator_notes  status_message  login_block  login_number  pm_all  
pm_unread  status  key_reset  referer  cash_ref  cash_pending  cash_ref_withdrawn  
partner_blocked  cash_ref_total  hits  registers  holdset  win_double  mode  mode2  mode3  mode4  
*/                                                                                               
define ( 'MY_TABLE_PLAYERS','clients'    ) ;//  ������� ������                                 
define ( 'MY_USER_NUMID',   'id'         ) ;//  0 ����                                           
define ( 'MY_USER_USERS',   'login'   ) ;//  1 ����                                           
define ( 'MY_USER_PASS',    'pass'   ) ;//  2 ����                                           
define ( 'MY_USER_EMAIL',   'email'      ) ;//  3 ����                                           
define ( 'MY_USER_DATE',    'date'    ) ;//  6 ���� ����                                      
define ( 'MY_USER_PREIP',   'ip_reg '     ) ;//  7 IP ��� ����                                      
define ( 'MY_USER_CASH',    'cash' ) ;//  8 ������ ������                                  
define ( 'MY_USER_CASHIN',  'cashin'    ) ;//  9 ���� ������                                    
define ( 'MY_USER_CASHOUT', 'cashout '  ) ;// 10 ����� ������                                   
define ( 'MY_USER_CPS',     'cps_summ'   ) ;// 11 ����������� �� ������������                                    
define ( 'MY_USER_CPS_PROC','cps_proc'   ) ;// 12 ����������� ��������. ��������� �� �����
define ( 'MY_USER_CPS_ADD', 'cps_bon'    ) ;// 13 ����������� ������ �������� �������
define ( 'MY_USER_CPS_REF', 'cps_friend' ) ;// 14 ��� ������ 
define ( 'MY_USER_HOLD',    'holdset'    ) ;// 15 ��� ������ ���� � ������� �����                
define ( 'MY_USER_WINDBL',  'win_double' ) ;// 16 ��������                                       
define ( 'MY_USER_MODE',    'mode'       ) ;// 17 ��������� �����                                
define ( 'MY_USER_MODE2',   'mode2'      ) ;// 18 ���������                                      
define ( 'MY_USER_MODE3',   'mode3'      ) ;// 19 ��������� �����������                          
define ( 'MY_USER_MODE4',   'mode4'      ) ;// 20 ���� � �����                                        

define ( 'S_USER_DEMO_NAME',    'Visitor'    ) ;// ��� ���� �����                                      
define ( 'S_USER_DEMO_BALANCE', '1000'       ) ;// ��������� ������ ���� �����                                      

define ( 'S_ENG_EXIT_LOGIN', '/?action=login' ) ;// ���� ������ ���� ��� �����������                                      
define ( 'S_ENG_DIR_RETURN',  '/'             ) ;// ���� ������ ���� ��� �����������                                      
define ( 'HTTP_VARS_USER',  'user'    ) ;// ����������                                       
define ( 'HTTP_VARS_MODE',  'mode'    ) ;// ����������                                        
define ( 'HTTP_VARS_GAME',  'game'    ) ;// ���������� 

define ( 'MY_USER_DEMO',    'Visitor'        ) ;// ��� ���� �����  - debricade                                      


define ( 'MY_TABLE_STATGAME','games_stats' ) ;// ������� ���������� 
//define ( 'MY_TABLE_STATGAME_FUN','stat_game_fun' ) ;// ������� ����� ���������� �� ���� �����
define ( 'MY_TABLE_STATGAME_FUN','games_stats' ) ;// ������� ����� ���������� �� ���� �����
define ( 'MY_STATGAME_NUMID',   'id'     ) ;// ����
define ( 'INSERT_STAT', true ) ;// ��������� ��������� ����������

#���� � ���������
define ( 'ROOT_DIR', $_SERVER['DOCUMENT_ROOT'] ) ;// ������ �����// root_dir_site( 'public_html', 1 ) 
if (!defined('MODULS')) define ( 'MODULS', 'mods' ) ;// ���� � ����� �������

//define ( 'COUNTERS_GOOGLE',  ROOT_DIR.'/'.MODULS.'/google.php' ) ;// ���� � �������� �����
//define ( 'COUNTERS_ANALYST', ROOT_DIR.'/games/counters.php'   ) ;// ���� � �������� ����������


?>