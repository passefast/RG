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
				<a style="margin-right:70px" font="7px">作者</a>
				<a style="margin-right:80px" font="7px">编写时间</a>
				<a style="margin-right:20px" font="7px">状态</a>	
				<ol>';
				$link=mysql_connect('localhost','root','122947');
				if(!$link)
					die('连接失败: '.mysql_error());
				mysql_select_db('rg',$link) or die ('选定出错');
				$result=mysql_query("SELECT `id`,`texttitle`,`writer`,`time`,`zt` FROM rg.`bolgtext` where `leibie`='杂谈'");
				$num=mysql_num_rows($result);
				if($num==0)
				{
					echo '<center><a font="20px">暂无文章!!!!!</a></center>';
				}
				else{
					while($row=mysql_fetch_row($result))
					{
						echo'<li>';
						$lenth=576-strlen($row[1])*5;
						echo '<a style="margin-right:'.$lenth.'px " font="7px" href="wenzhang.php?id='.$row[0].'&case=wenzhang" >'.$row[1].'</a>';
						echo '<a style="margin-right:40px" font="7px">'.$row[2].'</a>';
						echo '<a style="margin-right:20px" font="7px">'.$row[3].'</a>';
						if($row[4]=="1")
							echo '<a style="margin-right:40px" font="7px">发表</a>';
						if($row[4]=="2")
							echo '<a style="margin-right:40px" font="7px">未发表</a>';
						echo '<a style="margin-right:20px" font="7px" href="wenzhang.php?id='.$row[0].'&case=delete2">删除</a>';
						echo'</li>';
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
				<a style="margin-right:70px" font="7px">作者</a>
				<a style="margin-right:80px" font="7px">编写时间</a>
				<a style="margin-right:20px" font="7px">状态</a>	
				<ol>';
				$link=mysql_connect('localhost','root','122947');
				if(!$link)
					die('连接失败: '.mysql_error());
				mysql_select_db('rg',$link) or die ('选定出错');
				$result=mysql_query("SELECT `id`,`texttitle`,`writer`,`time`,`zt` FROM rg.`bolgtext` where `leibie`='游戏'");
				$num=mysql_num_rows($result);
				if($num==0)
				{
					echo '<center><a font="20px">暂无文章!!!!!</a></center>';
				}
				else{
					while($row=mysql_fetch_row($result))
					{
						echo'<li>';
						$lenth=576-strlen($row[1])*5;
						echo '<a style="margin-right:'.$lenth.'px " font="7px" href="wenzhang.php?id='.$row[0].'&case=wenzhang" >'.$row[1].'</a>';
						echo '<a style="margin-right:40px" font="7px">'.$row[2].'</a>';
						echo '<a style="margin-right:20px" font="7px">'.$row[3].'</a>';
						if($row[4]=="1")
							echo '<a style="margin-right:40px" font="7px">发表</a>';
						if($row[4]=="2")
							echo '<a style="margin-right:40px" font="7px">未发表</a>';
						echo '<a style="margin-right:20px" font="7px" href="wenzhang.php?id='.$row[0].'&case=delete2">删除</a>';
						echo'</li>';
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
				<a style="margin-right:70px" font="7px">作者</a>
				<a style="margin-right:80px" font="7px">编写时间</a>
				<a style="margin-right:20px" font="7px">状态</a>	
				<ol>';
				$link=mysql_connect('localhost','root','122947');
				if(!$link)
					die('连接失败: '.mysql_error());
				mysql_select_db('rg',$link) or die ('选定出错');
				$result=mysql_query("SELECT `id`,`texttitle`,`writer`,`time`,`zt` FROM rg.`bolgtext` where `leibie`='体育'");
				$num=mysql_num_rows($result);
				if($num==0)
				{
					echo '<center><a font="20px">暂无文章!!!!!</a></center>';
				}
				else{
					while($row=mysql_fetch_row($result))
					{
						echo'<li>';
						$lenth=576-strlen($row[1])*5;
						echo '<a style="margin-right:'.$lenth.'px " font="7px" href="wenzhang.php?id='.$row[0].'&case=wenzhang" >'.$row[1].'</a>';
						echo '<a style="margin-right:40px" font="7px">'.$row[2].'</a>';
						echo '<a style="margin-right:20px" font="7px">'.$row[3].'</a>';
						if($row[4]=="1")
							echo '<a style="margin-right:40px" font="7px">发表</a>';
						if($row[4]=="2")
							echo '<a style="margin-right:40px" font="7px">未发表</a>';
						echo '<a style="margin-right:20px" font="7px" href="wenzhang.php?id='.$row[0].'&case=delete2">删除</a>';
						echo'</li>';
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
				<a style="margin-right:70px" font="7px">作者</a>
				<a style="margin-right:80px" font="7px">编写时间</a>
				<a style="margin-right:20px" font="7px">状态</a>	
				<ol>';
				$link=mysql_connect('localhost','root','122947');
				if(!$link)
					die('连接失败: '.mysql_error());
				mysql_select_db('rg',$link) or die ('选定出错');
				$result=mysql_query("SELECT `id`,`texttitle`,`writer`,`time`,`zt` FROM rg.`bolgtext` where `leibie`='娱乐'");
				$num=mysql_num_rows($result);
				if($num==0)
				{
					echo '<center><a font="20px">暂无文章!!!!!</a></center>';
				}
				else{
					while($row=mysql_fetch_row($result))
					{
						echo'<li>';
						$lenth=576-strlen($row[1])*5;
						echo '<a style="margin-right:'.$lenth.'px " font="7px" href="wenzhang.php?id='.$row[0].'&case=wenzhang" >'.$row[1].'</a>';
						echo '<a style="margin-right:40px" font="7px">'.$row[2].'</a>';
						echo '<a style="margin-right:20px" font="7px">'.$row[3].'</a>';
						if($row[4]=="1")
							echo '<a style="margin-right:40px" font="7px">发表</a>';
						if($row[4]=="2")
							echo '<a style="margin-right:40px" font="7px">未发表</a>';
						echo '<a style="margin-right:20px" font="7px" href="wenzhang.php?id='.$row[0].'&case=delete2">删除</a>';
						echo'</li>';
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
				<a style="margin-right:70px" font="7px">作者</a>
				<a style="margin-right:80px" font="7px">编写时间</a>
				<a style="margin-right:20px" font="7px">状态</a>	
				<ol>';
				$link=mysql_connect('localhost','root','122947');
				if(!$link)
					die('连接失败: '.mysql_error());
				mysql_select_db('rg',$link) or die ('选定出错');
				$result=mysql_query("SELECT `id`,`texttitle`,`writer`,`time`,`zt` FROM rg.`bolgtext` where `leibie`='IT'");
				$num=mysql_num_rows($result);
				if($num==0)
				{
					echo '<center><a font="20px">暂无文章!!!!!</a></center>';
				}
				else{
					while($row=mysql_fetch_row($result))
					{
						echo'<li>';
						$lenth=576-strlen($row[1])*5;
						echo '<a style="margin-right:'.$lenth.'px " font="7px" href="wenzhang.php?id='.$row[0].'&case=wenzhang" >'.$row[1].'</a>';
						echo '<a style="margin-right:40px" font="7px">'.$row[2].'</a>';
						echo '<a style="margin-right:20px" font="7px">'.$row[3].'</a>';
						if($row[4]=="1")
							echo '<a style="margin-right:40px" font="7px">发表</a>';
						if($row[4]=="2")
							echo '<a style="margin-right:40px" font="7px">未发表</a>';
						echo '<a style="margin-right:20px" font="7px" href="wenzhang.php?id='.$row[0].'&case=delete2">删除</a>';
						echo'</li>';
					}
				
				}
				mysql_free_result($result);
				mysql_close($link);
				echo'</ol>
						</p>';
		}
	function pinglun()
		{
			echo'<p>zatan</p>';
		}
	function dpinglun()
		{
			echo'<p>zatan</p>';
		}
	function zong()
		{
			echo'<p>zatan</p>';
		}
	function beng()
		{
			echo'<p>zatan</p>';
		}
	function shang()
		{
			echo'<p>zatan</p>';
		}	
?>