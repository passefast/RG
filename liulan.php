
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" href="css/idangerous.swiper.css">
<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/gallery-app.css">
</head>
<body >
<div>
<a href="photo.php"><font color="#999999" size=5 >返回</font></a>
<div class="swiper-container">

  <div class="pagination"></div>
  <div class="swiper-wrapper" style="width:2424px;">
    
	<?php
	Session_start();
	$link=mysql_connect('localhost','root','123456');
	if(!$link)
	die('连接失败: '.mysql_error());
	mysql_select_db('rg',$link) or die ('选定出错');

	if(isset($_GET["date"])&&isset($_SESSION["photouser"]))
	{
		$date=$_GET["date"];
		$writer=$_SESSION["photouser"];
	if($date==0)
		$result2=mysql_query("SELECT `writer` FROM rg.`photo` WHERE `name`='".$writer."'");
	else
		$result2=mysql_query("SELECT `writer` FROM rg.`photo` WHERE  `time` LIKE '%".$date."%' and `name`='".$writer."'");
	
	while($row=mysql_fetch_row($result2)){
	echo'<div class="swiper-slide"><div class="inner" >';

	  echo'<img style="margin-top:100px"src="'.$row[0].'" alt=""/>';
	  echo'</div></div>';
	  }
	   mysql_free_result($result2);
	}
	 
	  mysql_close($link);
	  ?>
    
  </div>
</div>
</div>
<script src="js/jquery.min.js"></script> 
<script src="js/idangerous.swiper-2.0.min.js"></script> 
<script src="js/gallery-app.js"></script>
</body>
</html>