<?php include("../include.php"); ?><html>
<head>
<title>發起新話題</title><script type='text/javascript'>
parent.document.getElementById('title').innerHTML=document.title;
</script>
<link rel="stylesheet" type="text/css" href="./BS.css">
<style type="text/css">
input[type=radio] {
    height: 16px;
}
</style>
</head>
<body>
<a href="talkroom.php">返回</a><br>
<form method="post" action="new.php">
	<table border="1">
	    <tr>     
		<td width="80">話題名稱:<input type="text" size="15"  name="name" id="name"> 請先看<a href="nolist.php" target="_blank">注意事項!</a></td>		
	    </tr>
	    <tr>
	    <td width="500">內容:</td>
	    </tr>
	    <tr>
	    <td>
			<textarea id="thing" name="thing" rows="15" cols="80" style="width: 100%"></textarea>
        </td>
	    </tr>
  	</table>
	<br>
	權限設定：
	<?php
	if($P_Talk_Level>=0)echo"<input type=radio value=\"0\" name=\"power_level\">未登入者";
	if($P_Talk_Level>=1)echo"<input type=radio value=\"1\" name=\"power_level\">訪客";
	if($P_Talk_Level>=3)echo"<input type=radio value=\"3\" name=\"power_level\" checked>同學";
	//if($P_Talk_Level>=4)echo"<input type=radio value=\"4\" name=\"power_level\">站務";
	if($P_Talk_Level>=5)echo"<input type=radio value=\"5\" name=\"power_level\">家長";
	if($P_Talk_Level>=6)echo"<input type=radio value=\"6\" name=\"power_level\">老師";
	if($P_Talk_Level>=100)echo"<input type=radio value=\"100\" name=\"power_level\">站長";
	?>
	<br>
	此為設定擁有誰以上權限的人才看得到
	<br>
	<INPUT TYPE=SUBMIT VALUE="發起新話題!">
</form>

</body>
</html>
