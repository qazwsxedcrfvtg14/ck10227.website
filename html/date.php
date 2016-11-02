<?php include("../include.php"); ?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>行事曆</title>
<script type="text/javascript" src="../jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="../jquery.easing.1.3.js"></script>
<script type='text/javascript'>
parent.document.getElementById('title').innerHTML=document.title;
</script>
<link rel="stylesheet" type="text/css" href="./BS.css">
<style type="text/css">
</style>
</head>
<body>
<center>
<br>
<br>
<?php
/*
for($ck=56;$ck<(56+30);$ck++){
	$fileopen = fopen("../user/group/ck10210".$ck.".txt","w");
	fwrite($fileopen,"class\n");
	fclose($fileopen);
	}*/
?>
<?php
$Y=intval(date(Y,time()+$webdb['correctiontime']));
$M=intval(date(n,time()+$webdb['correctiontime']));
$D=intval(date(d,time()+$webdb['correctiontime']));
//$m=intval(date(H,time()+$webdb['correctiontime']));
//$i=intval(date(i,time()+$webdb['correctiontime']));
//$s=intval(date(s,time()+$webdb['correctiontime']));
echo "今天是".$Y."年".$M."月".$D."號<br>";
echo "<font color=\"#373C38\">伺服器時間：".date("Y年m月d號H點i分s秒",time()+$webdb['correctiontime'])."</font><br>";
?>
<table>
<?
$a=$M;$b=$D;$c=$Y;
for($count=0;$count<15;){
	if((@file_exists("../date/".$c."-".$a."-".$b.".txt"))){
		$fileopen = fopen("../date/".$c."-".$a."-".$b.".txt","r");
		$str=fgets($fileopen,500);
		$str=fgets($fileopen,500);
		$str=trim($str);
		fclose($fileopen);
		echo "<tr><td align=\"right\">".$a."</td><td>月</td><td align=\"right\">".$b."</td><td>號是</td><td>『".$str."』</td></tr>";
		$count++;
		}
	else if((@file_exists("../date/".$a."-".$b.".txt"))){
		$fileopen = fopen("../date/".$a."-".$b.".txt","r");
		$str=fgets($fileopen,500);
		$str=fgets($fileopen,500);
		$str=trim($str);
		fclose($fileopen);
		echo "<tr><td align=\"right\">".$a."</td><td>月</td><td align=\"right\">".$b."</td><td>號是</td><td>『".$str."』</td></tr>";
		
		$count++;
		}
	$b++;
	if($b>31){$a++;$b=1;}
	if($a>12){$a=1;$c++;}	
	}?>
</table>
<?
$server = '165.193.126.229';//'time.nist.gov';
$port	= 13;
$fp = fsockopen($server, $port, $errno, $errstr, 30);
if (!$fp){
   echo "$errstr ($errno)\n";
	}
else{
/*
	fgets($fp, 128);
	$now_time=fgets($fp, 128);
	$nta=explode(" ",$now_time);
	$ntaa=explode("-",$nta[1]);
	$ntab=explode(":",$nta[2]);
	$Y=intval("20".$ntaa[0]);
	$M=intval($ntaa[1]);
	$D=intval($ntaa[2]);
	$m=intval($ntab[0]);
	$i=intval($ntab[1]);
	$s=intval($ntab[2]);
	$m+=8;
	echo "<br>網路絕對準確時間：<br>";
	echo date("Y年m月d號H點i分s秒",mktime($m,$i,$s,$N,$D,$Y));//$Y."年".$M."月".$D."號".$m."點".$i."分".$s."秒";
	echo "<br>";*/
	}   
fclose($fp);
?>
<br><a href="index7.php">返回</a>
</center>
</body>
</html>


