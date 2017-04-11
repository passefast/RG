<?php
$result = $_GET["id"];
Session_Start();
$_SESSION["textid"]=$result;
header("location:/rg/text.php");
?>