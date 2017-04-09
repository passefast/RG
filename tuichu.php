<?php
	Session_Start();
	$_SESSION["UserName"]="未登录";
	header("Location: /rg/index.php");
?>