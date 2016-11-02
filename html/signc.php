<?php include("../include.php"); ?><html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="Content-Language" content="zh-tw">
  <title>設定訪客姓名資料</title>

<link rel="stylesheet" type="text/css" href="./BS.css">
 </head>
 
<body>
  <script language = "php">
	if ((@file_exists("../sign/".$form.".txt"))) // 檢查檔案是否存在
	{	
		$fileopen = fopen("../sign/".$form.".txt","r");
		for($a=0;$a<1000;$a++){
			$che = fgets($fileopen,1000) ;
			if($che==""){break;}
			$ss="?";
			for($z=0;$z<100;$z++){
				if($che[$z+2]!=''){$ss[$z]=$che[$z];}
				else{break;}
				}
				$num=intval($ss);
				$num%=1000;
				$cou[$num]=1;
			$che = fgets($fileopen,1000) ;
			}		fclose($fileopen);

	}
		for($w=901;$w<918;$w++){
			if($cou[$w]==1){echo "990".$w." o<br>";}
			else{echo "<font color=\"RED\">990".$w." x</font><br>";}
			}
		for($w=921;$w<936;$w++){
			if($cou[$w]==1){echo "990".$w." o<br>";}
			else{echo "<font color=\"RED\">990".$w." x</font><br>";}
			}
	
  </script>
  <br>
	<a href="index6">回上一頁</a><script type="text/javascript" src="http://tw.js.webmaster.yahoo.com/481638/ystat.js"></script><noscript><a href="http://tw.webmaster.yahoo.com"><img src=http://tw.img.webmaster.yahoo.com/481638/ystats.gif></a></noscript>
    
</body>
</html>
