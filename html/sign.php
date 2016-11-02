<?php include("../include.php"); ?><html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="Content-Language" content="zh-tw">
  <title>設定訪客姓名資料</title>

<link rel="stylesheet" type="text/css" href="./BS.css">
 </head>
 
<body>
 <center>     
  <script language = "php">
	if ((@file_exists("../sign/".$form.".txt"))) // 檢查檔案是否存在
	{
		$fileopen = fopen("../sign/".$form.".txt","r");$q=1;
		for($a=0;$a<1000;$a++){
			$che = fgets($fileopen,1000) ;
			if($che==""){break;}
			$ss="?";
			for($z=0;$z<100;$z++){
				if($che[$z+1]!=''){$ss[$z]=$che[$z];}
				else{break;}
				}
			if($ss==$CookieUser){$q=0;break;}
			$che = fgets($fileopen,1000) ;
			}
		if($q&&$CookieUser[0]=='9'&&$CookieUser[1]=='9'&&$CookieUser[2]=='0'&&$CookieUser[3]=='9'&&($CookieUser[6]=='p'||$CookieUser[6]=='P')){
			$fileopen = fopen("../sign/".$form.".txt","a");
			fwrite($fileopen,$CookieUser."\n".$REMOTE_ADDR.",".date('Y')."-".date('m')."-".date('j')."-".date(H)."-".date(i)."-".date(s).",".$name."\n");
			fclose($fileopen);
			echo "你已經簽名完成,你的名字是：".$name;
			}
		else{
			echo "你簽過了你沒權利(只有家長可以)簽！";
			}
	}
	else{
		if($CookieUser[0]=='9'&&$CookieUser[1]=='9'&&$CookieUser[2]=='0'&&$CookieUser[3]=='9'&&($CookieUser[6]=='p'||$CookieUser[6]=='P')){
		$fileopen = fopen("../sign/".$form.".txt","a");
		fwrite($fileopen,$CookieUser."\n".$REMOTE_ADDR.",".date('Y')."-".date('m')."-".date('j')."-".date(H)."-".date(i)."-".date(s).",".$name."\n");
		fclose($fileopen);
			echo "你已經簽名完成,你的名字是：".$name;
			}
		else{
			echo "你簽過了或你沒權利(只有家長可以)簽！";
			}
		}
	
  </script>
 </table>
	<a href="index6">回上一頁</a>
  </center><script type="text/javascript" src="http://tw.js.webmaster.yahoo.com/481638/ystat.js"></script><noscript><a href="http://tw.webmaster.yahoo.com"><img src=http://tw.img.webmaster.yahoo.com/481638/ystats.gif></a></noscript>
    
</body>
</html>
