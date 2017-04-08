<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<meta name="keywords" content="sign up">
	<meta name="content" content="sign up">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <link type="text/css" rel="stylesheet" href="css/login.css">
    <script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" language="javascript" src="jquery.js"></script>  
    <script type="text/javascript" language="javascript">   
          
        function fun(n) {  
            var url = "sever.php"; 
			var phone= document.getElementById("num").value;
			var youxiang= document.getElementById("email").value;
			var mima= document.getElementById("password").value;
            var data = {  
                action : n.value, 
				phoneinfo : phone,
				emailinfo : youxiang,
				miaminfo : mima
            };  
            jQuery.post(url, data, callback);  
        }  
        function callback(data) { 
			if (data==1)
				window.location.href='index.php';	
			else
				alert(data);  
        }  
    </script> 
</head>
<body class="login_bj" >

<div class="zhuce_body">
	<div class="logo"><a href="#"></a></div>
    <div class="zhuce_kong">
    	<div class="zc">
        	<div class="bj_bai">
            <h3>欢迎注册</h3>
       	  	  <form action="" method="post">
                <input name="" type="text" class="kuang_txt phone" placeholder="手机号" id="num">
                <input name="" type="text" class="kuang_txt email" placeholder="邮箱" id="email">
                <input name="" type="text" class="kuang_txt possword" placeholder="密码" id="password">
           
                <div>
				</div>
                <button type="button" class="btn_zhuce" value="zhuce" onclick="fun(this)">注册</button>
                
                </form>
            </div>
        	<div class="bj_right">
            	<p>使用以下账号直接登录</p>
                <a href="#" class="zhuce_qq">QQ注册</a>
                <a href="#" class="zhuce_wb">微博注册</a>
                <a href="#" class="zhuce_wx">微信注册</a>
                <p>已有账号？<a href="login.php">立即登录</a></p>
            
            </div>
        </div>
    </div>

</div>


</body>
</html>