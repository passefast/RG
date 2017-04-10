<?php
error_reporting(E_ALL);
$imgInfo = $_FILES['myFileName'];
$oldname = $imgInfo['name'];
$tmp_name = $imgInfo['tmp_name'];
$temp = explode(".",$oldname);
$newname = time().".".$temp[count($temp)-1];
move_uploaded_file($tmp_name,'upload/'.$newname);
	echo "upload/".$newname;
?>