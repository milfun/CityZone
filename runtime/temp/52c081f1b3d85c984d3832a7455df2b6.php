<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:80:"D:\MilFun\Apache24\htdocs\CityZone\config/../public/view/index\index\search.html";i:1571990096;s:71:"D:\MilFun\Apache24\htdocs\CityZone\public\view\index\common\header.html";i:1571981346;s:68:"D:\MilFun\Apache24\htdocs\CityZone\public\view\index\common\nav.html";i:1571968310;s:69:"D:\MilFun\Apache24\htdocs\CityZone\public\view\index\common\copy.html";i:1571968422;s:71:"D:\MilFun\Apache24\htdocs\CityZone\public\view\index\common\footer.html";i:1571823071;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1, minimum-scale=1.0, maximum-scale=1, user-scalable=no">
<meta http-equiv="pragma" content="no-cache"> 
<meta http-equiv="Cache-Control" content="no-store, must-revalidate"> 
<meta name="keywords" content="米饭联盟,MilFun,米饭网,微信公众号,milfun.fun" />
<meta name="description" content="米饭联盟,微信公众号成立于2016年2月，为粉丝免费提供大量资源福利，帮助您快速找到自己的未来,让技术变得更简单、更安全。目前已有百万粉丝关注平台，欢迎您加入，共创辉煌！" />
<link rel="stylesheet" type="text/css" href="http://milfun.com/public/static/css/m.css" />
<!-- mp.milfun.fun Baidu tongji analytics -->
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?83d7d33e2195a88dceb457d2159fd69b";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>

<script src="https://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>

	
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
					<a href="<?php echo APP_DOMAIN; ?>"><img src="http://milfun.com/public/static/img/zone-logo.png"></a>
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
				<h1>Featured Video 分类视频</h1>
				<ul class="">
					<?php if(is_array($search_blog) || $search_blog instanceof \think\Collection || $search_blog instanceof \think\Paginator): $i = 0; $__LIST__ = $search_blog;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$bo): $mod = ($i % 2 );++$i;?>
						<li class="card" >
							<a href="<?php echo urm('blog',['aid'=>$bo['aid']]); ?>" url=""><img class="card-img" src="<?php echo $bo['imgurl']; ?>"></a>
							<a href=""><h3 class="card-tit"><?php echo $bo['aname']; ?></h3></a>
							<p class="card-tag">
								<span class="tag"><?php echo $bo['tag']; ?></span>
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
	
	
	
		
		<!--广告-->
		<div class="docker">
			<div class="inner">
				<!--保留块-->
				<div class="keep">
				
				</div>
			</div>
		</div>
		<!--广告 END -->

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
				<a href="<?php echo urm('blog',['aid'=>'f27c80b9cd63c452018a34611fd2bbb00b92413d']); ?>" class="foot-link">关于我们</a>
				<a href="" class="foot-link">广告服务</a>
				<a href="" class="foot-link">商户入驻</a>
				<a href="<?php echo urm('blog',['aid'=>'65dc2a6b67f0b42bd9c7ab9dd6cf71902bf3fc76']); ?>" class="foot-link">免责申明</a>
			</p>
			<p  class="foot-info">
				<span><?php echo config('copy_right'); ?></span>
				
				<span>怪兽研习社</span>
			</p>
			
		</div>
	</div>
	
		
<!---->
<script>
(function(){
    var bp = document.createElement('script');
    var curProtocol = window.location.protocol.split(':')[0];
    if (curProtocol === 'https'){
   bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
  }
  else{
  bp.src = 'http://push.zhanzhang.baidu.com/push.js';
  }
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();
</script>
</body>
</html>
