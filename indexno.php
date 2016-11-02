<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>沒意義</title>
<script type='text/javascript'>
parent.document.getElementById('title').innerHTML=document.title;
</script>

<link rel="stylesheet" type="text/css" href="./BS.css">
<script type="text/javascript">
var $ = function (id) {
	return "string" == typeof id ? document.getElementById(id) : id;
};

var Extend = function(destination, source) {
	for (var property in source) {
		destination[property] = source[property];
	}
	return destination;
}

var CurrentStyle = function(element){
	return element.currentStyle || document.defaultView.getComputedStyle(element, null);
}

var Bind = function(object, fun) {
	var args = Array.prototype.slice.call(arguments).slice(2);
	return function() {
		return fun.apply(object, args.concat(Array.prototype.slice.call(arguments)));
	}
}

var Tween = {
	Quart: {
		easeOut: function(t,b,c,d){
			return -c * ((t=t/d-1)*t*t*t - 1) + b;
		}
	},
	Back: {
		easeOut: function(t,b,c,d,s){
			if (s == undefined) s = 1.70158;
			return c*((t=t/d-1)*t*((s+1)*t + s) + 1) + b;
		}
	},
	Bounce: {
		easeOut: function(t,b,c,d){
			if ((t/=d) < (1/2.75)) {
				return c*(7.5625*t*t) + b;
			} else if (t < (2/2.75)) {
				return c*(7.5625*(t-=(1.5/2.75))*t + .75) + b;
			} else if (t < (2.5/2.75)) {
				return c*(7.5625*(t-=(2.25/2.75))*t + .9375) + b;
			} else {
				return c*(7.5625*(t-=(2.625/2.75))*t + .984375) + b;
			}
		}
	}
}


