<?php include("include.php"); ?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>帳號清單</title>
<script type='text/javascript'>
parent.document.getElementById('title').innerHTML=document.title;
</script>
<link rel="stylesheet" type="text/css" href="./BS.css">
</head>
<body>
<p>
<?php
if(!$P_Set_Power){
	$err=1;	
	}
else{
	$users=glob('user/*.txt');	
	foreach($users as $value){
		$value=str_replace("user/","", $value); 
		$value=str_replace(".txt","", $value);
		$pow="Normal";
		if((@file_exists("user/group/".$value.".txt"))){
		  	$fi = fopen("user/group/".$value.".txt","r");
			$pow=fgets($fi,10000);
			$pow=trim($pow);
			fclose($fi);
			}
	  	$fi = fopen("user/".$value.".txt","r");
		$name=fgets($fi,10000);
		$name=fgets($fi,10000);
		$name=trim($name);
		fclose($fi);
	    echo "<a href=\"setpower.php?code=".$value."&power=".$pow."\">".$value."(".$name.")</a><br>";
		}
	}
 if($err==1){echo"權限不足！";}
?>
<br><br><a href="index8.php">Back</a>
</body>
</html>


