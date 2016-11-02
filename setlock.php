<?php include("include.php"); ?>
<?php
if($slock==1){
	setcookie("lock",1,time()+100000000);
	header("refresh:0;url=index_lock.php");
	}
else{
	setcookie("lock",2,time()+100000000);
	header("refresh:0;url=index.php");
	}
?>
