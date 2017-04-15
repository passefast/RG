<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css" />

<!-- Optional theme -->
<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap-theme.min.css" />
<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css" />
<!-- Latest compiled and minified JavaScript -->


<html>
<head>
<meta charset="UTF-8">
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
<?php
	Session_start();
	if(isset($_SESSION["UserName"]))
	{}
	else
		$_SESSION["UserName"]="未登录";
?>
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
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
							 {
							$link=mysql_connect('localhost','root','122947');
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
							 }?>
						</li>

					</ul>
				</div>
				
			</nav>
			<div class="carousel slide" id="carousel-137712" data-ride="carousel" data-interval="2000">
				<ol class="carousel-indicators">
					<li class="active" data-slide-to="0" data-target="#carousel-137712">
					</li>
					<li data-slide-to="1" data-target="#carousel-137712">
					</li>
					<li data-slide-to="2" data-target="#carousel-137712">
					</li>
				</ol>
				<div class="carousel-inner">
					<div class="item active">
						<img alt="" src="images/0.jpg"  />
						<div class="carousel-caption">
							<h4>
								
							</h4>
							<p>
								一切都如生命一般，在悄然地发生着变化，就如这黑夜一样，失去了光明，却得到了星空的美。
							</p>
						</div>
					</div>
					<div class="item">
						<img alt="" src="images/02.jpg" />
						<div class="carousel-caption">
							<h4>
								
							</h4>
							<p>
								我会住在其中的一颗星星上面，在某一颗星星上微笑着，每当夜晚你仰望星空的时候，就会像是看到所有的星星都在微笑一般。
							</p>
						</div>
					</div>
					<div class="item">
						<img alt="" src="images/01.jpg" />
						<div class="carousel-caption">
							<h4>
							
							</h4>
							<p>
								遥望着彼岸的星空，除了遥远，似乎就剩下了寂寞。
							</p>
						</div>
					</div>
				</div> <a class="left carousel-control" href="#carousel-137712" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-137712" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
			</div>
	<div class="row clearfix">
		<div class="col-md-6 column">
			<div class="tabbable" id="tabs-922846">
				<ul class="nav nav-tabs">
					<li class="active">
						 <a href="#panel-986527" data-toggle="tab">杂谈</a>
					</li>
					<li>
						 <a href="#panel-326488" data-toggle="tab">游戏</a>
					</li>
					<li>
						 <a href="#ty" data-toggle="tab">体育</a>
					</li>
					<li>
						 <a href="#yl" data-toggle="tab">娱乐</a>
					</li>
					<li>
						 <a href="#it" data-toggle="tab">IT</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="panel-986527">
						<p>
							<div class="jumbotron">
							<?php
							
							$result=mysql_query("SELECT `id`,`texttitle`,`bolgtext` FROM rg.`bolgtext` WHERE `zt`='1' and `leibie`='杂谈'");
							$num=mysql_num_rows($result);
							if($num==0)
								echo'<center><a>暂无新文章</a></center>';
							else{
								$row=mysql_fetch_row($result);
							echo'<h4>
								<a href="wenzhang.php?id='.$row[0].'&case=wenzhang">'.$row[1].'</a>
							</h4>
							<p >
								'.mb_substr($row[2],0,130,'UTF-8').'......(未完)</p>
							</p>';
							}
							?>
						</div>
						</p>
					</div>
					<div class="tab-pane" id="panel-326488">
						<p>
							<div class="jumbotron">
							<?php
							$result=mysql_query("SELECT `id`,`texttitle`,`bolgtext` FROM rg.`bolgtext` WHERE `zt`='1' and `leibie`='游戏'");
							$num=mysql_num_rows($result);
							if($num==0)
								echo'<center><a>暂无新文章</a></center>';
							else{
								$row=mysql_fetch_row($result);
							echo'<h4>
								<a href="wenzhang.php?id='.$row[0].'&case=wenzhang">'.$row[1].'</a>
							</h4>
							<p >
								'.mb_substr($row[2],0,130,'UTF-8').'......(未完)</p>
							</p>';
							}
							?>
							
						</div>
						</p>
					</div>
					<div class="tab-pane" id="yl">
						<div class="jumbotron">
						<?php
							$result=mysql_query("SELECT `id`,`texttitle`,`bolgtext` FROM rg.`bolgtext` WHERE `zt`='1' and `leibie`='娱乐'");
							$num=mysql_num_rows($result);
							if($num==0)
								echo'<center><a>暂无新文章</a></center>';
							else{
								$row=mysql_fetch_row($result);
							echo'<h4>
								<a href="wenzhang.php?id='.$row[0].'&case=wenzhang">'.$row[1].'</a>
							</h4>
							<p >
								'.mb_substr($row[2],0,130,'UTF-8').'......(未完)</p>
							</p>';
							}
							?>
						</div>
					</div>
					<div class="tab-pane" id="it">
						<div class="jumbotron">
						<?php
							$result=mysql_query("SELECT `id`,`texttitle`,`bolgtext` FROM rg.`bolgtext` WHERE `zt`='1' and `leibie`='IT'");
							$num=mysql_num_rows($result);
							if($num==0)
								echo'<center><a>暂无新文章</a></center>';
							else{
								$row=mysql_fetch_row($result);
							echo'<h4>
								<a href="wenzhang.php?id='.$row[0].'&case=wenzhang">'.$row[1].'</a>
							</h4>
							<p >
								'.mb_substr($row[2],0,130,'UTF-8').'......(未完)</p>
							</p>';
							}
							?>
						</div>
					</div>
					<div class="tab-pane" id="ty">
							<div class="jumbotron">
							<?php
							$result=mysql_query("SELECT `id`,`texttitle`,`bolgtext` FROM rg.`bolgtext` WHERE `zt`='1' and `leibie`='体育'");
							$num=mysql_num_rows($result);
							if($num==0)
								echo'<center><a>暂无新文章</a></center>';
							else{
								$row=mysql_fetch_row($result);
							echo'<h4>
								<a href="wenzhang.php?id='.$row[0].'&case=wenzhang">'.$row[1].'</a>
							</h4>
							<p >
								'.mb_substr($row[2],0,130,'UTF-8').'......(未完)</p>
							</p>';
							mysql_free_result($result);
							}
							
						
							?>
							
						</div>
					</div>
				</div>
			</div>
			
		</div>
		<div class="col-md-6 column">
		<div style="margin-top:10px;margin-bottom:10px">
			<a >老资历博主展示</a>
			</div>
			<?php
			$result=mysql_query("SELECT `usename`,`touxiang`,`zishu` FROM rg.`use` where `id`!='1'");
			$count=0;
			while($row=mysql_fetch_row($result))
			{
			if($count>=3||$row[0]=="")
					break;
			echo'<div class="row">
				<div class="col-md-4">
					<div class="thumbnail">';
			if($row[1]=="")
				$bmp="images/1.jpg";
			else
				$bmp=$row[1];					
						echo'<img alt="140x140" width="140px" src="'.$bmp.'" class="img-circle"  />';
						
						echo'<div class="caption">
							<h3>
								'.$row[0].'
							</h3>';
							if($row[2]=="")
								$mesg="博主是个沉默寡言的人，他（她）把自己感兴趣的内容以博文和照片的形式呈现，博主的相册中有更具体的内容。。。";
							else
								$mesg=$row[2];
							echo'<p>
								'.$mesg.'		
								</p>';
							echo'<p>';
							$result1=mysql_query("SELECT COUNT(*) FROM rg.`bolgtext` WHERE `writer`= '".$row[0]."' and `zt`='1'");
							$row1=mysql_fetch_row($result1);
							echo'<a>发表博文'.$row1[0].'篇</a>	
								</p>
						</div>
					</div>
				</div>';
				$count++;
			}
				mysql_free_result($result);
				mysql_free_result($result1);
				mysql_close($link);?>
			</div>
		</div>
	</div>
</div>
<script src="bootstrap-3.3.7-dist/js/jquery.js"></script>
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</body>
</html>