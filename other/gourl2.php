<?php include("../include.php"); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>GoURL</title>
<script type='text/javascript'>
parent.document.getElementById('title').innerHTML=document.title;
</script>
<link rel="stylesheet" type="text/css" href="./BS.css">
</head>
<body><center>

<h1>GoURL</h1>
<?php
echo "<a href='http://ck10227.twbbs.org?link=".urlencode(str_replace ("http://ck10227.twbbs.org/","",$ts))."' target='_blank'>http://ck10227.twbbs.org?link=".urlencode(str_replace ("http://ck10227.twbbs.org/","",$ts))."</a>";
?>
<br>
<br>
<a href="gourl.php">Back</a>
</center>
</body>
</html>



