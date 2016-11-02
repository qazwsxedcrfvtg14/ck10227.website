<?php include("../include.php"); ?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><a href="html/index10.php" target="main">一週課表</a></title>
<script type='text/javascript'>
parent.document.getElementById('title').innerHTML=document.title;
</script>
<link rel="stylesheet" type="text/css" href="./BS.css">

<style type="text/css">
td{
	line-height:24px;
	width:100px;
	height:55px;
	text-align:center;
}
a{
    color:#A0A0A0;
}
a:hover{
    color:#A0A0A0;
}
table{
	border:0px;
	}
</style>
</head>

<body>
<center><!--img src="../pic/web/t5.gif" height="40"><br>-->
<br>
<?php
if(!$P_Class_Table){echo"權限不足";return;}
?>
<table cellspacing="1" cellpadding="1" bgcolor="#202020" >
<tr bgcolor="#2C2C2C" style="color:#FFFF99;">
    <td style="width:125;height:40;">星期/時間</td>
    <td style="width:125;height:40;">星期一</td>
    <td style="width:125;height:40;">星期二</td>
    <td style="width:125;height:40;">星期三</td>
    <td style="width:125;height:40;">星期四</td>
    <td style="width:125;height:40;">星期五</td>
</tr>
<?php
if(!$tit)$tit="227";
$chk=1;
for($a=0;$tit[$a];$a++)
	if($tit[$a]=='.'||$tit[$a]=='/'||$tit[$a]=='\\')
		$chk=0;
if(!$chk)return ;
//if(!(@file_exists("table/".$tit)))return;
$fileopen=fopen("table/".$tit,"r");
$ott=array("一","二","三","四","五","六","七","八");
for($a=0;$a<8;$a++){
	echo "<tr><td style=\"color:#FFFF99;\" bgcolor=\"#2C2C2C\">第".$ott[$a]."節<br><font size=\"2\" color=\"A0A0A0\">08:10~09:00</font></td>";
	for($b=0;$b<5;$b++){
		$class=fgets($fileopen,1000);
		$teach=fgets($fileopen,1000);
		echo "<td bgcolor=\"#252525\">".$class."<br><a href=\"?tit=".$teach."\">".$teach."</a></td>";
		}
	echo"</tr>";
	}
?>
</table>
<!--
<tr style="border-bottom-style: double">
    <td style="color:#FFFF99;" bgcolor="#2C2C2C" width="125px" height="55px" align="center">第一節<br><font size="2" color="A0A0A0">08:10~09:00</font></td>
    <td width="100px" height="55px" align="center" >數學<br><a href=http://study.ck.tp.edu.tw/clash_main.asp?f_mnuid=9&f_teaname=%AAL%ABH%A6w>林信安</a></td>
    <td width="100px" height="55px" align="center" >基礎生物<br><a href=http://study.ck.tp.edu.tw/clash_main.asp?f_mnuid=9&f_teaname=%BCB%A5%C9%A4s>劉玉山</a></td>
    <td width="100px" height="55px" align="center" >英文<br><a href=http://study.ck.tp.edu.tw/clash_main.asp?f_mnuid=9&f_teaname=%A4%FD%AD%A7%B4f>王郁惠</a></td>
    <td width="100px" height="55px" align="center" >基礎地科<br><a href=http://study.ck.tp.edu.tw/clash_main.asp?f_mnuid=9&f_teaname=%A7%F5%A4%E5%C2%A7>李文禮</a></td>
    <td width="100px" height="55px" align="center" >基礎化學<br><a href=http://study.ck.tp.edu.tw/clash_main.asp?f_mnuid=9&f_teaname=%%B9%F9%AEa%BAa>廖家榮</a></td>
</tr>

<tr style="border-bottom-style: double">
    <td style="color:#FFFF99;" bgcolor="#2C2C2C" width="125px" height="55px" align="center">第二節<br><font size="2" color="A0A0A0">09:10~10:00</font></td>
    <td width="100px" height="55px" align="center" >數學<br><a href=http://study.ck.tp.edu.tw/clash_main.asp?f_mnuid=9&f_teaname=%AAL%ABH%A6w>林信安</a></td>
    <td width="100px" height="55px" align="center" >基礎生物<br><a href=http://study.ck.tp.edu.tw/clash_main.asp?f_mnuid=9&f_teaname=%BCB%A5%C9%A4s>劉玉山</a></td>
    <td width="100px" height="55px" align="center" >英文<br><a href=http://study.ck.tp.edu.tw/clash_main.asp?f_mnuid=9&f_teaname=%A4%FD%AD%A7%B4f>王郁惠</a></td>
    <td width="100px" height="55px" align="center" >基礎地科<br><a href=http://study.ck.tp.edu.tw/clash_main.asp?f_mnuid=9&f_teaname=%A7%F5%A4%E5%C2%A7>李文禮</a></td>
    <td width="100px" height="55px" align="center" >基礎化學<br><a href=http://study.ck.tp.edu.tw/clash_main.asp?f_mnuid=9&f_teaname=%%B9%F9%AEa%BAa>廖家榮</a></td>
