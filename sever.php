
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
	
	//注册
	function zhuce()  
    {  
	if (isset($_POST['phoneinfo'])&&$_POST['phoneinfo']!="")  
    {  		
      if (isset($_POST['emailinfo'])&&$_POST['emailinfo']!="") 
	  {
		  if (isset($_POST['miaminfo'])&&$_POST['miaminfo']!="") 
		  {
			  $data=1;
			  echo json_encode($data);
		  }
		  else
			echo "请填写密码";
	  }
	else
		echo "请填写邮箱";	  
    }  
	else
		echo "请填写手机号";
    }
	//登陆
	function signin()  
    {  
	if (isset($_POST['yonghuinfo'])&&$_POST['yonghuinfo']!="") 
	  {
		  if (isset($_POST['mimainfo'])&&$_POST['mimainfo']!="") 
		  {
			  $data=1;
			  echo json_encode($data);
		  }
		  else
			echo "请填写密码";
	  }
	else
		echo "请填写用户名";	
		
    }  
	?>