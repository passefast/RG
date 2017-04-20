<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css" />

<!-- Optional theme -->
<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap-theme.min.css" />
<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css" />
<!-- Latest compiled and minified JavaScript -->
<html>
<head>
<meta charset="UTF-8">
<style>
.file {
    position: relative;
    display: inline-block;
    background: #D0EEFF;
    border: 1px solid #99D3F5;
    border-radius: 4px;
    padding: 4px 12px;
    overflow: hidden;
    color: #1E88C7;
    text-decoration: none;
    text-indent: 0;
    line-height: 20px;
}
.file input {
    position: absolute;
    font-size: 100px;
    right: 0;
    top: 0;
    opacity: 0;
}
.file:hover {
    background: #AADFFD;
    border-color: #78C3F3;
    color: #004974;
    text-decoration: none;
}
</style>
<script type="text/javascript">  
   function $$(obj) {
    return document.getElementById(obj);
}
function upload(f){    
    var str = "";
    for(var i=0;i<f.length;i++){
        var reader = new FileReader();
        reader.readAsDataURL(f[i]);
        reader.onload = function(e){
            str+="<img class='img-circle' width='140px' alt='140x140'src='"+e.target.result+"'/>";		
            $$("dd").innerHTML = str;
        }
    }
 
}
    </script> 
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
	<?php
	error_reporting(E_ALL ^ E_WARNING);
	Session_start();
	if(isset($_SESSION["UserName"]))
	{}
	else
		$_SESSION["UserName"]="未登录";
