<?php include("include.php"); ?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>變更密碼</title>
<link rel="stylesheet" type="text/css" href="./BS.css">
<style type="text/css">
<!--
a:link {
	color: #ffffff;
}
a:visited {
	color: #ffffff;
}
a:hover {
	color: #ffffff;
}
a:active {
	color: #ffffff;
}
-->
</style>
</head>
<body>
<font color="#FFFFFF">
 <b>請先更改密碼</b> </font>
  <?php
if($name==""){
echo "請先登入";
}
if($name=="guest"){
echo "請勿更改訪客的密碼！+_+";
}
else{
echo "
<form Action=\"index14.php?nname=".$name."\" Method=\"POST\">  
  <table width=\"80\" border=\"1\"> 
<tr>     
		<td width=\"80\"><font color=\"#FFFFFF\">舊密碼</font></td>    </tr><tr>
	    <td width=\"80\"> 
    	<input name=\"past\" type=\"password\" id=\"past\" maxlength=\"100\" size=\"6\">    
        </td>
     </tr>   
	 <tr>
     	<td width=\"80\"><font color=\"#FFFFFF\">新密碼</font></td>       </tr><tr>
	 	<td width=\"80\">        <input name=\"pass\" type=\"password\" id=\"pass\" maxlength=\"100\" size=\"6\" >        
		</td>    
     </tr>  
	 <tr>
     	<td width=\"80\"><font color=\"#FFFFFF\">確認密碼:</font></td>       </tr><tr>
	 	<td width=\"80\">        <input name=\"passs\" type=\"password\" id=\"passs\" maxlength=\"100\" size=\"6\" >        
		</td>    
     </tr>   
</table><INPUT TYPE=SUBMIT VALUE=\"GO!\"></form>

";}
?>

<p></body>
</html>



