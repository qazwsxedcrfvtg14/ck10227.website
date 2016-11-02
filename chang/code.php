<?php include("../include.php"); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>送出</title>
<script type='text/javascript'>
parent.document.getElementById('title').innerHTML=document.title;
</script>
<link rel="stylesheet" type="text/css" href="../BS.css">
</head>
<body role="application">
<center>
<form method="post" action="submit.php">
    <table border="1">
	    <tr>     
		<td width="600">problem:<input  name="p" type="text" id="p" value="<? echo $p;?>" size="13"></td>	
	    </tr>
	    <tr>
	    <td width="600">code:</td>
	    </tr>
	    <tr>
	    <td>
			<textarea id="code" name="code" rows="15" cols="80" style="width: 99%"></textarea>
	    </tr>
  	</table>
	<INPUT TYPE=SUBMIT VALUE="submit!">
</form>
</center>
</body>
</html>