</tr>

<tr style="border-bottom-style: double">
    <td style="color:#FFFF99;" bgcolor="#2C2C2C" width="125px" height="55px" align="center">第三節<br><font size="2" color="A0A0A0">10:10~11:00</font></td>
    <td width="100px" height="55px" align="center" >基礎生物<br><a href=http://study.ck.tp.edu.tw/clash_main.asp?f_mnuid=9&f_teaname=%BCB%A5%C9%A4s>劉玉山</a></td>
    <td width="100px" height="55px" align="center" >國文<br><a href=http://study.ck.tp.edu.tw/clash_main.asp?f_mnuid=9&f_teaname=%B4^%A6%A8%C0A>彭成錦</a></td>
    <td width="100px" height="55px" align="center" >數學<br><a href=http://study.ck.tp.edu.tw/clash_main.asp?f_mnuid=9&f_teaname=%AAL%ABH%A6w>林信安</a></td>
    <td width="100px" height="55px" align="center" >國文<br><a href=http://study.ck.tp.edu.tw/clash_main.asp?f_mnuid=9&f_teaname=%B4^%A6%A8%C0A>彭成錦</a></td>
    <td width="100px" height="55px" align="center" >國文<br><a href=http://study.ck.tp.edu.tw/clash_main.asp?f_mnuid=9&f_teaname=%B4^%A6%A8%C0A>彭成錦</a></td>
</tr>

<tr style="border-bottom-style: double">
    <td style="color:#FFFF99;" bgcolor="#2C2C2C" width="125px" height="55px" align="center" style="border-bottom-width:thick;border-bottom-style: double">第四節<br><font size="2" color="A0A0A0">11:10~12:00</font></td>
    <td width="100px" height="55px" align="center" >體育<br><a href=http://study.ck.tp.edu.tw/clash_main.asp?f_mnuid=9&f_teaname=%B6%C0%C2E%C0s>黃鴻龍</a></td>
    <td width="100px" height="55px" align="center" >生涯輔導<br><a href=http://study.ck.tp.edu.tw/clash_main.asp?f_mnuid=9&f_teaname=%B3%A2%B2Q%AES>郭淑娟</a></td>
    <td width="100px" height="55px" align="center" >數學<br><a href=http://study.ck.tp.edu.tw/clash_main.asp?f_mnuid=9&f_teaname=%AAL%ABH%A6w>林信安</a></td>
    <td width="100px" height="55px" align="center" >國文<br><a href=http://study.ck.tp.edu.tw/clash_main.asp?f_mnuid=9&f_teaname=%B4^%A6%A8%C0A>彭成錦</a></td>
    <td width="100px" height="55px" align="center" >體育<br><a href=http://study.ck.tp.edu.tw/clash_main.asp?f_mnuid=9&f_teaname=%B6%C0%C2E%C0s>黃鴻龍</a></td>
</tr>

<tr style="border-bottom-style: double">
    <td style="color:#FFFF99;" bgcolor="#2C2C2C" width="125px" height="55px" align="center">第五節<br><font size="2" color="A0A0A0">01:00~01:50</font></td>
    <td width="100px" height="55px" align="center" >基礎物理<br><a href=http://study.ck.tp.edu.tw/clash_main.asp?f_mnuid=9&f_teaname=%BCB%B0%EA%B4%C9>劉國棟</a></td>
    <td width="100px" height="55px" align="center" >第二外國<br><a href=http://study.ck.tp.edu.tw/clash_main.asp?f_mnuid=9&f_teaname=%B2%C5%B6%B2%AC%C0>符雯珊</a></td>
    <td width="100px" height="55px" align="center" >資訊科學<br><a href=http://study.ck.tp.edu.tw/clash_main.asp?f_mnuid=9&f_teaname=%B1%F6%A4%E5%BCz>梅文慧</a></td>
    <td width="100px" height="55px" align="center" >基礎物理<br><a href=http://study.ck.tp.edu.tw/clash_main.asp?f_mnuid=9&f_teaname=%BCB%B0%EA%B4%C9>劉國棟</a></td>
    <td width="100px" height="55px" align="center" >數學<br><a href=http://study.ck.tp.edu.tw/clash_main.asp?f_mnuid=9&f_teaname=%AAL%ABH%A6w>林信安</a></td>
