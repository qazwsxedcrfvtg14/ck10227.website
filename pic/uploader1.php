<?php include("../include.php"); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head> 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title>網路硬碟</title>
<style> 
	body{font-size:12px;}
  	#box{width:350px; height:350px; overflow:hidden; margin:0 auto;}
	#drop {border: 10px dashed #ccc; width: 330px; height: 285px; margin: 10px auto;}
	#drop.hover { border: 10px dashed #333; }
	
	
	#status {
		position:relative;
		width: 350px;
		height: 25px;
		margin:0;
		text-align:left;
		line-height:25px;
		color:#fff;
		overflow:hidden;
	}
	#status_out {
		width: 350px;
		height: 25px;
		margin:0 auto;
		text-align:left;
		line-height:25px;
		color:#fff;
		background-color:#373C38;
	}
	
	.fail{background:red;}
	.success{background:#6C0;}
	
	#list {
		/*width: 210px;*/
		font-size: 10px;
		float: left;
		margin-left: 10px;
	}
	.addedIMG {
		width: 100px;
		height: 100px;
	}
	.NoNewline{
		word-break: keep-all;/*必須*/
	}
</style> 
<script src="jquery.min-1.4.2.js"></script> 
<script src="html5uploader.js"></script>
<script>
	
</script> 

<link rel="stylesheet" type="text/css" href="../BS.css">
</head> 
 
<body onload="new uploader('drop', 'status', 'uploader.php?file_src=<?php echo $file_src;?>', 'list');"> 
<center><!--一次請只拖曳一個檔案，不然會有檔案上傳失敗-->現在可以一次丟很多檔案了！<br>
<a href="upload.php?file_src=<?php echo $file_src;?>">如要使用傳統上傳請按我</a><br></center>
	<div id="box"> 		 
		<div id="drop"></div> 		
	</div>
	<!--
	-->
	<div id="status_out">
    <div id="status"><a href="upload.php?file_src=<?php echo $file_src;?>">  此瀏覽器不支援拖拉上傳，請按我換成傳統上傳</a></div>
    </div>
	<!---->
<center>
<table><tr><td align="left" border="0" class="NoNewline">
	<div id="list" style="display:inline;"></div> 
</td></tr></table>
	</center>
<!-- 偵測瀏覽是否支援拖拉上傳以及拖拉變框變色 -->  
<script language="javascript">
  var drop = document.getElementById('drop'),
   	  state = document.getElementById('status');

	if (typeof window.FileReader === 'undefined') {
	  state.className = 'fail';
	} else {
	  state.className = 'success';
	  state.innerHTML = '  拖拉上傳已啟動';
	}
	 
	drop.ondragover = function (){ this.className = 'hover'; return false; };
	drop.ondragend = function (){ this.className = ''; return false; };
	drop.ondragleave = function (){ this.className = ''; return false; };
  </script>  
</body> 
</html>
