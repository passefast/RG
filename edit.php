<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css" />

<!-- Optional theme -->
<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap-theme.min.css" />
<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css" />
<!-- Latest compiled and minified JavaScript -->

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
<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" language="javascript" src="js/jquery.js"></script>  
    <script type="text/javascript" language="javascript">            
        function fun1(n) {  
            var url = "sever.php"; 
			var seach=document.getElementById("seach").value;
            var data = {  
                action : n.value, 
				seachmg : seach
            };  
            jQuery.post(url, data, callback1);  
        }  
        function callback1(data) { 
			if (data==1)
				window.location.href="zonggang.php";	
			else
				alert(data);						
        }  
    </script> 
</head>
<body style="padding:0 20px;">

	<center>
	<div frameborder="0" scrolling="no" style=" margin-top:-0px; width:92%; height:100px;">
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
							<input type="text" class="form-control" id="seach" placeholder="博主名或文章相关"/>
						</div> <button type="submit" class="btn btn-default"  value="check" onclick="fun1(this)">查询</button>
					</form>
					<ul class="nav navbar-nav navbar-right">
						
						<li class="dropdown">
							<?php  
							 if($_SESSION["UserName"]=="未登录")
								 echo '<a href="login.php">'.$_SESSION["UserName"].'</a>';
							 else 
							 {$link=mysql_connect('localhost','root','122947');
							if(!$link)
								die('连接失败: '.mysql_error());
							mysql_select_db('rg',$link) or die ('选定出错');
							$result2=mysql_query("SELECT `touxiang` FROM rg.`use` WHERE `usename`='".$_SESSION["UserName"]."'");
							$row3=mysql_fetch_row($result2);
							if($row3[0]=="")
								$bmp="images/1.jpg";
							else
								$bmp=$row3[0];
							mysql_free_result($result2);
							echo '<a href="#" class="dropdown-toggle" data-toggle="dropdown">'.$_SESSION["UserName"].'<strong class="caret"></strong></a>';
							echo'<ul class="dropdown-menu">';
							echo'<li>';
							echo'<center><img alt="140x140" width="40px"src="'.$bmp.'" class="img-circle"  /></center>';
							echo'</li>';
							echo'</li>';
							echo'<li class="divider">';
							echo'</li>';
							echo'<li>';
							echo'<a href="head.php">我的博客</a>';
							echo'</li>';
							echo'<li>';
							echo' <a href="edit.php">写博客</a>';
							echo'</li>';
							echo'<li>';
							echo'<a href="wenzhang.php?case=photo1">我的相册</a>';
							echo'</li>';
							echo'<li class="divider">';
							echo'</li>';
							echo'<li>';
							echo'<a href="wenzhang.php?case=quit">退出</a>';
							echo'</li>';							
							 echo'</ul>';
							 mysql_close($link);
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

<div style="margin-left:140px;font-size:14px">
<select id="selType"><option value="杂谈">杂谈</option><option value="游戏">游戏</option><option value="体育">体育</option><option value="娱乐">娱乐</option><option value="IT">IT</option></select>
</div>
<div>
<textarea  id="texttitle" cols="80" rows="1" maxlength="80" style="margin-left:140px;font-size:20px"></textarea>
</div>

<div style="margin-left:140px;margin-bottom:20px">
<a >文章内容</a>
</div>
<hr style="width:80%">
<center>
    <div id="editor-container" class="container">
        <div id="editor-trigger" style="width:80%;height:800px"><p></p></div>
       
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
			var biaoti=document.getElementById("selType").value;
			var text=editor.$txt.html();
            var data = {  
                action : n.value,
				texttitle:texttitle,
				bolgtext:text,
				fenlei:biaoti
            };  
            jQuery.post(url, data, callback);  
        }  
        function callback(data) {  
			if(data==1)
			{
				location.reload();
			}
			else
				alert (data);
        }  

    </script>
<script src="bootstrap-3.3.7-dist/js/jquery.js"></script>
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</body>
</html>
