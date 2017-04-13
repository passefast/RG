<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css" />

<!-- Optional theme -->
<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap-theme.min.css" />
<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css" />
<!-- Latest compiled and minified JavaScript -->

<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<div>
		<div style="float:left; width:200px;height:500px;position:fixed">
			<div class="panel-group" id="panel-796172">
				<div class="panel panel-default">
					<div class="panel-heading">
						 <a class="panel-title" data-toggle="collapse" data-parent="#panel-796172" href="#panel-element-740327">博文管理</a>
					</div>
					<div id="panel-element-740327" class="panel-collapse collapse in">
						<div class="panel-body">
							<center><a>杂谈</a></center>
						</div>
						<div class="panel-body">
							<center><a>游戏</a></center>
						</div>
						<div class="panel-body">
							<center><a>体育</a></center>
						</div>
						<div class="panel-body">
							<center><a>娱乐</a></center>
						</div>
						<div class="panel-body">
							<center><a>IT</a></center>
						</div>
				
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						 <a class="panel-title" data-toggle="collapse" data-parent="#panel-796172" href="#panel-element-295508">评论管理</a>
					</div>
					<div id="panel-element-295508" class="panel-collapse collapse">
						<div class="panel-body">
							<center><a>未删除评论</a></center>
						</div>
						<div class="panel-body">
							<center><a>已删除评论</a></center>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						 <a class="panel-title" data-toggle="collapse" data-parent="#panel-796172" href="#panel-element-295509">照片管理</a>
					</div>
					<div id="panel-element-295509" class="panel-collapse collapse">
						<div class="panel-body">
							<center><a href="javascript:;" onclick="refresh()">未删除评论</a></center>
						</div>
					</div>
				</div>
				
			</div>
		</div>
		<div style="height:1000px;margin-left:210px" id="fresh">
		asfihhsa 
		</div>
		<div>
		<?php
		error_reporting(E_ALL ^ E_WARNING);
		$showtime=date("Y-m-d H:i:s");
		echo $showtime;
		?>
		</div>

</div>
<script src="bootstrap-3.3.7-dist/js/jquery.js"></script>
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" language="javascript" src="js/jquery.js"></script>  
    <script type="text/javascript" language="javascript">   
function refresh()
{	
$("#fresh").html("asfasf");
}
</script>
</body>
</html>