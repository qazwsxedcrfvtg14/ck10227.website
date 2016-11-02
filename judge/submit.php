<?php include("../include.php"); ?><html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="Content-Language" content="zh-tw">
  <title>送出</title>
<script type='text/javascript'>
parent.document.getElementById('title').innerHTML=document.title;
</script>
<link rel="stylesheet" type="text/css" href="../BS.css">
 </head>
<body>
<?php
if($CookieUser!=""){
$top=(int)file_get_contents("top")+1;
//echo $top;
file_put_contents("top",$top,LOCK_EX);
file_put_contents("source/".$top, $code,LOCK_EX);
$file=fopen("queue","a");
fprintf($file,$top."\n".$p."\n".$CookieUser."\n");
fclose($file);
echo "已送出！ Run ID:$top";
}
else{
echo "請登入！";
}
?>

</center>
<script type="text/javascript" src="http://tw.js.webmaster.yahoo.com/481638/ystat.js"></script><noscript><a href="http://tw.webmaster.yahoo.com"><img src=http://tw.img.webmaster.yahoo.com/481638/ystats.gif></a></noscript>
    
 </body>
</html>
