<?php include("../include.php"); ?>
<?php
if(!$P_New_Talks){
    $p=1;
   	}
else{
	$name=trim($name);
	for($m=0;$m<100000;$m++){
		if($name[$m]=="\""||$name[$m]=="\\"||$name[$m]=="/"||$name[$m]=="."){
			$p=4;break;
			}
		if($name[$m]==""){break;}
		}
	if($name==""){$p=6;}
	if($p!=4&&$p!=6){
		$fileopen = fopen("data/list.txt","r");
		for($d=0;;$d++){
			$s=fgets($fileopen,1000);
			if($s==""){break;}
			$ss=trim($s);
			if($name==$ss){$p=2;}
			}
		fclose($fileopen);
		if($p!=2){
			$fileopen = fopen("data/list.txt","a");
			fwrite($fileopen,$name."\n");
			fclose($fileopen);
			if(!(@file_exists("data/".$name."/list.txt"))){
				mkdir("data/".$name,0700);
				mkdir("data/".$name."/data",0700);
				}
			$fileopen = fopen("data/".$name."/data/0.txt","w");
			fwrite($fileopen,$CookieUser."\n".date('Y',time()+$webdb['correctiontime'])."-".date('m',time()+$webdb['correctiontime'])."-".date('j',time()+$webdb['correctiontime'])."-".date(H,time()+$webdb['correctiontime'])."-".date(i,time()+$webdb['correctiontime'])."-".date(s,time()+$webdb['correctiontime'])."\n".$thing);
			fclose($fileopen);
			
			$fileopen = fopen("data/".$name."/list.txt","w+");
			fwrite($fileopen,"0\n");
			fclose($fileopen);
			$fileopen = fopen("data/list.txt","r");
			for($a=0;$a<1000;$a++){
				$room = fgets($fileopen,1000) ;
				if($room==""){break;}
				}
			fclose($fileopen);
			$fileopen = fopen("data/power/power/".$name.".txt","w+");
			fwrite($fileopen,$power_level);
			fclose($fileopen);
			header("Location: data/read.php?room=".($a-1)); 
		
			}
		}
    }   
?>
<html><head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <meta http-equiv="Content-Language" content="zh-tw">
<link rel="stylesheet" type="text/css" href="./BS.css">
   <title>發表中</title>  <script type='text/javascript'>
parent.document.getElementById('title').innerHTML=document.title;
</script></head>
  <body>
<?php
if($p==1){echo "權限不足(請登入)！";}
if($p==2){echo "已有此話題！";}
if($p==4){echo "請標題不要有特殊字元!";}
if($p==4){echo "標題請勿為空!";}
?>
<center>
</center></body></html>
