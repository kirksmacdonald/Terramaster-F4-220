[header]<h4><center>��������! ������ �� ������� ���� ����������� ����������� ����� ������, ���� �� ��������, � ������ �� ������� ���� �� �����������, ��������������� ��������� � ��������������!</center></h4><br>[/header]
[main]
{a1pay}
{robokassa}
{freekassa}
{interkassa}
{webmoney}
{statistic}
[/main]
[a1pay]
<br>
		<TABLE width="100%">
		<TBODY>
		<tr><td style="padding-bottom:10;"><h4>���������� �ר�� ����� ������� A1PAY</h4><img align="right" src="/modules/images/a1pay.jpeg">���� �������� ��������� �����: SMS(5% �� ������ ���������), WebMoney(2%), ������.������(10%), ��� Money(10%), W1(10%), ��������� ����� �������� ������(15%), ������ ������� Qiwi(10$). � ������� ������ ������� �������� � ������� ��������� ��������� ��������.</div><br></td></tr>
		<TR vAlign=top>
		<TD width="100%">

		<form method="POST" action="/{language}/in">
			<input type="input" name="summa" size="5" value="1" style="border: 1px solid rgb(0,0,0);color:#000000;"> R
			<input type="hidden" name="mode" value="pay_a1pay">
			<input type="submit" name="process" value=" ������� � ������ " style="color:#000000;"> 1 R = <b>1 ������</b>
		</form>

		</TD>
		</TR>
		</TABLE>
<br>
[/a1pay]
[a1pay_proccess]
		<form method="POST"  class="application" action="https://partner.a1pay.ru/a1lite/input" id='autoProcessor'>
		  <input type="hidden" name="key" value="eQIhfz/hcZDwzC1FE6ZYRamu97rShtGLGfSy/pi3bvo=" />
		  <input type="hidden" name="cost" value="{a1pay_summa}" />
		  <input type="hidden" name="name" value="Pay for user: {a1pay_login}" />
		  <input type="hidden" name="default_email" value="{a1pay_email}" />
		  <input type="hidden" name="order_id" value="{a1pay_pay_id}" />
		  <input type="submit" style="color:#000000;" value=" ������� �� ���� ������ a1pay, ���� �� ������� ������������� "> 1 R = <b>1 ������</b>
		</form>
		<!-- ���� ������� -->
		<script language="JavaScript" type="text/javascript">document.getElementById('autoProcessor').submit();</script>
[/a1pay_proccess]
[webmoney]
<br>
		<TABLE width="100%">
		<TBODY>
		<tr><td style="padding-bottom:10;"><h4>���������� �ר�� ����� ������� WEBMONEY</h4><img align="right" src="/modules/images/logo_wm.gif"></div>��� ������ ������� �����. <p><span style="background-color:#FF0000;color:#FFFFFF;font-size:11;padding:3;"><b>�� ��������� �������� ����������� �����.</b></span></p> ���������� ����� �������� �� ��� ���� �����������. </td></tr>
		<TR vAlign=top>
		<TD width="100%">

		<form method="POST" action="/{language}/in">
			<input type="input" name="summa" size="5" value="1" style="border: 1px solid rgb(0,0,0);color:#000000;"> R
			<input type="hidden" name="mode" value="pay_webmoney">
			<input type="submit" name="process" value=" ������� � ������ " style="color:#000000;"> 1 R = <b>1 ������</b>
		</form>

		</TD>
		</TR>
		</TABLE>
<br>
[/webmoney]
[webmoney_proccess]
		<form name="R" method="POST" action="https://merchant.webmoney.ru/lmi/payment.asp" id='autoProcessor'>
		<tr><td height="31" width="100%">
			<input name="LMI_PAYMENT_AMOUNT" size="5" value="{summa}" style="border: 1px solid rgb(0,0,0);color:#000000;"> R
			<input type="hidden" name="LMI_PAYMENT_DESC" value="���������� �����, �����:{login}">
			<input type="hidden" name="LMI_PAYEE_PURSE" value="{purse}">
			<input type="hidden" name="idl" value="{payid}">
			<input type="hidden" name="idm" value="{email_md5}">
			<input type="hidden" name="ids" value="{login}">
			<input type="hidden" name="ip" value="{ip}">
		    <input type="submit" style="color:#000000;" value=" ������� �� ���� ������ RoboKassa, ���� �� ������� ������������� "> 1 R = <b>1 ������</b>
		</td><td width="100%" align="left"><IMG hspace=2 src="/modules/images/wmr.gif" vspace=2 border=0><br></td></tr>
		</form>
		<!-- ���� ������� -->
		<script language="JavaScript" type="text/javascript">document.getElementById('autoProcessor').submit();</script>
