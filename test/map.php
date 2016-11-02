<?php include("../include.php"); ?><!doctype html>
<?php if(!$file_src)$file_src=$My_Dir; ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>檔案</title>
<script type="text/javascript" src="../jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="../jquery.easing.1.3.js"></script>
<link rel="stylesheet" type="text/css" href="../BS.css">
  <script type="text/javascript" src="../js/jquery.classycontextmenu.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/jquery.classycontextmenu.css"/>
  <style type="text/css">
div.bbox{
	-webkit-box-sizing: border-box; /* Safari/Chrome, other WebKit */
    -moz-box-sizing: border-box;    /* Firefox, other Gecko */
    box-sizing: border-box;         /* Opera/IE 8+ */
    margin:0px;
  	top:10%;
  	right:10%
}
</style>
<script type="text/javascript">
   function show() {
       document.getElementById("xie").style.display = "";
       document.getElementById("content1").style.display = "";
       document.getElementById("xie").style.filter = "Alpha(Opacity=50)";//透明度
       document.getElementById("xie").style.opacity = "0.5";//透明度
       document.getElementById("content1").innerHTML = "<div class='bbox' style='padding:32px 0px 0px 0px;width:100%;height:100%;'><iframe id='fram' border='0' frameborder='0' height='100%' width='100%' src='uploader1.php?file_src=<?php
echo htmlentities($file_src);
       ?>'></iframe></div><div class='bbox' style='padding:0px;width:80px;height:32px;position:fixed;' align='right'><button onclick='hide()'>關閉</button></div>";
   }
   function show2(file_s) {
       document.getElementById("xie").style.display = "";
       document.getElementById("content1").style.display = "";
       document.getElementById("xie").style.filter = "Alpha(Opacity=50)";//透明度
       document.getElementById("xie").style.opacity = "0.5";//透明度
       document.getElementById("content1").innerHTML = "<div class='bbox' style='padding:32px 0px 0px 0px;width:100%;height:100%;'><iframe id='fram' border='0' frameborder='0' height='100%' width='100%' src='"+file_s+"'></iframe></div><div class='bbox' style='padding:0px;width:80px;height:32px;position:fixed;' align='right'><button onclick='hide()'>關閉</button></div>";
   }
   function show2n(file_s,title) {
       document.getElementById("xie").style.display = "";
       document.getElementById("content1").style.display = "";
       document.getElementById("xie").style.filter = "Alpha(Opacity=50)";//透明度
       document.getElementById("xie").style.opacity = "0.5";//透明度
       document.getElementById("content1").innerHTML = "<div class='bbox' style='padding:32px 0px 0px 0px;width:100%;height:100%;'><iframe id='fram' border='0' frameborder='0' height='100%' width='100%' src='"+file_s+"'></iframe></div><div class='bbox' style='padding:0px;width:100%;height:32px;position:fixed;'>"+title+"</div><div class='bbox' style='padding:0px;width:80px;height:32px;position:fixed;' align='right'><button onclick='hide()'>關閉</button></div>";
   }
  function show2v(file_s,title) {
       document.getElementById("xie").style.display = "";
       document.getElementById("content1").style.display = "";
       document.getElementById("xie").style.filter = "Alpha(Opacity=50)";//透明度
       document.getElementById("xie").style.opacity = "0.5";//透明度
    document.getElementById("content1").innerHTML = "<div class='bbox' style='padding:32px 0px 0px 0px;width:100%;height:100%;'><embed src='../flash/MoviePlayer.swf' height='100%' width='100%' allowfullscreen='true' flashvars='&file="+file_s+"'/></div><div class='bbox' style='padding:0px;width:100%;height:32px;position:fixed;'>"+title+"</div><div class='bbox' style='padding:0px;width:80px;height:32px;position:fixed;' align='right'><button onclick='hide()'>關閉</button></div>";
   }
  function show2w(file_s,title) {
       document.getElementById("xie").style.display = "";
       document.getElementById("content1").style.display = "";
       document.getElementById("xie").style.filter = "Alpha(Opacity=50)";//透明度
       document.getElementById("xie").style.opacity = "0.5";//透明度
    document.getElementById("content1").innerHTML = "<div class='bbox' style='padding:32px 0px 0px 0px;width:100%;height:100%;'><center><audio controls><source src='"+file_s+"'></audio></center></div><div class='bbox' style='padding:0px;width:100%;height:32px;position:fixed;'>"+title+"</div><div class='bbox' style='padding:0px;width:80px;height:32px;position:fixed;' align='right'><button onclick='hide()'>關閉</button></div>";
   }
   function show3() {
       document.getElementById("xie").style.display = "";
       document.getElementById("content1").style.display = "";
       document.getElementById("xie").style.filter = "Alpha(Opacity=50)";//透明度
       document.getElementById("xie").style.opacity = "0.5";//透明度
     document.getElementById("content1").innerHTML = "<div class='bbox' style='padding:32px 0px 0px 0px;width:100%;height:100%;'><iframe border='0' id='fram' frameborder='0' height='100%' width='100%' src='pack.php?file_src=<?php
echo htmlentities($file_src);
?>'></iframe></div><div class='bbox' style='padding:0px;width:80px;height:32px;position:fixed;' align='right'><button onclick='hide()'>關閉</button></div>";
   }
   function hide() {
       document.getElementById("xie").style.display = "none";
       document.getElementById("content1").style.display = "none";
		location.reload();
   }
   function hid() {
       document.getElementById("xie").style.display = "none";
       document.getElementById("content1").style.display = "none";
		document.getElementById("fram").src="";
	}
