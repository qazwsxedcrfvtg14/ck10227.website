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
//$judger="judgement";$judgerpass="MisakaMikoto";
if($type=="code"&&$judger=="judgement"&&$judgerpass=="MisakaMikoto"){
    if((@file_exists("source/".$id))){
		echo file_get_contents("source/".$id);
		}
	}
if($type=="in"&&$judger=="judgement"&&$judgerpass=="MisakaMikoto"){
    if((@file_exists("testdata/".$pid.".in"))){
		echo file_get_contents("testdata/".$pid.".in");
		}
	}
if($type=="out"&&$judger=="judgement"&&$judgerpass=="MisakaMikoto"){
    if((@file_exists("testdata/".$pid.".out"))){
		echo file_get_contents("testdata/".$pid.".out");
		}
	}
?>
