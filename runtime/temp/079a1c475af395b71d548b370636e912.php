<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:80:"D:\MilFun\Apache24\htdocs\CityZone\config/../public/view/index\index\detail.html";i:1571973206;s:71:"D:\MilFun\Apache24\htdocs\CityZone\public\view\index\common\header.html";i:1571904219;s:68:"D:\MilFun\Apache24\htdocs\CityZone\public\view\index\common\nav.html";i:1571968310;s:69:"D:\MilFun\Apache24\htdocs\CityZone\public\view\index\common\copy.html";i:1571968422;s:71:"D:\MilFun\Apache24\htdocs\CityZone\public\view\index\common\footer.html";i:1571823071;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1, minimum-scale=1.0, maximum-scale=1, user-scalable=no">
<meta http-equiv="pragma" content="no-cache"> 
<meta http-equiv="Cache-Control" content="no-store, must-revalidate"> 
<meta name="keywords" content="米饭联盟,MilFun,微信公众号,python编程,个人博客" />
<meta name="description" content="米饭联盟,微信公众号成立于2016年，为粉丝免费提供大量资源福利，目前已有百万粉丝关注平台，共创辉煌！" />
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

	
<link rel="stylesheet" type="text/css" href="http://milfun.com/public/static/css/sspai.css" />
<title>米饭联盟-<?php echo $blog['aname']; ?></title>
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
	<div class="docker article">
		<div class="inner">
			
			<!--保留块-->
			<div class="keep">
				
			</div>
			<!--文章顶部信息-->
			<div class="article-head">
				<div class="bread">
					当前位置：<a href="{APP_DOMAIN}">首页</a>
					>><a href="<?php echo urm('search',['item'=>$blog['item']]); ?>"><?php echo $blog['caterogy']; ?></a> 
					>> <a href=""><?php echo $blog['aname']; ?></a> 

					<span class="bread-time"><?php echo $blog['add_time']; ?></span>
				</div>
				
				<h1><?php echo $blog['aname']; ?></h1>
				<p class="category">
					<a class="" href="" ><?php echo $blog['caterogy']; ?></a>
				</p>
				<p class="article-tag">
					<span class="tag">品牌</span>
					<span class="tag">创意</span>
					<span class="tag">灵感</span>
					<span class="tag">品牌</span>
					<span class="tag">创意</span>
					<span class="tag">灵感</span>
				</p>

			</div>
			<!--左部基本工具-->
			<div class="article-tool">
				&nbsp;
				<div class="share-btn">
					<span title="<?php echo $blog['likes']; ?>喜欢"><i class="sbtn sb-like"></i><?php echo $blog['likes']; ?></span>
					<span title="<?php echo $blog['hot']; ?>人气"><i class="sb-favo sbtn"></i><?php echo $blog['hot']; ?></span>
					<span title="<?php echo $blog['common']; ?>评论"><i class="sb-weibo sbtn"></i><?php echo $blog['common']; ?></span>
					<span title="微信"><i class="sb-wechat sbtn"></i>微信</span>
				</div>
			</div>
			<!--正文内容-->
			
			<div class="article-content">
				<article>
					<?php echo $blog['acontent']; ?>
				</article>
			</div>
			<!--右部保留-->
			<div class="article-else">&nbsp;
				</div>
			<!--清楚浮动-->
			<div class="clear"></div>
			<!--点赞按钮-->
			<div class="docker list">
				<div class="inner">
					<div class="load-more zan">
						<a href="" class=""><i class="sbtn sb-zan"></i></a>
					</div>
					
				</div>
			</div>
			<!-- 作者信息 -->
			<div class="article-info">
				<img src="http://milfun.com/public/static/img/logo.jpg">
				<div class="article-auth">
					<p class="auth-name"><?php echo $blog['author']; ?><i class="vip-icon"></i></p>
					<p class="auth-desc">福建 | 程序猿/最爱黑科技</p>
				</div>
				
				<a href="" class="btn article-focus">关注</a>
			</div>

			<!--评论按钮 -->
			<p class="more"><a href="" class="link-more discuss">登陆后评论</a></p>
			
			<!--版权声明 -->
			<div class="article-copy">
				<p>版权声明： 本文系原文作者授权MilFun发布，如需转载请联系原文作者，并保留文章在MilFun（www.milfun.fun）的完整链接，谢谢！</p>
			</div>



			<!--底部推荐列表-->
			<div class="docker list">
				<div class="inner">
					<div class="">
						<h2>Editor's Pick 编辑推荐</h2>
						<div class="clear"></div>
						<ul class="">
							<li class="card">
									<a href=""><img class="card-img" src="http://milfun.com/public/static/img/pro-2.png"></a>
									<a href=""><h3 class="card-tit">如何从“听到大师讲课”到“和大师合作”丨MindClass创意大师课正式上线</h3></a>
									<p class="card-tag">
										<span class="tag">品牌</span>
										<span class="tag">创意</span>
										<span class="tag">灵感</span>
										<span class="tag">品牌</span>
										<span class="tag">创意</span>
										<span class="tag">灵感</span>
									</p>
									
									<p class="card-data"><span>0评论</span>
										<span>3收藏</span>
										<span>3点赞</span></p>
									<div class="bot-line"></div>
									<p class="card-auth">
										<img src="http://milfun.com/public/static/img/logo.jpg" > 
										<div class="card-info">
											<span>MilFun</span>
											<span class="card-time">1 小时前</span>
										</div>
									</p>
								</li>
								<li class="card">
									<a href=""><img class="card-img" src="http://milfun.com/public/static/img/pro-2.png"></a>
									<a href=""><h3 class="card-tit">如何从“听到大师讲课”到“和大师合作”丨MindClass创意大师课正式上线</h3></a>
									<p class="card-tag">
										<span class="tag">品牌</span>
										<span class="tag">创意</span>
										<span class="tag">灵感</span>
										<span class="tag">品牌</span>
										<span class="tag">创意</span>
										<span class="tag">灵感</span>
									</p>
									
									<p class="card-data"><span>0评论</span>
										<span>3收藏</span>
										<span>3点赞</span></p>
									<div class="bot-line"></div>
									<p class="card-auth">
										<img src="http://milfun.com/public/static/img/logo.jpg" > 
										<div class="card-info">
											<span>MilFun</span>
											<span class="card-time">1 小时前</span>
										</div>
									</p>
								</li>
								<li class="card">
									<a href=""><img class="card-img" src="http://milfun.com/public/static/img/pro-2.png"></a>
									<a href=""><h3 class="card-tit">如何从“听到大师讲课”到“和大师合作”丨MindClass创意大师课正式上线</h3></a>
									<p class="card-tag">
										<span class="tag">品牌</span>
										<span class="tag">创意</span>
										<span class="tag">灵感</span>
									</p>
									<p class="card-desc">以国际设计语言塑造品牌领导力</p>
									<p class="card-data"><span>0评论</span>
										<span>3收藏</span>
										<span>3点赞</span></p>
									<div class="bot-line"></div>
									<p class="card-auth">
										<img src="http://milfun.com/public/static/img/logo.jpg" > 
										<div class="card-info">
											<span>MilFun</span>
											<span class="card-time">1 小时前</span>
										</div>
									</p>
								</li>
								<li class="card">
									<a href=""><img class="card-img" src="http://milfun.com/public/static/img/pro-2.png"></a>
									<a href=""><h3 class="card-tit">如何从“听到大师讲课”到“和大师合作”丨MindClass创意大师课正式上线</h3></a>
									<p class="card-tag">
										<span class="tag">品牌</span>
										<span class="tag">创意</span>
										<span class="tag">灵感</span>
									</p>
									<p class="card-desc">以国际设计语言塑造品牌领导力</p>
									<p class="card-data"><span>0评论</span>
										<span>3收藏</span>
										<span>3点赞</span></p>
									<div class="bot-line"></div>
									<p class="card-auth">
										<img src="http://milfun.com/public/static/img/logo.jpg" > 
										<div class="card-info">
											<span>MilFun</span>
											<span class="card-time">1 小时前</span>
										</div>
									</p>
								</li>
								<li class="card">
									<a href=""><img class="card-img" src="http://milfun.com/public/static/img/pro-2.png"></a>
									<a href=""><h3 class="card-tit">如何从“听到大师讲课”到“和大师合作”丨MindClass创意大师课正式上线</h3></a>
									<p class="card-tag">
										<span class="tag">品牌</span>
										<span class="tag">创意</span>
										<span class="tag">灵感</span>
									</p>
									<p class="card-desc">以国际设计语言塑造品牌领导力</p>
									<p class="card-data"><span>0评论</span>
										<span>3收藏</span>
										<span>3点赞</span></p>
									<div class="bot-line"></div>
									<p class="card-auth">
										<img src="http://milfun.com/public/static/img/logo.jpg" > 
										<div class="card-info">
											<span>MilFun</span>
											<span class="card-time">1 小时前</span>
										</div>
									</p>
								</li>

							</ul>
					</div>
					<p class="more"><a href="" class="link-more">更多活动</a></p>
				</div></div>

	</div>

	
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
	
		
<script type="text/javascript" src="http://milfun.com/public/static/js/milfun.js"></script>
<script>
	var domain = "<?php echo APP_DOMAIN; ?>"
	var jsList = ["detail"]
	var mi = new Milfun(jsList,domain);
</script>
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
