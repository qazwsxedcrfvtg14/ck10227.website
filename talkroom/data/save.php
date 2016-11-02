<?php include("../../include.php"); ?>
<?php
$roo=$room;
if(!$P_Save_Talks){
    $p=1;
    }
else{
	if((@file_exists("data/".$name."/data/0.txt"))){
		$p=2;
		}
	else{
		$fileopen = fopen($name."/list.txt","r");
		for($a=0;;$a++){
			$room = fgets($fileopen,1000);
			if($room==""){break;}
			$idd[$a]=$room;
			}
		fclose($fileopen);
		for($b=0;$b<($a);$b++){
			$rn=trim($idd[$b]);
			if($rn=="."){$idd[$b]=$b."\n";}
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
<link rel="stylesheet" type="text/css" href="./BS.css">
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <meta http-equiv="Content-Language" content="zh-tw">
   <title>救援中</title>
<script type='text/javascript'>
parent.document.getElementById('title').innerHTML=document.title;
</script>
<link rel="stylesheet" type="text/css" href="./BS.css">
</head>
  <body>
<?php
if($p==1){echo "權限不足！";}
if($p==2){echo "找不到此話題！";}
?>
<center>
</center></body></html>

