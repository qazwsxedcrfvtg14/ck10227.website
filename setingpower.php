<?php include("include.php"); ?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>設定中</title>
<script type='text/javascript'>
parent.document.getElementById('title').innerHTML=document.title;
</script>
<link rel="stylesheet" type="text/css" href="./BS.css">
</head>
<body>
<p>
<?php
  $err=0;
if(!$P_Set_Power){
	$err=1;	
	}
  if($err==0){
	  $fileopen = fopen("user/group/".$code.".txt","w");
		fwrite($fileopen,$power."\n");
		fclose($fileopen);
			echo"
  <table><tr><td>
  帳號：</td><td>".$code."</td></tr>
  <tr><td>
  權限：</td><td>".$power."</td></tr></table>
  ";}
  if($err==1){echo"權限不足！";}
?>
<br><br><a href="seealluser.php">Back</a>
</html>


