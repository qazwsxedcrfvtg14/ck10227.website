<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="Content-Language" content="zh-tw">
  <title>即時動態</title>
<script type='text/javascript'>
parent.document.getElementById('title').innerHTML=document.title;
</script>
<link rel="stylesheet" type="text/css" href="../BS.css">
 </head>
<body bgcolor="#FFFFFF">
<h1><p align="center"><font color="#0000FF" size="5"></font></p></h1>
<center>
<table border="1">
<tr>
<td>編號</td>
<td>送出者</td>
<td>題號</td>
<td>時間</td>
<td>結果</td>
<tr>
<?php
$fileopen = fopen("tdata\\nowl.txt","r");
for($a=0;$a<20;$a++){
	$num=fgets($fileopen,1000);
	$user=fgets($fileopen,1000);
	$P=fgets($fileopen,1000);
	$t=fgets($fileopen,1000);
	$R=fgets($fileopen,1000);
	if($R!=""){
		echo"<tr><td>".$num."</td><td>".$user."</td><td>".$P."</td><td>".$t."</td><td>".$R."</td></tr>";
		}
	else{break;}
	}
		fclose($fileopen);
?>
</table>

</center>
<script type="text/javascript" src="http://tw.js.webmaster.yahoo.com/481638/ystat.js"></script><noscript><a href="http://tw.webmaster.yahoo.com"><img src=http://tw.img.webmaster.yahoo.com/481638/ystats.gif></a></noscript>
    
 </body>
</html>
