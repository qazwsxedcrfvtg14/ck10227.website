<?php include("include.php"); ?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>更改個人資料</title>
<link rel="stylesheet" type="text/css" href="./BS.css">
</head>

<body>
<h1>  <b>更改個人資料</b> </h1>
  <?php
if($CookieUser==""){
echo "請先登入";
}
if($CookieUser=="guest"){
echo "請勿更改訪客的資料！+_+";
}
else{
$fileopen = fopen("user/" . $CookieUser . ".txt","r");
fseek($fileopen,0);
$name = fgets($fileopen,1000) ;
$name = fgets($fileopen,1000) ;
$name=trim($name);
$mail = fgets($fileopen,1000) ;
$mail=trim($mail);
$web = fgets($fileopen,1000) ;
$web=trim($web);
$phone = fgets($fileopen,1000) ;
$phone=trim($phone);
$tell = fgets($fileopen,1000) ;
$tell=trim($tell);
fclose($fileopen);
echo "
<form Action=\"index11.php\" Method=\"POST\">  
  <table width=\"400\" border=\"1\">
    <tr>     
		<td width=\"200\">舊密碼:</td>  
	    <td>   
    	<input name=\"past\" type=\"password\" id=\"past\" maxlength=\"100\" width=\"170\" >
        </td>
     </tr>   
	 <tr>
     	<td width=\"200\">新密碼:</td>     
	 	<td>        <input name=\"pass\" type=\"password\" id=\"pass\" maxlength=\"100\" width=\"170\" >
		</td>    
     </tr>   
	 <tr>
     	<td width=\"200\">確認新密碼:</td>     
	 	<td>        <input name=\"passs\" type=\"password\" id=\"passs\" maxlength=\"100\" width=\"170\" >        
		</td>    
     </tr>  
	 <tr>
     	<td width=\"200\">新暱稱:</td>     
	 	<td>        <input name=\"newname\" type=\"text\" id=\"newname\" maxlength=\"100\" width=\"170\" value=\"".$name."\">
		</td>    
     </tr>  
	 <tr>
     	<td width=\"200\">電子信箱:</td>     
	 	<td>        <input name=\"mail\" type=\"text\" id=\"mail\" maxlength=\"100\" width=\"170\" value=\"".$mail."\">        
		</td>    
     </tr>  
	 <tr>
     	<td width=\"200\">個人網站(無名或臉書等..):</td>     
	 	<td>        <input name=\"web\" type=\"text\" id=\"web\" maxlength=\"100\" width=\"170\" value=\"".$web."\">        
		</td>    
     </tr>  
	 <tr>
     	<td width=\"200\">家裡電話:</td>     
	 	<td>        <input name=\"phone\" type=\"text\" id=\"phone\" maxlength=\"100\" width=\"170\" value=\"".$phone."\">        
		</td>    
     </tr>  
	 <tr>
     	<td width=\"200\">手機:</td>     
	 	<td>        <input name=\"tell\" type=\"text\" id=\"tell\" maxlength=\"100\" width=\"170\" value=\"".$tell."\">        
		</td>    
     </tr>  
</table><br><INPUT TYPE=SUBMIT VALUE=\"GO!\"></form>

";}
?>

<p></body>
</html>