//容器對像,滑動對像,切換數量
var SlideTrans = function(container, slider, count, options) {
	this._slider = $(slider);
	this._container = $(container);//容器對像
	this._timer = null;//定時器
	this._count = Math.abs(count);//切換數量
	this._target = 0;//目標值
	this._t = this._b = this._c = 0;//tween參數
	
	this.Index = 0;//當前索引
	
	this.SetOptions(options);
	
	this.Auto = !!this.options.Auto;
	this.Duration = Math.abs(this.options.Duration);
	this.Time = Math.abs(this.options.Time);
	this.Pause = Math.abs(this.options.Pause);
	this.Tween = this.options.Tween;
	this.onStart = this.options.onStart;
	this.onFinish = this.options.onFinish;
	
	var bVertical = !!this.options.Vertical;
	this._css = bVertical ? "top" : "left";//方向
	
	//樣式設置
	var p = CurrentStyle(this._container).position;
	p == "relative" || p == "absolute" || (this._container.style.position = "relative");
	this._container.style.overflow = "hidden";
	this._slider.style.position = "absolute";
	
	this.Change = this.options.Change ? this.options.Change :
		this._slider[bVertical ? "offsetHeight" : "offsetWidth"] / this._count;
};
SlideTrans.prototype = {
  //設置默認屬性
  SetOptions: function(options) {
	this.options = {//默認值
		Vertical:	true,//是否垂直方向（方向不能改）
		Auto:		true,//是否自動
		Change:		0,//改變量
		Duration:	50,//滑動持續時間
		Time:		10,//滑動延時
		Pause:		2000,//停頓時間(Auto為true時有效)
		onStart:	function(){},//開始轉換時執行
		onFinish:	function(){},//完成轉換時執行
		Tween:		Tween.Quart.easeOut//tween算子
	};
	Extend(this.options, options || {});
  },
  //開始切換
  Run: function(index) {
	//修正index
	index == undefined && (index = this.Index);
	index < 0 && (index = this._count - 1) || index >= this._count && (index = 0);
	//設置參數
	this._target = -Math.abs(this.Change) * (this.Index = index);
	this._t = 0;
	this._b = parseInt(CurrentStyle(this._slider)[this.options.Vertical ? "top" : "left"]);
	this._c = this._target - this._b;
	
	this.onStart();
	this.Move();
  },
  //移動
  Move: function() {
	clearTimeout(this._timer);
	//未到達目標繼續移動否則進行下一次滑動
	if (this._c && this._t < this.Duration) {
		this.MoveTo(Math.round(this.Tween(this._t++, this._b, this._c, this.Duration)));
		this._timer = setTimeout(Bind(this, this.Move), this.Time);
	}else{
		this.MoveTo(this._target);
		this.Auto && (this._timer = setTimeout(Bind(this, this.Next), this.Pause));
	}
  },
  //移動到
  MoveTo: function(i) {
	this._slider.style[this._css] = i + "px";
  },
  //下一個
  Next: function() {
	this.Run(++this.Index);
  },
  //上一個
  Previous: function() {
	this.Run(--this.Index);
  },
  //停止
  Stop: function() {
	clearTimeout(this._timer); this.MoveTo(this._target);
  }
};
</script>
</head>
<body>
<style type="text/css"> 
.container, .container img{width:280px; height:200px;}
.container{border:1px solid #333;}
.container img{border:0;}
</style>
<div class="container" id="idContainer">
	<table id="idSlider" border="0" cellpadding="0" cellspacing="0">
		<tr>
			<td><img src="p1.jpg"/></td>
		</tr>
		<tr>
			<td><img src="p2.jpg"/></td>
		</tr>
		<tr>
			<td><img src="p3.jpg"/></td>
		</tr>
	</table>
</div>
<br />
<br />
<style type="text/css">
.num{ position:absolute; right:5px; bottom:5px;}
.num li{
	float: left;
	list-style:none;
	color: #fff;
	text-align: center;
	line-height: 16px;
	width: 16px;
	height: 16px;
	font-family: Arial;
	font-size: 12px;
	cursor: pointer;
	margin: 1px;
	border: 1px solid #707070;
	background-color: #060a0b;
}
.num li.on{
	line-height: 18px;
	width: 18px;
	height: 18px;
	font-size: 14px;
	border: 0;
	background-color: #ce0609;
	font-weight: bold;
}
</style>
<br />
<script>

new SlideTrans("idContainer", "idSlider", 3).Run();

///////////////////////////////////////////////////////////

var forEach = function(array, callback, thisObject){
	if(array.forEach){
		array.forEach(callback, thisObject);
	}else{
		for (var i = 0, len = array.length; i < len; i++) { callback.call(thisObject, array[i], i, array); }
	}
}

var st = new SlideTrans("idContainer2", "idSlider2", 3, { Vertical: false });

var nums = [];
//插入數字
for(var i = 0, n = st._count - 1; i <= n;){
	(nums[i] = $("idNum").appendChild(document.createElement("li"))).innerHTML = ++i;
}

forEach(nums, function(o, i){
	o.onmouseover = function(){ o.className = "on"; st.Auto = false; st.Run(i); }
	o.onmouseout = function(){ o.className = ""; st.Auto = true; st.Run(); }
})

//設置按鈕樣式
st.onStart = function(){
	forEach(nums, function(o, i){ o.className = st.Index == i ? "on" : ""; })
}

$("idAuto").onclick = function(){
	if(st.Auto){
		st.Auto = false; st.Stop(); this.value = "自動";
	}else{
		st.Auto = true; st.Run(); this.value = "停止";
	}
}
$("idNext").onclick = function(){ st.Next(); }
$("idPre").onclick = function(){ st.Previous(); }

$("idTween").onchange = function(){
	switch (parseInt(this.value)){
		case 2 :
			st.Tween = Tween.Bounce.easeOut; break;
		case 1 :
			st.Tween = Tween.Back.easeOut; break;
		default :
			st.Tween = Tween.Quart.easeOut;
	}
}


st.Run();
</script>
</body>
</html>

