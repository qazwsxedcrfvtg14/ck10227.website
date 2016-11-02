<?php include("../include.php"); ?><html><head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<link rel="stylesheet" type="text/css" href="./BS.css">
  <title>上傳大頭貼</title>
<script type='text/javascript'>
parent.document.getElementById('title').innerHTML=document.title;
</script></head>
 <body><center>
  	<FORM METHOD="post" ACTION="big2.php?name=<?php echo $name; ?>" ENCTYPE="multipart/form-data">
  		～ 大頭貼上傳系統 ～<HR align="center" width="50%">
    	請選擇要上傳的檔案：<INPUT TYPE="file" NAME="fupload" value="選取檔案"><br>
        ##檔名最好全部為英文字母。<br>
    	<INPUT TYPE="submit" VALUE="立即上傳">檔案大會需要較久的時間，請耐心等待。
  	</FORM></center>
 </body>
</html>
