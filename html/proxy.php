<?php include("../include.php"); ?><?php
if (isset($url) && !empty($url)) {
// 記得檢查此 URL 是不是你發出的 request
echo file_get_contents($url);
}
?>
