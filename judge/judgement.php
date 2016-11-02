<?
error_reporting(E_ERROR);
if(!ini_get('register_globals')){
	extract($_POST);
	extract($_GET);
	extract($_SERVER);
	extract($_FILES);
   	extract($_ENV);
   	extract($_COOKIE);
   	if(isset($_SESSION)){
       	extract($_SESSION);
   		}
	}
?><?php
if($judger=="judgement"&&$judgerpass=="MisakaMikoto"){
	$que=file("queue");
	$lines=count($que);
	if($que[0]!=""&&$que[0]!="\n"){
		echo $que[0]."\n";
		echo $que[1]."\n";
		echo $que[2]."\n";
		//echo "1\n";//submit_id
		//echo "11\n";//problem
		echo "4\n";//language
		echo "1000\n";//time limit
		echo "65536\n";//memery limit
		$str="";
		for($tmp=3;$tmp<$lines;$tmp++){
			$str.=$que[$tmp];
			}
		file_put_contents("queue",$str,LOCK_EX);
		}
	}
else{
echo -1;	
}
?>


