<?php #::[ ����� ������ 25 �������� 3D ������ �������� Nyx R#1304031215v4.63]::# ?>
        <div><a name="1"><!-- ����� "�� ����" --></a></div>
        <div class="bankcontainer">
         <!--
         <div class="slotlist">
          <? foreach ( $slotlist as $i=>$v) { ?>
          <a href="?action=<?=$action?>&setgame=<?=$i?>" class="styleimg"><img src="<?=GAMATIC_DIR?>nyx/img/<?=$i/*?>_275x140.png*/?>.png" alt="X" title="<?=$i?>" class="styleimg" /></a>
          <?}?>
         </div>
         -->
        <form name="setings" action="?action=<?=$action?>&setgame=<?=$game?>" method="post">
               <!-- ����� ����� ����-->
          <div class="bankset">����� ����� � ������� ��������������� ����</div>
           <!-- �������� -->
          <div class="banksetimg"><img src="<?=GAMATIC_DIR?>nyx/img/<?=$game//."_275x140"?>.png" title="�������� ����������" style="width:150px; height:75px;"/></div>
           <!-- // -->
          <div class="banksetcomm">���� �������� � ����� ������ ������               <input type="radio" name="<?=$slot?>_bankset" value="0000000001" <?echo $mode['0001'] ; if ( $skip == true ) echo " disabled"?> /></div>
          <div class="banksetcomm">���� �������� � ����� ������ ��� 9 �������� ������<input type="radio" name="<?=$slot?>_bankset" value="0000000002" <?echo $mode['0002'] ; if ( $skip == true ) echo " disabled"?> /></div>
          <div class="banksetcomm">���� �������� � ��������� ������                  <input type="radio" name="<?=$slot?>_bankset" value="0000000004" <?echo $mode['0004'] ; if ( $skip == true ) echo " disabled"?> /></div>
           <!-- // -->
          <div class="bankset">��������� ���������� ����� </div>
          <div class="bankname">����� ���� <input type="text" maxLength="20" size="10" name="game_bank" value="<?=sprintf ("%01.2f",$setpub[MY_BANK_SUMM])?>" readonly /></div>
          <div class="bankvol"><?=VALUTA?>.</div>
          <div class="bankname2"><?=TEXTN1?><input type="text" maxLength="20" size="5" name="game_proc" value="<?=sprintf ("%01.2f",$setterm[MY_BANK_SUMM])?>"<? //if ( $skip != true ) echo " disabled" ;?> readonly /></div>
          <div class="bankvol"><?=VALUTA?>.</div>
          <div class="lineshr"></div><!-- ������ -->
          <!-- ��������� ����� ����-->
          <div class="bankname">���� ���� <?=$gamewid?><input type="text" maxLength="20" size="10" name="<?=$slot;?>_bank" value="<?=sprintf("%01.2f",$setslot[MY_BANK_SUMM])?>" /></div>
          <div class="bankvol"><?=VALUTA?>.</div>
          <div class="bankname2">������� ������ �� 1 ����<input maxLength="20" size="5" name="<?=$slot?>_proc" value="<?=sprintf("%01.2f",$setslot[MY_BANK_PROC])?>" /></div>
          <div class="bankvol"> %.&nbsp;&nbsp;</div>
          <div class="bankname3">�������� � ������� �����&nbsp;<input maxLength="5" size="2" name="<?=$slot?>_income" value="<?=sprintf("%01.2f", $setslot[MY_BANK_IN])?>" /></div>
          <div class="bankvol"> %.&nbsp;&nbsp;</div>
          <div class="lineshr"></div>
          <div class="bankname">�������� ���� ���� <?=$gamewid?><input type="checkbox" name="bank_bankmode" value="on" /></div>
          <div class="stub2">���� �� �� ������ �������</div>             
          <div class="lineshr"></div>
          <div class="bankname">����� �� 1 ���� max.<input maxLength="20" size="10" name="<?=$slot?>_winlimit_1" value="<?=sprintf("%01.2f",$setslot[MY_BANK_MAX])?>" /></div>
          <div class="bankvol"> <?=VALUTA?>.</div>
          <div class="stub3"> ������������ ����� �������� �� ���� ������</div>
          <div class="lineshr"></div>
