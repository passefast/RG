<?php 
if ($_FILES["file"]["error"] > 0) 
{ 
echo "Error: " . $_FILES["file"]["error"] . "<br />"; 
} 
else 
{ 
$time=date("Y_m_d_H_i_s");     //��ȡ��ǰʱ��
	$file_name = explode(".",$_FILES['file']['name']);         //$_FILES['img']['name'] �ϴ��ļ������� explode�ַ������ת�ַ���
	$file_name[0]=$time;  
	$name = implode(".",$file_name);    //implode ������ƴ�ӳ��ַ���
	$img_name = "upload/".$name;
	if(move_uploaded_file($_FILES['file']['tmp_name'],$img_name)){ 	//move_uploaded_file �ƶ��ļ�
	Session_start();
	$link=mysql_connect('localhost','root','122947');
	if(!$link)
	die('����ʧ��: '.mysql_error());
	mysql_select_db('rg',$link) or die ('ѡ������');
	$usename=$_SESSION["photouser"];
	$result1=mysql_query("update rg.`use` set `touxiang`='".$img_name."' WHERE `usename`='".$usename."'");
	mysql_close($link);
	header("location:/rg/photo.php");
	}
} 
?> 