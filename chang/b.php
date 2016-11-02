<?php include("../include.php"); ?><?php
if($CookieUser!="")
	echo " ".file_get_contents("userdata/".$CookieUser);
?>