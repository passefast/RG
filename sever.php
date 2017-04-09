
<?php

	
	
	if (isset($_POST['action']))  
    {  
        switch($_POST['action'])  
        {  
            case "fabiao":fabiao();break;  
            case "baocun":baocun();break;  
			case "baocun":quxiao();break;
			case "zhuce":zhuce();break;
			case "signin":signin();break;
            default:break;  
        }  
    }  
    
    function fabiao()  
    {  
		echo "发表成功";
    }  
    function baocun()  
    {  
		echo "保存成功";
    }  
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
			   Session_Start();
				$_SESSION["UserName"]=$_POST['phoneinfo'];
				$insert="insert into rg.`use`(`id`,`usename`,`password`,`email`) values ('".$id."','".$name."','".$password."','".$email."')";
				$result=mysql_query($insert);
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