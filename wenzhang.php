<?php

$case=$_GET["case"];
if (isset($case))  
    {  
        switch($case)  
        {  
            case "fabiao":fabiao();break;  
            case "wenzhang":wenzhang();break;	
			case "delete1":delete1();break;
			case "delete2":delete2();break;
			case "quit":quit();break;
			case "photo":photo();break;
			case "photo1":photo1();break;
			case "pic":pic();break;
			case "pic2":pic2();break;
            default:break;  
        }  
    }  
function wenzhang(){
$result = $_GET["id"];
Session_Start();
$_SESSION["textid"]=$result;
header("location:/rg/text.php");
}

function fabiao()
{
$id = $_GET["id"];
$link=mysql_connect('localhost','root','122947');
if(!$link)
	die('连接失败: '.mysql_error());
mysql_select_db('rg',$link) or die ('选定出错');
$result=mysql_query("update rg.`bolgtext` set `zt`='1' WHERE `id`='".$id."'");
mysql_close($link);
header("location:/rg/head.php");
}
function delete1()
{
$id = $_GET["id"];
$link=mysql_connect('localhost','root','122947');
if(!$link)
	die('连接失败: '.mysql_error());
mysql_select_db('rg',$link) or die ('选定出错');
$result=mysql_query("delete  FROM rg.`bolgtext` WHERE `id`='".$id."'");
mysql_close($link);
header("location:/rg/head.php");
}
function delete2()
{
$id = $_GET["id"];
$link=mysql_connect('localhost','root','122947');
if(!$link)
	die('连接失败: '.mysql_error());
mysql_select_db('rg',$link) or die ('选定出错');
$result=mysql_query("delete  FROM rg.`bolgtext` WHERE `id`='".$id."'");
mysql_close($link);
header("location:/rg/manage.php");
}
function quit()
{
	Session_Start();
	$_SESSION["UserName"]="未登录";
	header("Location: /rg/index.php");
}
function photo()
{
	$name = $_GET["name"];
	Session_Start();
	$_SESSION["photouser"]=$name;
	header("Location: /rg/photo.php");
}
function photo1()
{
	//$name = $_GET["name"];
	Session_Start();
	$_SESSION["photouser"]=$_SESSION["UserName"];
	header("Location: /rg/photo.php");
}
function pic()
	{
		$link=mysql_connect('localhost','root','122947');
		if(!$link)
			die('连接失败: '.mysql_error());
		mysql_select_db('rg',$link) or die ('选定出错');
		$id=$_GET['id'];
		$result=mysql_query("delete from rg.`photo`  WHERE `id`='".$id."'");
		mysql_close($link);
		header("location:/rg/manage.php");
	}
	function pic2()
	{
		$link=mysql_connect('localhost','root','122947');
		if(!$link)
			die('连接失败: '.mysql_error());
		mysql_select_db('rg',$link) or die ('选定出错');
		$id=$_GET['id'];
		$result=mysql_query("delete from rg.`photo`  WHERE `id`='".$id."'");
		mysql_close($link);
		header("location:/rg/photo.php");
	}
?>