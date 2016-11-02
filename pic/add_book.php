<?php include("../include.php"); ?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>開新相簿</title>
<script type='text/javascript'>
parent.document.getElementById('title').innerHTML=document.title;
</script>
<link rel="stylesheet" type="text/css" href="./BS.css">
</head>
<body>
<center>
<h1>開新相簿</h1>
<form Action="make_book.php" Method="POST">  
<?php

$P_Up_Pic=0;
if($P_Add_Book)
echo "相簿名稱：<input type='text' size='30'  name='ts' id='ts'><INPUT TYPE=SUBMIT VALUE='確定'><br>";
else
echo "權限不足！";

?>
</form>
</center>
<br>
<br>
<p></body>
</html>



