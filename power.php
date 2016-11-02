<?php
$P_MAMA=1;

$P_Add_News=0;
$P_Del_News=0;

$P_See_Homework=0;
$P_New_Homework=0;
$P_Add_Homework=0;
$P_Add_N_Homework=0;

$P_New_Talks=0;
$P_Del_Talks=0;
$P_Save_Talks=0;

$P_Talk_Level=0;

$P_See_Talk=0;
$P_Re_Talk=0;
$P_Power_Del_Talk=0;
$P_Power_Edit_Talk=0;

$P_Upload=0;
$P_DownLoad=0;

$P_Class_Table=0;

$P_See_Photo=0;
$P_Up_Pic=0;
$P_Add_Book=0;

$P_See_Name=0;
$P_See_Email=0;
$P_See_Myweb=0;
$P_See_Homephone=0;
$P_See_Tlelphone=0;
$P_See_Password=0;
$P_Power_Change_Pic=0;

$P_Class_Thing=0;

$P_Light_Moni=0;			

$P_Send_Email=0;
$P_Backup_Talks=0;
$P_Set_Power=0;
$P_Who_Online=0;
$P_See_Last_Login=0;
$P_Power_See_User=0;
$P_Back_Edit=0;
$My_Dir="";
$P_Cloud=0;
$P_Run_C=0;
$P_Little_Talk=0;

if($Group=="None"){
	//$P_See_Talk=1;
	//$P_See_Photo=1;
	//$P_Class_Table=1;
	$P_Class_Table=1;
	$P_See_Photo=1;

	$P_Talk_Level=0;
	}
else if($Group=="traveler"){
	//$P_See_Homework=1;

	//$P_New_Talks=1;
	$P_See_Talk=1;
	$P_Re_Talk=1;
	$P_Talk_Level=3;

	//$P_Upload=1;
	//$P_DownLoad=1;

	//$P_Class_Table=1;

	$P_See_Photo=1;

	$P_See_Name=1;
	//$P_See_Email=1;
	//$P_See_Myweb=1;
	//$P_See_Homephone=1;
	//$P_See_Tlelphone=1;
	//$P_See_Last_Login=1;

	//$P_Class_Thing=1;
	$P_Little_Talk=1;
	
	$P_Light_Moni=1;
	
	$My_Dir="/volume1/web/userdata/".$CookieUser;
	}
else if($Group=="class"){
	$P_Add_News=1;
	
	$P_See_Homework=1;
	$P_New_Homework=1;
	$P_Add_Homework=1;

	$P_New_Talks=1;
	$P_See_Talk=1;
	$P_Re_Talk=1;
	$P_Talk_Level=3;

	$P_Upload=1;
	$P_DownLoad=1;

	$P_Class_Table=1;

	$P_See_Photo=1;
	$P_Up_Pic=1;
	$P_Add_Book=1;

	$P_See_Name=1;
	$P_See_Email=1;
	$P_See_Myweb=1;
	$P_See_Homephone=1;
	$P_See_Tlelphone=1;
	//$P_See_Last_Login=1;

	$P_Class_Thing=1;
	
	$P_Light_Moni=1;
	$P_Little_Talk=1;
	$My_Dir="/volume1/web/userdata/".$CookieUser;
	}
else if($Group=="summer2014"){
	
	$P_New_Talks=1;
	$P_See_Talk=1;
	$P_Re_Talk=1;
	$P_Talk_Level=1;

	$P_See_Photo=1;
	
	$P_Cloud=1;
  	$My_Dir="/var/www/summer2014";
	}
else if($Group=="npsc"){

        $P_New_Talks=1;
        $P_See_Talk=1;
        $P_Re_Talk=1;
        $P_Talk_Level=1;

        $P_See_Photo=1;
		$P_Light_Moni=1;
		$P_Little_Talk=1;

        $P_Cloud=1;
        $My_Dir="/mnt/hgfs/D/joe_data/Desktop/npsc";
        }
else if($Group=="phone"){
	
	$P_New_Talks=1;
	$P_See_Talk=1;
	$P_Re_Talk=1;
	$P_Talk_Level=1;

	$P_See_Photo=1;
	
	$P_Cloud=1;
  	$My_Dir="/var/www/phone";
	}
