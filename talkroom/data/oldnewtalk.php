<?php include("../../include.php"); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>回覆</title><script type='text/javascript'>
parent.document.getElementById('title').innerHTML=document.title;
</script>
<link rel="stylesheet" type="text/css" href="./BS.css">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
</head>
<body role="application">
<a href="../talkroom.php">返回</a>
<form Action="new.php?<?php echo "room=".$room."&name=".$name;?>" Method="POST">  
	<table border="1">
<?php
if($CookieUser == ""){
	echo "	    <tr><td>暱稱:<input type=\"text\" size=\"7\"  name=\"User\" id=\"User\"></td></tr>";
    }
?>
	    <tr>
	    <td width="500">內容:</td>
	    </tr>
	    <tr>
	    <td><textarea id="thing" name="thing" rows="15" cols="80" style="width: 100%"></textarea></td>
	    </tr>
  	</table>
	<INPUT TYPE=SUBMIT VALUE="回覆">
</form>
    
 </body>
</html>
