<?php include("../include.php"); ?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  		<meta http-equiv="Content-Language" content="zh-tw">
		<link rel="stylesheet" href="./filef/thickbox.css" type="text/css" media="screen">
		<script type="text/javascript" src="./filef/jquery.js"></script> 
		<script type="text/javascript" src="./filef/thickbox.js"></script> 
		<link rel="stylesheet" type="text/css" href="./BS.css">

<?php	
if((@file_exists("../user/".$code.".txt"))){
	$file = fopen("../user/".$code.".txt","r");
	$password = fgets($file,1000) ;	
	$name = fgets($file,1000);
	$mail = fgets($file,1000);
	$web = fgets($file,1000);	
	$phone = fgets($file,1000);
	$tell = fgets($file,1000);
	$pic = fgets($file,1000);
	fclose($file);
	$pass=trim($pass);
	$name=trim($name);
	$mail=trim($mail);
	$web=trim($web);
	$phone=trim($phone);
	$tell=trim($tell);
	$pic=trim($pic);
	if($mail==""){$mail="無!";}
	if($web==""){$web="無!";}
	if($phone==""){$phone="無!";}
	if($tell==""){$tell="無!";}
	if(!$P_See_Name)$name="？？？";
	if(!$P_See_Email)$mail="權限不足！";
	if(!$P_See_Myweb)$web="權限不足！";
	if(!$P_See_Homephone)$phone="權限不足！";
	if(!$P_See_Tlelphone)$tell="權限不足！";
	if(!$P_See_Password)$pass="權限不足！";
	if($pic==""){$pic="adminz.jpg";}
	
	 echo "<title>".$name."</title><script type='text/javascript'>
parent.document.getElementById('title').innerHTML=document.title;
</script>
<style type=\"text/css\">
table{
    font-family:'Roboto','LiHei Pro','微軟正黑體';
    font-size:16px;
    line-height:24px;
}
</style>
 	</head>
	<body>
		<center>";
  	echo "<br><br><table border=\"3\" cellspacing=\"0\" cellpadding=\"3\" bordercolor=\"#2C2C2C\"><tr bgcolor=\"#202020\"><td COLSPAN=\"4\" align=\"center\">".$code."</td></tr><tr bgcolor=\"#2C2C2C\"><td COLSPAN=\"2\" rowspan=\"4\" align=\"center\"><a href=\"../pic/web/member/".$pic."\" class=\"thickbox\" rel=\"pic\"><img src=\"smallpic.php?src=../pic/web/member/".$pic."&h=150&zc=1\" height=\"150\" alt=\"沒有圖！\"></a></td><td>電子信箱：</td><td>".$mail."</td></tr><tr bgcolor=\"#2C2C2C\"><td>個人網站：</td><td><a href=\"".$web."\" target=\"blank\">".$web."</a></td></tr><tr bgcolor=\"#2C2C2C\"><td>家裡電話：</td><td>".$phone."</td></tr><tr bgcolor=\"#2C2C2C\"><td>手　　機：</td><td>".$tell."</td></tr>";

	if($P_See_Last_Login){
		if((@file_exists("../IPs/".$code.".txt"))){
			$fi = fopen("../IPs/".$code.".txt","r");
			$UIP=fgets($fi,100000);
			$UTIME=fgets($fi,100000);
			fclose($fi);
			$UIP=trim($UIP);
			$UTIME=trim($UTIME);
			$UIPs=explode(".",$UIP);
			}
		if($P_Power_See_Last_Login){
			echo"<tr bgcolor=\"#2C2C2C\"><td>IP位置：</td><td>".$UIP."&nbsp;</td>";
			}
		else{
			echo"<tr bgcolor=\"#2C2C2C\"><td>IP位置：</td><td>".$UIPs[0].".".$UIPs[1].".***.***&nbsp;"."</td>";
			}
		echo"<td>最後上線：</td><td>".$UTIME."&nbsp;</td></tr>";
		}
	if($P_Set_Power){
		if((@file_exists("../user/group/".$code.".txt"))){
			$powrr=file("../user/group/".$code.".txt");
	  		}
		else{
			$powrr[0]="Normal";
			}
		echo"<tr bgcolor=\"#2C2C2C\">";
		echo"<td>權　　限：</td><td><a href=\"../setpower.php?code=".$code."&power=".$powrr[0]."\">".$powrr[0]."</a></td>";
		
		if($P_See_Password){
	  		echo"<td>密　　碼：</td><td><font color=\"#2C2C2C\">".$password."</font></td>";
			echo"</tr>";
			}
		}
  	echo"</table>";
  	if($CookieUser==$code||$P_Power_Change_Pic){echo "<a href=\"big.php?name=".$code."\" target=\"_blank\">更換大頭貼</a>";}
	}
else{echo"<title>個人檔案</title><script type='text/javascript'>
parent.document.getElementById('title').innerHTML=document.title;
</script>
<style type=\"text/css\">
table{
    font-family:'Roboto','LiHei Pro','微軟正黑體';
    font-size:16px;
    line-height:24px;
}
</style>
 	</head>
	<body>
		<center><br><br>
查無此號！";}
?>
<br>
<a href="us1.php">回上一頁</a>
</center>
</body>
</html>
