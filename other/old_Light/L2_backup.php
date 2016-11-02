<?php include("include.php"); ?>﻿
<html>
<head>
<title>光線模擬</title>

<link rel="stylesheet" type="text/css" href="./BS.css">
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<?php 
	if($CookieUser!="admin"){
		echo"</head><body>你沒有權限</body></html>";
		return;
		}
	?>
<script language="JavaScript" src="graphs.js"></script>

<script language="JavaScript">var objTypes={}</script>
<script language="JavaScript" src="refractor.js"></script>
<script language="JavaScript" src="laser.js"></script>
<script language="JavaScript" src="mirror.js"></script>
<script language="JavaScript" src="lens.js"></script>
<script language="JavaScript" src="blackline.js"></script>
<script language="JavaScript" src="radiant.js"></script>
<script language="JavaScript" src="parallel.js"></script>
<script language="JavaScript" src="arcmirror.js"></script>
<script language="JavaScript" src="interface.js"></script>
<script language="JavaScript" src="arcinterface.js"></script>


<script language="JavaScript" type="text/javascript">
<!--
function load(){canvas=document.getElementById("canvas1");mode=document.getElementById("mode").value;observer=graphs.circle(graphs.point(0,0),20);document.getElementById("objAttr").value="";JSONInput();createUndoPoint()}function draw(){if(timerID!=-1){clearTimeout(timerID);timerID=-1}JSONOutput();canvasPainter.cls(canvas);waitingRays=[];shotRayCount=0;for(var e=0;e<objs.length;e++){objTypes[objs[e].type].draw(objs[e],canvas);if(objTypes[objs[e].type].shoot){objTypes[objs[e].type].shoot(objs[e])}}shootWaitingRays();var t=mode=="observed_light"||mode=="observed_imagess";if(t){var n=canvas.getContext("2d");n.globalAlpha=1;n.beginPath();n.fillStyle="black";n.arc(observer.c.x,observer.c.y,observer.r,0,Math.PI*2,false);n.fill()}}function addRay(e){waitingRays[waitingRays.length]=e}function shootWaitingRays(){timerID=-1;var e=new Date;var t=mode=="observed_light"||mode=="observed_images";canvas.getContext("2d").globalAlpha=document.getElementById("lightAlpha").value;var n;var r;var i;var s;var o;var u;var a;var f=waitingRays.length;while(f!=0){if(new Date-e>(t?500:100)){document.getElementById("status").innerHTML="處理中... (已處理"+shotRayCount+"段光線,剩下"+f+"條光線)";timerID=setTimeout("shootWaitingRays()",10);return}f=0;o=null;i=null;for(var l=0;l<waitingRays.length;l++){n=waitingRays[l];if(n){s=null;u=null;a=Infinity;r=!t;for(var c=0;c<objs.length;c++){if(objTypes[objs[c].type].rayIntersection){var h=objTypes[objs[c].type].rayIntersection(objs[c],n);if(typeof h!="undefined"){var p=graphs.length(n.p1,h);if(p<a&&p>1e-5){s=objs[c];u=h;a=p}}}}if(a==Infinity){if(mode=="light"){canvasPainter.draw(n,canvas,"rgb(0,0,255)")}if(mode=="extended_light"){canvasPainter.draw(graphs.line(n.p1,n.p2),canvas,"rgb(255,128,0)")}if(t){var d=graphs.intersection_line_circle(n,observer);if(d[1]){if(graphs.length(d[1],n.p1)>graphs.length(d[1],n.p2)){r=true;if(mode=="observed_light"){canvasPainter.draw(graphs.ray(d[1],n.p1),canvas,"rgb(255,128,0)")}}}}waitingRays[l]=null}else{if(mode=="light"){canvasPainter.draw(graphs.segment(n.p1,u),canvas,"rgb(0,0,255)")}if(t){var d=graphs.intersection_line_circle(n,observer);if(d[1]){if(graphs.length(n.p1,d[1])+graphs.length(d[1],u)-graphs.length(n.p1,u)<1e-7){r=true;if(mode=="observed_light"){canvasPainter.draw(graphs.ray(d[1],n.p1),canvas,"rgb(255,128,0)")}}}}waitingRays[l]=objTypes[s.type].shot(s,n)}if(i&&mode=="observed_images"&&r){var v=graphs.intersection_2line(n,i);if(graphs.length(v,n.p1)+graphs.length(v,d[1])-graphs.length(n.p1,d[1])<1e-7||graphs.length(v,n.p1)<graphs.length(v,d[1])){canvasPainter.draw(graphs.intersection_2line(n,i),canvas,"rgb(255,128,0)")}}if(i&&mode=="images"&&r){canvasPainter.draw(graphs.intersection_2line(n,i),canvas,"rgb(255,128,0)")}i=n;o=s;shotRayCount=shotRayCount+1;if(waitingRays[l]){f=f+1}}}}canvas.getContext("2d").globalAlpha=1;for(var c=0;c<objs.length;c++){objTypes[objs[c].type].draw(objs[c],canvas)}if(t){var m=canvas.getContext("2d");m.globalAlpha=1;m.beginPath();m.fillStyle="black";m.arc(observer.c.x,observer.c.y,observer.r,0,Math.PI*2,false);m.fill()}document.getElementById("status").innerHTML="完成,共處理"+shotRayCount+"段光線"}function mouseOnPoint(e,t){return Math.sqrt(Math.pow(t.x-e.x,2)+Math.pow(t.y-e.y,2))<9}function mouseOnSegment(e,t){return graphs.length(e,t.p1)+graphs.length(e,t.p2)-graphs.length_segment(t)<2}function canvas_onmousedown(e){if(document.getElementById("grid").checked!=e.ctrlKey){var t=graphs.point(Math.round((e.pageX-e.target.offsetLeft)/gridSize)*gridSize,Math.round((e.pageY-e.target.offsetTop)/gridSize)*gridSize)}else{var t=graphs.point(e.pageX-e.target.offsetLeft,e.pageY-e.target.offsetTop)}var n=mode=="observed_light"||mode=="observed_images";if(n){if(graphs.length(t,observer.c)<observer.r){draggingObj=-4;return}}var r;if(document.getElementById("dragObj").checked!=e.altKey){for(var i=0;i<objs.length;i++){if(typeof objs[i]!="undefined"){r=objTypes[objs[i].type].clicked(objs[i],t);if(r){selectObj(i);if(r.obj){objs[i]=r.obj;draw()}if(r.draggingPart){draggingObj=i;draggingPart=r.draggingPart}return}}}}if(draggingObj==-1){if(AddingObjType==""||e.shiftKey){draggingObj=-3;draggingPart={mouse1:t}}else{r=objTypes[AddingObjType].create(t);if(r.obj){objs[objs.length]=r.obj}if(r.draggingPart){draggingObj=objs.length-1;draggingPart=r.draggingPart}if(objs[selectedObj]){if(objs[selectedObj].type==objs[objs.length-1].type){objs[objs.length-1].p=objs[selectedObj].p}}selectObj(objs.length-1);draw()}}}function canvas_onmousemove(e){if(document.getElementById("grid").checked!=e.ctrlKey){var t=graphs.point(Math.round((e.pageX-e.target.offsetLeft)/gridSize)*gridSize,Math.round((e.pageY-e.target.offsetTop)/gridSize)*gridSize)}else{var t=graphs.point(e.pageX-e.target.offsetLeft,e.pageY-e.target.offsetTop)}var n=mode=="observed_light"||mode=="observed_images";if(draggingObj==-4){observer.c=t;draw()}var r;if(draggingObj>=0){r=objTypes[objs[draggingObj].type].dragging(objs[draggingObj],t,draggingPart);if(r.obj){objs[draggingObj]=r.obj}if(r.draggingPart){draggingPart=r.draggingPart}draw()}if(draggingObj==-2){objs[objs.length]=objTypes[AddingObjType].create();if(objs[selectedObj]){if(objs[selectedObj].type==objs[objs.length-1].type){objs[objs.length-1].p=objs[selectedObj].p}}switch(objTypes[AddingObjType].dragType){case"point":break;case"line_segment":objs[objs.length-1].p1.x=t.x;objs[objs.length-1].p1.y=t.y;objs[objs.length-1].p2.x=t.x;objs[objs.length-1].p2.y=t.y;draggingObj=objs.length-1;draggingPart={part:2,mouse1:t};selectObj(objs.length-1)}draw()}if(draggingObj==-3){var i=t.x-draggingPart.mouse1.x;var s=t.y-draggingPart.mouse1.y;for(var o=0;o<objs.length;o++){objs[o]=objTypes[objs[o].type].move(objs[o],i,s)}draggingPart.mouse1=t;observer.c.x+=i;observer.c.y+=s;draw()}}function canvas_onmouseup(e){draggingObj=-1;draggingPart={};createUndoPoint()}function selectObj(e){selectedObj=e;document.getElementById("objAttr").value=objs[e].p;document.getElementById("p_name").innerHTML=objTypes[objs[e].type].p_name?objTypes[objs[e].type].p_name:"物件參數"}function setAttrAll(){for(var e=0;e<objs.length;e++){if(objTypes[objs[e].type].p_name==objTypes[objs[selectedObj].type].p_name){objs[e].p=document.getElementById("objAttr").value}}}function removeObj(e){for(var t=e;t<objs.length-1;t++){objs[t]=objs[t+1]}objs.length=objs.length-1}function createUndoPoint(){undoIndex=(undoIndex+1)%undoLimit;undoArr[undoIndex]=document.getElementById("textarea1").value}function body_keyDown(e){if(e.ctrlKey&&e.keyCode==90){undoIndex=(undoIndex+(undoLimit-1))%undoLimit;document.getElementById("textarea1").value=undoArr[undoIndex];JSONInput();return false}if(e.altKey&&e.keyCode==78){objs.length=0;draw();createUndoPoint();return false}if(e.keyCode==46){removeObj(selectedObj);draw();createUndoPoint();return false}}function JSONOutput(){document.getElementById("textarea1").value=JSON.stringify({objs:objs,mode:mode,lightAlpha:document.getElementById("lightAlpha").value,observer:observer})}function JSONInput(){jsonData=JSON.parse(document.getElementById("textarea1").value);objs=jsonData.objs;document.getElementById("mode").value=mode=jsonData.mode;document.getElementById("lightAlpha").value=jsonData.lightAlpha;observer=jsonData.observer;draw()}var canvas;var objs=[];var objCount=0;var draggingObj=-1;var draggingPart={};var selectedObj=-1;var AddingObjType="";var waitingRays=[];var waitingRayCount=0;var lightAlpha=1;var extendLight=false;var showLight=true;var gridSize=20;var undoArr=[];var undoIndex=0;var undoLimit=20;var observer;var mode;var timerID=-1

