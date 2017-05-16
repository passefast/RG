
<?php
error_reporting(E_ALL ^ E_WARNING);
	
	
	if (isset($_POST['action']))  
    {  
        switch($_POST['action'])  
        {  
            case "fabiao":fabiao();break;  
            case "baocun":baocun();break;  
			case "zhuce":zhuce();break;
			case "signin":signin();break;
			case "check": check();break;
			case "pinglun": pinglun();break;
			case "dpinglun":dpinglun();break;
			case "mdpinglun":mdpinglun();break;
			case "mdfpinglun":mdfpinglun();break;
			case "save":save();break;
			case "huifu":huifu();break;
			case "dfpinglun":dfpinglun();break;
            default:break;  
        }  
    }  
    //查询
	function check()
	{
	if (isset($_POST['seachmg'])&&$_POST['seachmg']!="")  
    {
		Session_Start();
		$mg=$_POST['seachmg'];
		$_SESSION["searchmg"]=$mg;
		$data1=1;
		echo json_encode($data1);
	}
	else
	{
		echo"查询内容不能为空";
	}
	}
	//发表
    function fabiao()  
    {  
	$link=connect();
	if (isset($_POST['texttitle'])&&$_POST['texttitle']!="")  
    { 		
		$name=$_POST['texttitle'];
		$result=mysql_query("select * from rg.`bolgtext` where texttitle='".$name."'");
		$num=mysql_num_rows($result);
		if($num==1)
		{
			echo "该标题已存在";
			mysql_free_result($result);
			mysql_close($link);
		}
	else if (isset($_POST['bolgtext'])&&$_POST['bolgtext']!="")  
    { 
		if (isset($_POST['fenlei'])&&$_POST['fenlei']!="")
		{
			$biaoti=$_POST['fenlei'];
			$showtime=date("Y-m-d H:i:s");
		$result=mysql_query("SELECT `id` from rg.`bolgtext` where `id` = (SELECT max(`id`) FROM rg.`bolgtext`)");
		$row=mysql_fetch_row($result);
		$num=$row[0]+1;
		$title=$_POST['texttitle'];
		$text=$_POST['bolgtext'];
	    Session_Start();
		$name=$_SESSION["UserName"];
		$insert="insert into rg.`bolgtext`(`id`,`texttitle`,`bolgtext`,`writer`,`leibie`,`time`,`zt`) values ('".$num."','".$title."','".$text."','".$name."','".$biaoti."','".$showtime."','1')";
		$result=mysql_query($insert);	
		mysql_close($link);
		$data=1;
		echo json_encode($data);
		}
	}

	else
	{
		echo"博文内容不能为空";
		mysql_close($link);
	}
	}
	else
	{
		echo "文章标题未写";
		mysql_close($link);
	}
    }  

	//保存
    function baocun()  
    {  
		$link=connect();
	if (isset($_POST['texttitle'])&&$_POST['texttitle']!="")  
    { 		
		$name=$_POST['texttitle'];
		$result=mysql_query("select * from rg.`bolgtext` where texttitle='".$name."'");
		$num=mysql_num_rows($result);
		if($num==1)
		{
			echo "该标题已存在";
			mysql_free_result($result);
			mysql_close($link);
		}
	else if (isset($_POST['bolgtext'])&&$_POST['bolgtext']!="")  
    { 
		if (isset($_POST['fenlei'])&&$_POST['fenlei']!="")
		{
			$biaoti=$_POST['fenlei'];
			$showtime=date("Y-m-d H:i:s");
		$result=mysql_query("SELECT `id` from rg.`bolgtext` where `id` = (SELECT max(`id`) FROM rg.`bolgtext`)");
		$row=mysql_fetch_row($result);
		$num=$row[0]+1;
		$title=$_POST['texttitle'];
		$text=$_POST['bolgtext'];
	    Session_Start();
		$name=$_SESSION["UserName"];
		$insert="insert into rg.`bolgtext`(`id`,`texttitle`,`bolgtext`,`writer`,`leibie`,`time`,`zt`) values ('".$num."','".$title."','".$text."','".$name."','".$biaoti."','".$showtime."','2')";
		$result=mysql_query($insert);	
		mysql_close($link);
		$data=1;
		echo json_encode($data);
		}
		
	}

	else
	{
		echo"博文内容不能为空";
		mysql_close($link);
	}
	}
	else
	{
		echo "文章标题未写";
		mysql_close($link);
	}
    }  
	//链接
	function connect()
	{
		$link=mysql_connect('localhost','root','122947');
		if(!$link)
			die('连接失败: '.mysql_error());
		mysql_select_db('rg',$link) or die ('选定出错');
		return $link;
	}
	//注册
	function zhuce()  
    {  
	$link=mysql_connect('localhost','root','122947');
		if(!$link)
			die('连接失败: '.mysql_error());
		mysql_select_db('rg',$link) or die ('选定出错');
	if (isset($_POST['phoneinfo'])&&$_POST['phoneinfo']!="")  
    {  		
		$name=$_POST['phoneinfo'];
		$result=mysql_query("select * from rg.`use` where usename='".$name."'");
		$num=mysql_num_rows($result);
		if($num==1||$_POST['phoneinfo']=="admin")
		{
			echo "用户已存在";
			mysql_free_result($result);
			mysql_close($link);
		}
		else if (isset($_POST['emailinfo'])&&$_POST['emailinfo']!="") 
		{
		  if (isset($_POST['miaminfo'])&&$_POST['miaminfo']!="") 
		  {
			  
			  $email=$_POST['emailinfo'];
			  $password=$_POST['miaminfo'];
			  $data=1;
				$result=mysql_query("SELECT `id` from rg.`use` where `id` = (SELECT max(`id`) FROM rg.`use`)");
				$row=mysql_fetch_row($result);
				$id=$row[0]+1;
				Session_Start();
				$_SESSION["UserName"]=$_POST['phoneinfo'];
				$insert="insert into rg.`use`(`id`,`usename`,`password`,`email`,`touxiang`,`zishu`) values ('".$id."','".$name."','".$password."','".$email."','','')";
				$result1=mysql_query($insert);
				mysql_free_result($result);
				mysql_close($link);				
				echo json_encode($data);
		  }
		  else
		  {
			echo "请填写密码";
			mysql_free_result($result);
			mysql_close($link);
		  }
	  }
	else
	{
		echo "请填写邮箱";	 
			mysql_close($link);
	}	
    }  
	else
	{
		echo "请填写用户名";
		mysql_close($link);
	}
    }
	//登陆
	function signin()  
    {  
	$link=mysql_connect('localhost','root','122947');
		if(!$link)
			die('连接失败: '.mysql_error());
		mysql_select_db('rg',$link) or die ('选定出错');
	if (isset($_POST['yonghuinfo'])&&$_POST['yonghuinfo']!="") 
	  {
		$name=$_POST['yonghuinfo'];
		$result=mysql_query("select * from rg.`use` where usename='".$name."'");
		$num=mysql_num_rows($result);
		if($num==0&&$_POST['yonghuinfo']!="admin")
		{
			echo "不存在该用户";
			mysql_close($link);
		}
		 else if (isset($_POST['mimainfo'])&&$_POST['mimainfo']!="") 
		  {	
			if($_POST['yonghuinfo']=="admin"&&$_POST['mimainfo']=="admin")
			{
				$data=2;
				echo json_encode($data);
			}
			else{
			  $password=$_POST['mimainfo'];
			  $data=1;
			  $result=mysql_query("select * from rg.`use` where usename='".$name."' and password='".$password."'");
			  $num=mysql_num_rows($result);
			  if($num==0)
			  {
				  echo "密码错误";
					mysql_close($link);
			  }
			  else{
				Session_Start();
				$_SESSION["UserName"]=$_POST['yonghuinfo'];
				echo json_encode($data);
			  }
			}
				
		  }
		  else
		  {
			mysql_free_result($result);
			mysql_close($link);
			echo "请填写密码";
		  }
	  }
	else
	{
		echo "请填写用户名";	
		mysql_close($link);
	}
		
    }  
	function pinglun()
	{
		$str = file_get_contents('emotions.data');
		$str = (trim($str));
		$emotion=json_decode($str,true);
		
	$link=connect();
	if (isset($_POST['text'])&&$_POST['text']!="")  
    { 	Session_Start();
		$name=$_SESSION["UserName"];
		if($name=="未登录")
			$name="游客";
		$result=mysql_query("SELECT `id` from rg.`pinglun` where `id` = (SELECT max(`id`) FROM rg.`pinglun`)");
		$row=mysql_fetch_row($result);
		$id=$row[0]+1;
		$text=$_POST['text'];
		for($i=0;$i<count($emotion,0);$i++)
		{
			$text=str_replace($emotion[$i]["phrase"],"<img src=".$emotion[$i]["url"].">",$text);			
		}
		$writer=$_SESSION["textid"];
		$time=date("Y-m-d H:i:s");
		$insert="insert into rg.`pinglun`(`id`,`name`,`text`,`time`,`writer`,`zhuangtai`) values ('".$id."','".$name."','".$text."','".$time."','".$writer."','1')";
		$result1=mysql_query($insert);
		mysql_free_result($result);					
		mysql_close($link);
		$data=1;
		echo json_encode($data);
	}
	else
	{
		echo"请输入评论内容";
		mysql_close($link);		
	}
	}
	function dpinglun()
	{
		$link=connect();
		$id=$_POST['id'];
		$result=mysql_query("update rg.`pinglun` set `zhuangtai`='2' WHERE `id`='".$id."'");
		mysql_close($link);
	}
	function mdpinglun()
	{
		$link=connect();
		$id=$_POST['id'];
		$result=mysql_query("delete from rg.`pinglun`  WHERE `id`='".$id."'");
		mysql_close($link);
	}
	function mdfpinglun()
	{
		$link=connect();
		$id=$_POST['id'];
		$result=mysql_query("delete from rg.`fupinglun`  WHERE `id`='".$id."'");
		mysql_close($link);
	}
	function save()
	{
		$link=connect();
		Session_Start();
		$name=$_SESSION["UserName"];
		if (isset($_POST['mesg']))  
		{
			$mg=$_POST['mesg'];
		$result=mysql_query("update rg.`use` set `zishu`='".$mg."' WHERE `usename`='".$name."'");
		mysql_close($link);
		$data=1;
		echo json_encode($data);
		}

	}
	function huifu()
	{
		$link=connect();
	if (isset($_POST['text'])&&$_POST['text']!="")  
    { 	Session_Start();
		$name=$_SESSION["UserName"];
		if($name=="未登录")
			$name="游客";
		$huifu=$_POST['id'];
		$result=mysql_query("SELECT `id` from rg.`fupinglun` where `id` = (SELECT max(`id`) FROM rg.`fupinglun`)");
		$row=mysql_fetch_row($result);
		$id=$row[0]+1;
		$text=$_POST['text'];
		$writer=$_SESSION["textid"];
		$time=date("Y-m-d H:i:s");
		$insert="insert into rg.`fupinglun`(`id`,`name`,`text`,`time`,`writer`,`huifu`,`zhuangtai`) values ('".$id."','".$name."','".$text."','".$time."','".$writer."','".$huifu."','1')";
		$result1=mysql_query($insert);
		mysql_free_result($result);					
		mysql_close($link);
		$data=1;
		echo json_encode($data);
	}
	mysql_close($link);
	}
	function dfpinglun()
	{
		$link=connect();
		$id=$_POST['id'];
		$result=mysql_query("update rg.`fupinglun` set `zhuangtai`='2' WHERE `id`='".$id."'");
		mysql_close($link);
	}
	?>