<?if ( $skip <> true ) :?>
          <!-- ��������� ������ ����-->
          <div class="bankname">���� ������ <input maxLength="20" size="10" name="<?=$slot?>_bonus_bank" value="<?=sprintf("%01.2f",$setslot[MY_BANK_BONUS])?>" /></div>
          <div class="bankvol"><?=VALUTA?>.</div>
          <div class="bankname2">���� ���������� ������  <input maxLength="10" size="5" name="<?=$slot?>_bonus_out" value="<?=sprintf("%01.2f",$setslot[MY_BANK_BONREADY])?>" /></div>
          <div class="bankvol"><?=VALUTA?>.</div>
          <div class="bankname3">�������� � ������� �����<input maxLength="5" size="2" name="<?=$slot?>_bonus_proc" value="<?=sprintf("%01.2f",$setslot[MY_BANK_BONPROC])?>" /></div>
          <div class="bankvol"> %.&nbsp;&nbsp;</div>
          <div class="lineshr"></div>
          <div class="bankname">�������� ���� ������<input type="checkbox" maxLength="20" size="10" name="bank_bonusmode" value="on" /></div>
          <div class="stub2">���� �� �� ������ �������</div>             
          <!-- ��������� ������� ���������� -->
          <div class="bankset">��������� ������� ����������</div>
          <!--
          <div class="banksetg">���-�� ������ �� �������� ������ ������ ��&nbsp;&nbsp;<input maxLength="3" size="5" name="<?=$slot?>_limitwin" value="<?=$stav_array[6]?>" />&nbsp;Min.&nbsp;��&nbsp;<input maxLength="3" size="5" name="<?=$slot?>_limitwin_up" value="<?=$stav_array[15]?>" />&nbsp;Min.&nbsp;</div>
          -->
          <div class="bankparam1">���-�� ������ �� �������� ������ ������ ��&nbsp;&nbsp;<input maxLength="3" size="5" name="<?=$slot?>_limitwin" value="<?=$stav_array[6]?>" />&nbsp;Min.&nbsp;</div>
          <div class="bankparam2">�������� ����������� ��������� <input type="checkbox"  name="<?=$slot?>_disable_lobet" value="0000100000" <?=$mode['1010']?>></div>
          <div class="bankparam2">���������� ������� ��� ����� ������<input type="checkbox"  name="<?=$slot?>_clear_spinwin" value="0000200000" <?=$mode['1020']?>></div>
          <!-- 
          <div class="banksets">��������� �����, ��� ���� �� ����� ����� <input type="checkbox" maxLength="20" size="10" name=<?=$slot?>_lin_limit value="0000010000" <?=$mode['1001']?> disabled /></div>
          -->
          <div class="lineshr"></div>
          <div class="bankparam1">&nbsp;</div>
          <div class="bankparam2"> ��������� ������� �� ��������� ������<input type="checkbox"  name="<?=$slot?>_lastcourse_win" value="0000020000" <?=$mode['1002']?> /></div>
          <div class="bankparam2"> ��������� ����� �� ��������� ������  <input type="checkbox"  name="<?=$slot?>_lastcourse_bon" value="0000040000" <?=$mode['1004']?> /></div>
          <!-- <div class="lineshr"></div> -->
          <!--
<?if ( include ( "addition/".$game.".php" ) ) echo'<div class="bankset">������ ������� ���������</div>';?>
          -->
          <!-- ��������� �����-���� Novomatic -->
          <div class="bankset">��������� �����-����</div>
          <div class="bankbonus"><a class="h_tooltip" href="#">����. �� ������&nbsp;<input maxLength="3" size="4" name="<?=$slot?>_bonus_figure" value="<?=$stav_array[0] ?>" /> <span class="h_classic">����� ������ �� ������� �������� ���� - �� ����� ���������</span></a></div>
          <div class="bankbonus1">&nbsp;�in. ���ee ��� ���� �������</div> 
          <div class="bankbonus2">������� ��������� ������ <input class="1_input" maxLength="4" size="5" name="<?=$slot?>_bonus_curset" value="<?=$setslot[MY_BANK_MODE2] ?>" /></div>
          <div class="bankbonus3">�������� ��������� <input type="checkbox" maxLength="20" size="10" name="bank_bonus_spin" value="on" /></div>
          <div class="lineshr"></div>
          <div class="bankbonus">����� � �����-����&nbsp;<input maxLength="1" size="4" name="<?=$slot;?>_bonus_number" value="<?=$stav_array[2] ?>" /></div>
          <div class="bankvol">&nbsp;Max.</div>
          <div class="stub4">&nbsp;<span style=" color:#990033;" >*</span><span style=" color:#3399FF;" > ����������� ��������� ���-�� ��������� "Freegame" � �����-����.</span></div> 
          <div class="lineshr"></div>
          <div class="bankbonus">���-�� �o���&nbsp;<input maxLength="3" size="4" name="<?=$slot?>_limitmonet_bonus" value="<?=$stav_array[7] ?>" /></div>
          <div class="bankvol">&nbsp;Min.</div>
          <div class="stub4">&nbsp;&nbsp;����������� ����� ����� ��� ������� �����-���� </div>
          <div class="lineshr"></div>
          <div class="bankbonus"><a class="h_tooltip" href="#">����� ������&nbsp;<span class="h_classic">����������� ��������� ����� �������� � �������� ����, ����� ����� ��� ������ �����</span></a><input maxLength="5" size="4" name="<?=$slot?>_bonus_creditmax" value="<?=$stav_array[1] ?>" /></div>
          <div class="bankvol">Max.</div> 
          <div class="stub4"><a class="h_tooltip" href="#"> &nbsp;����� ����������� � �������<span class="h_classic">1 ������ ����� ����� ����������� ������, �������� 1 ����� = 1USD, ��� ������ 0.1 �����.������������� 1 ������ ����� ����� 0.1 USD</span></a></div> 
          <div class="lineshr"></div>
