<?php include("include.php"); ?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>更改個資</title>
<script type='text/javascript'>
parent.document.getElementById('title').innerHTML=document.title;
</script>
<link rel="stylesheet" type="text/css" href="./BS.css">
</head>

<body >
<?php
if($CookieUser==""){echo "你需要登入才能查看!<br>";}
else if (!(@file_exists("user/" . $CookieUser . ".txt")))
	{
	echo "你的檔案發生了問題，請透過討論區告訴站長！";
	}
else{
	$fileopen = fopen("user/" . $CookieUser . ".txt","r");
	fseek($fileopen,0);
	$word = fgets($fileopen,100) ;
	fclose($fileopen);
	$past=trim($past);	
	$word=trim($word);		
	if($word==$past){
		$pass=trim($pass);	
		$passs=trim($passs);
		if($pass==$passs){
			
			$fileopen = fopen("user/" . $CookieUser . ".txt","r");
			fseek($fileopen,0);
			$oldpass = fgets($fileopen,1000) ;
			$name = fgets($fileopen,1000) ;
			$pic = fgets($fileopen,1000) ;
			$pic = fgets($fileopen,1000) ;
			$pic = fgets($fileopen,1000) ;
			$pic = fgets($fileopen,1000) ;
			$pic = fgets($fileopen,1000) ;
			fclose($fileopen);
			$fileopen = fopen("user/" . $CookieUser . ".txt","w");
			if($pass!="")
				fwrite($fileopen, $pass . "\n");
			else
				fwrite($fileopen, $oldpass);
			fwrite($fileopen, $newname ."\n");
			fwrite($fileopen, $mail . "\n");
			fwrite($fileopen, $web . "\n");
			fwrite($fileopen, $phone . "\n");
			fwrite($fileopen, $tell . "\n");
			fwrite($fileopen, $pic);
			fclose($fileopen);
			echo "完成！";
			}
		else{echo "驗證錯誤！";}
		}
	else{echo "密碼錯誤！";}
	}
?>
<p>
<a href="html/index7.php">按我回首頁</a>
<p></body>
</html>


