<?php
//print_r($_SERVER);
if($_SERVER['HTTP_HOST'] == "360pic.ml"){
  	header('Location: http://www.360pic.ml');
  	die();
}
if(@$_FILES['picture']){
	//print_r($_FILES);
	
	$file=$_FILES['picture'];
	$name=$file['name'];
	$size=$file['size'];
	$tmp_name=$file['tmp_name'];
	//$name=rand(1000000,9999999).".png";
	//$picture=base64_decode($_POST['picture']);
	//echo $picture;
	//$size=strlen($picture);
	$qihooimg_url="http://loudong.360.cn/vul/upload";
	$ch = curl_init();//初始化curl
	curl_setopt($ch,CURLOPT_URL,$qihooimg_url);//抓取指定网页
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: */*',
	'Accept-Encoding: ',
	'Accept-Language: zh-CN,zh;q=0.8',
	'Connection: keep-alive',
	'Content-Disposition: attachment; name="filedata"; filename="'.$name.'"',
	'Content-Length: '.$size,
	'Content-Type: application/octet-stream',
	'Cookie: __guid=59825130.3002707065113705500.1367164821156.3728; Q=u%3Dvanbfbsg%26n%3D%26r%3D%26qid%3D53445399%26im%3D190144aq118a4e%26s%3D360%26src%3D360bbs%26t%3D1%26le%3DnJ1cozSiWGDjZGV2YzAioD%3D%3D; T=s%3D65ea81c99c6e4355cb33c3d7fa956a9c%26t%3D1367393704%26a%3D1%26v%3D1.0; __utma=148900148.293294335.1367393698.1367393698.1367393698.1; __utmz=148900148.1367393698.1.1.utmcsr=(direct)|utmccn=(direct)|utmcmd=(none); PHPSESSID=5902d86ecdbd372d095bb9795a4ea322; __utma=90162694.1755375966.1369064736.1369064736.1369064736.1; __utmb=90162694.3.10.1369064736; __utmc=90162694; __utmz=90162694.1369064736.1.1.utmcsr=webscan.360.cn|utmccn=(referral)|utmcmd=referral|utmcct=/index/checkwebsite',
	'Host: loudong.360.cn',
	'Origin: http://loudong.360.cn',
	'Referer: http://loudong.360.cn/vul/submit',
	'User-Agent: Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.12 Safari/537.36'));//设置header

	//curl_setopt($ch, CURLOPT_CONTENT_DISPOSITION, 'attachment; name="filedata"; filename="188584286931%5B1%5D.gif');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);//要求结果为字符串且输出到屏幕上
	curl_setopt($ch, CURLOPT_POST, 1);//post提交方式
	curl_setopt($ch, CURLOPT_POSTFIELDS, file_get_contents($tmp_name));
	$data = curl_exec($ch);//运行curl
	curl_close($ch);
	echo $data;//输出结果
}else{
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>数字是个好图床</title>
	<style type="text/css" media="screen">
		*{
			margin:0;padding:0;
			font-family:arial, sans-serif;
			color:#222;
		}
		html,body{
			height:100%;width:100%;
			background:#515151;
			overflow:hidden;
		}
		#drag{
			position: absolute;
			top:10%;left:10%;right:10%;bottom:10%;
			border:3px dashed #333;
			border-radius:0;
			background:#515151;
		}
		#drag-text{
			position: absolute;
			top:50%;left:0;right:0;
			margin-top:-20px;
			height:40px;
			line-height:40px;
			text-align:center;
			font-size:20px;
			color:#999;
		}
		#picture{
			position: absolute;
			display: block;
			top:0;left:0;bottom:0;right:0;
			opacity: 0;
			-moz-opacity: 0;
			filter:alpha(opacity=0);
		}
		#rs{
			position: absolute;
			top:10%;left:10%;right:10%;bottom:10%;
			border-radius:0;
			background:#eee;
			box-shadow:0 0 3px #000;
			text-align:center;
			display: none;
		}
		.rs-btn{
			height:45px;
			position: absolute;
			bottom:0;left:0;right:0;
		}
		.rs-top{
			position: absolute;
			top:10px;bottom:55px;left:10px;right:10px;	
		}
                .rs-top-va-outer{
			text-align: center;
			width: 100%;
			height: 100%;
			display: table;
		}
		.rs-top-va-inner{
			display: table-cell;
			vertical-align: middle;
		}
		#rs-img{
			max-height:100%;
			max-width:100%;
            border-radius:0;
			background:#fff;
		}
		#rs-text{
			background-color: #eee;
			padding: 8px 3px;
			font-size: 16px;
			border: none;
			box-shadow:0 0 3px #333 inset;
			border-radius: 0;
			text-align: center;
			width: 80%;
		}
		#rs-close{
			position: absolute;
			right:0px;top:0px;
			color:#444;
			width:20px;height:20px;line-height:20px;text-align:center;
			cursor: pointer;
		}
                .about{
			position: absolute;
			bottom:0;left:0;right:0;height:25px;
			line-height:25px;text-align:center;
                        font-size:10px;
            		color:#666;
		}
	</style>
	<script src="http://s0.qhimg.com/lib/jquery/183.js"></script>
	<script src="http://qihoo.qiniudn.com/h/malsup.github.io/jquery.form.js"></script>
</head>
<body>
	<form action="index.php" method="POST" enctype="multipart/form-data">
	<div id="drag">
		<div id="drag-text">拖拽图片到这里喵~</div>
		<input type="file" id="picture" name="picture" />
	</div>
	<div id="rs">
		<div class="rs-top">
			<img src="" id="rs-img"/>
		</div>				
		<div class="rs-btn"><input type="text" id="rs-text" readonly="readonly" onclick="this.select()" onmouseover="this.select()" onfocus="this.select()"/></div>
		<div id="rs-close">x</div>
	</div>
        <div class="about">
		感谢度娘 感谢数字 | code by zythum_朱一  |  本作品与数字度娘两家公司的恩怨无关
	</div>
</form>
<script>
$(document).ready(function(event) {
	$('form').ajaxForm(function(data) {
		eval('var json='+data);
		$('#rs').show();
		$('.rs-top img').attr('src',json.msg.url);
		$('#rs-text').val(json.msg.url);
		$('#picture').val('');
	});
	$('#picture').change(function(){
		$('form').submit();
	});
	$('form').submit(function(){
		$('#drag-text').html('图片上传中喵~');	
	})
	$('#rs-close').click(function(){
		$('#rs').hide();
		$('#drag-text').html('拖拽图片到这里喵');
	});
});
</script>
<div style="display:none"><script type="text/javascript" src="http://tajs.qq.com/stats?sId=27029855" charset="UTF-8"></script></div>
</body>	
</html>
<?php
}
?>
