<?php include("../include.php"); ?><html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="Content-Language" content="zh-tw">
  <title>發起新話題</title><script type='text/javascript'>
parent.document.getElementById('title').innerHTML=document.title;
</script>
<link rel="stylesheet" type="text/css" href="./BS.css">
 </head>
<body>
<a href="talkroom.php">返回</a><br>
此處支援html語法(<a href="../data/html/htmlteach.html" target="_blank">html語法教學</a>  <a href="../data/html/語法器 v1.6.0.exe" target="_blank">html語法器</a>)
<form Action="new.php" Method="POST">  
	<table border="1">
	    <tr>     
		<td width="80">話題名稱:</td>
	    </tr>
	    <tr>     
		<td><input type="text" size="15"  name="name" id="name"> 請先看<a href="nolist.php" target="_blank">注意事項!</a></td>		
	    </tr>
	    <tr>
	    <td width="100">內容:</td>
	    </tr>
	    <tr>
	    <td><textarea name="thing" id="thing" cols="70" rows="10"></textarea></td>
	    </tr>
  	</table>
	<INPUT TYPE=SUBMIT VALUE="發起新話題!">
</form>
    
 </body>
</html>
