<span id="theText" style="width:100%; color: #FFFF00">
<strong>  <marquee height="10" width="570" loop="20" Direction="left" scrollamount="3". >
����������� ��������� "Numbers"
</marquee></strong>
</span>

<script>
<!--
//�������� ������ �� � ��
var from = 5;
var to = 15;
//������� ������
var delay = 120;
//���� ������, ��� � rgb (������:'#ffff33') ��� �����������
var glowColor = "#ff4000'";
//�� ������!!!
var i = to;
var j = 0;
textPulseDown();
function textPulseUp()
{
if (!document.all)
return
if (i < to)
{
theText.style.filter = "Glow(Color=" + glowColor + ", Strength=" + i + ")";
i++;
theTimeout = setTimeout('textPulseUp()',delay);
return 0;
}
if (i = to)
{
theTimeout = setTimeout('textPulseDown()',delay);
return 0;
}
}
function textPulseDown()
{
if (!document.all)
return
if (i > from)
{
theText.style.filter = "Glow(Color=" + glowColor + ", Strength=" + i + ")";
i--;
theTimeout = setTimeout('textPulseDown()',delay);
return 0;
}
if (i = from)
{
theTimeout = setTimeout('textPulseUp()',delay);
return 0;
}
}
//-->
</script>