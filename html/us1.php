<?php include("../include.php"); ?>﻿<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="Content-Language" content="zh-tw">
<link rel="stylesheet" type="text/css" href="./BS.css">
  <title>關於我們</title><script type='text/javascript'>
parent.document.getElementById('title').innerHTML=document.title;
</script>
<style type="text/css">
table{
    font-family:'Roboto','LiHei Pro','微軟正黑體';
    font-size:16px;
    line-height:24px;
}
</style>
 </head>
<body >
  <center><br><br>
  <form Action="file.php" Method="POST">
    欲查詢之帳號:
    <input type="text" size="20"  name="code" id="code">
	<INPUT TYPE=SUBMIT VALUE="送出!"><br>
</form>
  <br>
<table>
<?php
		if($P_Power_See_User)
			$users=glob('../user/*.txt');
		else
			$users=glob('../user/ck*.txt');
		$tmp=0;
		foreach($users as $value){
		$value=str_replace("../user/","", $value); 
		$value=str_replace(".txt","", $value);
	  	$fi = fopen("../user/".$value.".txt","r");
		$name=fgets($fi,10000);
		$name=fgets($fi,10000);
		$name=trim($name);
		fclose($fi);
		$name="<font color=\"#FFFF99\">".$name."</font>";
		if(!$P_See_Name){$name="";}
		if($tmp%3==0){echo"<tr>";}
	    echo "<td align=\"left\"><a href=\"file.php?code=".$value."\">".$value."(".$name.")&nbsp;&nbsp;&nbsp;&nbsp;</a></td>";
		if($tmp%3==2){echo"</tr>";}
		$tmp++;
		}
if($tmp%3!=0){echo"</tr>";}
		
?>
 </center>
 <script type="text/javascript" src="http://tw.js.webmaster.yahoo.com/481638/ystat.js"></script><noscript><a href="http://tw.webmaster.yahoo.com"><img src=http://tw.img.webmaster.yahoo.com/481638/ystats.gif></a></noscript>
    
 </body>
</html>
