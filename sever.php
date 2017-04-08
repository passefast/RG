
<?php
	if (isset($_POST['action']))  
    {  
        switch($_POST['action'])  
        {  
            case "fabiao":fabiao();break;  
            case "baocun":baocun();break;  
			case "baocun":quxiao();break;
            default:break;  
        }  
    }  
     if (isset($_POST['phoneinfo']))  
    {  
		
      if (isset($_POST['emailinfo'])) 
	  {
		  if (isset($_POST['mimainfo'])) 
		  {
			  echo "注册成功";
		  }
	  }
	else
		echo "请填写邮箱";	  
    }  
	else
		echo "请填写手机号";
    function fabiao()  
    {  
		echo "发表成功";
    }  
    function baocun()  
    {  
		echo "保存成功";
    }  
	
	?>