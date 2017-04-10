<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<html>
<head>

    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="dist/css/wangEditor.min.css">
    <style type="text/css">
        #editor-trigger {
            height: 400px;
            /*max-height: 500px;*/
        }
        .container {
            width: 80%;
            margin: 0 auto;
            position: relative;
        }
    </style>
	<?php
	Session_start();
	if(isset($_SESSION["UserName"]))
	{}
	else
		$_SESSION["UserName"]="未登录";
?>
</head>
<body style="padding:0 20px;">

	<center>
	<div frameborder="0" scrolling="no" style=" margin-top:-0px; width:86%; height:200px;">
	<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="#">Bolg</a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
					<ul class="nav navbar-nav">
						<li >
							 <a href="index.php">首页</a>
						</li>
						<li >
							 <a href="zonggang.php">博文总览</a>
						</li>
						
					</ul>
					<form class="navbar-form navbar-left" role="search">
						<div class="form-group">
							<input type="text" class="form-control" />
						</div> <button type="submit" class="btn btn-default">查询</button>
					</form>
					<ul class="nav navbar-nav navbar-right">
						
						<li class="dropdown">
							<?php  
							 if($_SESSION["UserName"]=="未登录")
								 echo '<a href="login.php">'.$_SESSION["UserName"].'</a>';
							 else 
							 {
								echo '<a href="#" class="dropdown-toggle" data-toggle="dropdown">'.$_SESSION["UserName"].'<strong class="caret"></strong></a>';
							echo'<ul class="dropdown-menu">';
							echo'<li>';
							echo'<a href="head.php">我的博客</a>';
							echo'</li>';
							echo'<li>';
							echo' <a href="edit.php">写博客</a>';
							echo'</li>';
							echo'<li>';
							echo'<a href="photo.php">我的相册</a>';
							echo'</li>';
							echo'<li class="divider">';
							echo'</li>';
							echo'<li>';
							echo'<a href="tuichu.php">退出</a>';
							echo'</li>';							
							 echo'</ul>';
							 }?>
						</li>
					</ul>
				</div>
				
			</nav>

		</div>
		</center>
<form action="" method="post">
<div style="margin-left:140px;margin-bottom:20px">
<a>文章标题</a>
</div>
<hr style="width:80%">
<div>
<textarea  id="texttitle" cols="80" rows="1" maxlength="80" style="margin-left:140px;font-size:20px"></textarea>
</div>

<div style="margin-left:140px;margin-bottom:20px">
<a >文章内容</a>
</div>
<hr style="width:80%">
<center>
    <div id="editor-container" class="container">
        <div id="editor-trigger"><p></p></div>
       
    </div>
	<div style="margin-top:10px;">

	<button type="button" class="btn  btn-info btn-sm"style="margin-left:10px;" value="fabiao" onclick="fun(this)">发表</button>
	<button type="button" class="btn  btn-info btn-sm"style="margin-left:10px;" value="baocun" onclick="fun(this)">保存</button>
	<button type="button" class="btn  btn-info btn-sm"style="margin-left:10px;" value="quxiao" onclick="window.location.href='index.php'">取消</button>
	
	</div>
	</center>
    <p><br></p>
	</form>
	<script type="text/javascript" language="javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="dist/js/lib/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="dist/js/wangEditor.js"></script>
    <!--<script type="text/javascript" src="../dist/js/wangEditor.min.js"></script>-->
    <script type="text/javascript">
        // 阻止输出log
        // wangEditor.config.printLog = false;

        var editor = new wangEditor('editor-trigger');

        // 上传图片
        editor.config.uploadImgUrl = '/rg/upload.php';
		editor.config.uploadImgFileName = 'myFileName';
    

        // 表情显示项
        editor.config.emotionsShow = 'value';
        editor.config.emotions = {
            'default': {
                title: '默认',
                data: './emotions.data'
            },
            'weibo': {
                title: '微博表情',
                data: [
                    {
                        icon: 'http://img.t.sinajs.cn/t35/style/images/common/face/ext/normal/7a/shenshou_thumb.gif',
                        value: '[草泥马]'    
                    },
                    {
                        icon: 'http://img.t.sinajs.cn/t35/style/images/common/face/ext/normal/60/horse2_thumb.gif',
                        value: '[神马]'    
                    },
                    {
                        icon: 'http://img.t.sinajs.cn/t35/style/images/common/face/ext/normal/bc/fuyun_thumb.gif',
                        value: '[浮云]'    
                    },
                    {
                        icon: 'http://img.t.sinajs.cn/t35/style/images/common/face/ext/normal/c9/geili_thumb.gif',
                        value: '[给力]'    
                    },
                    {
                        icon: 'http://img.t.sinajs.cn/t35/style/images/common/face/ext/normal/f2/wg_thumb.gif',
                        value: '[围观]'    
                    },
                    {
                        icon: 'http://img.t.sinajs.cn/t35/style/images/common/face/ext/normal/70/vw_thumb.gif',
                        value: '[威武]'
                    }
                ]
            }
        };

        

        // onchange 事件
        editor.onchange = function () {
            console.log(this.$txt.html());
        };

        
        editor.create();
		
		
    
          
        function fun(n) {  
            var url = "sever.php";  			
			var texttitle=document.getElementById("texttitle").value;
			var text=editor.$txt.html();
            var data = {  
                action : n.value,
				texttitle:texttitle,
				bolgtext:text
            };  
            jQuery.post(url, data, callback);  
        }  
        function callback(data) {  
            alert(data);  
        }  

    </script>
</body>
</html>
