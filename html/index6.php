<?php include("../include.php"); ?>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="Content-Language" content="zh-tw">
  <title>設定姓名資料</title>

<link rel="stylesheet" type="text/css" href="./BS.css">
 </head>
<body>
<p align="center"><img src="../pic/web/t3.gif" height="40"></p>
<h2 align="center"><b>注意：看完後請簽名！</b></h2>
<center><p>
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~平時小考~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
<br>
<br>
<form Action="checkit.php" Method="POST">
<select name="chocie" size="1">
<option value="">請選擇日期</option>

 <script language = "php">
	if (!(@file_exists("../data/test/clist.txt"))) // 檢查檔案是否存在
	{
	}
	else
	{    

		$fileopen = fopen("../data/test/clist.txt","r");
		fseek($fileopen,0);
		for($a=0;$a<100;$a++){
		$Talk = fgets($fileopen,100) ;
		if($Talk==""){break;}
		echo  "<option value=\"" . $a . "\">" . $Talk . "</option>";
}
		fclose($fileopen);
	}
  </script>

</select>
<INPUT TYPE=SUBMIT VALUE="GO!">
</form>
<br>
<br>
<br>
<br>
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~段考~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
<br>
<br>
<form Action="check.php" Method="POST">
<select name="choce" size="1">
<option value="">請選擇日期</option>

 <script language = "php">
	if (!(@file_exists("../data/test/clis.txt"))) // 檢查檔案是否存在
	{
	}
	else
	{    

		$fileopen = fopen("../data/test/clis.txt","r");
		fseek($fileopen,0);
		for($a=0;$a<100;$a++){
		$Talk = fgets($fileopen,100) ;
		if($Talk==""){break;}
		echo  "<option value=\"" . $a . "\">" . $Talk . "</option>";
}
		fclose($fileopen);
	}
  </script>

</select>
<INPUT TYPE=SUBMIT VALUE="GO!">
</form>
</center>
<script type="text/javascript" src="http://tw.js.webmaster.yahoo.com/481638/ystat.js"></script><noscript><a href="http://tw.webmaster.yahoo.com"><img src=http://tw.img.webmaster.yahoo.com/481638/ystats.gif></a></noscript>
    
 </body>
</html>




