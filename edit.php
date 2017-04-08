<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<html>
<head>

    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="dist/css/wangEditor.min.css">
    <style type="text/css">
        #editor-trigger {
            height: 400px;
            /*max-height: 500px;*/
        }
        .container {
            width: 80%;
            margin: 0 auto;
            position: relative;
        }
    </style>
	<script type="text/javascript" language="javascript" src="jquery.js"></script>  
    <script type="text/javascript" language="javascript">   
          
        function fun(n) {  
            var url = "sever.php";  
            var data = {  
                action : n.value  
            };  
            jQuery.post(url, data, callback);  
        }  
        function callback(data) {  
            alert(data);  
        }  
    </script> 
</head>
<body style="padding:0 20px;">

	<center>
	<div>
		<iframe src="head.php" frameborder="0" scrolling="no" style=" margin-top:-0px; width:90%; height:200px;"></iframe>
		</div>
		</center>

<div style="margin-left:140px;margin-bottom:20px">
<a>文章标题</a>
</div>
<hr style="width:80%">
<div>
<textarea  id="texttitle" cols="80" rows="1" maxlength="80" style="margin-left:140px;font-size:20px"></textarea>
</div>

<div style="margin-left:140px;margin-bottom:20px">
<a >文章内容</a>
</div>
<hr style="width:80%">
<center>
    <div id="editor-container" class="container">
        <div id="editor-trigger"><p></p></div>
       
    </div>
	<div style="margin-top:10px;">
	<form action="" method="post">
	<button type="button" class="btn  btn-info btn-sm"style="margin-left:10px;" value="fabiao" onclick="fun(this)">发表</button>
	<button type="button" class="btn  btn-info btn-sm"style="margin-left:10px;" value="baocun" onclick="fun(this)">保存</button>
	<button type="button" class="btn  btn-info btn-sm"style="margin-left:10px;" value="quxiao" onclick="window.location.href='index.php'">取消</button>
	</form>
	</div>
	</center>
    <p><br></p>
	
    <script type="text/javascript" src="dist/js/lib/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="dist/js/wangEditor.js"></script>
    <!--<script type="text/javascript" src="../dist/js/wangEditor.min.js"></script>-->
	
    <script type="text/javascript">
        // 阻止输出log
        // wangEditor.config.printLog = false;

        var editor = new wangEditor('editor-trigger');
		
        // 上传图片
        editor.config.uploadImgUrl = '/upload';
        editor.config.uploadParams = {
 
        };
        editor.config.uploadHeaders = {
            // 'Accept' : 'text/x-json'
        }
        // editor.config.uploadImgFileName = 'myFileName';

        // 隐藏网络图片
        // editor.config.hideLinkImg = true;

        // 表情显示项
        editor.config.emotionsShow = 'value';
        editor.config.emotions = {
            'default': {
                title: '默认',
                data: 'emotions.data'
            },
            'weibo': {
                title: '微博表情',
                data: [
                    {
                        icon: 'http://img.t.sinajs.cn/t35/style/images/common/face/ext/normal/7a/shenshou_thumb.gif',
                        value: '[草泥马]'    
                    },
                    {
                        icon: 'http://img.t.sinajs.cn/t35/style/images/common/face/ext/normal/60/horse2_thumb.gif',
                        value: '[神马]'    
                    },
                    {
                        icon: 'http://img.t.sinajs.cn/t35/style/images/common/face/ext/normal/bc/fuyun_thumb.gif',
                        value: '[浮云]'    
                    },
                    {
                        icon: 'http://img.t.sinajs.cn/t35/style/images/common/face/ext/normal/c9/geili_thumb.gif',
                        value: '[给力]'    
                    },
                    {
                        icon: 'http://img.t.sinajs.cn/t35/style/images/common/face/ext/normal/f2/wg_thumb.gif',
                        value: '[围观]'    
                    },
                    {
                        icon: 'http://img.t.sinajs.cn/t35/style/images/common/face/ext/normal/70/vw_thumb.gif',
                        value: '[威武]'
                    }
                ]
            }
        };

        
        // onchange 事件
        editor.onchange = function () {
            console.log(this.$txt.html());
        };

        
        editor.create();
		var text=editor.text();
    </script>
</body>
</html>