[/webmoney_proccess]
[interkassa]
<br>
		<TABLE width="100%">
		<TBODY>
		<tr><td style="padding-bottom:10;"><h4>���������� �ר�� ����� ������� INTERKASSA</h4><img align="right" src="/modules/images/interkassa.png">� ��������� ������ � ������� ���������� 16 ����� ����������� ��������� ������: VISA, MasterCard, LigPay, MoneyMail, RBK Money, Liberty Reserve, Perfect Money, WebCreds, Ukash, ZPayment � ������. ��� ������ ������� �����. �������� ��������, ��� ������� interkassa ����� ��������� �������, � ��� 3% �� �������. ���������� ����� �������� �� ��� ���� �����������.</td></tr>
		<TR vAlign=top>
		<TD width="100%">

		<form method="POST" action="/{language}/in">
			<input type="input" name="summa" size="5" value="1" style="border: 1px solid rgb(0,0,0);color:#000000;"> R
			<input type="hidden" name="mode" value="pay_interkassa">
			<input type="submit" name="process" value=" ������� � ������ " style="color:#000000;"> 1 R = <b>1 ������</b>
		</form>

		</TD>
		</TR>
		</TABLE>
<br>
[/interkassa]
[interkassa_proccess]
		<form name="payment" action="https://interkassa.com/lib/payment.php" method="post" enctype="application/x-www-form-urlencoded" accept-charset="cp1251" id='autoProcessor'>
			<input type="hidden" name="ik_shop_id" value="{interkassa_shop_id}">
			<input type="input"  name="ik_payment_amount" size="5" value="{interkassa_summa}" style="border: 1px solid rgb(0,0,0);color:#000000;"> R
			<input type="hidden" name="ik_payment_id" value="{interkassa_pay_id}">
			<input type="hidden" name="ik_payment_desc" value="��������� ������� ������������ {interkassa_login}, id ������� {interkassa_pay_id}">
			<input type="submit" name="process" value=" ������� �� ���� ������ InterKassa, ���� �� ������� ������������� " style="color:#000000;"> 1 R = <b>1 ������</b>
		</form>
		<!-- ���� ������� -->
		<script language="JavaScript" type="text/javascript">document.getElementById('autoProcessor').submit();</script>
[/interkassa_proccess]
[robokassa]
<br>
		<TABLE width="100%">
		<TBODY>
		<tr><td style="padding-bottom:10;"><h4>���������� �ר�� ����� ������� ROBOKASSA</h4><img align="right" src="/modules/images/robokassa.jpg">� ��������� ������ � ������� ���������� 30 ����� ��������� ������ ��������: ������.������, Webmoney, RUR MoneyMail, RBK Money, RUR ������ �������, EasyPay, ������@Mail.Ru, Z-Payment, ��������� � ������� CONTACT, ��������� � ���������� ������ � ������. ��� ������ ������� �����. �������� ��������, ��� ������� robokassa ����� ��������� �������, � ��� 5% �� �������. ���������� ����� �������� �� ��� ���� �����������.
		</td></tr>
		<TR vAlign=top>
		<TD width="100%">

		<form method="POST" action="/{language}/in">
			<input type="input" name="summa" size="5" value="1" style="border: 1px solid rgb(0,0,0);color:#000000;"> R
			<input type="hidden" name="mode" value="pay_robox">
			<input type="submit" name="process" value=" ������� � ������ " style="color:#000000;"> 1 R = <b>1 ������</b>
		</form>
		</TD>
		</TR>
		</TABLE>
