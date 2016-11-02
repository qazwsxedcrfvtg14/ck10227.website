<?php include("include.php"); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>亂數生成</title>
<script type='text/javascript'>
parent.document.getElementById('title').innerHTML=document.title;
</script>
<link rel="stylesheet" type="text/css" href="./BS.css">
</head>
<body><center>
<h1>亂數生成</h1>
<table>
<?php
if($ts==31){
  	$ts--;
	for($i=1;$i<=$ts;$i++){
		$k=rand(1,30);
		while($rnd[$k]==1)$k=rand(1,30);
		$rnd[$k]=1;
			echo "<td align=\"right\">".$k."</td>";
		if($i%6==0)echo"</tr><tr>";
		}
	echo"</tr>";
	}
else if($ts>30)echo "<tr><td>班上沒那麼多人！！！</td></tr>";
else{
	for($i=1;$i<=$ts;$i++){
		$k=rand(1,30);
		while($rnd[$k]==1)$k=rand(1,30);
		$rnd[$k]=1;
		if($i>9)
			echo "<td>第</td><td align=\"right\">". $i ."</td><td>位是:</td><td align=\"right\">  ".$k."</td>";//<td width=\"30\"> </td>";
		else
			echo "<td>第</td><td align=\"right\">". $i ."</td><td>位是:</td><td align=\"right\">  ".$k."</td>";//<td width=\"30\"> </td>";
		if($i%1==0)echo"</tr><tr>";
		}
	echo"</tr>";
	}
?>
</table>
<br>
<a href="Rand.php">Back</a>
</center>
</body>
</html>