else if($Group=="gae"){
	
	$P_New_Talks=1;
	$P_See_Talk=1;
	$P_Re_Talk=1;
	$P_Talk_Level=1;

	$P_See_Photo=1;
	
	$P_Cloud=1;
  	$My_Dir="/home/joe/gae";
	}
else if($Group=="infor"){
	
	$P_New_Talks=1;
	$P_See_Talk=1;
	$P_Re_Talk=1;
	$P_Talk_Level=1;

	$P_See_Photo=1;
	
	$P_Cloud=1;
  	$My_Dir="/var/www/infor";
	}
else if($Group=="step5"){
	
	$P_New_Talks=1;
	$P_See_Talk=1;
	$P_Re_Talk=1;
	$P_Talk_Level=1;

	$P_See_Photo=1;
	
	$P_Cloud=1;
  	$My_Dir="/home/joe/step5";
	}
else if($Group=="worker"){
	$P_Add_News=1;
	$P_Del_News=1;

	$P_See_Homework=1;
	$P_New_Homework=1;
	$P_Add_Homework=1;

	$P_New_Talks=1;
	$P_Del_Talks=1;

	$P_See_Talk=1;	
	$P_Re_Talk=1;
	$P_Power_Del_Talk=1;
	$P_Talk_Level=4;

	$P_Upload=1;
	$P_DownLoad=1;

	$P_See_Photo=1;
	$P_Up_Pic=1;
	$P_Add_Book=1;

	$P_Class_Table=1;
	
	$P_See_Name=1;
	$P_See_Email=1;
	$P_See_Myweb=1;
	$P_See_Homephone=1;
	$P_See_Tlelphone=1;
	$P_See_Last_Login=1;
	$P_Power_Change_Pic=1;
	
	$P_Class_Thing=1;
	$P_Little_Talk=1;
	
	$P_Light_Moni=1;

	//$P_Send_Email=1;
	//$P_Who_Online=1;
	
	$My_Dir="/volume1/web/userdata/".$CookieUser;
	}
else if($Group=="teacher"){
	$P_Add_News=1;
	$P_Del_News=1;

	$P_See_Homework=1;
	$P_New_Homework=1;
	$P_Add_Homework=1;

	$P_New_Talks=1;
	$P_Del_Talks=1;

	$P_See_Talk=1;	
	$P_Re_Talk=1;
	$P_Power_Del_Talk=1;
	$P_Power_Edit_Talk=1;
	$P_Talk_Level=6;

	$P_Upload=1;
	$P_DownLoad=1;

	$P_See_Photo=1;
	$P_Up_Pic=1;
	$P_Add_Book=1;

	$P_Class_Table=1;
	
	$P_See_Name=1;
	$P_See_Email=1;
	$P_See_Myweb=1;
	$P_See_Homephone=1;
	$P_See_Tlelphone=1;
	$P_See_Last_Login=1;
	$P_Power_Change_Pic=1;
	
	$P_Class_Thing=1;
	
	$P_Light_Moni=1;
	$P_Little_Talk=1;
	
	//$P_Send_Email=1;
	$P_Who_Online=1;
	
	$My_Dir="/volume1/web/userdata/".$CookieUser;
	}
else if($Group=="parent"){
	$P_Add_News=1;

	$P_See_Homework=1;
	$P_New_Homework=1;
	$P_Add_Homework=1;

	$P_New_Talks=1;
	//$P_Del_Talks=1;

	$P_See_Talk=1;	
	$P_Re_Talk=1;
	$P_Talk_Level=5;

	$P_Upload=1;
	$P_DownLoad=1;

	$P_See_Photo=1;
	$P_Up_Pic=1;
	$P_Add_Book=1;

	$P_Class_Table=1;
	
	$P_See_Name=1;
	$P_See_Email=1;
	$P_See_Myweb=1;
	$P_See_Homephone=1;
	$P_See_Tlelphone=1;
	
	$P_Class_Thing=1;
	
	$P_Light_Moni=1;
	$P_Little_Talk=1;
	
	$My_Dir="/volume1/web/userdata/".$CookieUser;
	}

	
