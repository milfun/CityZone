<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:79:"D:\MilFun\Apache24\htdocs\CityZone\config/../public/view/index\index\index.html";i:1571713644;s:71:"D:\MilFun\Apache24\htdocs\CityZone\public\view\index\common\header.html";i:1571713489;s:68:"D:\MilFun\Apache24\htdocs\CityZone\public\view\index\common\nav.html";i:1571711869;s:69:"D:\MilFun\Apache24\htdocs\CityZone\public\view\index\common\copy.html";i:1571712268;s:71:"D:\MilFun\Apache24\htdocs\CityZone\public\view\index\common\footer.html";i:1571623909;}*/ ?>
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

	
<title>米饭联盟-最适合你的知识分享博客</title>
</head>
<body>
<div class="docker header">
		<div class="inner">
			<!---->
			<nav >
				<!---->
				<div class="nav-item">
					<a href="" class="nav-link">发现</a>
					<a href="" class="nav-link">有聊</a>
					<a href="" class="nav-link">活动</a>
					<a href="" class="nav-link">未知领域</a>
					<a href="" class="nav-link">Zone学院</a>
				</div>
				<!---->
				<div class="nav-logo">
					<a href="http://milfun.com/index.php"><img src="http://milfun.com/public/static/img/zone-logo.png"></a>
				</div>
				<!---->
				<div class="nav-info">
					
					<!--<a href="http://milfun.com/Index/index/login.html" class="btn login">注册/登陆</a>-->
				</div>
				
		</nav>
		</div>
		
	</div>	

	<!---->
	<div class="docker main">
		<div class="inner">
			<div class="content">
				<!---->
				<a href=""><div class="swiper"></div></a>
				
				<!---->
				<h2>Featured Video 灵感视频</h2>
				<ul class="">
					<?php if(is_array($hot_blog) || $hot_blog instanceof \think\Collection || $hot_blog instanceof \think\Paginator): $i = 0; $__LIST__ = $hot_blog;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$bo): $mod = ($i % 2 );++$i;?>
						<li class="card" >
							<a href="<?php echo urm('blog',['aid'=>$bo['aid']]); ?>" url=""><img class="card-img" src="<?php echo $bo['imgurl']; ?>"></a>
							<a href=""><h3 class="card-tit"><?php echo $bo['aname']; ?></h3></a>
							<p class="card-tag">
								<span class="tag">品牌</span>
								<span class="tag">创意</span>
								<span class="tag">灵感</span>
							</p>
							<p class="card-data"><span><?php echo $bo['common']; ?>评论</span>
								<span><?php echo $bo['hot']; ?>收藏</span>
								<span><?php echo $bo['likes']; ?>点赞</span></p>
							<div class="bot-line"></div>
							<p class="card-auth">
								<img src="http://milfun.com/public/static/img/logo.jpg" > 
								<div class="card-info">
									<span>MilFun</span>
									<span class="card-time">1 小时前</span>
								</div>
							</p>
						</li>
					<?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
					<!--
				<div class="left-bar">
				</div>
				
				<div class="right-bar">
					<div class="box reg">
						<h3>大风帆股份但是</h3>
						<div class="box-cont">
							<span>快来测试一下吧</span>
							<img src="http://milfun.com/public/static/img/five-graph.png">
							<span>快来测试一下吧</span>
						</div>
					</div>
				</div>-->

			</div>
			
		</div>
	</div>
	
	
	<!---->
	<div class="docker list">
		<div class="inner">
			<div class="pick-list">
				<h2>Editor's Pick 编辑推荐</h2>
				<ul class="">
					<?php if(is_array($sug_blog) || $sug_blog instanceof \think\Collection || $sug_blog instanceof \think\Paginator): $i = 0; $__LIST__ = $sug_blog;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$su): $mod = ($i % 2 );++$i;?>
						<li class="card">
							<a href="<?php echo urm('blog',['aid'=>$su['aid']]); ?>"><img class="card-img" src="<?php echo $su['imgurl']; ?>"></a>
							<a href=""><h3 class="card-tit"><?php echo $su['aname']; ?></h3></a>
							<p class="card-tag">
								<span class="tag">品牌</span>
								<span class="tag">创意</span>
								<span class="tag">灵感</span>
							</p>
							<p class="card-data"><span><?php echo $su['common']; ?>评论</span>
								<span><?php echo $su['hot']; ?>人气</span>
								<span><?php echo $su['likes']; ?>点赞</span></p>
							<div class="bot-line"></div>
							<p class="card-auth">
								<img src="http://milfun.com/public/static/img/logo.jpg" > 
								<div class="card-info">
									<span><?php echo $su['author']; ?></span>
									<span class="card-time">1 小时前</span>
								</div>
							</p>
						</li>
					<?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
			</div>
			<p class="more"><a href="" class="link-more">更多精彩</a></p>
		</div>
		
	</div>

	<!--
	<div class="docker list">
		<div class="inner">
			<div class="load-more">

				<a href="">浏览更多</a>
			</div>
			
		</div>
	</div>-->

	<!---->
	

<div class="docker tips">
		<div class="inner">
			<!---->
			<div class="tips-btn">
				<span title="喜欢"><i class="sbtn sb-totop"></i>置顶</span>
				<span title="收藏"><i class="sbtn sb-feed "></i>反馈</span>
				<span title="微博"><i class="sbtn sb-msg"></i>聊天</span>
				<span title="微信"><i class="sbtn sb-phone "></i>电话
					<div class="code">
						<img src="http://milfun.com/public/static/img/qrcode.jpg" class="qrcode">
						<p>扫码关注微信公众号</p>
						<p>随时随地 灵感一下</p>
					</div>
				</span>
			</div>
		</div>
	</div>

	<!---->
	<div class="docker footer">
		<div class="inner">
			<p class="foot-doc">
				<a href="" class="foot-link">关于我们</a>
				<a href="" class="foot-link">广告服务</a>
				<a href="" class="foot-link">商户入驻</a>
				<a href="" class="foot-link">免责申明</a>
			</p>
			<p  class="foot-info">
				<span><?php echo config('copy_right'); ?></span>
				
				<span>怪兽研习社</span>
			</p>
			
		</div>
	</div>
	
		
<!---->

</body>
</html>
