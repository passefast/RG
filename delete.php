<?php
$id = $_GET["id"];
$link=mysql_connect('localhost','root','122947');
if(!$link)
	die('连接失败: '.mysql_error());
mysql_select_db('rg',$link) or die ('选定出错');
$result=mysql_query("delete * FROM rg.`bolgtext` WHERE `id`='".$id."'");
mysql_close($link);
header("location:/rg/head.php");
?>