<?endif;?>
           <!-- ������ "������� -->   
          <div class="bankset">��������� �������������� � ������� &quot;�������&quot;</div>
          <div class="bankbonus"><!-- ������� --> ���� ��������&nbsp;<input maxLength="20" size="5" name="bank_jpot" value="<?=sprintf("%01.2f",$setpub[MY_BANK_JP])?>" readonly /></div>
          <div class="bankvol"><?=VALUTA?>.</div>
          <div class="banksetj">�������� � ������� ����� � ���� &quot;��������&quot;<input maxLength="5" size="3" name="<?=$slot?>_jpotproc" value="<?=sprintf("%01.2f",$setslot[MY_BANK_JPPROC])?>" /></div>
          <div class="bankvol">%.</div>
          <div class="stub5">���� ��������� � &quot;��������&quot;<input type="checkbox" name="<?=$slot?>_jpotyes" value="0000000010" <?=$mode['0010']?> /></div>
            <? if ( $skip != true ) { ?>  
          <!-- ��������� ������ -->
          <div class="bankset">��������� ������������ ������ � ��������� ������</div>
          <div class="banksetval">����� ������
           <span class="bankalloc">
<?$c = 0 ; foreach ( $valutarray as $k=>$s ){?>           
            <?=$s?><input type="radio" name="<?=$slot?>_valuta" value="<?=$s//Ru?>" <? if ( $stav_array[5] == $valutarray[$c] ) echo 'checked';?> />
<?$c++;}?>
           </span>
          </div>
          <div class="banksetotr"><a class="h_tooltip" href="#"> ������ ������������ � �����&nbsp;<input maxLength="3" size="2" name="<?=$slot?>_valutaset" value="<?=$stav_array[5]?>" /><span class="h_classic">��������� ���� ����� ����� ��������� �� ��������������� ���� ������</span> </a></div>
          <div class="bankpayset"><input type="radio" name="<?=$slot?>_valuta" <?if ( !in_array ( $stav_array[5],$valutarray )  ) echo 'checked' ;?> />������������ ���</div>
          <div class="lineshr"></div>
          <div class="bankpayset">���������� �������� ������&nbsp;</div>
<?$c=10; while ( $c < 13 ){?>
          <div class="banksetmin">#<?=$c-9?><input maxLength="4" size="2" name="<?=$slot?>_vol<?=$c-9?>" value="<?=$stav_array[$c]?>" /></div>
<?$c++;}?>
          <div class="banksetyes">��������� ����� ������ ��������������<input type="checkbox" name="<?=$slot;?>_useron" value="1" <?if ( $stav_array[9] == true ) echo 'checked';?> /></div>
          <div class="lineshr"></div>
          <div class="bankpayset"><a class="h_tooltip" href="#">���������� ��� ������&nbsp;<span class="h_classic"> ���������  "�����" ������ ������� ����� ������ �������� � �����.�������� ����� ����� ������������ �������� �������� 100, 250, 500, 1000 5000.������� ��������� ��� ������� ������ ���� �� ����� 0.01 ������� �� ����� ����������� ������ </span> </a></div>
<?$c=16; while ( $c < 21 ){?>
          <div class="banksetmin">#<?=$c-15?><input maxLength="4" size="2" name="<?=$slot?>_stake_<?=$c-15?>" value="<?=$stav_array[$c]?>" /></div>
<?$c++;}?>
          <div class="bankcomment"><a class="h_tooltip" href="#">����� � <?if ( isset ( $valutcomm[$stav_array[5]] ) ) echo $valutcomm[$stav_array[5]] ; else echo $valutalt ;?><span class="h_classic">����� ����������� � ����� ����� �������� 1&nbsp;�������. 100 = 1 �������.���� ������� � ������� 250 �� ��� ���.������ 0.01 ������� ���� ����� ������ �� 0.02 �������, ���������� ���������� �� 1 �����.��� ���.������ 0.10 ������� ���� ����� ������ �� 0.25 �������</span> </a></div>
          <!-- ����� ���� -->   
           <hr class="lineshr2" />
          <div class="bankset">����� ���� </div>
          <div class="banksetf1">��������������&nbsp;<input type="checkbox" maxLength="20" size="10" name="<?=$slot?>_scale" value="1" <?if ( $stav_array[8] == "1" ) echo"checked" ;// ��������������?> /></div>
          <div class="banksetf">&nbsp;��������� ������ �����</div>  
           <? }// end skip?>
          <!-- ������--> 
           <hr class="lineshr2" />
          <div class="bankset"><!--......:::::::::::&#9758;[----------------------------------------------------]:::::::::::.....-->&nbsp;</div>
          <div class="bankbtn">
            <input type="hidden" value="apply" name="options" />
            <input type="submit" value="��������� ���������"  class="button" style="margin-top:5px" />
          </div>
        </form>   
       </div>
<?php #::[ t&k MEDIA 2011 ]::# ?>