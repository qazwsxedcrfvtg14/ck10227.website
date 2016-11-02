<?php include("../../include.php"); ?>
<head>
<title>編輯</title><script type='text/javascript'>
parent.document.getElementById('title').innerHTML=document.title;
</script>
<link rel="stylesheet" type="text/css" href="./BS.css">
</head>
<body>
<a href="../talkroom.php">返回</a>
<form Action="edit.php?<?php echo "room=".$room."&name=".urlencode($name)."&idd2=".$idd2;?>" Method="POST">  
	<table border="1">
	    <tr>
	    <td width="500">想把內容修改為:</td>
	    </tr>
	    <tr>
	    <td>
        <textarea id="thing" name="thing" rows="15" cols="80" style="width: 100%"><?php 
		$fop = fopen($name."/data/".$idd2.".txt","r");
		$tkkk = fgets($fop,1000) ;
		$tkkk = fgets($fop,1000) ;
		$tkkk = fread($fop,100000) ;
		echo htmlspecialchars($tkkk);
		fclose($fop);
		?></textarea></td>
	    </tr>
  	</table>
	<INPUT TYPE=SUBMIT VALUE="回覆">
</form>
 </body>
</html>
