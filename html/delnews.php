<?php include("../include.php"); ?>
<?php
if(!$P_Del_News){
    $p=1;
    }
else{
	if(!(@file_exists("../data/news/news.txt"))){
		$p=2;
		}
	else{
		$fileopen = fopen("../data/news/news.txt","r");
		for($a=0;;$a++){
			$news[$a] = fgets($fileopen,1000) ;
			if($news[$a]==""){break;}
			}
		fclose($fileopen);
		$news[$id]=".$#@";
		$fileopen = fopen("../data/news/news.txt","w+");
		for($b=0;$b<($a);$b++){
			if($news[$b]!=".$#@"){fwrite($fileopen,$news[$b]);}
			}	
		fclose($fileopen);header("Location: index9.php");
		}
	}
?>

<html><head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <meta http-equiv="Content-Language" content="zh-tw">

<link rel="stylesheet" type="text/css" href="./BS.css">
   <title>刪除消息中</title>  
<script type='text/javascript'>
parent.document.getElementById('title').innerHTML=document.title;
</script></head>
<?php
if($p==1){echo "權限不足！";}
if($p==2){echo "發生不明錯誤，錯誤代碼800請去討論區留言。";}
?>
<center>
</center></body></html>