?>
</head>
<body  background="images\back1.jpg"
style=" background-repeat:no-repeat ;
background-size:100% 100%;
background-attachment: fixed;">
<div class="container">
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
							 mysql_close($link);
							 }?>
						</li>
					</ul>
				</div>
				
			</nav>
	<div class="row clearfix">
	
	<?php	
	$link=mysql_connect('localhost','root','122947');
	if(!$link)
	die('连接失败: '.mysql_error());
	mysql_select_db('rg',$link) or die ('选定出错');
	$usename=$_SESSION["photouser"];
	$result1=mysql_query("SELECT `touxiang`FROM rg.`use` WHERE `usename`='".$usename."'");
	$row1=mysql_fetch_row($result1);
	if($row1[0]=="")
		$bmp="images/1.jpg";
	else
		$bmp=$row1[0];
	echo'<center>	
	<img alt="140x140" src="'.$bmp.'" width="140px"class="img-circle" /><br>
			<a font-size:15px>'.$usename.'的相册</a>
		
		</center>';
	mysql_free_result($result1);
	?>
	<?php
	if($_SESSION["UserName"]==$_SESSION["photouser"]){
		echo'
	<center><a id="modal-961304" href="#modal-container-961304" role="button" class="btn" data-toggle="modal">更换头像</a></center>
			
			<div class="modal fade" id="modal-container-961304" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<h4 class="modal-title" id="myModalLabel">
								更换头像
							</h4>
						</div>
						<div class="modal-body" id="dd">
							预览
						</div>
						<div class="modal-footer">
							<form action="upload_file.php" method="post" enctype="multipart/form-data"> 
							<a href="javascript:;"style="position: absolute; left:10px" class="file">选择文件<input type="file" name="file" id="file"  onchange="upload(this.files)"/> </a>
							 <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button> <input type="submit" class="btn btn-primary" name="submit" value="保存" /> 
							</form>
						</div>
					</div>
					
				</div>
				
			</div>';


		
	echo'<center><form action="#"  name="form" method="post" enctype="multipart/form-data">
		<p style="margin-left:20px">
		<a href="javascript:;" style="margin-left:800px"class="file">选择文件<input type="file" name="img" value="选择上传文件" />	</a>
		<input type="submit"style="position: absolute; left:1100px" class="btn" value="上传"/>		
		</p>
		
		</form></center>';

	date_default_timezone_set("PRC");         //设置时区 
	if(count($_FILES)>0){ 
	$sort = array("image/jpeg","image/jpg","image/gif","image/pdg"); 
	//判断是否是图片类型
	if(in_array($_FILES['img']['type'],$sort)){ 
	 $img = "upload";    //获取上传到的文件夹位置
	//判断文件夹是否存在 ,如果不存在创建一个
	if(!file_exists($img)){
	   mkdir("$img",0700);        //0700最高权限
	}
	$time=date("Y_m_d_H_i_s");     //获取当前时间
	$file_name = explode(".",$_FILES['img']['name']);         //$_FILES['img']['name'] 上传文件的名称 explode字符串打断转字符串
	$file_name[0]=$time;  
	$name = implode(".",$file_name);    //implode 把数组拼接成字符串
	$img_name = "upload/".$name;
	if(move_uploaded_file($_FILES['img']['tmp_name'],$img_name)){ 	//move_uploaded_file 移动文件
	
	$result=mysql_query("SELECT `id` from rg.`photo` where `id` = (SELECT max(`id`) FROM rg.`photo`)");
	$row=mysql_fetch_row($result);
	$id=$row[0]+1;
	$time=date("Y-m-d H:i:s");
	$writer=$_SESSION["UserName"];
	$insert="insert into rg.`photo`(`id`,`writer`,`name`,`time`) values ('".$id."','".$img_name."','".$writer."','".$time."')";
	$result=mysql_query($insert);
	header("location:/rg/photo.php");
	}else{
		 echo "<script>alert('上传失败');</script>";  
	}
	}else{ 
	echo "<script>alert('不是图片类型');</script>";
	}
	}
	}
	?>	
	</div>
	<div class="row clearfix">
		<div class="col-md-12 column">
			<div class="tabbable" id="tabs-193697">
				<ul class="nav nav-tabs">
					<li class="active">
						 <a href="#panel-536282" data-toggle="tab">本月</a>
					</li>
					<li>
						 <a href="#panel-3943" data-toggle="tab">上个月</a>
					</li>
					<li>
						 <a href="#panel-3942" data-toggle="tab">两个月之前</a>
					</li>
					<li>
						 <a href="#panel-3941" data-toggle="tab">总和</a>
					</li>
				</ul>
				<div class="tab-content">
				
					<?php
					error_reporting(E_ALL ^ E_WARNING);
					$writer=$_SESSION["photouser"];
						$date=date("Y-m");
						$date1=date('Y-m',strtotime("$date
						-1 month"));
						$date2=date('Y-m',strtotime("$date
						-2 month"));
						$result2=mysql_query("SELECT `id`,`writer` FROM rg.`photo` WHERE  `time` LIKE '%".$date."%' and `name`='".$writer."'");
						$num1=mysql_num_rows($result2);
						echo'<div class="tab-pane active" id="panel-536282">
							<p>';
						if($num1==0)
						{	
							echo"博主很懒，暂无图片";
						}
						else
						{	
							while($row=mysql_fetch_row($result2))
							{							
							if($_SESSION["UserName"]==$_SESSION["photouser"])
							{
								echo'<div style="float:left"><img alt="140x140" name="pic" width="140px" src="'.$row[1].'" class="img-thumbnail" /><br>';
								echo'<center><a href="wenzhang.php?case=pic2&id='.$row[0].'">删除</a><center></div>';
							}
							else
								echo'<img alt="140x140" name="pic" width="140px" src="'.$row[1].'" class="img-thumbnail" />';
							}
							echo'<center><a href="liulan.php?date='.$date.'">点击我预览</a></center>';
							mysql_free_result($result2);
						}
						echo'</p>
							</div>';
						$result3=mysql_query("SELECT `writer` FROM rg.`photo` WHERE  `time` LIKE '%".$date1."%'and `name`='".$writer."'");
						$num2=mysql_num_rows($result3);
						echo'<div class="tab-pane " id="panel-3943">
							<p>';
						if($num2==0)
						{				
							echo"博主很懒，暂无图片";
						}
						else
						{							
							while($row=mysql_fetch_row($result3))
							{
							if($_SESSION["UserName"]==$_SESSION["photouser"])
							{
								echo'<div style="float:left"><img alt="140x140" name="pic" width="140px" src="'.$row[1].'" class="img-thumbnail" /><br>';
								echo'<center><a href="wenzhang.php?case=pic2&id='.$row[0].'">删除</a><center></div>';
							}
							else
								echo'<img alt="140x140" name="pic" width="140px" src="'.$row[1].'" class="img-thumbnail" />';
							}
							echo'<center><a href="liulan.php?date='.$date1.'">点击我预览</a></center>';
							mysql_free_result($result3);
						}
						echo'</p>
							</div>';
						$result4=mysql_query("SELECT `writer` FROM rg.`photo` WHERE  `time` LIKE '%".$date2."%'and `name`='".$writer."'");
						$num3=mysql_num_rows($result4);
						echo'<div class="tab-pane" id="panel-3942">
							<p>';
						if($num3==0)
						{
							echo"博主很懒，暂无图片";						
						}
						else
						{
						
							while($row=mysql_fetch_row($result4))
							{
							if($_SESSION["UserName"]==$_SESSION["photouser"])
							{
								echo'<div style="float:left"><img alt="140x140" name="pic" width="140px" src="'.$row[1].'" class="img-thumbnail" /><br>';
								echo'<center><a href="wenzhang.php?case=pic2&id='.$row[0].'">删除</a><center></div>';
							}
							else
								echo'<img alt="140x140" name="pic" width="140px" src="'.$row[1].'" class="img-thumbnail" />';
							}
							echo'<center><a href="liulan.php?date='.$date2.'">点击我预览</a></center>';
							mysql_free_result($result4);
						}
						echo'</p>
							</div>';
						$result4=mysql_query("SELECT `writer` FROM rg.`photo` WHERE `name`='".$writer."'");
						$num3=mysql_num_rows($result4);
						echo'<div class="tab-pane" id="panel-3941">
							<p>';
						if($num3==0)
						{
							echo"博主很懒，暂无图片";						
						}
						else
						{
						
							while($row=mysql_fetch_row($result4))
							{
							if($_SESSION["UserName"]==$_SESSION["photouser"])
							{
								echo'<div style="float:left"><img alt="140x140" name="pic" width="140px" src="'.$row[1].'" class="img-thumbnail" /><br>';
								echo'<center><a href="wenzhang.php?case=pic2&id='.$row[0].'">删除</a><center></div>';
							}
							else
								echo'<img alt="140x140" name="pic" width="140px" src="'.$row[1].'" class="img-thumbnail" />';
							}
							echo'<center><a href="liulan.php?date=0">点击我预览</a></center>';
							mysql_free_result($result4);
						}
						echo'</p>
							</div>';
						mysql_close($link);
				
					?>

						
				</div>
			</div>
		</div>
	</div>
</div>

<script src="bootstrap-3.3.7-dist/js/jquery.js"></script>
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</body>
</html>