<?php 
if ($_FILES["file"]["error"] > 0) 
{ 
echo "Error: " . $_FILES["file"]["error"] . "<br />"; 
} 
else 
{ 
$time=date("Y_m_d_H_i_s");     //获取当前时间
	$file_name = explode(".",$_FILES['file']['name']);         //$_FILES['img']['name'] 上传文件的名称 explode字符串打断转字符串
	$file_name[0]=$time;  
	$name = implode(".",$file_name);    //implode 把数组拼接成字符串
	$img_name = "upload/".$name;
	if(move_uploaded_file($_FILES['file']['tmp_name'],$img_name)){ 	//move_uploaded_file 移动文件
	Session_start();
	$link=mysql_connect('localhost','root','122947');
	if(!$link)
	die('连接失败: '.mysql_error());
	mysql_select_db('rg',$link) or die ('选定出错');
	$usename=$_SESSION["photouser"];
	$result1=mysql_query("update rg.`use` set `touxiang`='".$img_name."' WHERE `usename`='".$usename."'");
	mysql_close($link);
	header("location:/rg/photo.php");
	}
} 
?> 