<?php include("../../include.php"); ?>
<?php
if((!$P_Re_Talk)&&$User==""){
    $p=1;
    }
if($CookieUser!=""){
	$roo=$room;
	$fileopen = fopen($name."/list.txt","r");
	for($a=0;;$a++){
		$room = fgets($fileopen,1000) ;
		if($room==""){break;}
		}
	fclose($fileopen);
	$fileopen = fopen($name."/data/".$a.".txt","w+");
	$th=trim($thing);	
	if($th!=""){
		fwrite($fileopen,$CookieUser."\n".date('Y',time()+$webdb['correctiontime'])."-".date('m',time()+$webdb['correctiontime'])."-".date('j',time()+$webdb['correctiontime'])."-".date(H,time()+$webdb['correctiontime'])."-".date(i,time()+$webdb['correctiontime'])."-".date(s,time()+$webdb['correctiontime'])."\n".$th);
		}
	fclose($fileopen);
	$fileopen = fopen($name."/list.txt","a+");
	fwrite($fileopen,$a."\n");
	fclose($fileopen);
	header("Location: read.php?room=".($roo));
	}    
else if($User!=""){
	$roo=$room;
	$fileopen = fopen($name."/list.txt","r");
	for($a=0;;$a++){
		$room = fgets($fileopen,1000) ;
		if($room==""){break;}
		}
	fclose($fileopen);
	$fileopen = fopen($name."/data/".$a.".txt","w+");
	$th=trim($thing);	
	if($th!=""){
		fwrite($fileopen,"guest:".$User."\n".date('Y',time()+$webdb['correctiontime'])."-".date('m',time()+$webdb['correctiontime'])."-".date('j',time()+$webdb['correctiontime'])."-".date(H,time()+$webdb['correctiontime'])."-".date(i,time()+$webdb['correctiontime'])."-".date(s,time()+$webdb['correctiontime'])."\n".$th."<br>");
		}
	fclose($fileopen);
	$fileopen = fopen($name."/list.txt","a+");
	fwrite($fileopen,$a."\n");
	fclose($fileopen);	header("Location: read.php?room=".($roo));
	}

?>
<html><head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <meta http-equiv="Content-Language" content="zh-tw">
<link rel="stylesheet" type="text/css" href="./BS.css">
   <title>留言中</title>  <script type='text/javascript'>
parent.document.getElementById('title').innerHTML=document.title;
</script></head>
  <body>
<?php
if($p==1){echo "請輸入暱稱！";}
if($p==2){echo "已有此話題！";}
?>
<center>
</center></body></html>

