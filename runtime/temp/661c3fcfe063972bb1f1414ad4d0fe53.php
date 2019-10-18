<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:79:"D:\MilFun\Apache24\htdocs\CityZone\config/../public/view/index\index\login.html";i:1571016019;s:71:"D:\MilFun\Apache24\htdocs\CityZone\public\view\index\common\header.html";i:1570867859;s:70:"D:\MilFun\Apache24\htdocs\CityZone\public\view\index\common\login.html";i:1571016007;s:71:"D:\MilFun\Apache24\htdocs\CityZone\public\view\index\common\footer.html";i:1570867411;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1, minimum-scale=1.0, maximum-scale=1, user-scalable=no">
<meta http-equiv="pragma" content="no-cache"> 
<meta http-equiv="Cache-Control" content="no-store, must-revalidate"> 
<link rel="stylesheet" type="text/css" href="http://localhost/cityzone/public/static/css/m.css" />
<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
<title>怪兽研习社</title>
</head>

	

<link rel="stylesheet" type="text/css" href="http://localhost/cityzone/public/static/css/drag.css" />
	<div class="sign">
		<div class="sign-head">
			<span><i></i>客户服务热线：400&nbsp;000&nbsp; 000</span>
		</div>
		<div class="clear"></div>
		<div class="sign-cont">
			<div class="sign-box">
				<div class="sign-left">
					<a class="logo" href="https://www.zhipin.com/" >
				      <img src="https://static.zhipin.com/v2/web/geek/images/logo.png">
				      <div>
				        <p>找工作</p>
				        <p>我要跟老板谈</p>
				      </div>
				    </a>

				    <ul>
				      <li>
				        <i class="sb-hello"></i>
				        <span>沟通</span>
				        <span>在线职位及时沟通</span>
				      </li>
				      <li>
				        <i class="sb-damon"></i>
				        <span>任性选</span>
				        <span>各大行业职位任你选</span>
				      </li>
				    </ul>
				</div>
				<div class="sign-right">
					<div class="sign-inner pswd-load">
						<div class="sign-tab">
							<span class="tab" onclick="co.switchTab(0);">密码登陆</span>
							<span class="tab" onclick="co.switchTab(1);">短信登陆</span>
							<span class="tab" onclick="co.switchTab(2);">扫码登陆</span>
						</div>
						<!---->
						<form action="<?php echo url('Access/login'); ?>" method="post">
						<div class="sign-raw">
							<span class="ipt-wrap">
								<i class="sbtn sb-mobile"></i>
								<input class="ipt ipt-phone" type="tel" name="mobile" placeholder="手机号">
							</span>
						</div>
						<div class="sign-raw">
							<span class="ipt-wrap">
								<i class="sbtn sb-info"></i>
								<input class="ipt ipt-pwd" type="password" name="password" placeholder="密码">
							</span>
						</div>
						<button type="submit" class="btn2 loading ajax-login">登陆</button>
						</form>
						<!---->
						<!--<div class="sign-raw" >
							<div id="drag"></div>
						</div>-->
						
						
						<p class="sign-reg">
							<span>
								没有账号
								<a  href="" class="regnow">立即注册</a>
							</span>
						</p></div>
					<div class="sign-inner mobi-load">
						<div class="sign-tab">
							<span class="tab" onclick="co.switchTab(0);">密码登陆</span>
							<span class="tab" onclick="co.switchTab(1);">短信登陆</span>
							<span class="tab" onclick="co.switchTab(2);">扫码登陆</span>
						</div>
						<div class="sign-raw">
							<span class="ipt-wrap">
								<i class="sbtn sb-mobile"></i>
								<input class="ipt ipt-phone" type="tel" name="" placeholder="手机号">
								
							</span>
						</div>
						<div class="sign-raw">
							<span class="ipt-wrap">
								<i class="sbtn sb-info"></i>
								<input class="ipt ipt-phone" type="password" name="" placeholder="短信验证码">
								<span class="captcha">获取验证码</span>
							</span>
						</div>
						<div class="sign-raw" >
							<div id="drag"></div>
						</div>
						
						<p class="btn2 loading">登陆</p>
						<p class="sign-reg">
							<span>
								没有账号
								<a  href="" class="regnow">立即注册</a>
							</span>
						</p></div>
					<div class="sign-inner code-load">
						<div class="sign-tab">
							<span class="tab" onclick="co.switchTab(0);">密码登陆</span>
							<span class="tab" onclick="co.switchTab(1);">短信登陆</span>
							<span class="tab" onclick="co.switchTab(2);">扫码登陆</span>
						</div>
						<p class="sign-qrcode">
							<span>
								使用 BOSS直聘 APP 扫码登录
								<a  href="" class="regnow">扫码帮助</a>
							</span>
						</p>
						
							<img class="qr-loading" src="http://localhost/cityzone/public/static/img/qrcode.jpg">
						
						
						<p class="sign-qrcode">
							<span>
								没有账号
								<a  href="" class="regnow">立即注册</a>
							</span>
						</p>
				</div>
				
			</div>
			
		</div>
	</div>
<script type="text/javascript" src="http://localhost/cityzone/public/static/js/milfun.js"></script>
<script>
	var jsList = ["drag","common"]
	var mi = new Milfun(jsList);
</script>
<!---->

</body>
</html>
