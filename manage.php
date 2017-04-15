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
		function fun3(n) {  
            var url = "sever.php";
            var data = {  
                action : n.value, 
				id:n.id
            };  
            jQuery.post(url, data, callback2);  
        }  
        function callback2(data) { 
				alert("删除成功");	  
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
<body style="background-color:#383838">
<div>
		<div style="float:left; width:200px;height:500px;position:fixed">
			<div class="panel-group" id="panel-796172">
				<div class="panel panel-default">
					<div class="panel-heading">
						 <a class="panel-title" data-toggle="collapse" data-parent="#panel-796172" href="#panel-element-740327">博文管理</a>
					</div>
					<div id="panel-element-740327" class="panel-collapse collapse in">
						<div class="panel-body">
							<center><a href="javascript:;" onclick="fun(1)" >杂谈</a></center>
						</div>
						<div class="panel-body">
							<center><a href="javascript:;" onclick="fun(2)">游戏</a></center>
						</div>
						<div class="panel-body">
							<center><a href="javascript:;" onclick="fun(3)">体育</a></center>
						</div>
						<div class="panel-body">
							<center><a href="javascript:;" onclick="fun(4)">娱乐</a></center>
						</div>
						<div class="panel-body">
							<center><a href="javascript:;" onclick="fun(5)">IT</a></center>
						</div>
				
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						 <a class="panel-title" data-toggle="collapse" data-parent="#panel-796172" href="#panel-element-295508">评论管理</a>
					</div>
					<div id="panel-element-295508" class="panel-collapse collapse">
						<div class="panel-body">
							<center><a href="javascript:;" onclick="fun(6)" >未删除评论</a></center>
						</div>
						<div class="panel-body">
							<center><a href="javascript:;" onclick="fun(7)">已删除评论</a></center>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						 <a class="panel-title" data-toggle="collapse" data-parent="#panel-796172" href="#panel-element-295509">照片管理</a>
					</div>
					<div id="panel-element-295509" class="panel-collapse collapse">
						<div class="panel-body">
							<center><a href="javascript:;" onclick="fun(8)">总和</a></center>
						</div>
						<div class="panel-body">
							<center><a href="javascript:;" onclick="fun(9)">本月上传</a></center>
						</div>
						<div class="panel-body">
							<center><a href="javascript:;" onclick="fun(10)">上月上传</a></center>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						 <a class="panel-title" data-toggle="collapse" data-parent="#panel-796172" href="#panel-element-295510">退出</a>
					</div>
					<div id="panel-element-295510" class="panel-collapse collapse">
						<div class="panel-body">
							<center><a href="wenzhang.php?case=quit">退出</a></center>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div style="margin-left:210px" id="fresh">
		<center><a >管理员管理页面</a></center>
		</div>


</div>
<script src="bootstrap-3.3.7-dist/js/jquery.js"></script>
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" language="javascript" src="js/jquery.js"></script>  
    <script type="text/javascript" language="javascript">            
        function fun(n) {  
            var url = "managesever.php"; 
            var data = {  
                action : n
            };  
            jQuery.post(url, data, callback);  
        }  
        function callback(data) { 
			document.getElementById('fresh').innerHTML = data;	
			
        }  
    </script> 
</body>
</html>