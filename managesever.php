<?php
error_reporting(E_ALL ^ E_WARNING);
	Session_start();
	
	if (isset($_POST['action']))  
    {  
        switch($_POST['action'])  
        {  
            case "1":zatan();break;
			case "2":youxi();break;
			case "3":tiyu();break;
			case "4":yule();break;
			case "5":it();break;
			case "6":pinglun();break;
			case "7":dpinglun();break;
			case "8":zong();break;
			case "9":beng();break;
			case "10":shang();break;
            default:break;  
        }  
    } 
	function zatan()
	{
		echo'<p>
				<a style="margin-right:460px;margin-left:100px" font="7px">文章名</a>
				<ol>';
				$link=mysql_connect('localhost','root','123456');
				if(!$link)
					die('连接失败: '.mysql_error());
				mysql_select_db('rg',$link) or die ('选定出错');
				$result=mysql_query("SELECT `id`,`texttitle`,`bolgtext`,`writer`,`time`,`zt` FROM rg.`bolgtext` where `leibie`='杂谈'");
				$num=mysql_num_rows($result);
				if($num==0)
				{
					echo '<center><a font="20px">暂无文章!!!!!</a></center>';
				}
				else{
					$count=1;
					while($row=mysql_fetch_row($result))
					{
						
						echo'<li>';
						$lenth=576-strlen($row[1])*5;
						echo '<a style="margin-right:'.$lenth.'px " font="7px" href="wenzhang.php?id='.$row[0].'&case=wenzhang" >'.$row[1].'</a>';
						echo' <a  href="#'.$count.'" role="button" class="btn" data-toggle="modal">详细</a>
			
			<div class="modal fade" id="'.$count.'" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<h4 class="modal-title" id="'.$count.'el">
								'.$row[1].'
							</h4>
						</div>
						<div class="modal-body">
							'.$row[2].'
						</div>
						<div class="modal-footer">';
						echo '<a style="margin-right:40px" font="7px">'.$row[3].'</a>';
						echo '<a style="margin-right:20px" font="7px">'.$row[4].'</a>';
						if($row[5]=="1")
							echo '<a style="margin-right:40px" font="7px">发表</a>';
						if($row[5]=="2")
							echo '<a style="margin-right:40px" font="7px">未发表</a>';
							echo' <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button> <a type="button"  href="wenzhang.php?id='.$row[0].'&case=delete2"class="btn btn-primary">删除</a>
						</div>
					</div>
					
				</div>
				
			</div>';
						
						echo'</li>';
						$count++;
					}
				
				}
				mysql_free_result($result);
				mysql_close($link);
				echo'</ol>
						</p>';
	}
	function youxi()
	{
		echo'<p>
				<a style="margin-right:460px;margin-left:100px" font="7px">文章名</a>

				<ol>';
				$link=mysql_connect('localhost','root','123456');
				if(!$link)
					die('连接失败: '.mysql_error());
				mysql_select_db('rg',$link) or die ('选定出错');
				$result=mysql_query("SELECT `id`,`texttitle`,`bolgtext`,`writer`,`time`,`zt` FROM rg.`bolgtext` where `leibie`='游戏'");
				$num=mysql_num_rows($result);
				if($num==0)
				{
					echo '<center><a font="20px">暂无文章!!!!!</a></center>';
				}
				else{
					$count=1;
					while($row=mysql_fetch_row($result))
					{
						
						echo'<li>';
						$lenth=576-strlen($row[1])*5;
						echo '<a style="margin-right:'.$lenth.'px " font="7px" href="wenzhang.php?id='.$row[0].'&case=wenzhang" >'.$row[1].'</a>';
						echo' <a  href="#'.$count.'" role="button" class="btn" data-toggle="modal">详细</a>
			
			<div class="modal fade" id="'.$count.'" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<h4 class="modal-title" id="'.$count.'el">
								'.$row[1].'
							</h4>
						</div>
						<div class="modal-body">
							'.$row[2].'
						</div>
						<div class="modal-footer">';
						echo '<a style="margin-right:40px" font="7px">'.$row[3].'</a>';
						echo '<a style="margin-right:20px" font="7px">'.$row[4].'</a>';
						if($row[5]=="1")
							echo '<a style="margin-right:40px" font="7px">发表</a>';
						if($row[5]=="2")
							echo '<a style="margin-right:40px" font="7px">未发表</a>';
							echo' <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button> <a type="button"  href="wenzhang.php?id='.$row[0].'&case=delete2"class="btn btn-primary">删除</a>
						</div>
					</div>
					
				</div>
				
			</div>';
						
						echo'</li>';
						$count++;
					}
				
				}
				mysql_free_result($result);
				mysql_close($link);
				echo'</ol>
						</p>';
	}
	function tiyu()
		{
			echo'<p>
				<a style="margin-right:460px;margin-left:100px" font="7px">文章名</a>

				<ol>';
				$link=mysql_connect('localhost','root','123456');
				if(!$link)
					die('连接失败: '.mysql_error());
				mysql_select_db('rg',$link) or die ('选定出错');
				$result=mysql_query("SELECT `id`,`texttitle`,`bolgtext`,`writer`,`time`,`zt` FROM rg.`bolgtext` where `leibie`='体育'");
				$num=mysql_num_rows($result);
				if($num==0)
				{
					echo '<center><a font="20px">暂无文章!!!!!</a></center>';
				}
				else{
					$count=1;
					while($row=mysql_fetch_row($result))
					{
						
						echo'<li>';
						$lenth=576-strlen($row[1])*5;
						echo '<a style="margin-right:'.$lenth.'px " font="7px" href="wenzhang.php?id='.$row[0].'&case=wenzhang" >'.$row[1].'</a>';
						echo' <a  href="#'.$count.'" role="button" class="btn" data-toggle="modal">详细</a>
			
			<div class="modal fade" id="'.$count.'" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<h4 class="modal-title" id="'.$count.'el">
								'.$row[1].'
							</h4>
						</div>
						<div class="modal-body">
							'.$row[2].'
						</div>
						<div class="modal-footer">';
						echo '<a style="margin-right:40px" font="7px">'.$row[3].'</a>';
						echo '<a style="margin-right:20px" font="7px">'.$row[4].'</a>';
						if($row[5]=="1")
							echo '<a style="margin-right:40px" font="7px">发表</a>';
						if($row[5]=="2")
							echo '<a style="margin-right:40px" font="7px">未发表</a>';
							echo' <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button> <a type="button"  href="wenzhang.php?id='.$row[0].'&case=delete2"class="btn btn-primary">删除</a>
						</div>
					</div>
					
				</div>
				
			</div>';
						
						echo'</li>';
						$count++;
					}
				
				}
				mysql_free_result($result);
				mysql_close($link);
				echo'</ol>
						</p>';
		}
		function yule()
		{
			echo'<p>
				<a style="margin-right:460px;margin-left:100px" font="7px">文章名</a>	
				<ol>';
				$link=mysql_connect('localhost','root','123456');
				if(!$link)
					die('连接失败: '.mysql_error());
				mysql_select_db('rg',$link) or die ('选定出错');
				$result=mysql_query("SELECT `id`,`texttitle`,`bolgtext`,`writer`,`time`,`zt` FROM rg.`bolgtext` where `leibie`='娱乐'");
				$num=mysql_num_rows($result);
				if($num==0)
				{
					echo '<center><a font="20px">暂无文章!!!!!</a></center>';
				}
				else{
					$count=1;
					while($row=mysql_fetch_row($result))
					{
						
						echo'<li>';
						$lenth=576-strlen($row[1])*5;
						echo '<a style="margin-right:'.$lenth.'px " font="7px" href="wenzhang.php?id='.$row[0].'&case=wenzhang" >'.$row[1].'</a>';
						echo' <a  href="#'.$count.'" role="button" class="btn" data-toggle="modal">详细</a>
			
			<div class="modal fade" id="'.$count.'" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<h4 class="modal-title" id="'.$count.'el">
								'.$row[1].'
							</h4>
						</div>
						<div class="modal-body">
							'.$row[2].'
						</div>
						<div class="modal-footer">';
						echo '<a style="margin-right:40px" font="7px">'.$row[3].'</a>';
						echo '<a style="margin-right:20px" font="7px">'.$row[4].'</a>';
						if($row[5]=="1")
							echo '<a style="margin-right:40px" font="7px">发表</a>';
						if($row[5]=="2")
							echo '<a style="margin-right:40px" font="7px">未发表</a>';
							echo' <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button> <a type="button"  href="wenzhang.php?id='.$row[0].'&case=delete2"class="btn btn-primary">删除</a>
						</div>
					</div>
					
				</div>
				
			</div>';
						
						echo'</li>';
						$count++;
					}
				
				}
				mysql_free_result($result);
				mysql_close($link);
				echo'</ol>
						</p>';
		}
	function it()
		{
			echo'<p>
				<a style="margin-right:460px;margin-left:100px" font="7px">文章名</a>
				<ol>';
				$link=mysql_connect('localhost','root','123456');
				if(!$link)
					die('连接失败: '.mysql_error());
				mysql_select_db('rg',$link) or die ('选定出错');
				$result=mysql_query("SELECT `id`,`texttitle`,`bolgtext`,`writer`,`time`,`zt` FROM rg.`bolgtext` where `leibie`='IT'");
				$num=mysql_num_rows($result);
				if($num==0)
				{
					echo '<center><a font="20px">暂无文章!!!!!</a></center>';
				}
				else{
					$count=1;
					while($row=mysql_fetch_row($result))
					{
						
						echo'<li>';
						$lenth=576-strlen($row[1])*5;
						echo '<a style="margin-right:'.$lenth.'px " font="7px" href="wenzhang.php?id='.$row[0].'&case=wenzhang" >'.$row[1].'</a>';
						echo' <a  href="#'.$count.'" role="button" class="btn" data-toggle="modal">详细</a>
			
			<div class="modal fade" id="'.$count.'" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<h4 class="modal-title" id="'.$count.'el">
								'.$row[1].'
							</h4>
						</div>
						<div class="modal-body">
							'.$row[2].'
						</div>
						<div class="modal-footer">';
						echo '<a style="margin-right:40px" font="7px">'.$row[3].'</a>';
						echo '<a style="margin-right:20px" font="7px">'.$row[4].'</a>';
						if($row[5]=="1")
							echo '<a style="margin-right:40px" font="7px">发表</a>';
						if($row[5]=="2")
							echo '<a style="margin-right:40px" font="7px">未发表</a>';
							echo' <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button> <a type="button"  href="wenzhang.php?id='.$row[0].'&case=delete2"class="btn btn-primary">删除</a>
						</div>
					</div>
					
				</div>
				
			</div>';
						
						echo'</li>';
						$count++;
					}
				
				}
				mysql_free_result($result);
				mysql_close($link);
				echo'</ol>
						</p>';
		}
	function pinglun()
		{
			$link=mysql_connect('localhost','root','123456');
				if(!$link)
					die('连接失败: '.mysql_error());
				mysql_select_db('rg',$link) or die ('选定出错');
			$result=mysql_query("SELECT `id`,`name`,`text`,`time` FROM rg.`pinglun` WHERE `zhuangtai`='1'");
			$resultx=mysql_query("SELECT `id`,`name`,`text`,`time` FROM rg.`fupinglun` WHERE `zhuangtai`='1'");
		if(mysql_num_rows($result)==0&&mysql_num_rows($resultx)==0)
			echo'<a font-size:10px style="margin-left:350px">暂无评论</a><br>
		<br>';
		else{
		while($row=mysql_fetch_row($result))
		{
		if($row[1]=="游客")
			$bmp="images/1.jpg";
		else{
		$result1=mysql_query("SELECT `touxiang`FROM rg.`use` WHERE `usename`='".$row[0]."'");
		$row1=mysql_fetch_row($result1);
		if($row1[0]=="")
			$bmp="images/1.jpg";
		else
			$bmp=$row1[0];
		mysql_free_result($result1);
			}
		echo'<div class="creatediv">';
		echo'<img class="createimg" src="'.$bmp.'">';
		echo '<a class="createname">'.$row[1].'</a>';
		echo '<a class="createtime">'.$row[3].'</a>';
		echo'<p class="createdivs">'.$row[2].'</p>';
		echo'<button class="createinput btn btn-default btn-link" value="mdpinglun" id="'.$row[0].'"onclick="fun3(this)">删除</button>';
		echo'</div>';
		}
		while($row=mysql_fetch_row($resultx))
		{
		if($row[1]=="游客")
			$bmp="images/1.jpg";
		else{
		$result1=mysql_query("SELECT `touxiang`FROM rg.`use` WHERE `usename`='".$row[0]."'");
		$row1=mysql_fetch_row($result1);
		if($row1[0]=="")
			$bmp="images/1.jpg";
		else
			$bmp=$row1[0];
		mysql_free_result($result1);
			}
		echo'<div class="creatediv">';
		echo'<img class="createimg" src="'.$bmp.'">';
		echo '<a class="createname">'.$row[1].'</a>';
		echo '<a class="createtime">'.$row[3].'</a>';
		echo'<p class="createdivs">'.$row[2].'</p>';
		echo'<button class="createinput btn btn-default btn-link" value="mdfpinglun" id="'.$row[0].'"onclick="fun3(this)">删除</button>';
		echo'</div>';
		}
		}
		
		mysql_free_result($result);
		mysql_free_result($resultx);
		mysql_close($link);
		}
	function dpinglun()
		{
			$link=mysql_connect('localhost','root','123456');
				if(!$link)
					die('连接失败: '.mysql_error());
				mysql_select_db('rg',$link) or die ('选定出错');
			$result=mysql_query("SELECT `id`,`name`,`text`,`time` FROM rg.`pinglun` WHERE `zhuangtai`='2'");
			$resultx=mysql_query("SELECT `id`,`name`,`text`,`time` FROM rg.`fupinglun` WHERE `zhuangtai`='2'");
		if(mysql_num_rows($result)==0&&mysql_num_rows($resultx)==0)
			echo'<a font-size:10px style="margin-left:350px">暂无评论</a><br>
		<br>';
		else{
		while($row=mysql_fetch_row($result))
		{
		if($row[1]=="游客")
			$bmp="images/1.jpg";
		else{
		$result1=mysql_query("SELECT `touxiang`FROM rg.`use` WHERE `usename`='".$row[0]."'");
		$row1=mysql_fetch_row($result1);
		if($row1[0]=="")
			$bmp="images/1.jpg";
		else
			$bmp=$row1[0];
		mysql_free_result($result1);
			}
		echo'<div class="creatediv">';
		echo'<img class="createimg" src="'.$bmp.'">';
		echo '<a class="createname">'.$row[1].'</a>';
		echo '<a class="createtime">'.$row[3].'</a>';
		echo'<p class="createdivs">'.$row[2].'</p>';
		echo'<button class="createinput btn btn-default btn-link" value="mdpinglun" id="'.$row[0].'"onclick="fun3(this)">删除</button>';
		echo'</div>';
		}
		while($row=mysql_fetch_row($resultx))
		{
		if($row[1]=="游客")
			$bmp="images/1.jpg";
		else{
		$result1=mysql_query("SELECT `touxiang`FROM rg.`use` WHERE `usename`='".$row[0]."'");
		$row1=mysql_fetch_row($result1);
		if($row1[0]=="")
			$bmp="images/1.jpg";
		else
			$bmp=$row1[0];
		mysql_free_result($result1);
			}
		echo'<div class="creatediv">';
		echo'<img class="createimg" src="'.$bmp.'">';
		echo '<a class="createname">'.$row[1].'</a>';
		echo '<a class="createtime">'.$row[3].'</a>';
		echo'<p class="createdivs">'.$row[2].'</p>';
		echo'<button class="createinput btn btn-default btn-link" value="mdfpinglun" id="'.$row[0].'"onclick="fun3(this)">删除</button>';
		echo'</div>';
		}
		}
		mysql_free_result($result);
		mysql_close($link);
		}
	function zong()
		{
			error_reporting(E_ALL ^ E_WARNING);
			$link=mysql_connect('localhost','root','123456');
				if(!$link)
					die('连接失败: '.mysql_error());
				mysql_select_db('rg',$link) or die ('选定出错');
			
			$result2=mysql_query("SELECT `id`,`writer`,`name` FROM rg.`photo`");
			$num1=mysql_num_rows($result2);
			echo'<p>';
			if($num1==0)
			{	
				echo'<center><a>暂无图片</a></center>';
			}
			else
			{	$count=1;
				while($row=mysql_fetch_row($result2))
				{
					echo'<div style="float:left" width="200px" height="300px"><img alt="140x140" name="pic" width="140px" src="'.$row[1].'" class="img-thumbnail" /><br>';
					echo'<a id="modal-127137" href="#'.$count.'" style="margin-right:20px" role="button" class="btn" data-toggle="modal">点击我预览</a></div>';
					echo' 
			
				<div class="modal fade" id="'.$count.'" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<h4 class="modal-title" id="myModalLabel">
								浏览
							</h4>
						</div>
						<div class="modal-body">
							<img alt="140x140" name="pic" width="300px" src="'.$row[1].'" class="img-thumbnail" />
						</div>
						<div class="modal-footer">
							<a style="margin-right:240px">'.$row[2].'</a><button type="button" class="btn btn-default" data-dismiss="modal">关闭</button> <a type="button" href="wenzhang.php?case=pic&id='.$row[0].'"class="btn btn-primary">删除</a>
						</div>
					</div>
					
				</div>
				
			</div>';
					$count++;
					//echo'<a style="" href="sever.php?action=pic&id='.$row[0].'">删除</a></div>';
				}
					//echo'<a href="liulan.php?date='.$date.'" style="position: absolute; right:40px;top:20px">点击我预览</a>';
					mysql_free_result($result2);
			}
			echo'</p>';
		}
	function beng()
		{
			error_reporting(E_ALL ^ E_WARNING);
			$link=mysql_connect('localhost','root','123456');
				if(!$link)
					die('连接失败: '.mysql_error());
				mysql_select_db('rg',$link) or die ('选定出错');
			$date=date("Y-m");
			$result2=mysql_query("SELECT `id`,`writer`,`name` FROM rg.`photo` WHERE  `time` LIKE '%".$date."%'");
			$num1=mysql_num_rows($result2);
			echo'<p>';
			if($num1==0)
			{	
				echo'<center><a>暂无图片</a></center>';
			}
			else
			{	$count=1;
				while($row=mysql_fetch_row($result2))
				{
					echo'<div style="float:left" width="200px" height="300px"><img alt="140x140" name="pic" width="140px" src="'.$row[1].'" class="img-thumbnail" /><br>';
					echo'<a id="modal-127137" href="#'.$count.'" style="margin-right:20px" role="button" class="btn" data-toggle="modal">点击我预览</a></div>';
					echo' 
			
				<div class="modal fade" id="'.$count.'" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<h4 class="modal-title" id="myModalLabel">
								浏览
							</h4>
						</div>
						<div class="modal-body">
							<img alt="140x140" name="pic" width="300px" src="'.$row[1].'" class="img-thumbnail" />
						</div>
						<div class="modal-footer">
							<a style="margin-right:240px">'.$row[2].'</a><button type="button" class="btn btn-default" data-dismiss="modal">关闭</button> <a type="button" href="wenzhang.php?case=pic&id='.$row[0].'"class="btn btn-primary">删除</a>
						</div>
					</div>
					
				</div>
				
			</div>';
					$count++;
					//echo'<a style="" href="sever.php?action=pic&id='.$row[0].'">删除</a></div>';
				}
					//echo'<a href="liulan.php?date='.$date.'" style="position: absolute; right:40px;top:20px">点击我预览</a>';
					mysql_free_result($result2);
			}
			echo'</p>';
			
		}
	function shang()
		{
			error_reporting(E_ALL ^ E_WARNING);
			$link=mysql_connect('localhost','root','123456');
				if(!$link)
					die('连接失败: '.mysql_error());
				mysql_select_db('rg',$link) or die ('选定出错');
				$date=date("Y-m");
			$date1=date('Y-m',strtotime("$date
						-1 month"));
			$result2=mysql_query("SELECT `id`,`writer`,`name` FROM rg.`photo` WHERE  `time` LIKE '%".$date1."%'");
			$num1=mysql_num_rows($result2);
			echo'<p>';
			if($num1==0)
			{	
				echo'<center><a>暂无图片</a></center>';
			}
			else
			{	$count=1;
				while($row=mysql_fetch_row($result2))
				{
					echo'<div style="float:left" width="200px" height="300px"><img alt="140x140" name="pic" width="140px" src="'.$row[1].'" class="img-thumbnail" /><br>';
					echo'<a id="modal-127137" href="#'.$count.'" style="margin-right:20px" role="button" class="btn" data-toggle="modal">点击我预览</a></div>';
					echo' 
			
				<div class="modal fade" id="'.$count.'" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<h4 class="modal-title" id="myModalLabel">
								浏览
							</h4>
						</div>
						<div class="modal-body">
							<img alt="140x140" name="pic" width="300px" src="'.$row[1].'" class="img-thumbnail" />
						</div>
						<div class="modal-footer">
							<a style="margin-right:240px">'.$row[2].'</a><button type="button" class="btn btn-default" data-dismiss="modal">关闭</button> <a type="button" href="wenzhang.php?case=pic&id='.$row[0].'"class="btn btn-primary">删除</a>
						</div>
					</div>
					
				</div>
				
			</div>';
					$count++;
					//echo'<a style="" href="sever.php?action=pic&id='.$row[0].'">删除</a></div>';
				}
					//echo'<a href="liulan.php?date='.$date.'" style="position: absolute; right:40px;top:20px">点击我预览</a>';
					mysql_free_result($result2);
			}
			echo'</p>';
		}	
?>