[/robokassa]
[robokassa_proccess]
		<TABLE width="100%">
		<TBODY>
		<tr><td style="padding-bottom:10;"><h4>���������� �ר�� ����� ������� ROBOKASSA</h4><img align="right" src="/modules/images/robokassa.jpg"></td></tr>
		<TR vAlign=top>
		<TD width="100%">
			<form action='{robokssa_url}' method='POST' id='autoProcessor'>
			<input type=hidden name='MrchLogin' value='{robokssa_mrh_login}'>
			<input type=hidden name='OutSum' value='{robokssa_out_summ}'>
			<input type=hidden name='InvId' value='{robokssa_inv_id}'>
			<input type=hidden name='Desc' value='{robokssa_inv_desc}'>
			<input type=hidden name='SignatureValue' value='{robokssa_crc}'>
			<input type=hidden name='Shp_item' value='{robokssa_shp_item}'>
			<input type=hidden name='IncCurrLabel' value='{robokssa_in_curr}'>
			<input type=hidden name='Culture' value='{robokssa_culture}'>
			<input type=hidden name='login' value='{robokssa_login}'>
			<input type=submit value=' ������� �� ���� ������ RoboKassa, ���� �� ������� ������������� ' style='color:#000000;'>
		</form>
		</TD>
		</TR>
		</TABLE>
		<!-- ���� ������� -->
		<script language="JavaScript" type="text/javascript">document.getElementById('autoProcessor').submit();</script>
[/robokassa_proccess]
[freekassa]
<br>
		<TABLE width="100%">
		<TBODY>
		<tr><td style="padding-bottom:10;"><h4>���������� �ר�� ����� ������� Payeer</h4><br>
<a href="http://payeer.com/?partner=1837" target="_blank">
<img src="http://payeer.com/images/468.jpg" width="468" height="60" border="0" alt="http://payeer.com/"></a><br>
Payeer - ������ ��������� ���������� �������� � ��������� � ����������� ����� � ����� ������ - ��������� ������������ ���� �������� �� �������� �� ���� ���������� ����������� �������. � ��������� ������ �������� ������� � Webmoney, ������.������, RBKMoney, QIWI, OKPAY, Cash4WM, LiqPay, MoneyBookers, W1, MoneyMail, LibertyReserve, PerfectMoney, ������@Mail.Ru, � ����� ������� ������ ��������, ����� ��� ������ ����� ��� (SMS) ���������, ���������� ����� Visa/Master Card � �������� �����-����, ��������.���24, �������� ������, Contact � ��������� QIWI. ���������� ����� �������� �� ��� ���� �����������.
		</td></tr>
		<TR vAlign=top>
		<TD width="100%">

		<form method="POST" action="/{language}/in">
			<input type="input" name="summa" size="5" value="1" style="border: 1px solid rgb(0,0,0);color:#000000;"> R
			<input type="hidden" name="mode" value="pay_freekassa">
			<input type="submit" name="process" value=" ������� � ������ " style="color:#000000;"> 1 R = <b>1 ������</b>
		</form>
		</TD>
		</TR>
		</TABLE>
[/freekassa]
[freekassa_proccess]
		<!--
		<script src="http://yandex.st/jquery/1.6.0/jquery.min.js"></script>
		<script type="text/javascript">
		var min = 1;
		function calculate() {
			var re = /[^0-9\.]/gi;
			var url = window.location.href;
			var desc = $('#desc').val();
			var sum = $('#sum').val();
			if (re.test(sum)) {
				sum = sum.replace(re, '');
				$('#oa').val(sum);
			}
			if (sum < min) {
				$('#error').html('����� ������ ���� ������ '+min);
				$('#submit').attr("disabled", "disabled");
				return false;
			} else {
				$('#error').html('');
			}
			if (desc.length < 1) {
				$('#error').html('���������� ������ ����� ������');
				return false;
			}
			$.get(url+'?prepare_once=1&l='+desc+'&oa='+sum, function(data) {
				 var re_anwer = /<hash>([0-9a-z]+)<\/hash>/gi;
				 $('#s').val(re_anwer.exec(data)[1]);
				 $('#submit').removeAttr("disabled");
			});
		}
		</script>
		-->



		<TABLE width="100%">
		<TBODY>
		<tr><td style="padding-bottom:10;"><h4>���������� �ר�� ����� ������� Payeer</h4><br><br>
