<?php include("../include.php"); ?>
<?php    
if(!$P_Del_Talks){
    $p=1;
    }
else{
	$fileopen = fopen("data/list.txt","r");
	for($a=0;;$a++){
		$room = fgets($fileopen,1000) ;
		if($room==""){break;}
		$idd[$a]=$room;
		}
	fclose($fileopen);
	for($b=0;$b<($a);$b++){
		$rn=trim($idd[$b]);
		if($name==$rn){$idd[$b]=".\n";}
		}
	$fileopen = fopen("data/list.txt","w+");
	for($b=0;$b<($a);$b++){
		fwrite($fileopen,$idd[$b]);
		}	
	fclose($fileopen);
	header("Location: talkroom.php");
    }   
?>
<html><head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <meta http-equiv="Content-Language" content="zh-tw">
<link rel="stylesheet" type="text/css" href="./BS.css">
   <title>刪除中</title>  <script type='text/javascript'>
parent.document.getElementById('title').innerHTML=document.title;
</script></head>
  <body>
<?php
if($p==1){echo "權限不足！";}
?>
<center>
</center></body></html>

