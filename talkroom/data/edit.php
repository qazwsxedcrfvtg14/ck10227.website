<?php include("../../include.php"); ?>
<?php
if($CookieUser!=""){
	$fileopen = fopen($name."/data/".$idd2.".txt","r");
	$maker=fgets($fileopen,1000);
	$maker=trim($maker);
	fclose($fileopen);
	if($P_Power_Edit_Talk||$maker==$CookieUser){
		$namme=$maker."\n";
		$th=trim($thing);
		$fileopen = fopen($name."/data/".$idd2.".txt","w+");
		fwrite($fileopen,$namme.date('Y',time()+$webdb['correctiontime'])."-".date('m',time()+$webdb['correctiontime'])."-".date('j',time()+$webdb['correctiontime'])."-".date(H,time()+$webdb['correctiontime'])."-".date(i,time()+$webdb['correctiontime'])."-".date(s,time()+$webdb['correctiontime'])."\n".$th);
		fclose($fileopen);header("Location: read.php?room=".($room));
		}
	else{$p=1;}
	}
else{
	$p=1;	
	}
?>
<html><head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <meta http-equiv="Content-Language" content="zh-tw">
<link rel="stylesheet" type="text/css" href="./BS.css">
   <title>編輯中</title><script type='text/javascript'>
parent.document.getElementById('title').innerHTML=document.title;
</script>  </head>
  <body>
<?php
if($p==1){echo "權限不足！";}
?>
<center>
</center></body></html>

