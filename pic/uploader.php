<?php include("../include.php"); ?><?php
if (!function_exists('getallheaders')) {
    function getallheaders() {
    $headers = [];
    foreach ($_SERVER as $name => $value) {
        if (substr($name, 0, 5) == 'HTTP_') {
            $headers[str_replace(' ', '-', ucwords(strtolower(str_replace('_', ' ', substr($name, 5)))))] = $value;
        }
    }
    return $headers;
    }
}
function get_basename($filename){
    return preg_replace('/^.+[\\\\\\/]/', '',rtrim($filename, '/'));
	}
if($P_Up_Pic){
	$upload_folder = get_basename($file_src);
	if(count($_FILES)>0) {
		if(move_uploaded_file( $_FILES['upload']['tmp_name'] , $upload_folder.'/'.$_FILES['upload']['name'])) {
			while(1);
			//echo 'done';
        	}
        exit();
		}
	else if(isset($_GET['up'])) {
        if(isset($_GET['base64'])) {
                $content = base64_decode(file_get_contents('php://input'));
        	} else {
                $content = file_get_contents('php://input');
        	}
		
        $headers = getallheaders();
        $headers = array_change_key_case($headers, CASE_UPPER);
		
		/* define */
		$file_name = $headers['UP-FILENAME']; //取得檔名
		$fn_array=explode(".",$file_name);//分割檔名
		$mainName = $fn_array[0];//檔名
		$subName = $fn_array[1];//副檔名
		$eext=strtolower(end($fn_array));
		if($eext=='jpg'||$eext=='png'||$eext=='gif'){
		
			//中文檔名處理
			//if (mb_strlen($mainName,"Big5") != strlen($mainName)){
				//$mainName = "undefine".date("ymdHi");//重新命名=檔名+日期
				//$file_name = sprintf("%s.%s",$mainName,$subName);//組合檔名
			//}
			//中文檔名處理 end
		
			//檔名與路徑組合
			$upFilePath = $upload_folder.'/'. get_basename($file_name);
		
			//檔名重覆處理
			$x=1;
			while(file_exists($upFilePath)){
				$file_name = sprintf("%s_%d.%s",$mainName ,$x++ ,$subName);//組合檔名
				$upFilePath = $upload_folder.'/'. get_basename($file_name);
			}
					$temploadfile = $_FILES['Filedata']['tmp_name'];
			//$result = move_uploaded_file($temploadfile , $upFilePath);
			//檔名重覆處理 end			
		    if(file_put_contents($upFilePath, $content)) {
		          // echo 'done';				
		    }
			file_put_contents("$upload_folder/list.txt",file_get_contents("$upload_folder/list.txt").$file_name."\n",LOCK_EX);
			echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
			echo "<xmllist>\n";
			echo "<student>\n";
			echo "<id>$file_name</id>\n";
			echo "</student>\n</xmllist>";
			}
		else{
			echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
			echo "<xmllist>\n";
			echo "<student>\n";
			echo "<id>None</id>\n";
			echo "</student>\n</xmllist>";
			
			}
		}
		
}
else{
	echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
	echo "<xmllist>\n";
	echo "<student>\n";
	echo "<id>權限不足</id>\n";
	echo "</student>\n</xmllist>";
	}
	
?>