else if($Group=="mom"){
	$P_New_Talks=1;
	$P_See_Talk=1;
	$P_Re_Talk=1;
	$P_Talk_Level=1;

	$P_See_Photo=1;
	
	$P_Cloud=1;
	$My_Dir="/var/www/mom";
	}
else if($Group=="mama"){
	$P_Add_News=1;

	$P_See_Homework=1;
	$P_New_Homework=1;
	$P_Add_Homework=1;

	$P_New_Talks=1;
	//$P_Del_Talks=1;

	$P_See_Talk=1;	
	$P_Re_Talk=1;
	$P_Talk_Level=5;

	$P_Upload=1;
	$P_DownLoad=1;

	$P_See_Photo=1;
	$P_Up_Pic=1;
	$P_Add_Book=1;

	$P_Class_Table=1;
	
	$P_See_Name=1;
	$P_See_Email=1;
	$P_See_Myweb=1;
	$P_See_Homephone=1;
	$P_See_Tlelphone=1;
	
	$P_Class_Thing=1;
	
	$P_Light_Moni=1;
	$P_Little_Talk=1;
	$P_MAMA=1;
	$My_Dir="/volume1/web/".$CookieUser;
	}
else if($Group=="admin"){
	$P_Add_News=1;
	$P_Del_News=1;

	$P_See_Homework=1;
	$P_New_Homework=1;
	$P_Add_Homework=1;
	$P_Add_N_Homework=1;

	$P_New_Talks=1;
	$P_Del_Talks=1;
	$P_Save_Talks=1;

	$P_See_Talk=1;
	$P_Re_Talk=1;
	$P_Power_Del_Talk=1;
	$P_Power_Edit_Talk=1;
	$P_Talk_Level=100;

	$P_Upload=1;
	$P_DownLoad=1;

	$P_Class_Table=1;
	
	$P_See_Photo=1;
	$P_Up_Pic=1;
	$P_Add_Book=1;

	$P_See_Name=1;
	$P_See_Email=1;
	$P_See_Myweb=1;
	$P_See_Homephone=1;
	$P_See_Tlelphone=1;
	$P_See_Password=1;
	$P_See_Last_Login=1;
	$P_Power_See_Last_Login=1;
	$P_Power_Change_Pic=1;
	
	$P_Class_Thing=1;
	
	$P_Light_Moni=1;			

	$P_Send_Email=1;
	$P_Backup_Talks=1;
	$P_Set_Power=1;
	$P_Who_Online=1;
	$P_Power_See_User=1;

	$P_Back_Edit=1;
	$P_Little_Talk=1;
	
	//$My_Dir="/volume1/web/userdata/".$CookieUser;
	
  $My_Dir="/volume1/web";
  //$My_Dir="/";
	$P_Cloud=1;
  	$P_Run_C=1;
	}
else if($Group=="computer"){
	$P_Add_News=1;
	$P_See_Homework=1;
	$P_New_Homework=1;
	$P_Add_Homework=1;

	$P_New_Talks=1;

	$P_See_Talk=1;
	$P_Re_Talk=1;
	$P_Talk_Level=3;

	$P_Upload=1;
	$P_DownLoad=1;

	$P_Class_Table=1;
	
	$P_See_Photo=1;
	$P_Up_Pic=1;
	$P_Add_Book=1;

	$P_See_Name=1;
	$P_See_Email=1;
	$P_See_Myweb=1;
	$P_See_Homephone=1;
	$P_See_Tlelphone=1;
	$P_See_Last_Login=1;
	
	$P_Class_Thing=1;
	
	$P_Light_Moni=1;	
	$P_Little_Talk=1;		

	$P_Who_Online=1;
	$My_Dir="/volume1/web/userdata/".$CookieUser;
	}
else if($Group=="Normal"){
	$P_Class_Table=1;
	$P_See_Photo=1;

	$P_New_Talks=1;
	$P_See_Talk=1;
	$P_Re_Talk=1;
	$P_Talk_Level=1;
	//$P_DownLoad=1;
	//$P_See_Photo=1;
	$P_See_Name=1;
	}
?>
