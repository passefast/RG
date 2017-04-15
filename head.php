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
<body>

<div class="container">
<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="#">Bolg</a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active">
							 <a href="#">首页</a>
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
			<div>
			<?php
			if($_SESSION["UserName"]=="管理员")
				echo'<h3>所有博文管理</h3>';
			else
				echo'<h3>'.$_SESSION["UserName"].'的博文管理</h3>';
			?>
			</div>
	<div class="row clearfix" style=" margin-top:100px">
		<div class="col-md-12 column">
			<div class="tabbable" id="tabs-737120">
				<ul class="nav nav-tabs">
					<li class="active">
						 <a href="#panel-45526" data-toggle="tab">博文总览</a>
					</li>
					<li>
						 <a href="#panel-873725" data-toggle="tab">未发表博文</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="panel-45526">
						<p>
						<?php
						echo '<a style="margin-right:460px;margin-left:100px" font="7px">文章名</a>';
						echo '<a style="margin-right:40px" font="7px">类别</a>';
						echo '<a style="margin-right:70px" font="7px">编写时间</a>';
						echo '<a style="margin-right:20px" font="7px">状态</a>';	
						?>
							<ol>
					<?php
				$name=$_SESSION["UserName"];
				$link=mysql_connect('localhost','root','122947');
				if(!$link)
					die('连接失败: '.mysql_error());
				mysql_select_db('rg',$link) or die ('选定出错');
				$result=mysql_query("SELECT `id`,`texttitle`,`leibie`,`time`,`zt` FROM rg.`bolgtext` WHERE `writer`='".$name."'");
				$num=mysql_num_rows($result);
				if($num==0)
				{
					echo '<center><a font="20px">暂无文章!!!!!</a></center>';
				}
				else{
					while($row=mysql_fetch_row($result))
					{
						echo'<li>';
						$lenth=576-strlen($row[1])*5;
						echo '<a style="margin-right:'.$lenth.'px " font="7px" href="wenzhang.php?id='.$row[0].'&case=wenzhang" >'.$row[1].'</a>';
						echo '<a style="margin-right:20px" font="7px">'.$row[2].'</a>';
						echo '<a style="margin-right:20px" font="7px">'.$row[3].'</a>';
						if($row[4]=="1")
							echo '<a style="margin-right:20px" font="7px">发表</a>';
						if($row[4]=="2")
							echo '<a style="margin-right:20px" font="7px">未发表</a>';
						echo '<a style="margin-right:20px" font="7px" href="wenzhang.php?id='.$row[0].'&case=delete1">删除</a>';
						echo'</li>';
					}
				
				}
				mysql_free_result($result);
				mysql_close($link);
				?>
				</ol>
						</p>
					</div>
					<div class="tab-pane" id="panel-873725">
						<p>
							<p>
						<?php
						echo '<a style="margin-right:460px;margin-left:100px" font="7px">文章名</a>';
						echo '<a style="margin-right:40px" font="7px">类别</a>';
						echo '<a style="margin-right:70px" font="7px">编写时间</a>';
						?>
							<ol>
					<?php
				$name=$_SESSION["UserName"];			
				$link=mysql_connect('localhost','root','122947');
				if(!$link)
					die('连接失败: '.mysql_error());
				mysql_select_db('rg',$link) or die ('选定出错');
				$result=mysql_query("SELECT `id`,`texttitle`,`leibie`,`time` FROM rg.`bolgtext` WHERE `writer`='".$name."' and `zt`='2'");
				$num=mysql_num_rows($result);
				if($num==0)
				{
					echo '<center><a font="20px">暂无文章!!!!!</a></center>';
				}
				else{
					while($row=mysql_fetch_row($result))
					{
						echo'<li>';
						$lenth=400-strlen($row[1]);
						echo '<a style="margin-right:'.$lenth.'px " font="7px" href="wenzhang.php?id='.$row[0].'&case=wenzhang">'.$row[1].'</a>';
						echo '<a style="margin-right:20px" font="7px">'.$row[2].'</a>';
						echo '<a style="margin-right:20px" font="7px">'.$row[3].'</a>';
						echo '<a style="margin-right:20px" font="7px" href="wenzhang.php?id='.$row[0].'&case=fabiao">发表</a>';
						echo'</li>';
					}
				
				}
				mysql_free_result($result);
				mysql_close($link);
				?>
				</ol>
						</p>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div>
<script src="bootstrap-3.3.7-dist/js/jquery.js"></script>
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</body>
</html>