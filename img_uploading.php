<html>
<head lang="en">
  <meta http-equiv="Content-Type" content="html/text;charset=utf-8"/>
</head>
<body>
<form action="#"  name="form" method="post" enctype="multipart/form-data">
<p>
<input type="file" name="img" value="选择上传文件"/>
</p>
<input type="submit" value="上传"/>
</form>
</body>
</html>
<?php
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
$img_name = "img/".$name;
if(move_uploaded_file($_FILES['img']['tmp_name'],$img_name)){   //move_uploaded_file 移动文件
   echo "<center><img style='width:1000px;' src='$img_name'>
   <p>
   <a href='img_uploading.php'>重新上传</a></p></center>";
}else{
     echo "上传失败";  
}
}else{ 
echo "不是图片类型";
}
}
?>