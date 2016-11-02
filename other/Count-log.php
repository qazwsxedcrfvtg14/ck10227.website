<?php include("include.php"); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>log計算</title>
<script type='text/javascript'>
parent.document.getElementById('title').innerHTML=document.title;
</script>
<link rel="stylesheet" type="text/css" href="./BS.css">
</head>
<body><center>

<h1>log計算</h1>
<?php
echo "log$ts=".log10($ts);
?>
<br>
<a href="log.php">Back</a>
</center>
</body>
</html>



