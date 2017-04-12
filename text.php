<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" />
<!-- Latest compiled and minified JavaScript -->

<html>
<head>
<meta charset="UTF-8">
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
    </script> 
</head>
<body  background="images\back.jpg"
style=" background-repeat:no-repeat ;
background-size:100% 100%;
background-attachment: fixed;">

<div class="container" >
<div  frameborder="0" scrolling="no" style=" margin-top:-0px; width:1100px; height:50px;">
<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="#">Bolg</a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-3">
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
			<h2>
				Heading
			</h2>
			<p>
				Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
			</p>
			
				 <a class="btn" href="#">View details »</a>
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
			mysql_free_result($result);
			mysql_close($link);
				
		?>
		</div>
		<div style="margin-right:20px">
		<iframe src="pinglun.php" frameborder="0" scrolling="no" style=" margin-top:-0px; width:1200px;height:500px;"></iframe>
		</div>
		</div>
		
	</div>
</div>

<script src="//cdn.bootcss.com/jquery/3.0.0/jquery.js"></script>
<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>