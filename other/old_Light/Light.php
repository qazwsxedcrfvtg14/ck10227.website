<?php include("include.php"); ?>﻿<html>
<head>
<title>光線模擬</title>
<script type='text/javascript'>
parent.document.getElementById('title').innerHTML=document.title;
</script>

<link rel="stylesheet" type="text/css" href="./BS.css">
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<?php 
	if(!$P_Light_Moni){
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
var canvas;
var objs=[]; //物件
var objCount=0; //物件數量
var draggingObj=-1; //拖曳中的物件編號(-1表示沒有拖曳,-2表示準備建立新物件,-3表示平移整個畫面,-4表示觀察者)
var draggingPart={}; //拖曳的部份與滑鼠位置資訊
var selectedObj=-1; //選取的物件編號(-1表示沒有選取)
var AddingObjType=""; //拖曳空白處新增物件的類型
var waitingRays=[]; //待處理光線
var waitingRayCount=0; //待處理光線數量
var lightAlpha=1.0; //光線透明度
var extendLight=false; //觀察者的影像
var showLight=true; //顯示光線
var gridSize=20; //格線大小
var undoArr=[];
var undoIndex=0;
var undoLimit=20;
var observer;
var mode;
var timerID=-1;

function load(){
	canvas=document.getElementById('canvas1');
	mode=document.getElementById("mode").value;
	observer=graphs.circle(graphs.point(0,0),20);
	document.getElementById('objAttr').value="";
	JSONInput();
	createUndoPoint();
	/*
	for(var i=0;i<undoLimit;i++)
	{
		undoArr[i]="{}";
	}
	*/
}

//========================畫出物件=================================
function draw(){
	if(timerID!=-1)
	{
		//若程式正在處理上一次的繪圖,則停止處理
		clearTimeout(timerID);
		timerID=-1;
	}
	JSONOutput();
	canvasPainter.cls(canvas); //清空Canvas
	waitingRays=[]; //清空等待區
	shotRayCount=0;

	for(var i=0;i<objs.length;i++)
		{
		
		objTypes[objs[i].type].draw(objs[i],canvas); //畫出objs[i]
		if(objTypes[objs[i].type].shoot){objTypes[objs[i].type].shoot(objs[i])} //若objs[i]能射出光線,讓它射出
		
		}
	//alert(waitingRays.length)
	//canvas.getContext('2d').globalAlpha = document.getElementById("lightAlpha").value
	shootWaitingRays()
	var instantObserver=mode=="observed_light"||mode=="observed_imagess"
	if(instantObserver)
	{
		//畫出即時觀察者
		var ctx = canvas.getContext('2d');
		ctx.globalAlpha=1;
		ctx.beginPath()
		ctx.fillStyle="black";
		ctx.arc(observer.c.x,observer.c.y,observer.r,0,Math.PI*2,false);
		ctx.fill();
	}

}





//////////////////////////////////////////////////////////////////////////////////////////////////////
//========================================光線處理區==================================================
//////////////////////////////////////////////////////////////////////////////////////////////////////

//====================將一道光放入等待區=========================
function addRay(ray){
	waitingRays[waitingRays.length]=ray;
}

//====================射出等待區的光線=========================
function shootWaitingRays() {
	timerID=-1;
	var st_time=new Date()
	var instantObserver=mode=="observed_light"||mode=="observed_images"
	
	canvas.getContext('2d').globalAlpha = document.getElementById("lightAlpha").value;
	
	var ray1;
	var observed;
	var last_ray;
	var s_obj;
	var last_s_obj;
	var s_point;
	var s_len;
	var leftRayCount=waitingRays.length;
	
	while(leftRayCount!=0)
	{
		if(new Date()-st_time>(instantObserver?500:100))
		{
			//若已計算超過100ms
			//先休息10ms後再繼續(防止程式沒有回應)
			document.getElementById('status').innerHTML="處理中... (已處理"+shotRayCount+"段光線,剩下"+leftRayCount+"條光線)"; //顯示狀態
			timerID=setTimeout("shootWaitingRays()",10); //10ms後再回來此function
			return; //跳出此function
		}
		
		leftRayCount=0; //重新開始計算剩餘光線數量
		last_s_obj=null;
		last_ray=null;
		for(var j=0;j<waitingRays.length;j++)
		{
			ray1=waitingRays[j];
			if(ray1)
			{
				//若ray1存在
				//開始射出ray1(等待區的最後一條光線)
				//判斷這道光射出後,會先撞到哪一個物件
				
				//↓搜尋每一個"與這道光相交的物件",尋找"[物件與光線的交點]離[光線的頭]最近的物件"
				s_obj=null; //"到目前為止,已檢查的物件中[與光線的交點]離[光線的頭]最近的物件"
				s_point=null;  //s_obj與光線的交點
				s_len=Infinity; //將 "[s_obj與光線的交點]和[光線的頭]之間的距離" 設為無限大(因為目前尚未檢查任何物件,而現在是要尋找最小值)
				observed=!instantObserver; //ray1是否被觀察者看到
				for(var i=0;i<objs.length;i++)
				{
					//↓若objs[i]會影響到光
					if(objTypes[objs[i].type].rayIntersection){
						//↓判斷objs[i]是否與這道光相交
						var s_point_temp=objTypes[objs[i].type].rayIntersection(objs[i],ray1)
						if(typeof s_point_temp!="undefined")
						{
							//此時代表objs[i]是"與這道光相交的物件",交點是s_point_temp
							var s_len_temp=graphs.length(ray1.p1,s_point_temp) //交點到[光線的頭]的距離
							if(s_len_temp<s_len && s_len_temp>1e-5) 
							{
								//↑若 "[objs[i]與光線的交點]和[光線的頭]之間的的距離" 比 "到目前為止,已檢查的物件中[與光線的交點]離[光線的頭]最近的物件"的還短
								
								s_obj=objs[i] //更新"到目前為止,已檢查的物件中[物件與光線的交點]離[光線的頭]最近的物件"
								s_point=s_point_temp //s_point也一起更新
								s_len=s_len_temp //s_len也一起更新
								
							}
						}
					}
				}
				
				//↓若光線沒有射到任何物件
				if(s_len==Infinity)
				{
					if(mode=="light")
					{
						canvasPainter.draw(ray1,canvas,"rgb(0,0,255)"); //畫出這條光線
					}
					if(mode=="extended_light")
					{
						canvasPainter.draw(graphs.line(ray1.p1,ray1.p2),canvas,"rgb(255,128,0)"); //畫出這條光的延長線
					}
					
					if(instantObserver)
					{
						//使用即時觀察者
						var rp=graphs.intersection_line_circle(ray1,observer);
						if(rp[1])
						{
							//canvasPainter.draw(rp[1],canvas)
							if(graphs.length(rp[1],ray1.p1)>graphs.length(rp[1],ray1.p2))
							{
								observed=true;
								if(mode=="observed_light")
								{
									canvasPainter.draw(graphs.ray(rp[1],ray1.p1),canvas,"rgb(255,128,0)");
								}
							}
						}
					}
					
					waitingRays[j]=null  //將這條光線從等待區中移除
					//這道光已射到無窮遠處,不需要再處理
				}
				else
				{
					//此時,代表光線會在射出經過s_len(距離)後,在s_point(位置)撞到s_obj(物件)
					if(mode=="light")
					{
						canvasPainter.draw(graphs.segment(ray1.p1,s_point),canvas,"rgb(0,0,255)") //畫出這段光線
					}
					
					if(instantObserver)
					{
						//使用即時觀察者
						var rp=graphs.intersection_line_circle(ray1,observer);
						if(rp[1])
						{
							//canvasPainter.draw(rp[1],canvas)
							if(graphs.length(ray1.p1,rp[1])+graphs.length(rp[1],s_point)-graphs.length(ray1.p1,s_point)<1e-7)
							{
								observed=true;
								if(mode=="observed_light")
								{
									canvasPainter.draw(graphs.ray(rp[1],ray1.p1),canvas,"rgb(255,128,0)");
								}
							}
						}
					}
					waitingRays[j]=objTypes[s_obj.type].shot(s_obj,ray1)
				}
				/*
				if(s_obj==last_s_obj)
				{
					//若本次的光線和上次的光線射到同一個物件
					
					last_ray=ray1;
				}
				else
				{
					last_ray=null;
				}
				*/
				if(last_ray && mode=="observed_images" && observed)
				{
					var rp2=graphs.intersection_2line(ray1,last_ray)
					if(graphs.length(rp2,ray1.p1)+graphs.length(rp2,rp[1])-graphs.length(ray1.p1,rp[1])<1e-7 || graphs.length(rp2,ray1.p1)<graphs.length(rp2,rp[1]))
					{
						canvasPainter.draw(graphs.intersection_2line(ray1,last_ray),canvas,"rgb(255,128,0)"); //畫出觀察到的像
					}
				}
				
				if(last_ray && mode=="images" && observed)
				{
					canvasPainter.draw(graphs.intersection_2line(ray1,last_ray),canvas,"rgb(255,128,0)"); //畫出像
				}
				last_ray=ray1;
				last_s_obj=s_obj;
				
				
				shotRayCount=shotRayCount+1; //已處理光線數量+1
				if(waitingRays[j])
				{
					leftRayCount=leftRayCount+1;
				}
				//這道光線處理完畢
			}
		}
		
	}
	canvas.getContext('2d').globalAlpha = 1.0
	//if(showLight)
	//{
		for(var i=0;i<objs.length;i++)
			{
			objTypes[objs[i].type].draw(objs[i],canvas) //畫出objs[i]
			}
	//}
	if(instantObserver)
	{
		//畫出即時觀察者
		var ctx = canvas.getContext('2d');
		ctx.globalAlpha=1
		ctx.beginPath()
		ctx.fillStyle="black";
		ctx.arc(observer.c.x,observer.c.y,observer.r,0,Math.PI*2,false);
		ctx.fill();
	}

	document.getElementById('status').innerHTML="完成,共處理"+shotRayCount+"段光線"
}



//////////////////////////////////////////////////////////////////////////////////////////////////////
//========================================滑鼠動作區==================================================
//////////////////////////////////////////////////////////////////////////////////////////////////////


function mouseOnPoint(mouse,point)
{
	return Math.sqrt(Math.pow(point.x-mouse.x,2)+Math.pow(point.y-mouse.y,2))<15;
}

function mouseOnSegment(mouse,segment)
{
	return graphs.length(mouse,segment.p1) + graphs.length(mouse,segment.p2) - graphs.length_segment(segment) < 2;
}



//================================================================================================================================
//=========================================================MouseDown==============================================================
function canvas_onmousedown(e){
//滑鼠按下時
if(document.getElementById("grid").checked != e.ctrlKey)
{
	//使用格線
	var mouse=graphs.point(Math.round((e.pageX-e.target.offsetLeft)/gridSize)*gridSize,Math.round((e.pageY-e.target.offsetTop)/gridSize)*gridSize)
}
else
{
	//不使用格線
	var mouse=graphs.point(e.pageX-e.target.offsetLeft,e.pageY-e.target.offsetTop)
}

var instantObserver=mode=="observed_light"||mode=="observed_images"
if(instantObserver)
{
	if(graphs.length(mouse,observer.c)<observer.r)
	{
		//observer=graphs.circle(mouse,20);
		draggingObj=-4
		return;
	}
}


var returndata;
if(document.getElementById("dragObj").checked != e.altKey)
{
//搜尋每個物件,尋找滑鼠按到的物件
	for(var i=0;i<objs.length;i++)
		{
		 if(typeof objs[i]!="undefined")
			{
			returndata=objTypes[objs[i].type].clicked(objs[i],mouse)
			//回傳值:obj為變動後的obj,draggingPart為要拖曳的部分,回傳false代表滑鼠沒按到該物件
			if(returndata)
			{
				//有回傳結果,表示滑鼠有按到
				selectObj(i);
				if(returndata.obj)
				{
					//回傳值表示,該物件的屬性必須變動
					//更新該物件
					objs[i]=returndata.obj;
					draw()
				}
				if(returndata.draggingPart)
				{
					//回傳值表示,該物件必須被拖曳
					//準備拖曳該物件
					draggingObj=i;
					draggingPart=returndata.draggingPart;
				}
				
				return;
			}
			//回傳值為false,表示滑鼠沒按到該物件,繼續搜尋下一個物件
			}
		}
	}
	
if(draggingObj==-1)
    {
	//====================滑鼠按到了空白處=============================
	//alert(AddingObjType=="")
	 if((AddingObjType=="") || e.shiftKey)
	 {
	 //====================準備平移整個畫面===========================
	 //alert("c")
		 draggingObj=-3
		 draggingPart={mouse1:mouse}
	 }
	 else
	 {
	 //=======================建立新的物件========================
		returndata=objTypes[AddingObjType].create(mouse)
		//回傳值:obj為變動後的obj,draggingPart為要拖曳的部分,回傳false代表滑鼠沒按到該物件
		if(returndata.obj)
		{
			objs[objs.length]=returndata.obj;
		}
		if(returndata.draggingPart)
		{
			//回傳值表示,該物件必須被拖曳
			//準備拖曳該物件
			draggingObj=objs.length-1;
			draggingPart=returndata.draggingPart;
		}
		
		if(objs[selectedObj])
		{
			if(objs[selectedObj].type==objs[objs.length-1].type)
			{
				objs[objs.length-1].p=objs[selectedObj].p; //讓此物件的附加屬性與上一個選取的物件相同(若類型相同)
			}
		}
		selectObj(objs.length-1);
		draw()
	 }
    }

}
//================================================================================================================================
//========================================================MouseMove===============================================================
function canvas_onmousemove(e){
//滑鼠移動時
if(document.getElementById("grid").checked != e.ctrlKey)
{
	//使用格線
	var mouse=graphs.point(Math.round((e.pageX-e.target.offsetLeft)/gridSize)*gridSize,Math.round((e.pageY-e.target.offsetTop)/gridSize)*gridSize)
}
else
{
	//不使用格線
	var mouse=graphs.point(e.pageX-e.target.offsetLeft,e.pageY-e.target.offsetTop)
}

var instantObserver=mode=="observed_light"||mode=="observed_images"
if(draggingObj==-4)
{
	observer.c=mouse;
	draw();
}

var returndata;
if(draggingObj>=0)
	{
	 //此時,代表滑鼠正在拖曳一個物件
	 //判斷是什麼物件
	returndata=objTypes[objs[draggingObj].type].dragging(objs[draggingObj],mouse,draggingPart)
	//回傳值:obj為變動後的obj,draggingPart為要拖曳的部分
	if(returndata.obj)
	{
		//回傳值表示,該物件的屬性必須變動
		//更新該物件
		objs[draggingObj]=returndata.obj;
	}
	if(returndata.draggingPart)
	{
		//回傳值表示,該物件的拖曳部分必須變動
		draggingPart=returndata.draggingPart;
	}
	
	draw();
	}

if(draggingObj==-2)
    {
	 //===========================建立新的物件===============================
	 objs[objs.length]=objTypes[AddingObjType].create()
	 if(objs[selectedObj])
	 {
	 if(objs[selectedObj].type==objs[objs.length-1].type)
	 {
		objs[objs.length-1].p=objs[selectedObj].p; //讓此物件的附加屬性與上一個選取的物件相同(若類型相同)
	 }
	 }
	 switch(objTypes[AddingObjType].dragType)
	 {
		 case "point":
		 break;
		 case "line_segment":
		 objs[objs.length-1].p1.x=mouse.x;
		 objs[objs.length-1].p1.y=mouse.y;
		 objs[objs.length-1].p2.x=mouse.x;
		 objs[objs.length-1].p2.y=mouse.y;
		 draggingObj=objs.length-1;
		 draggingPart={part:2,mouse1:mouse};
		 selectObj(objs.length-1)
	 }
	 draw();
    }
if(draggingObj==-3)
{
	//====================平移整個畫面===========================
	//此時mouse為目前滑鼠位置,draggingPart.mouse1為上一次的滑鼠位置
	
	var mouseDiffX=mouse.x-draggingPart.mouse1.x; //目前滑鼠位置與上一次的滑鼠位置的X軸差
	var mouseDiffY=mouse.y-draggingPart.mouse1.y; //目前滑鼠位置與上一次的滑鼠位置的Y軸差
	for(var i=0;i<objs.length;i++)
	{
		objs[i]=objTypes[objs[i].type].move(objs[i],mouseDiffX,mouseDiffY)
	}
	draggingPart.mouse1=mouse; //將"上一次的滑鼠位置"設為目前的滑鼠位置(給下一次使用)
	observer.c.x+=mouseDiffX;
	observer.c.y+=mouseDiffY;
	draw();
}

}
//==================================================================================================================================
//==============================MouseUp===============================
function canvas_onmouseup(e){
draggingObj=-1
draggingPart={}
createUndoPoint()
}

/*
window.onresize=function(e){
canvas.width=window.innerWidth
canvas.height=window.innerHeight
draw()
}
*/
function selectObj(index)
{
	selectedObj=index;
	document.getElementById('objAttr').value=objs[index].p;
	document.getElementById('p_name').innerHTML=objTypes[objs[index].type].p_name?objTypes[objs[index].type].p_name:"物件參數"
}

function setAttrAll()
{
	for(var i=0;i<objs.length;i++)
	{
		if(objTypes[objs[i].type].p_name==objTypes[objs[selectedObj].type].p_name)
		{
			objs[i].p=document.getElementById('objAttr').value;
		}
	}
}

function removeObj(index)
{
	for(var i=index;i<objs.length-1;i++)
	{
		objs[i]=objs[i+1];
	}
	objs.length=objs.length-1;
}

function createUndoPoint()
{
	undoIndex=(undoIndex+1)%undoLimit
	undoArr[undoIndex]=document.getElementById("textarea1").value;

}



function body_keyDown(e)
{
	//alert(e.keyCode)
	if(e.ctrlKey && e.keyCode==90)
	{
	//Ctrl+Z
	undoIndex=(undoIndex+(undoLimit-1))%undoLimit;
	document.getElementById('textarea1').value=undoArr[undoIndex];
	JSONInput();
	return false;
	}
	if(e.altKey && e.keyCode==78)
	{
	//Alt+N
	objs.length=0;
	draw();
	createUndoPoint();
	return false;
	}
	/*
	if(e.altKey && e.keyCode==65)
	{
	//Alt+A
	document.getElementById("objAttr").focus()
	return false;
	}
	*/
	if(e.keyCode==46)
	{
	//Delete
	removeObj(selectedObj);
	draw();
	createUndoPoint();
	return false;
	}
}


//=========================================JSON輸出/輸入====================================================
function JSONOutput()
{
	document.getElementById("textarea1").value=JSON.stringify({objs:objs,mode:mode,lightAlpha:document.getElementById("lightAlpha").value,observer:observer});
}
function JSONInput()
{
	jsonData=JSON.parse(document.getElementById("textarea1").value);
	objs=jsonData.objs;
	document.getElementById("mode").value=mode=jsonData.mode;
	document.getElementById("lightAlpha").value=jsonData.lightAlpha
	observer=jsonData.observer
	draw();
}




//-->
</script>





</head>


<body onload="load()" onkeydown="return body_keyDown(event)">


<br>
<br>
<br>


<canvas id="canvas1" width="1000" height="1000" ontouchstart="document.body.focus();canvas_onmousedown(event);" ontouchmove="canvas_onmousemove(event);event.preventDefault();"ontouchend="canvas_onmouseup(event);event.preventDefault();"></canvas>
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
<input type="button" value="折射鏡" onclick="AddingObjType='refractor';">
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
