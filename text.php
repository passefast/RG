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
		function show(n) {       					
			var div=document.getElementById(n.value);
			if(div.style.display=="")
			{
				div.style.display="none";
				n.innerText="展开"
			}
			else
			{
				div.style.display="";
				n.innerText="收起"
			}
         
        } 
		function func(n) {  
            var url = "sever.php";  
			var strs= new Array(); //定义一数组 

			strs=n.id.split(","); 					
			var text=document.getElementById(strs[1]).value;
            var data = {  
                action : n.value, 
				id :strs[0],
				text:text
            };  
            jQuery.post(url, data, callbackc);  
        }  
        function callbackc(data) { 
			if (data==1)
				window.location.href="text.php";	
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
		function fun4(n) {  
            var url = "sever.php";
			var text=document.getElementById("message").value;
            var data = {  
                action : n.value, 
				mesg:text
            };  
            jQuery.post(url, data, callback4);  
        }  
        function callback4(data) { 
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
	.creatediv1{
		width: 630px;
		height: 60px;
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
	.createimg1{
		width: 20px;
		height: 20px;
		position: absolute;
		top: 10px;
		left: 10px;
	}
	.createname1{
		position: absolute;
		top: 30px;
		left: 10px;
		font-size: 3px;
	}
	.createtime1{
		position: absolute;
		font-size:5px;
		top: 7px;
		left: 65px;
	}
	.createdivs1{
		width:500px;
		height:45px;
		position: absolute;
		top: 25px;
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
	.text1{
		width: 500px;
		height: 180px;
		margin:0 auto;

		resize:none;
	}
</style>
</head>
<body  background="images\back1.jpg"
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
							<input type="text" class="form-control" id="seach" placeholder="博主名或文章相关"/>
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
	<div class="row clearfix" style="margin-top:200px">
		<div class="col-md-3 column" style="margin-right:10px">
		<div class="container" frameborder="0" scrolling="no" style=" margin-top:-0px; width:300px; height:700px;">
		<div class="col-md-12 column">
		<center>
		<div>
			<?php
			$id=$_SESSION["textid"];
				$link=mysql_connect('localhost','root','122947');
				if(!$link)
					die('连接失败: '.mysql_error());
				mysql_select_db('rg',$link) or die ('选定出错');
				$result=mysql_query("SELECT `texttitle`,`bolgtext`,`writer`,`leibie`,`time` FROM rg.`bolgtext` WHERE `id`='".$id."'");
				$row=mysql_fetch_row($result);
				$result2=mysql_query("SELECT `touxiang`,`zishu` FROM rg.`use` WHERE `usename`='".$row[2]."'");
				$row3=mysql_fetch_row($result2);
				if($row3[0]=="")
					$bmp="images/1.jpg";
				else
					$bmp=$row3[0];
			echo'<img alt="140x140" width="140px"src="'.$bmp.'" class="img-circle"  style="margin-top:10px"/>
			</div>
			<div>';
				
			echo'<a font="15px">'.$row[2].'</a>';
			?>
			</div>
			</center>
			<?php
			echo'<center><a font="15px" href="wenzhang.php?case=photo&name='.$row[2].'">'.$row[2].'的相册</a></center>';
			$bozhu=$row[2];
			if($bozhu==$_SESSION["UserName"])
			{
				echo' <a id="modal-935329" href="#modal-container-935329" style="margin-left:150px"role="button" class="btn" data-toggle="modal">修改个性签名</a>
			
			<div class="modal fade" id="modal-container-935329" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<h4 class="modal-title" id="myModalLabel">
								修改
							</h4>
						</div>
						<div class="modal-body">';
						if($row3[1]=="")
							echo'
								<p>
								<textarea  cols="70" rows="5" maxlength="70"  id="message"></textarea>	
								</p>';
						else
							echo'<p><textarea  cols="70" rows="5" maxlength="70"  id="message">'.$row3[1].'</textarea></p>';
							
						echo'</div>
						<div class="modal-footer">
							 <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button> <button type="button" class="btn btn-primary" value="save" onclick="fun4(this)">保存</button>
						</div>
					</div>
					
				</div>
				
			</div>';
			}
			?>
			<?php
			if($row3[1]=="")
				echo'
				<p style="white">
				博主是个沉默寡言的人，他（她）把自己感兴趣的内容以博文和照片的形式呈现，博主的相册中有更具体的内容。。。	
				</p>';
			else
				echo'<p>'.$row3[1].'</p>';
			
			mysql_free_result($result2)
			?>
			</div>
			<div class="col-md-12 column" >
			<div class="panel-group" id="panel-109935">
				<div class="panel panel-default">
					<div class="panel-heading">
						 <center><a class="panel-title" data-toggle="collapse" data-parent="#panel-109935" href="#panel-element-62027">杂谈</a></center>
					</div>
					<div id="panel-element-62027" class="panel-collapse collapse in">
						<div class="panel-body">
				<?php
				$result=mysql_query("SELECT `id`,`texttitle`,`time` FROM rg.`bolgtext` WHERE `zt`='1' and `writer`='".$bozhu."' and `leibie`='杂谈'");
				$num=mysql_num_rows($result);
				if($num==0)
				{
					echo '<center><a font="20px">暂无最新文章!!!!!</a></center>';
				}
				else{
					while($row1=mysql_fetch_row($result))
					{
						echo'<li>';
						echo '<a style="margin-right:20px" font="7px" href="wenzhang.php?id='.$row1[0].'&case=wenzhang">'.mb_substr($row1[1],0,7,'UTF-8').'...</a>';
						echo '<a style="margin-right:20px" font="7px">'.$row1[2].'</a>';
						echo'</li>';
					}
				
				}
				
				?>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						<center> <a class="panel-title" data-toggle="collapse" data-parent="#panel-109935" href="#panel-element-101541">游戏</a></center>
					</div>
					<div id="panel-element-101541" class="panel-collapse collapse">
						<div class="panel-body">
				<?php	$result=mysql_query("SELECT `id`,`texttitle`,`time` FROM rg.`bolgtext` WHERE `zt`='1' and `writer`='".$bozhu."' and `leibie`='游戏'");
				$num=mysql_num_rows($result);
				if($num==0)
				{
					echo '<center><a font="20px">暂无最新文章!!!!!</a></center>';
				}
				else{
					while($row1=mysql_fetch_row($result))
					{
						echo'<li>';
						echo '<a style="margin-right:20px" font="7px" href="wenzhang.php?id='.$row1[0].'&case=wenzhang">'.mb_substr($row1[1],0,7,'UTF-8').'...</a>';
						echo '<a style="margin-right:20px" font="7px">'.$row1[2].'</a>';
						echo'</li>';
					}
				
				}?>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						 <center><a class="panel-title" data-toggle="collapse" data-parent="#panel-109935" href="#panel-element-62026">体育</a></center>
					</div>
					<div id="panel-element-62026" class="panel-collapse collapse ">
						<div class="panel-body">
						<?php	$result=mysql_query("SELECT `id`,`texttitle`,`time` FROM rg.`bolgtext` WHERE `zt`='1' and `writer`='".$bozhu."' and `leibie`='体育'");
				$num=mysql_num_rows($result);
				if($num==0)
				{
					echo '<center><a font="20px">暂无最新文章!!!!!</a></center>';
				}
				else{
					while($row1=mysql_fetch_row($result))
					{
						echo'<li>';
						echo '<a style="margin-right:20px" font="7px" href="wenzhang.php?id='.$row1[0].'&case=wenzhang">'.mb_substr($row1[1],0,7,'UTF-8').'...</a>';
						echo '<a style="margin-right:20px" font="7px">'.$row1[2].'</a>';
						echo'</li>';
					}
				
				}?>	
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						 <center><a class="panel-title" data-toggle="collapse" data-parent="#panel-109935" href="#panel-element-62025">娱乐</a></center>
					</div>
					<div id="panel-element-62025" class="panel-collapse collapse">
						<div class="panel-body">
						<?php	
				$result=mysql_query("SELECT `id`,`texttitle`,`time` FROM rg.`bolgtext` WHERE `zt`='1' and `writer`='".$bozhu."' and `leibie`='娱乐'");
				$num=mysql_num_rows($result);
				if($num==0)
				{
					echo '<center><a font="20px">暂无最新文章!!!!!</a></center>';
				}
				else{
					while($row1=mysql_fetch_row($result))
					{
						echo'<li>';
						echo '<a style="margin-right:20px" font="7px" href="wenzhang.php?id='.$row1[0].'&case=wenzhang">'.mb_substr($row1[1],0,7,'UTF-8').'...</a>';
						echo '<a style="margin-right:20px" font="7px">'.$row1[2].'</a>';
						echo'</li>';
					}
				
				}?>	
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						 <center><a class="panel-title" data-toggle="collapse" data-parent="#panel-109935" href="#panel-element-62024">IT</a></center>
					</div>
					<div id="panel-element-62024" class="panel-collapse collapse ">
						<div class="panel-body">
						<?php	$result=mysql_query("SELECT `id`,`texttitle`,`time` FROM rg.`bolgtext` WHERE `zt`='1' and `writer`='".$bozhu."' and `leibie`='IT'");
				$num=mysql_num_rows($result);
				if($num==0)
				{
					echo '<center><a font="20px">暂无最新文章!!!!!</a></center>';
				}
				else{
					while($row1=mysql_fetch_row($result))
					{

						echo'<li>';
						echo '<a style="margin-right:20px" font="7px" href="wenzhang.php?id='.$row1[0].'&case=wenzhang">'.mb_substr($row1[1],0,7,'UTF-8').'...</a>';
						echo '<a style="margin-right:20px" font="7px">'.$row1[2].'</a>';
						echo'</li>';
						mysql_free_result($result);
					}
				
				}?>	
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
			echo'<a font="7px" style="margin-right:20px">'.$row[3].'</a>';
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
			$countfor=0;
		while($row=mysql_fetch_row($result))
		{
			$resultx=mysql_query("SELECT `id`,`name`,`text`,`time` FROM rg.`fupinglun` WHERE `zhuangtai`='1'and`writer`='".$id."'and`huifu`='".$row[0]."'");
		if($row[1]=="游客")
			$bmp="images/1.jpg";
		else{
		$result1=mysql_query("SELECT `touxiang`FROM rg.`use` WHERE `usename`='".$row[1]."'");
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
		echo'<button style="position: absolute;top: 30px;right: 5px; outline:none" class="createinput btn btn-sm btn-link" value="dpinglun" id="'.$row[0].'"onclick="fun3(this)">删除</button>';
		if(mysql_num_rows($resultx)>0)
		{
			echo'<button style="position:absolute;top:50px;right:5px; outline:none" class="createinput btn btn-xs btn-link" value="'.$countfor.'" onclick="show(this)">展开</button>';
		}
		echo'</div>';
		
		}
		else{
		
		echo'<div class="creatediv">';
		echo'<img class="createimg" src="'.$bmp.'">';
		echo '<a class="createname">'.$row[1].'</a>';
		echo '<a class="createtime">'.$row[3].'</a>';
		echo'<p class="createdivs">'.$row[2].'</p>';
					
		echo' <a id="modal-537286" href="#modal-container-537286"style="position: absolute;top: 30px;right: 15px;outline:none" role="button" class="btn btn-sm" data-toggle="modal" >回复</a>
			
			<div class="modal fade" id="modal-container-537286" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<h4 class="modal-title" id="myModalLabel" >
								你想对Ta说点什么
							</h4>
						</div>
						<div class="modal-body">
							<textarea id='.$row[3].'" cols="30" rows="10" maxlength="30" class="text1"></textarea><br>
						</div>
						<div class="modal-footer">
							 <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button> <button type="button" id="'.$row[0].','.$row[3].'" class="btn btn-primary"value="huifu" onclick="func(this,'.$row[3].')" >发表</button>
						</div>
					</div>
					
				</div>
				
			</div>';
		if(mysql_num_rows($resultx)>0)
		{
			echo'<button style="position:absolute;top:50px;right:-2px; outline:none" class="createinput btn btn-xs btn-link" value="'.$countfor.'" onclick="show(this)">展开</button>';
		}
			echo'</div>';
		}
		
		echo'<div>';
		if(mysql_num_rows($resultx)>0)
		{
			echo'<div id="'.$countfor.'" style="display:none">';
			while($rowx=mysql_fetch_row($resultx)){
				if($rowx[1]=="游客")
			$bmp="images/1.jpg";
		else{
		$result1=mysql_query("SELECT `touxiang`FROM rg.`use` WHERE `usename`='".$rowx[1]."'");
		$row1=mysql_fetch_row($result1);
		if($row1[0]=="")
			$bmp="images/1.jpg";
		else
			$bmp=$row1[0];
		mysql_free_result($result1);
			}
		if($_SESSION["UserName"]!="未登录"&&$_SESSION["UserName"]==$rowx[1])
		{
		echo'<div class="creatediv1">';
		echo'<img class="createimg1" src="'.$bmp.'">';
		echo '<a class="createname1">'.$rowx[1].'</a>';
		echo '<a class="createtime1">'.$rowx[3].'</a>';
		echo'<p class="createdivs1">'.$rowx[2].'</p>';
		echo'<button class="createinput btn btn-sm btn-link" style="outline:none" value="dfpinglun" id="'.$rowx[0].'"onclick="fun3(this)">删除</button>';
		echo'</div>';
		
		}
		else{		
		echo'<div class="creatediv1">';
		echo'<img class="createimg1" src="'.$bmp.'">';
		echo '<a class="createname1">'.$rowx[1].'</a>';
		echo '<a class="createtime1">'.$rowx[3].'</a>';
		echo'<p class="createdivs1">'.$rowx[2].'</p>';
		echo' <a id="modal-144829" href="#modal-container-144829" style="position: absolute;top: 25px;right: 20px;outline:none" role="button" class="btn btn-sm" data-toggle="modal">回复</a>
			
			<div class="modal fade" id="modal-container-144829" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<h4 class="modal-title" id="myModalLabel">
								你想对Ta说点什么
							</h4>
						</div>
						<div class="modal-body">
							<textarea id="'.$rowx[3].'" cols="30" rows="10" maxlength="30" class="text1"></textarea><br>
						</div>
						<div class="modal-footer">
							 <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button> <button id="'.$row[0].','.$rowx[3].'"type="button" class="btn btn-primary" value="huifu" onclick="func(this)">发表</button>
						</div>
					</div>
					
				</div>
			</div>	
			</div>';
		}
		
		}
		echo'</div>';
		echo'</div>';
		mysql_free_result($resultx);
		}
		
		$countfor++;
		}
		}		
		mysql_free_result($result);
		mysql_close($link);
		?>
		<div>
	<a style="display:inline">你想对楼主说点什么</a>
	<a class="tag">你最多可以输入30个字符</a>
	<textarea id="pingluntext" cols="30" rows="10" maxlength="30" class="text"></textarea><br>

	<button type="submit" style="height:30px;width:50px;"value="pinglun" onclick="fun2(this)">发表</button>
	</div>
	</div>
		</div>
		
	</div>
</div>

<script src="bootstrap-3.3.7-dist/js/jquery.js"></script>
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</body>
</html>