</script>
</head>
<body>
<center>
  <?php /*if($My_Dir==""){echo "權限不足"; return ; }*/?>
	<div style="width: 100%; background-color: Black; display: none; height: 100%; position: fixed; left: 0; top: 0;" onclick="hid();" id="xie">
    </div>
    <div style="width: 80%; background-color: #373C38; display: none; height: 80%; position: fixed; left: 10%; top: 10%;" id="content1">
    </div>
    <div>
        <button onclick="show()" type="button">上傳</button>
        <button onclick="show2('newer.php?file_src=<?php echo$file_src; ?>')">新檔案</button>
        <button onclick="show2('mkdir.php?file_src=<?php echo$file_src; ?>')">新資料夾</button>
        <!--<button onclick="show2('rmdir.php?file_src=<?php echo$file_src; ?>')">刪除</button>-->
		<button onclick="show3()">打包下載</button>
		<?php if($P_Cloud)
		echo"<button onclick=\"show2('wget1.php?file_src=$file_src')\">雲端下載</button>";
		?>
		<button onclick="location.reload();">重新整理</button>
    </div>
<br>
<table border="0" cellspacing="0" cellpadding="3">
<tr bgcolor="#202020">
  <td>　檔名</td><td>　大小　</td><td>　檢視　</td><td>　重新命名　</td><td>　下載　</td><td>　編輯　</td><?php if(/*$P_Cloud*/1)echo "<td>　轉檔　</td>"; ?><td>　刪除　</td>
</tr>
<?php
function dirsize($dirName = '.') {
$dir = dir($dirName);
$size = 0;

while($file = $dir->read()) {
//echo "$dirName/$file"." -> ".filesize("$dirName/$file")."n";
if ($file != '.' && $file != '..') {
if (is_dir("$dirName/$file")) {
$size += dirsize($dirName . '/' . $file);
} else {
$size += filesize($dirName . '/' . $file);
}
}
}
$dir->close();
return $size;
}
function file_size_unit($size,$decimal=2){  
    //設定單位  
    $size_unit = array('B','KB','MB',  
                       'GB','TB','PB',  
                       'EB','ZB','YB');  
    //初始化索引  
    $flag = 0;  
    //進行簡化除算  
    while($size >= 1024){  
        $size = $size / 1024;  
        $flag++;  
    }  
    //回傳大小與單位  
    return array(  
      	//'size' => (int)number_format($size,$decimal), 
        'size' => number_format($size,$decimal),  
        'unit' => $size_unit[$flag]  
    );  
}  
function chk_dir($dir,$my_dir){
	if($P_Back_Edit)return 1;
	$dir=realpath($dir);
  	if(strstr($dir,"public_edit_")!="")return 1;
	if($my_dir=="")return 0;
	for($a=0;;$a++){
		if($my_dir[$a]=="")break;
		if($my_dir[$a]!=$dir[$a])return 0;
		}
	return 1;
	}
