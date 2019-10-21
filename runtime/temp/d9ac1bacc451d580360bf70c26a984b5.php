<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:82:"D:\MilFun\Apache24\htdocs\CityZone\config/../public/view/index\index\markdown.html";i:1571637925;s:71:"D:\MilFun\Apache24\htdocs\CityZone\public\view\index\common\header.html";i:1571638594;s:68:"D:\MilFun\Apache24\htdocs\CityZone\public\view\index\common\nav.html";i:1571034594;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1, minimum-scale=1.0, maximum-scale=1, user-scalable=no">
<meta http-equiv="pragma" content="no-cache"> 
<meta http-equiv="Cache-Control" content="no-store, must-revalidate"> 
<link rel="stylesheet" type="text/css" href="http://milfun.com/public/static/css/m.css" />
<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
<title>最适合你的知识分享平台</title>
</head>
<body>
	
<link rel="stylesheet" type="text/css" href="http://milfun.com/public/static/css/sspai.css" />

<div class="docker header">
		<div class="inner">
			<!---->
			<nav >
				<!---->
				<div class="nav-item">
					<a href="" class="nav-link">发现</a>
					<a href="" class="nav-link">有聊</a>
					<a href="" class="nav-link">活动</a>
					<a href="" class="nav-link">未知商店</a>
					<a href="" class="nav-link">Zone学院</a>
				</div>
				<!---->
				<div class="nav-logo">
					<a href="http://milfun.com/index.php"><img src="http://milfun.com/public/static/img/zone-logo.png"></a>
				</div>
				<!---->
				<div class="nav-info">
					
					<a href="http://milfun.com/Index/index/login.html" class="btn login">注册/登陆</a>
				</div>
				
		</nav>
		</div>
		
	</div>	
<!---->
<div class="docker main">
		<div class="inner">
			
			<div>
					<!--保留块-->
					<div class="keep"></div>
					<!--文章顶部信息-->
					<div class="article-head">
						<p class="category">
							<a id="article-type" href=""  contenteditable="true">创意越过界</a>
						</p>
						<h1 id="article-title" contenteditable="true">如何从“听到大师讲课”到“和大师合作”丨MindClass创意大师课正式上线</h1>
						<p id="article-tag" class="article-tag" contenteditable="true">
							<span class="tag">品牌</span>
							<span class="tag">创意</span>
							<span class="tag">灵感</span>
							<span class="tag">品牌</span>
							<span class="tag">创意</span>
							<span class="tag">灵感</span>
						</p>
					</div>

					<!--设置展示的div添加id-->
				    <div id="result" ></div>

				    <div id="tool">
				    	<p>MilFun文章编辑器</p>
				    	<!--设置id为oriContent，如果想实现实时更新，使用onkeyup方法-->
				    	 <textarea id="MilFun" placeholder="请输入文章内容" onkeyup="convert()"></textarea>
				    	  <a href="" class="link-more">提交信息</a>
				    </div>
				    
				   

			</div>

		   
		</div>
		 

		<!-- Tips -->

		<!-- Tips End-->

</div>

<script type="text/javascript" src="http://milfun.com/public/static/js/showdown.min.js"></script>
<script>

var html,text,onverter 
function convert(){
    text = $("#MilFun").val();
    converter = new showdown.Converter();
    html = converter.makeHtml(text);
    $("#result").html(html) ;
}
</script>

