<?php include("include.php"); ?>
<html>
<head>
<link rel="shortcut icon" href="pic/web/48.ico" type="image/x-icon" />
<script language="text/javascript">
</script>
<title><a href="other/time.php" target="main">時間</a></title>
<script type='text/javascript'>
parent.document.getElementById('title').innerHTML=document.title;
</script>
<script type="text/javascript" src="/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="/jquery.easing.1.3.js"></script>
<link rel="stylesheet" type="text/css" href="./BS.css">
<meta http-equiv="Content-Language" content="zh-tw">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<script type='text/javascript'>
function on(){
	today = new Date();
    minn="";
    if(today.getMinutes()<10){minn="0";} 
    secc="";
    if(today.getSeconds()<10){secc="0";}
	bs.innerHTML=today.getHours()+":"+minn+today.getMinutes()+":"+secc+today.getSeconds();
	setTimeout('on();',1000);
	}
</script>
<center>
<p id="tim" style="font-size:220px;">AAA</p>
</center>
<script type='text/javascript'>
var bs=document.getElementById("tim");
var bo=bs;
on();
</script>
</body>
	
</html>



