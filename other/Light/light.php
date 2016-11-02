<?php include("../../include.php"); ?><html><head>
<title>光線模擬器</title>
<script type='text/javascript'>
parent.document.getElementById('title').innerHTML=document.title;
</script>
<link rel="stylesheet" type="text/css" href="./BS.css">
<?php 
	/*if(!$P_Light_Moni){
		echo"</head><body>你沒有權限</body></html>";
		return;
		}*/
	?>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<script language="JavaScript" src="light.js"></script>
<style type="text/css"> 
input[type=button]:active{
    background-color:#C0C0C0;
}

.toolbtn
{
border-color: white;
border-style: outset;
outline: none;
margin: 0;
background-color:#E9E9E9;
}

.mainbox
{
background-color:#373C38;
font-size:12pt
}

.settingsbox
{
background-color:gray;
color:white;
opacity:0.8;
font-size:12pt
}
.forcestopbox
{
background-color:red;
color:white;
opacity:0.8;
font-size:12pt
}

.optionsbar
{
margin-left:5px
}

input
{
outline: none;
}

input.but{
color:#E9E9E9;
background-color:#00896C;
width:64px;
}
input.but:hover{
background-color:#24936E;
}

textarea
{
outline: none;
}

</style>
<script type="text/javascript">

   function show2n(file_s,title) {
       document.getElementById("xie").style.display = "";
       document.getElementById("content1").style.display = "";
       document.getElementById("xie").style.filter = "Alpha(Opacity=50)";//透明度
       document.getElementById("xie").style.opacity = "0.5";//透明度
       document.getElementById("content1").innerHTML = "<table border='0' width='100%' height='100%'><tr height='16px'><td align='center'>"+title+"</td><td align='right'><button onclick='hid()'>關閉</button></td></tr><tr height='100%'><td colspan='2'><iframe id='fram' id='name' border='0' frameborder='0' height='100%' width='100%' src='"+file_s+"'></iframe></td></tr></table>";
   }
   function hid() {
       document.getElementById("xie").style.display = "none";
       document.getElementById("content1").style.display = "none";
		document.getElementById("fram").src="";
	}
</script>
</head>
<body style="background-color:#202020;">


<canvas id="canvas1" style="position:absolute;top:0;left:0;" width="1024" height="600"></canvas>

<form Action="chfname.php" Method="POST" target="fram">
<div class="mainbox" style="position:absolute; top:0; left:0; width:100%; height:70px;">
<div style="float: right; text-align:right; margin-right:5px">
<div>
<input type="button" id="undo" value="還原" disabled="">&nbsp;<input type="button" id="redo" value="重做" disabled="">&nbsp;<input type="button" id="cleanAll" value="清除畫面">&nbsp;<input type="hidden" id="accessJSON" value="存取JSON">&nbsp;
<button onclick="show2n('','存檔')">存檔</button>
<input class="but" type="button" onclick="show2n('open.php','開啟')" value="開啟">
<!--<input TYPE=SUBMIT VALUE="存檔">-->
</div>

<div>
<input type="checkbox" id="dragObj" checked="">拖曳物件
<input type="checkbox" id="grid">對齊格線
</div>
</div>
<div class="optionsbar">
工具：
<input type="button" id="tool_laser" value="光線" class="toolbtn">&nbsp;<input type="button" id="tool_radiant" value="點光源" class="toolbtn">&nbsp;<input type="button" id="tool_parallel" value="平行光" class="toolbtn">&nbsp;
<input type="button" id="tool_mirror" value="平面鏡" class="toolbtn">&nbsp;<input type="button" id="tool_arcmirror" value="弧形鏡" class="toolbtn">&nbsp;<input type="button" id="tool_lens" value="理想透鏡" class="toolbtn">&nbsp;<input type="button" id="tool_refractor" value="透光物" class="toolbtn">&nbsp;<input type="button" id="tool_blackline" value="吸光片" class="toolbtn">&nbsp;&nbsp;
<input type="button" id="tool_" value="移動畫面" class="toolbtn" style="border-style: inset;">

</div>
<div class="optionsbar">
模式：
<input type="button" id="mode_light" value="顯示光線" class="toolbtn" style="border-style: inset;">&nbsp;<input type="button" id="mode_extended_light" value="延長光線" class="toolbtn">&nbsp;<input type="button" id="mode_images" value="顯示所有像" class="toolbtn">&nbsp;<input type="button" id="mode_observer" value="觀察者" class="toolbtn">&nbsp;
光線密度:
<input type="range" id="rayDensity" min="-3" max="3" step="0.0001" value="-2.3026" align="boottom">
<span id="status" style="display:none;">00ms</span>



</div>

</div>

<div id="obj_settings" class="settingsbox" style="position:absolute; top:70px; left:0; width:100%; display:none;">
<div class="optionsbar">
<span id="obj_name"></span>
<span id="p_box">&nbsp;
<span id="p_name"></span>:
<input type="range" id="objAttr_range">
<input type="text" id="objAttr_text" style="width:40px;">
<span id="setAttrAll_box"><input type="checkbox" id="setAttrAll">套用到全部</span></span>
<input type="button" id="copy" value="複製">&nbsp;<input id="delete" type="button" value="刪除">
</div>
</div>

<div id="forceStop" class="forcestopbox" style="position: absolute; top: 110px; left: 10px; display: none;">
計算中...<br>
點擊來停止
</div>

<textarea id="textarea1" name="textarea1" style="position: absolute; bottom: 0; left: 0; width: 99%; height: 100px; display:none;"><?php
function get_basename($filename){
    return preg_replace('/^.+[\\\\\\/]/', '',rtrim($filename, '/'));
	}
$link=get_basename($link);
if($link!="")echo file_get_contents("data/".$CookieUser."/$link");
?></textarea>



</form>  
	<div style="width: 100%; background-color: Black; display: none; height: 100%; position: fixed; left: 0; top: 0;" onclick="hid();" id="xie">
    </div>
    <div style="width: 80%; background-color: #373C38; display: none; height: 80%; position: fixed; left: 10%; top: 10%;" id="content1">
    </div>

</body></html>
