<?php include("../include.php"); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>開根號計算</title>
<script type='text/javascript'>
parent.document.getElementById('title').innerHTML=document.title;
</script>
<link rel="stylesheet" type="text/css" href="./BS.css">
</head>
<body><center>

<h1>開根號計算</h1>
The answer is:<?php
//$pow1 = gmp_pow($cod, 31);
//$cmp1 = gmp_cmp("1234", "1000");
$l="0";$r=$ts;
$ans;
while(1){
	if(gmp_cmp($l,$r)>0)break;
	$k=gmp_strval(gmp_div_q(gmp_strval(gmp_add($l,$r)),"2"));
	if(gmp_cmp($ts,gmp_strval(gmp_pow($k,$pw)))>=0){
		$ans=$k;
		$l=gmp_strval(gmp_add($k,"1"));
		}
	else{
		$r=gmp_strval(gmp_add($k,"-1"));
		}
	}
echo $ans;
?>
<br>
<a href="depow.php">Back</a>
</center>
</body>
</html>