<a href="http://payeer.com/?partner=1837" target="_blank">
<img src="http://payeer.com/images/468.jpg" width="468" height="60" border="0" alt="http://payeer.com/"></a><br>
</td></tr>
		<TR vAlign=top>
		<TD width="100%">
			<!--<form action='{freekssa_url}' method='POST' id='autoProcessor'>
			<input type=hidden name='MrchLogin' value='{freekssa_mrh_login}'>
			<input type=hidden name='OutSum' value='{freekssa_out_summ}'>
			<input type=hidden name='InvId' value='{freekssa_inv_id}'>
			<input type=hidden name='Desc' value='{freekssa_inv_desc}'>
			<input type=hidden name='SignatureValue' value='{freekssa_crc}'>
			<input type=hidden name='Shp_item' value='{freekssa_shp_item}'>
			<input type=hidden name='IncCurrLabel' value='{freekssa_in_curr}'>
			<input type=hidden name='Culture' value='{freekssa_culture}'>
			<input type=hidden name='login' value='{freekssa_login}'>
			<input type=submit value=' ������� �� ���� ������ FreeKassa, ���� �� ������� ������������� ' style='color:#000000;'>
			</form>
			-->
			<!--{fk_hash}
			
			<form method=GET action='{freekssa_url}' id='autoProcessor'>
				<input type='hidden' name='m' value='{fk_merchant_id}'>
				<input type='text' name='oa' id='sum' id='oa' onchange='calculate()' onkeyup='calculate()' onfocusout='calculate()' onactivate='calculate()' ondeactivate='calculate()'> ������� ����� ��� ������
				<input type='hidden' name='s' id='s' value='0'>
				<br>
				<input type='text' name='o' id='desc' value='' onchange='calculate()' onkeyup='calculate()' onfocusout='calculate()' onactivate='calculate()' ondeactivate='calculate()'> ����� ������*
				<br>
				<input type='submit' id='submit' value=' ������� �� ���� ������ FreeKassa, ���� �� ������� ������������� ' disabled style='color:#000000;'>
			</form>-->
			
<form method="GET" action="//payeer.com/api/merchant/m.php" id='autoProcessor'>
<input type="hidden" name="m_shop" value='{fk_merchant_id}'>
<input type="hidden" name="m_orderid" value='{fk_inv_id}'>
<input type="hidden" name="m_amount" value='{fk_outsum_oa}'>
<input type="hidden" name="m_curr" value="RUB">
<input type="hidden" name="m_desc" value='{freekssa_inv_desc}'>
<input type="hidden" name="m_sign" value='{fk_hash}'>
<input type="submit" name="m_process" value="��������" />
</form>




			<!--form method=GET action='{freekssa_url}' id='autoProcessor'>
				<input type='hidden' name="m" value='{fk_merchant_id}'>
				<input type='hidden' name='oa' value='{fk_outsum_oa}'>
				<input type='hidden' name='s' value='{fk_hash}'>
				<input type='hidden' name='o' value='{fk_inv_id}'>
				<input type='submit' value='��������'>
			</form-->
		
		</TD>
		</TR>
		</TABLE>
		<div id="error"></div>
		<!-- ���� ������� -->
		<script language="JavaScript" type="text/javascript">document.getElementById('autoProcessor').submit();</script>
[/freekassa_proccess]
[statistic_header]
<br /><br />

<script>
function updateHistory() {
	document.frm_pagenav.submit();
}

function navigateToPage(number) {
	document.getElementById("hidden_pageno").value = number;
	document.frm_pagenav.submit();
}
</script>
<div class="popup_h2">������� ��������</div><br />
<form method="post" name="frm_pagenav">
<div style="display: inline; float: left">
��������:
</div>
<div class="select_table_in_out_checkbox">
<input type="radio" name="radio_table_select" value="in" id="radio_table_select_in" onchange="updateHistory()"{radio_in}>
<label for="radio_table_select_in">�������� ��������</label>
</div>

<div class="select_table_in_out_checkbox">
<input type="radio" name="radio_table_select" value="out" id="radio_table_select_out" onchange="updateHistory()"{radio_out}>
<label for="radio_table_select_out">���������� ��������</label>
</div>

<br />

							<table cellspacing=0 cellpadding=0 width="100%">
								<tbody>
									<tr>
										<td height="33" class="cell_1" width="20%"><div align="center">����</div></td>
										<td class="cell_2" width="60%"><div align="center">��������� �������</div></td>
										<td class="cell_2" width="10%"><div align="center">�����</div></td>
										<td class="cell_3" width="15%"><div align="center">������</div></td>
									</tr>
[/statistic_header]
[statistic_list]
									<tr>
										<td class="cell_empty" height="23px">{date} {time}</td>
										<td class="cell_empty" height="23px">{notes}</td>
										<td class="cell_empty" height="23px">{amount} {type_money}</td>
										<td class="cell_empty" height="23px">{status}</td>
									</tr>
[/statistic_list]
[statistic_footer]
								</tbody>
							</table>
							<br /><br />
								<input id="hidden_pageno" type="hidden" name="pageno">
								��������: {tbl_pager}
</form>							
[/statistic_footer]
