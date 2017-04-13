<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css" />

<!-- Optional theme -->
<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap-theme.min.css" />
<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css" />
<!-- Latest compiled and minified JavaScript -->
<html>
<head>
<meta charset="UTF-8">
<?php
	Session_start();
	if(isset($_SESSION["UserName"]))
	{
	
	}
	else
	{
		$_SESSION["UserName"]="未登录";
	}


?>
<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" language="javascript" src="js/jquery.js"></script>  
    <script type="text/javascript" language="javascript">   
          
        function fun(n) {  
            var url = "sever.php";			
			var seach=document.getElementById("seach").value;
            var data = {  
                action : n.value, 
				seachmg : seach
            };  
            jQuery.post(url, data, callback);  
        }  
        function callback(data) { 
			if (data==1)
				window.location.href="zonggang.php";	
			else
				alert(data);  
        } 
		function fun2(n) {  
            var url = "sever.php";
			var text=document.getElementById("pingluntext").value;
            var data = {  
                action : n.value, 
				text:text
            };  
            jQuery.post(url, data, callback1);  
        }  
        function callback1(data) { 
			if (data==1)
				window.location.href="text.php";	
			else
				alert(data);  
        } 
		function fun3(n) {  
            var url = "sever.php";
            var data = {  
                action : n.value, 
				id:n.id
            };  
            jQuery.post(url, data, callback2);  
        }  
        function callback2(data) { 
				window.location.href="text.php";	  
        }		
    </script> 
	<style>
	
	.creatediv{
		width: 730px;
		height: 80px;
		border: 1px solid gray;
		background:#fff;
		position: relative;
		margin-top: 10px;
		padding-left: 75px;
	}
	.createinput{
		width: 80px;
		height: 30px;
		position:absolute;
		right: 5px;
		bottom:5px;
	}
	.createimg{
		width: 30px;
		height: 30px;
		position: absolute;
		top: 15px;
		left: 15px;
	}
	.createname{
		position: absolute;
		top: 45px;
		left: 15px;
	}
	.createtime{
		position: absolute;
		font-size:7px;
		top: 12px;
		left: 65px;
	}
	.createdivs{
		width:600px;
		height:50px;
		position: absolute;
		top: 30px;
		left: 85px;
	}
	.tag{
		font-size: 13px;
		margin-left: 420px;
		vertical-align: bottom;
		text-align: center;
		margin-bottom: 0;
	}
	.text{
		width: 730px;
		height: 180px;
		margin:0 auto;

		resize:none;
	}
