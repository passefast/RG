
<?php
error_reporting(E_ALL ^ E_WARNING);
	
	
	if (isset($_POST['action']))  
    {  
        switch($_POST['action'])  
        {  
            case "fabiao":fabiao();break;  
            case "baocun":baocun();break;  
			case "baocun":quxiao();break;
			case "zhuce":zhuce();break;
			case "signin":signin();break;
			case "check": check();break;
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
		echo$data1;
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
		$result=mysql_query("select * from `bolgtext`");
		$num=mysql_num_rows($result);
		$num=$num+1;
		$title=$_POST['texttitle'];
		$text=$_POST['bolgtext'];
	    Session_Start();
		$name=$_SESSION["UserName"];
		$insert="insert into rg.`bolgtext`(`id`,`texttitle`,`bolgtext`,`writer`,`leibie`,`time`,`zt`) values ('".$num."','".$title."','".$text."','".$name."','".$biaoti."','".$showtime."','1')";
		$result=mysql_query($insert);	
		mysql_close($link);
		echo "发表成功";
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
	//取消
	function quxiao()
	{
		header("Location: /rg/index.php");
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
		$result=mysql_query("select * from `bolgtext`");
		$num=mysql_num_rows($result);
		$num=$num+1;
		$title=$_POST['texttitle'];
		$text=$_POST['bolgtext'];
	    Session_Start();
		$name=$_SESSION["UserName"];
		$insert="insert into rg.`bolgtext`(`id`,`texttitle`,`bolgtext`,`writer`,`leibie`,`time`,`zt`) values ('".$num."','".$title."','".$text."','".$name."','".$biaoti."','".$showtime."','2')";
		$result=mysql_query($insert);	
		mysql_close($link);
		echo "保存成功";
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
		if($num==1)
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
				$result=mysql_query("select * from `use`");
				if($result==NULL)
					$id=0;
				else
					$id=count($result);
				$id++;
			   Session_Start();
				$_SESSION["UserName"]=$_POST['phoneinfo'];
				$insert="insert into rg.`use`(`id`,`usename`,`password`,`email`) values ('".$id."','".$name."','".$password."','".$email."')";
				$result=mysql_query($insert);
				mysql_close($link);
				header("location: /rg/index.php");
			  
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
		if($num==0)
		{
			echo "不存在该用户";
			mysql_close($link);
		}
		 else if (isset($_POST['mimainfo'])&&$_POST['mimainfo']!="") 
		  {
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

	?>