<?php #::[ ������ ���������� ����������� R#1304031215v4.63]::#?>
          <div class="statmenu">
           <div class="bankset">����� ���������� �� ����������</div>
<?stat_table ( $colbet, $betall, $winall, $winbon, $dohod, $setslot[MY_BANK_INCASH] )?>          
           <hr class="lineshr1" />
           <!-- ���������� �� ����-->
           <form name="dateselect" action="index.php?action=<?=$action?>&setgame=<?=$game?>" method="post"> 
            <div class="bankset">������� ���������� �� ����
             <br />
<?DateDropDown ( $dropdate ) ?>
             <input type="submit" class="button" value="��������" />
            </div>
<?stat_table ( $colbet2, $betall2, $winall2, $winbon2, $dohod2, $incash )?>
            <hr class="lineshr1" />
           </form> 
           <div class="bankset"><!-- -->&nbsp;<!-- //-->
            <!-- ��������--> 
            <?/*<div class="navigator1" onclick="window.open('<?=ADMIN?>');"><!-- <a href="/<?=ADMIN?>">-->�� �������<!-- </a> --></div> */?>
            <div class="banknavigator linkblock" onclick="location.href='<?=ADMIN?>';">�� �������</div>
            <div class="bankdelitel "> | </div>
            <div class="banknavigator linkblock" onclick="location.href='<?="#1"?>';">� ������</div>
            <div class="bankdelitel"> | </div>
            <div class="banknavigator linkblock" onclick="window.open('<?="http://gamatic.ru"?>')">���������</div>
           </div>
          </div>