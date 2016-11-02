<?php include("../../include.php"); ?>
<?php
$roo=$room;
$fileopen = fopen($name."/data/".$idd2.".txt","r");
$maker=fgets($fileopen,10000);
$maker=trim($maker);
if(!$P_Del_Talks&&$maker!=$CookieUser){
    $p=1;
    }
else{
	if((@file_exists("data/".$name."/data/0.txt"))){
		$p=2;
		}
	else{
		$fileopen = fopen($name."/list.txt","r");
		for($a=0;;$a++){
			$room = fgets($fileopen,1000) ;
			if($room==""){break;}
			$idd[$a]=$room;
			}
		fclose($fileopen);
		for($b=0;$b<($a);$b++){
			$rn=trim($idd[$b]);
			if($idd2==$rn){$idd[$b]=".\n";}
			}
		$fileopen = fopen($name."/list.txt","w+");
		for($b=0;$b<($a);$b++){
			fwrite($fileopen,$idd[$b]);
			}	
		fclose($fileopen);
		header("Location: read.php?room=".($roo));
    	}
	}
?>

<html><head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <meta http-equiv="Content-Language" content="zh-tw">
<link rel="stylesheet" type="text/css" href="./BS.css">
   <title>刪除中</title><script type='text/javascript'>
parent.document.getElementById('title').innerHTML=document.title;
</script>  </head>
  <body>
<?php
if($p==1){echo "權限不足！";}
if($p==2){echo "已有此話題！";}
?>
<center>
</center></body></html>