//-->
</script>





</head>


<body onload="load()" onkeydown="return body_keyDown(event)">


<br>
<br>
<br>


<canvas id="canvas1" width="2000" height="1000"onmousedown="document.body.focus();canvas_onmousedown(event);return false;" onmousemove="canvas_onmousemove(event)" onmouseup="canvas_onmouseup(event)"></canvas>
<textarea id="textarea1" style="width: 100%; height: 250px;" onchange="JSONInput()"></textarea>
<br>
<div style="position: fixed; top:0px; left:0px">
新增:
<input type="button" value="光線" onclick="AddingObjType='laser';">
<input type="button" value="發光點" onclick="AddingObjType='radiant';">
<input type="button" value="平行光" onclick="AddingObjType='parallel';">
<input type="button" value="鏡子" onclick="AddingObjType='mirror';">
<input type="button" value="弧形鏡" onclick="AddingObjType='arcmirror';">
<input type="button" value="理想透鏡" onclick="AddingObjType='lens';">
<input type="button" value="介面" onclick="AddingObjType='interface';">
<input type="button" value="弧形介面" onclick="AddingObjType='arcinterface';">
<!--<input type="button" value="折射鏡" onclick="AddingObjType='refractor';">-->
<input type="button" value="黑線" onclick="AddingObjType='blackline';">
<span id="p_name">物件參數</span>:
<input type="text" id="objAttr" onchange="objs[selectedObj].p=this.value;draw();createUndoPoint();">
<input type="button" value="套用全部" onclick="setAttrAll();draw();createUndoPoint();">
<input type="button" value="刪除物件" onclick="removeObj(selectedObj);draw();createUndoPoint();">
<br>
<input type="checkbox" id="dragObj" checked>拖曳物件
<input type="checkbox" id="grid">對齊格線
<input type="button" value="平移畫面" onclick="AddingObjType='';">
<input type="button" value="復原" onclick="undoIndex=(undoIndex+(undoLimit-1))%undoLimit;document.getElementById('textarea1').value=undoArr[undoIndex];JSONInput();">
<input type="button" value="重作" onclick="undoIndex=(undoIndex+1)%undoLimit;document.getElementById('textarea1').value=undoArr[undoIndex];JSONInput();">
<input type="button" value="清除全部" onclick="objs.length=0;draw();createUndoPoint();">
<input type="button" value="更新畫面" onclick="draw();">
<span id="status"></span>
<br>
光線透明度:
<input type="text" id="lightAlpha" value="1.0" onchange="draw();">
顯示:
<select id="mode" onchange="mode=this.value;draw();">
	<option value="light">光線</option>
	<option value="extended_light">延長光線</option>
	<option value="images">像</option>
	<option value="observed_light">觀察者所見的光線</option>
	<option value="observed_images">觀察者所見的像</option>
</select>
<input type="button" value="重設觀察者" onclick="observer=graphs.circle(graphs.point(0,0),20);draw();">
</div>


</body>
</html>