</style>
</head>
<body  background="images\back.jpg"
style=" background-repeat:no-repeat ;
background-size:100% 100%;
background-attachment: fixed;">
<div class="container" >
<center>
	<div  style=" margin-top:-0px; width:100%; height:50px;">
	<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="#">Bolg</a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li >
							 <a href="index.php">首页</a>
						</li>
						<li>
							 <a href="zonggang.php">博文总览</a>
						</li>
						
					</ul>
					<form class="navbar-form navbar-left" role="search">
						<div class="form-group">
							<input type="text" class="form-control" id="seach"/>
						</div> <button type="submit" class="btn btn-default"  value="check" onclick="fun(this)">查询</button>
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
							echo'<a href="wenzhang.php?case=quit">退出</a>';
							echo'</li>';							
							 echo'</ul>';
							 }?>
						</li>

					</ul>
				</div>
				
			</nav>
		</div>
		</center>
	<div class="row clearfix" style="margin-top:200px">
		<div class="col-md-3 column" style="margin-right:10px">
		<div class="container" frameborder="0" scrolling="no" style=" margin-top:-0px; width:300px; height:700px;">
		<div class="col-md-12 column">
		<center>
		<div>
			<img alt="140x140" src="http://ibootstrap-file.b0.upaiyun.com/lorempixel.com/140/140/default.jpg" class="img-circle"  style="margin-top:10px"/>
			</div>
			<div>
			<?php
			$id=$_SESSION["textid"];
				$link=mysql_connect('localhost','root','122947');
				if(!$link)
					die('连接失败: '.mysql_error());
				mysql_select_db('rg',$link) or die ('选定出错');
				$result=mysql_query("SELECT `texttitle`,`bolgtext`,`writer`,`leibie`,`time` FROM rg.`bolgtext` WHERE `id`='".$id."'");
				$row=mysql_fetch_row($result);
			echo'<a font="15px">'.$row[2].'</a>';
			?>
			</div>
			</center>
			<?php
			echo'<a font="15px" href="wenzhang.php?case=photo&name='.$row[2].'">'.$row[2].'的相册</a>';
			?>
	
			<p>
			博主是个沉默寡言的人，他（她）把自己感兴趣的内容以博文和照片的形式呈现，博主的相册中有更具体的内容。。。	
			</p>
			</div>
			
			<div class="col-md-12 column" >
			<div class="panel-group" id="panel-109935">
				<div class="panel panel-default">
					<div class="panel-heading">
						 <a class="panel-title" data-toggle="collapse" data-parent="#panel-109935" href="#panel-element-62027">Collapsible Group Item #1</a>
					</div>
					<div id="panel-element-62027" class="panel-collapse collapse in">
						<div class="panel-body">
							Anim pariatur cliche...
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						 <a class="panel-title" data-toggle="collapse" data-parent="#panel-109935" href="#panel-element-101541">Collapsible Group Item #2</a>
					</div>
					<div id="panel-element-101541" class="panel-collapse collapse">
						<div class="panel-body">
							Anim pariatur cliche...
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		</div>
		<div class="col-md-8 column" >
		
		<div style="background:#fff;margin-left:10px;border:5px;border-style:solid; border-width:10px; border-color:#fff">
			<?php		
			echo'<h3 style="margin-right:50px">'.$row[0].'</h3>';		
			echo'<a font="7px" style="margin-right:20px>'.$row[3].'</a>';
			echo'<a font="7px" style="margin-right:20px">'.$row[4].'</a>';
			echo'<hr>';
			echo'<p>';
			echo $row[1];
			echo'</p>';
			
				
		?>
		</div>
		<div  style="margin-left:10px; margin-top:10px; width:1200px;">	
	<?php
		$result=mysql_query("SELECT `id`,`name`,`text`,`time` FROM rg.`pinglun` WHERE `zhuangtai`='1'and`writer`='".$id."'");
		if(mysql_num_rows($result)==0)
			echo'<a font-size:10px style="margin-left:350px">暂无评论</a><br>
		<br>';
		else{
		while($row=mysql_fetch_row($result))
		{
		if($row[1]=="游客")
			$bmp="images/1.jpg";
		else{
		$result1=mysql_query("SELECT `touxiang`FROM rg.`use` WHERE `usename`='".$row[0]."'");
		$row1=mysql_fetch_row($result1);
		if($row1[0]=="")
			$bmp="images/1.jpg";
		else
			$bmp=$row1[0];
		mysql_free_result($result1);
			}
		
		if($_SESSION["UserName"]!="未登录"&&$_SESSION["UserName"]==$row[1])
		{
		echo'<div class="creatediv">';
		echo'<img class="createimg" src="'.$bmp.'">';
		echo '<a class="createname">'.$row[1].'</a>';
		echo '<a class="createtime">'.$row[3].'</a>';
		echo'<p class="createdivs">'.$row[2].'</p>';
		echo'<button class="createinput btn btn-default btn-link" value="dpinglun" id="'.$row[0].'"onclick="fun3(this)">删除</button>';
		echo'</div>';
		}
		else{
		
		echo'<div class="creatediv">';
		echo'<img class="createimg" src="'.$bmp.'">';
		echo '<a class="createname">'.$row[1].'</a>';
		echo '<a class="createtime">'.$row[3].'</a>';
		echo'<p class="createdivs">'.$row[2].'</p>';
		echo'</div>';			

		}
		}
		}		
		mysql_free_result($result);
		mysql_close($link);
		?>
	<a style="display:inline">你想对楼主说点什么</a>
	<a class="tag">你最多可以输入30个字符</a>
	<textarea id="pingluntext" cols="30" rows="10" maxlength="30" class="text"></textarea><br>

	<button type="submit" style="height:30px;width:50px;"value="pinglun" onclick="fun2(this)">发表</button>
	</div>
		</div>
		
	</div>
</div>

<script src="bootstrap-3.3.7-dist/js/jquery.js"></script>
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</body>
</html>