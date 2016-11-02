<?php include("../include.php"); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Running</title>
<script type='text/javascript'>
parent.document.getElementById('title').innerHTML=document.title;
</script>
<link rel="stylesheet" type="text/css" href="../BS.css">
</head>
<body><center>

<h1>Run C++</h1>
</center>
<pre><?php
if($P_Run_C){
  	system("rm CE.log");
  	file_put_contents("main.cpp",$thing);
  	system("g++ main.cpp -o php_cpp_run -O2 2>CE.log",$res);
  	if($res){
      //echo str_replace("\n","<br>",file_get_contents("CE.log"));
  		echo htmlentities(file_get_contents("CE.log"));
  		}
  		else{
  			system("rm out.txt");
  			file_put_contents("in.txt",$in);
      		system("./php_cpp_run <in.txt >out.txt");
          //echo str_replace("\n","<br>",file_get_contents("out.txt"));
          echo htmlentities(file_get_contents("out.txt"));
    	}
	
	}
  ?></pre>
<!--<a href="depow.php">Back</a>-->
</body>
</html>

