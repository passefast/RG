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
<body  background="images\back1.jpg"
style=" background-repeat:no-repeat ;
background-size:100% 100%;
background-attachment: fixed;">

<div class="container" >
<center>
	<div  style=" margin-top:-0px; width:100%; height:200px;">
	<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="#">Bolg</a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li >
							 <a href="index.php">首页</a>
						</li>
						<li class="active">
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
		</div>
		</center>
	<div class="row clearfix" style=" margin-left:80px; margin-top:50px">
		<div class="col-md-3 column" style=" margin-right:10px ;background:#fff">
		<h3 style=" margin-left:60px">最新博文</h3>
		<hr>
			<ol>
			<?php
				$link=mysql_connect('localhost','root','122947');
				if(!$link)
					die('连接失败: '.mysql_error());
				mysql_select_db('rg',$link) or die ('选定出错');
				$result=mysql_query("SELECT `id`,`texttitle`,`time` FROM rg.`bolgtext` WHERE `zt`='1'");
				$num=mysql_num_rows($result);
				if($num==0)
				{
					echo '<center><a font="20px">暂无最新文章!!!!!</a></center>';
				}
				else{
					$count=0;
					while($row=mysql_fetch_row($result))
					{
						if($count>9)
							break;
						echo'<li>';
						echo '<a style="margin-right:20px" font="7px" href="wenzhang.php?id='.$row[0].'&case=wenzhang">'.mb_substr($row[1],0,7,'UTF-8').'...</a>';
						echo '<a style="margin-right:20px" font="7px">'.$row[2].'</a>';
						echo'</li>';
						$count++;
					}
				
				}
				mysql_free_result($result);
				mysql_close($link);
			?>
			</ol>
		</div>
		


		<div class="col-md-8 column" style="background:#fff;">
		<h3>博客总览</h3>
		<hr>
			<ul><?php
			if(isset($_SESSION["searchmg"])&&$_SESSION["searchmg"]!="未搜索")
			{
				$seach=$_SESSION["searchmg"];
				$link=mysql_connect('localhost','root','122947');
				if(!$link)
					die('连接失败: '.mysql_error());
				mysql_select_db('rg',$link) or die ('选定出错');
				$result=mysql_query("SELECT `id`,`texttitle`,`writer`,`leibie`,`time` FROM rg.`bolgtext` WHERE `texttitle` LIKE '%".$seach."%' and `zt`='1'");
				$num=mysql_num_rows($result);
				if($num==0)
				{
					echo '<center><a font="20px">搜索不到您想要的文章!!!!!</a></center>';
				}
				else{
				
					while($row=mysql_fetch_row($result))
					{
						echo'<li>';
						$lenth=376-strlen($row[1])*5;
						echo '<a style="margin-right:'.$lenth.'px " font="7px" href="wenzhang.php?id='.$row[0].'&case=wenzhang" >'.$row[1].'</a>';
						echo '<a style="margin-right:30px" font="7px">'.$row[2].'</a>';
						echo '<a style="margin-right:30px" font="7px">'.$row[3].'</a>';
						echo '<a style="margin-right:0px" font="7px">'.$row[4].'</a>';	
						echo'</li>';
					}
				
				}
				$_SESSION["searchmg"]="未搜索";
				mysql_free_result($result);
				mysql_close($link);
			}
			else
			{
				$link=mysql_connect('localhost','root','122947');
				if(!$link)
				die('连接失败: '.mysql_error());
				mysql_select_db('rg',$link) or die ('选定出错');
				$result=mysql_query("SELECT `id`,`texttitle`,`writer`,`leibie`,`time` FROM rg.`bolgtext` where `zt`='1'");
				while($row=mysql_fetch_row($result))
					{
						echo'<li>';
						$lenth=376-strlen($row[1])*5;
						echo '<a style="margin-right:'.$lenth.'px " font="7px" href="wenzhang.php?id='.$row[0].'&case=wenzhang" >'.$row[1].'</a>';
						echo '<a style="margin-right:30px" font="7px">'.$row[2].'</a>';
						echo '<a style="margin-right:30px" font="7px">'.$row[3].'</a>';
						echo '<a style="margin-right:30px" font="7px">'.$row[4].'</a>';			
						echo'</li>';
					}
				$_SESSION["searchmg"]="未搜索";
				mysql_free_result($result);
				mysql_close($link);
			}
				?>
			</ul>
		</div>
	</div>
</div>
<script src="bootstrap-3.3.7-dist/js/jquery.js"></script>
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</body>
</html>