</tr>

<tr style="border-bottom-style: double">
    <td style="color:#FFFF99;" bgcolor="#2C2C2C" width="125px" height="55px" align="center">第六節<br><font size="2" color="A0A0A0">02:00~02:50</font></td>
    <td width="100px" height="55px" align="center" >基礎物理<br><a href=http://study.ck.tp.edu.tw/clash_main.asp?f_mnuid=9&f_teaname=%BCB%B0%EA%B4%C9>劉國棟</a></td>
    <td width="100px" height="55px" align="center" >音樂<br><a href=http://study.ck.tp.edu.tw/clash_main.asp?f_mnuid=9&f_teaname=%AAL%AA%E2%C4%F5>林芬蘭</a></td>
    <td width="100px" height="55px" align="center" >資訊科學<br><a href=http://study.ck.tp.edu.tw/clash_main.asp?f_mnuid=9&f_teaname=%B1%F6%A4%E5%BCz>梅文慧</a></td>
    <td width="100px" height="55px" align="center" >基礎物理<br><a href=http://study.ck.tp.edu.tw/clash_main.asp?f_mnuid=9&f_teaname=%BCB%B0%EA%B4%C9>劉國棟</a></td>
    <td width="100px" height="55px" align="center" >數學<br><a href=http://study.ck.tp.edu.tw/clash_main.asp?f_mnuid=9&f_teaname=%AAL%ABH%A6w>林信安</a></td>
</tr>

<tr style="border-bottom-style: double">
    <td style="color:#FFFF99;" bgcolor="#2C2C2C" width="125px" height="55px" align="center">第七節<br><font size="2" color="A0A0A0">03:10~04:00</font></td>
	<td width="100px" height="55px" align="center" >基礎化學<br><a href=http://study.ck.tp.edu.tw/clash_main.asp?f_mnuid=9&f_teaname=%%B9%F9%AEa%BAa>廖家榮</a></td>
    <td width="100px" height="55px" align="center" >英文<br><a href=http://study.ck.tp.edu.tw/clash_main.asp?f_mnuid=9&f_teaname=%A4%FD%AD%A7%B4f>王郁惠</a></td>
    <td width="100px" height="55px" align="center" >歷史<br><a href=http://study.ck.tp.edu.tw/clash_main.asp?f_mnuid=9&f_teaname=%B6%C0%ACK%A4%EC>黃春木</a></td>
    <td width="100px" height="55px" align="center" >經典導讀<br><a href=http://study.ck.tp.edu.tw/clash_main.asp?f_mnuid=9&f_teaname=%B1%F6%A4%E5%BCz>梅文慧</a></td>
    <td width="100px" height="55px" align="center" >綜合活動<br><a href=http://study.ck.tp.edu.tw/clash_main.asp?f_mnuid=9&f_teaname=></a></td>
</tr>

<tr style="border-bottom-style: double">
    <td style="color:#FFFF99;" bgcolor="#2C2C2C" width="125px" height="55px" align="center">第八節<br><font size="2" color="A0A0A0">04:10~05:00</font></td>
	<td width="100px" height="55px" align="center" >基礎化學<br><a href=http://study.ck.tp.edu.tw/clash_main.asp?f_mnuid=9&f_teaname=%%B9%F9%AEa%BAa>廖家榮</a></td>
    <td width="100px" height="55px" align="center" >英文<br><a href=http://study.ck.tp.edu.tw/clash_main.asp?f_mnuid=9&f_teaname=%A4%FD%AD%A7%B4f>王郁惠</a></td>
    <td width="100px" height="55px" align="center" >歷史<br><a href=http://study.ck.tp.edu.tw/clash_main.asp?f_mnuid=9&f_teaname=%B6%C0%ACK%A4%EC>黃春木</a></td>
    <td width="100px" height="55px" align="center" >服務學習<br><a href=http://study.ck.tp.edu.tw/clash_main.asp?f_mnuid=9&f_teaname=%AAL%ABH%A6w>林信安</a></td>
    <td width="100px" height="55px" align="center" >班會<br><a href=http://study.ck.tp.edu.tw/clash_main.asp?f_mnuid=9&f_teaname=%AAL%ABH%A6w>林信安</a></td>
</tr>

</table>
-->
<table border="0">
<tr><td style="width:auto;height:auto;text-align:left">備注：</td></tr>
<tr><td style="width:auto;height:auto;text-align:left">每週二、四升旗，7:40到校，輪值打掃7:20分前到校打掃，</td></tr>
<tr><td style="width:auto;height:auto;text-align:left">其餘情形8:00後到校風紀幹事會點名缺席。</td></tr>
</table>
</center>
</body>
</html>


