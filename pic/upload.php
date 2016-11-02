<?php include("../include.php"); ?><html><head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="./BS.css">
  <title>網路硬碟</title>
</head>
 <body><center>
  	<FORM METHOD="post" ACTION="upload2.php?file_src=<?php echo $file_src;?>" enctype="multipart/form-data">
  		～ 檔案上傳系統 ～<HR align="center" width="50%">
    	請選擇要上傳的檔案：<INPUT TYPE="file" NAME="fupload[]" value="選取檔案" multiple><br><br>
    	<INPUT TYPE="submit" VALUE="立即上傳">檔案大會需要較久的時間，請耐心等待。(多檔上傳最多一次60個檔案)
  	</FORM></center>
 </body>
</html>
