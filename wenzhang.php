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
function cutStr($string, $sublen, $start = 0, $code = 'UTF-8'){ 
    if($code == 'UTF-8'){ 
        $pa = "/[x01-x7f]|[xc2-xdf][x80-xbf]|xe0[xa0-xbf][x80-xbf]|[xe1-xef][x80-xbf][x80-xbf]|xf0[x90-xbf][x80-xbf][x80-xbf]|[xf1-xf7][x80-xbf][x80-xbf][x80-xbf]/"; 
        preg_match_all($pa, $string, $t_string); 
 
        if(count($t_string[0]) - $start > $sublen) return join('', array_slice($t_string[0], $start, $sublen))."..."; 
        return join('', array_slice($t_string[0], $start, $sublen)); 
    }else{ 
        $start = $start*2; 
        $sublen = $sublen*2; 
        $strlen = strlen($string); 
        $tmpstr = ''; 
 
        for($i=0; $i<$strlen; $i++){ 
            if($i>=$start && $i<($start+$sublen)){ 
                if(ord(substr($string, $i, 1))>129){ 
                    $tmpstr.= substr($string, $i, 2); 
                }else{ 
                    $tmpstr.= substr($string, $i, 1); 
                } 
            } 
            if(ord(substr($string, $i, 1))>129) $i++; 
        } 
        if(strlen($tmpstr)<$strlen ) $tmpstr.= "..."; 
        return $tmpstr; 
    } 
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