<html><head>
<title>Ray Optics Simulation</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<script language="JavaScript" src="light.js"></script>
<style type="text/css"> 
.toolbtn
{
border-color: white;
border-style: outset;
outline: none;
margin: 0;
}

.mainbox
{
background-color:white;
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

textarea
{
outline: none;
}

</style>
</head>
<body style="background-color:black;">
<canvas id="canvas1" style="position:absolute;top:0;left:0;" width="1024" height="600"></canvas>
<div class="mainbox" style="position:absolute; top:0; left:0; width:100%; height:55px;">
<div style="float: right; text-align:right; margin-right:5px">
<div>
<input type="button" id="undo" value="Undo" disabled=""><input type="button" id="redo" value="Redo" disabled=""><input type="button" id="cleanAll" value="Delete all"><input type="button" id="accessJSON" value="Access JSON">
</div>
<div>
<input type="checkbox" id="dragObj" checked="">Enable dragging
<input type="checkbox" id="grid">Use grid
</div>
</div>
<div class="optionsbar">
Tool:
<input type="button" id="tool_laser" value="Single ray" class="toolbtn"><input type="button" id="tool_radiant" value="Point source" class="toolbtn"><input type="button" id="tool_parallel" value="Beam" class="toolbtn">
<input type="button" id="tool_mirror" value="Plane mirror" class="toolbtn"><input type="button" id="tool_arcmirror" value="Arc mirror" class="toolbtn"><input type="button" id="tool_lens" value="Ideal lens" class="toolbtn"><input type="button" id="tool_refractor" value="Refractor" class="toolbtn"><input type="button" id="tool_blackline" value="Black line" class="toolbtn">&nbsp;&nbsp;
<input type="button" id="tool_" value="Move view" class="toolbtn" style="border-style: inset;">

</div>
<div class="optionsbar">
Mode:
<input type="button" id="mode_light" value="Show rays" class="toolbtn" style="border-style: inset;"><input type="button" id="mode_extended_light" value="Extend rays" class="toolbtn"><input type="button" id="mode_images" value="Show all images" class="toolbtn"><input type="button" id="mode_observer" value="Observe images" class="toolbtn">
Ray density:
<input type="range" id="rayDensity" min="-3" max="3" step="0.0001" value="-2.3026">
<span id="status" style="display:none;">00ms</span>



</div>

</div>

<div id="obj_settings" class="settingsbox" style="position:absolute; top:55px; left:0; width:100%; display:none;">
<div class="optionsbar">
<span id="obj_name"></span>
<span id="p_box">&nbsp;
<span id="p_name"></span>:
<input type="range" id="objAttr_range">
<input type="text" id="objAttr_text" style="width:40px;">
<span id="setAttrAll_box"><input type="checkbox" id="setAttrAll">Apply to All</span></span>
<input type="button" id="copy" value="Copy"><input id="delete" type="button" value="Delete">
</div>
</div>

<div id="forceStop" class="forcestopbox" style="position: absolute; top: 100px; left: 10px; display: none;">
Processing...<br>
Click here to stop
</div>

<textarea id="textarea1" style="position: absolute; bottom: 0; left: 0; width: 99%; height: 100px; display:none;"></textarea>





</body></html>
