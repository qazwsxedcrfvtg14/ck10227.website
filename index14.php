<?php include("include.php"); ?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>更改密碼</title>
<script type='text/javascript'>
parent.document.getElementById('title').innerHTML=document.title;
</script>
<link rel="stylesheet" type="text/css" href="./BS.css">
<style type="text/css">
<!--
a:link {
	color: #ffffff;
}
a:visited {
	color: #ffffff;
}
a:hover {
	color: #ffffff;
}
a:active {
	color: #ffffff;
}
-->
</style></head>

<body >
<?php
if($nname==""){$p=4;}
else if (!(@file_exists("user/" . $nname . ".txt"))){
	$p=1;
	}
else{ 
	$fileopen = fopen("user/" . $nname . ".txt","r");
	$word = fgets($fileopen,100) ;
	fclose($fileopen);
	$word=trim($word);	
	$past=trim($past);	
	if($past==$word){
		
		$pass=trim($pass);	
		$passs=trim($pssss);	
		if($pass==$passs){
			$fileopen = fopen("user/" . $nname . ".txt","r");
			fseek($fileopen,0);
			$name = fgets($fileopen,1000) ;
			$name = fgets($fileopen,1000) ;
			$mail = fgets($fileopen,1000) ;
			$web = fgets($fileopen,1000) ;
			$phone = fgets($fileopen,1000) ;
			$tell = fgets($fileopen,1000) ;
			$pic = fgets($fileopen,1000) ;
			fclose($fileopen);
			if($pass==$word){$p=6;}
			else{
				$fileopen=fopen("user/" . $nname . ".txt","w");
				fwrite($fileopen, $pass."\n");
				fwrite($fileopen, $name  );
				fwrite($fileopen, $mail  );
				fwrite($fileopen, $web  );
				fwrite($fileopen, $phone  );
				fwrite($fileopen, $tell);
				fwrite($fileopen, $pic);
				$p=5;
				}
			}
		else{$p=2;}
		}
	else{$p=3;}
	}
?>
<?php
if($p==1){	echo "<font color=\"#FFFFFF\">你的檔案發生了問題，請透過討論區告訴站長！</font>";}
if($p==2){echo "<font color=\"#FFFFFF\">驗證錯誤！</font><p><a href=\"londing.php\">按我回首頁</a>";}
if($p==3){echo "<font color=\"#FFFFFF\">密碼錯誤！</font><p><a href=\"londing.php\">按我回首頁</a>";}
if($p==4){echo "<font color=\"#FFFFFF\">你需要登入才能查看!</font><p><a href=\"londing.php\">按我回首頁</a>";}
if($p==5){echo "<font color=\"#FFFFFF\">成功</font><p><a href=\"londing.php?name=".$nname."\">按我回首頁</a>";}
if($p==6){echo "<font color=\"#FFFFFF\">密碼不要和原來一樣！</font><p><a href=\"londing.php\">按我回首頁</a>";}
?>
<p></body>
</html>


