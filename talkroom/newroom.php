<?php include("../include.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="Content-Language" content="zh-tw">
<title>發起新話題</title><script type='text/javascript'>
parent.document.getElementById('title').innerHTML=document.title;
</script>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<!-- TinyMCE -->
<script type="text/javascript" src="jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
	tinyMCE.init({
		// General options
		mode : "textareas",
		theme : "advanced",
		plugins : "pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave",

		// Theme options
		theme_advanced_buttons1 : ",bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect,|,forecolor,backcolor",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview",
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,media,advhr,|,print,|,ltr,rtl",
		theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,

		// Example content CSS (should be your site CSS)
		// using false to ensure that the default browser settings are used for best Accessibility
		// ACCESSIBILITY SETTINGS
		content_css : false,
		// Use browser preferred colors for dialogs.
		browser_preferred_colors : true,
		detect_highcontrast : true,

		// Drop lists for link/image/media/template dialogs
		template_external_list_url : "lists/template_list.js",
		external_link_list_url : "lists/link_list.js",
		external_image_list_url : "lists/image_list.js",
		media_external_list_url : "lists/media_list.js",

		// Style formats
		style_formats : [
			{title : 'Bold text', inline : 'b'},
			{title : 'Red text', inline : 'span', styles : {color : '#ff0000'}},
			{title : 'Red header', block : 'h1', styles : {color : '#ff0000'}},
			{title : 'Example 1', inline : 'span', classes : 'example1'},
			{title : 'Example 2', inline : 'span', classes : 'example2'},
			{title : 'Table styles'},
			{title : 'Table row 1', selector : 'tr', classes : 'tablerow1'}
		],
		content_css : "BS.css",
		// Replace values for the template plugin
		template_replace_values : {
			username : "Some User",
			staffid : "991234"
		}
	});
</script>
<!-- /TinyMCE -->
<style type="text/css">
input[type=radio] {
    height: 16px;
}
</style>
<link rel="stylesheet" type="text/css" href="./BS.css">

</head>
<body role="application" >
<a href="talkroom.php">返回</a>
<a href="oldnewroom.php">使用舊版編輯</a><br>
<form method="post" action="new.php">
	<table border="1">
	    <tr>     
		<td width="80">話題名稱:<input type="text" size="15"  name="name" id="name"> 請先看<a href="nolist.php" target="_blank">注意事項!</a></td>		
	    </tr>
	    <tr>
	    <td width="100">內容:</td>
	    </tr>
	    <tr>
	    <td>
			<textarea id="thing" name="thing" rows="15" cols="80" style="width: 80%"></textarea>
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
<script type="text/javascript">
if (document.location.protocol == 'file:') {
	alert("The examples might not work properly on the local file system due to security settings in your browser. Please use a real webserver.");
	}
</script>
</body>
</html>
