<?php
$id = $_GET["id"];
$link=mysql_connect('localhost','root','122947');
if(!$link)
	die('����ʧ��: '.mysql_error());
mysql_select_db('rg',$link) or die ('ѡ������');
$result=mysql_query("update rg.`bolgtext` set `zt`='1' WHERE `id`='".$id."'");
mysql_close($link);
header("location:/rg/head.php");
?>