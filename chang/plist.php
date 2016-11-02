<?php include("../include.php"); ?><html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="Content-Language" content="zh-tw">
  <title>題目列表</title>
<script type='text/javascript'>
parent.document.getElementById('title').innerHTML=document.title;
</script>
<link rel="stylesheet" type="text/css" href="../BS.css">
 </head>
<body>
<h1><p align="center"><font color="#0000FF" size="5"></font></p></h1>
<center><br>
<h1><font color="#FFFF99">某科學的解題系統</font></h1><br>
<table border="0" cellspacing="0" cellpadding="3">
<tr bgcolor="#202020">
<td width="50">題號</td>
<td width="200">　題目</td>
<tr>
<?php
$fileopen = fopen("pdata/list.txt","r");
for($a=0;$a<20*$page;$a++){
	$p=fgets($fileopen,1000);
	if($p==""){
		break;
		}
	else{break;}
	}
for($a=0;$a<20;$a++){
	$pp=fgets($fileopen,1000);
	if($pp!=""){
		$p="?";
		for($z=0;$z<100;$z++){
			if($pp[$z+1]!=''){$p[$z]=$pp[$z];}
			else{break;}
			}

		echo"<tr bgcolor=\"#2C2C2C\"><td>".$p."</td>";
		$filopen = fopen("pdata/".trim($p)."/ph.txt","r");
		$ph=fgets($filopen,1000);
		echo"<td><a href=\"showp.php?p=".$p."\">　".$ph."</td></tr>";
		fclose($filopen);
		}
	else{break;}
	}
		fclose($fileopen);
?>
</table><br>
<a href="b.php">個人狀態</a>
</center>
<script type="text/javascript" src="http://tw.js.webmaster.yahoo.com/481638/ystat.js"></script><noscript><a href="http://tw.webmaster.yahoo.com"><img src=http://tw.img.webmaster.yahoo.com/481638/ystats.gif></a></noscript>
    
 </body>
</html>