function get_basename($filename){
    return preg_replace('/^.+[\\\\\\/]/', '',rtrim($filename, '/'));
	}
function listfile($dir,$P_Cloud) {
    $dirs=glob($dir.'/*',GLOB_ERR);
    foreach($dirs as $fil){
		if(is_dir($fil)){
          	$size=file_size_unit(dirsize($fil));
			echo "<tr bgcolor=\"2C2C2C\" onmouseout=\"this.style.backgroundColor=''\" onmouseover=\"this.style.backgroundColor='#252525'\"><td><a href=\"map.php?file_src=".urlencode($fil)."\">　".get_basename($fil)."</a></td>";
			echo "<td align=\"right\">".$size['size'].$size['unit']."</td>";

          	echo "<td align=\"center\"><a href=\"javascript:void(0);\" onclick=\"show2n('map.php?file_src=".urlencode($fil)."','".get_basename($fil)."');\">檢視</a></td>";
          	echo "<td align=\"center\"><a href=\"javascript:void(0);\" onclick=\"show2('rename.php?file=".urlencode($fil)."&file_src=".urlencode($dir)."');\">重新命名</a></td>";
			echo "<td align=\"center\"><a href=\"javascript:void(0);\" onclick=\"show2('pack.php?file_src=".urlencode($fil)."');\">下載</a></td>";
			echo "<td align=\"center\"> </td>";
          if(/*$P_Cloud*/1)
				echo "<td align=\"center\"> </td>";
			echo "<td align=\"center\"><a href=\"rmdir.php?file_src=".urlencode($fil)."\">刪除</a></td>";
			echo "</tr>";
			
			}
		}
    foreach($dirs as $fil){
		if(is_file($fil)){
			$ext =explode('.',$fil);
			$eext=strtolower(end($ext));
          	$size=file_size_unit(filesize($fil));
			echo "<tr bgcolor=\"2C2C2C\" onmouseout=\"this.style.backgroundColor=''\" onmouseover=\"this.style.backgroundColor='#252525'\">";
			echo "<td><a href=\"".str_replace("/var/www/joe59491","",$fil)."\">　".get_basename($fil)."</a></td>";
			echo "<td align=\"right\">".$size['size'].$size['unit']."</td>";
         
			if($eext=="flv"||$eext=="mp4"){
              //echo "<td align=\"center\"><a href=\"javascript:void(0);\" onclick=\"show2n('../flash/MoviePlayer.swf?allowfullscreen=true&file=".urlencode(str_replace("/var/www/joe59491","",$fil))."','".str_replace("'","\\'",get_basename($fil))."');\">檢視</a></td>";
              echo "<td align=\"center\"><a href=\"javascript:void(0);\" onclick=\"show2v('".urlencode(str_replace("/var/www/joe59491","",$fil))."','".str_replace("'","\\'",get_basename($fil))."');\">檢視</a></td>";
				}
			else if($eext=="mp3"){
				echo "<td align=\"center\"><a href=\"javascript:void(0);\" onclick=\"show2n('../flash/xMoviePlayer.swf?repeat=true&file=".urlencode(str_replace("/var/www/joe59491","",$fil))."','".str_replace("'","\\'",get_basename($fil))."');\">檢視</a></td>";
				}
			else if($eext=="wav"){
				echo "<td align=\"center\"><a href=\"javascript:void(0);\" onclick=\"show2w('".str_replace("/var/www/joe59491","",$fil)."','".str_replace("'","\\'",get_basename($fil))."');\">檢視</a></td>";
				}
			else if($eext=="doc"||$eext=="ppt"||$eext=="docx"||$eext=="pptx"||$eext=="xlsx"||$eext=="xls"){
				$fil_url=urlencode("http://ck10227.twbbs.org".str_replace("/var/www/joe59491","",($fil)));
              	echo "<td align=\"center\"><a href=\"javascript:void(0);\" onclick=\"show2n('http://view.officeapps.live.com/op/view.aspx?src=".$fil_url."','".str_replace("'","\\'",get_basename($fil))."');\">檢視</a></td>";
				}
          else if($eext=="zip"||$eext=="pdf"||$eext=="rar"){
				$fil_url=urlencode("http://ck10227.twbbs.org".str_replace("/var/www/joe59491","",$fil));
              echo "<td align=\"center\"><a href=\"javascript:void(0);\" onclick=\"show2n('https://docs.google.com/viewer?url=".$fil_url."&embedded=true','".str_replace("'","\\'",get_basename($fil))."');\">檢視</a></td>";
              	
				}
			else{
	          	echo "<td align=\"center\"><a href=\"javascript:void(0);\" onclick=\"show2n('".str_replace("/var/www/joe59491","",$fil)."','".get_basename($fil)."');\">檢視</a></td>";}
			echo "<td align=\"center\"><a href=\"javascript:void(0);\" onclick=\"show2('rename.php?file=".urlencode($fil)."&file_src=".urlencode($dir)."');\">重新命名</a></td>";
			echo "<td align=\"center\"><a href=\"down.php?file_name=".urlencode($fil)."\">下載</a></td>";
			echo "<td align=\"center\"><a href=\"javascript:void(0);\" onclick=\"show2('editer.php?file=".urlencode($fil)."');\">編輯</a></td>";
          if(/*$P_Cloud*/1)
				echo "<td align=\"center\"><a href=\"javascript:void(0);\" onclick=\"show2('cha.php?file=".urlencode($fil)."&file_src=".urlencode($dir)."');\">轉檔</a></td>";
			echo "<td align=\"center\"><a href=\"del.php?file=".urlencode($fil)."&file_src=".urlencode($dir)."\">刪除</a></td>";
			echo "</tr>";
			}
		}
    $dirs=glob($dir.'/.*');
    foreach($dirs as $fil){
		if(is_file($fil)){
          
          	$size=file_size_unit(filesize($fil));
			echo "<tr bgcolor=\"2C2C2C\" onmouseout=\"this.style.backgroundColor=''\" onmouseover=\"this.style.backgroundColor='#252525'\">";
			echo "<td><a href=\"".str_replace("/var/www/joe59491","",$fil)."\">　".get_basename($fil)."</a></td>";
          
			echo "<td align=\"right\">".$size['size'].$size['unit']."</td>";
          	echo "<td align=\"center\"><a href=\"javascript:void(0);\" onclick=\"show2n('".str_replace("/var/www/joe59491","",$fil)."','".get_basename($fil)."');\">檢視</a></td>";
			echo "<td align=\"center\"><a href=\"javascript:void(0);\" onclick=\"show2('rename.php?file=".urlencode($fil)."&file_src=".urlencode($dir)."');\">重新命名</a></td>";
			echo "<td align=\"center\"><a href=\"down.php?file_name=".urlencode($fil)."\">下載</a></td>";
			echo "<td align=\"center\"><a href=\"javascript:void(0);\" onclick=\"show2('editer.php?file=".urlencode($fil)."');\">編輯</a></td>";
          if(/*$P_Cloud*/1)echo "<td align=\"center\"> </td>";
			echo "<td align=\"center\"><a href=\"del.php?file=".urlencode($fil)."&file_src=".urlencode($dir)."\">刪除</a></td>";
			echo "</tr>";
			}
		}
    return;
	}
echo $file_src;
if(chk_dir($file_src,$My_Dir))
	listfile($file_src,$P_Cloud);
?>
</table>
</center>
  <script>
    /*$(document).ready(function() {
      $("tr").ClassyContextMenu({
	    menu: 'simpleCallbackMenu', 
        onSelect : function(e) {
          //alert();
        }
      });*//*
      $("body").ClassyContextMenu({
        menu : 'simpleCallbackMenu', 
        onSelect : function(e) {
          alert("You clicked on a menu item!\n\nThe item's action is: " + e.action + "\nThe item's id is: " + e.id);
        }
      });*/
    //});
  </script>
  <!---<div id="simpleCallbackMenu">
            <ul>
                <li id="m_link"><a href="#Item1">連結</a></li>
                <li id="MenuItem2"><a href="#Item2">Menu Item 2</a></li>
                <li id="MenuItem3"><a href="#Item3">Menu Item 3</a></li>
                <li id="MenuItem4"><a href="#Item4">Menu Item 4</a></li>
            </ul>
        </div>-->
</body>
</html>


