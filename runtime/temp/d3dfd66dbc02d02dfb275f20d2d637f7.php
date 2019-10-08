<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:68:"D:\MilFun\Apache24\htdocs\mp/application/index\view\index\index.html";i:1569396011;s:70:"D:\MilFun\Apache24\htdocs\mp\application\index\view\common\header.html";i:1569461847;s:70:"D:\MilFun\Apache24\htdocs\mp\application\index\view\common\footer.html";i:1569395087;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1, minimum-scale=1.0, maximum-scale=1, user-scalable=no">
<meta http-equiv="pragma" content="no-cache"> 
<meta http-equiv="Cache-Control" content="no-store, must-revalidate"> 
<link rel="stylesheet" type="text/css" href="http://localhost/mp/public/static/css/m.css" />
<title>MilFun</title>
</head>

<body>
<div class="contain">
	<div class="header">
	    <div class="inner">
	        <div class="logo">
	            <a href="#" title="MilFun米饭"></a>
	        </div>
	            <div class="nav-city">
	                <p class="nav-city-box" ><i class="icon-poi"></i><span class="nav-city-selected">福清</span><span class="switchover-city">[切换城市]</span></p>
	                
	            </div>
	        <div class="nav">
	            <ul>
	                <li class="cur"><a  href="http://localhost/mp/index.php">首页</a></li>
	                <li class=""><a href="http://localhost/mp/index.php/jobs/">职位</a></li>
	                <li class=""><a href="http://localhost/mp/index.php/resumes/">人才</a></li>
	                <li class=""><a href="http://localhost/mp/index.php/companys/">企业</a></li>
	                <li class=""><a href="#">资讯</a></li>
	            </ul>
	        </div>
	        <div class="user-nav">
                <!--未登录-->
                <div class="btns">
                    <a href="https://www.zhipin.com/geek/attresume/parser.html" class="link-scan" title="上传简历，解析内容，完善注册">上传简历</a>
                    <a href="https://www.zhipin.com/geek/attresume/parser.html"  class="link-scan" title="上传简历，解析内容，完善注册">我要找工作<span class="new" style="display: inline;">hot</span></a>
                    <a href="https://signup.zhipin.com?intent=1" class="link-scan" title="我要招聘">我要招聘</a>
                    <a href="https://signup.zhipin.com" class="btn2 btn-outline">注册</a>
                    <a href="https://login.zhipin.com" class="btn2 btn-outline">登录</a>
                </div>
        </div>
	    </div>
	</div>
	<!---->
	<div class="register">
		<div class="inner register-box">
			<img src="http://localhost/mp/public/static/img/fast-reg.png" class="icon-tip">
			<div class="step-form">
	            <form action="#" method="post" data-reload="true">
	                <input type="hidden" name="regionCode" value="+86">
	                <img src="http://localhost/mp/public/static/img/fast-reg-text.png">
	                <div>
	                    <div class="input-box">
	                        <input type="tel" placeholder="输入手机号"name="phone" class="ipt-phone">
	                    </div>
	                    <div class="input-box">
	                        <input type="text" placeholder="验证码" name="phoneCode" maxlength="6"class="ipt-sms required">
	                        <input type="hidden" name="smsType" value="7">
	                        <a href="javascript:void(0)" class="show-code-box" data-url="#">获取</a>
	                    </div>
	                    <button type="button" class="btn registe-btn">登录/注册</button>
	                    
	                  
	                </div>
	            </form>
	        </div>
		</div>	

		
	</div>
	<!---->
	<div class="search">
		<div class="inner search-box">
			<div class="search-form">
				<form action="#" method="get" class="">
	                <input type="text" name="query" class="ipt-search" maxlength="50" autocomplete="off" placeholder="搜索职位、公司">
	                <input type="hidden" name="city" class="city-code" value="101010100">
	                <input type="hidden" name="industry" class="industry-code" value="">
	                <input type="hidden" name="position" class="position-code" value="">
	                <button class="btn btn-search">搜索</button>
	                <div class="suggest-result" style="display: none;">
	                    <ul></ul>
	                </div>
	            </form>
			</div>
          
            <div class="search-hot">
            	<b>热门职位：</b>
            	<a href="#">Java</a>
            	<a href="#">PHP</a>
            	<a href="#">C++</a>
            	<a href="#">IOS</a>
            	<a href="#">Android</a>
            	<a href="#">UI设计师</a>
            	<a href="#">UI设计师</a>
            	<a href="#">UI设计师</a>
        
            </div>
		</div>
	</div>
	<!---->
	<div class="cent">
		<div class="cent-box">
			<dl class="option-left">
                    <dd>
                    	<i class="icon-arrow-right"></i>
                        <b>技术</b>
                            <a href="#">Java</a>
                            <a href="#">PHP</a>
                            <a href="#">web前端</a>
                            <a href="#">算法工程师</a>
                    </dd>
                    <dd>
                        <i class="icon-arrow-right"></i>
                        <b>产品</b>
                            <a href="#">产品经理</a>
                            <a href="#">产品总监</a>
                            <a href="#">数据产品经理</a>
                    </dd>
                    <dd>
                        <i class="icon-arrow-right"></i>
                        <b>设计</b>
                            <a href="#">UI设计师</a>
                            <a href="#">平面设计师</a>
                            <a href="#">交互设计师</a>
                    </dd>
                    <dd>
                        <i class="icon-arrow-right"></i>
                        <b>运营</b>
                            <a href="#">新媒体运营 </a>
                            <a href="#">产品运营</a>
                            <a href="#">网络推广</a>
                    </dd>
                    <dd>
                        <i class="icon-arrow-right"></i>
                        <b>市场 </b>
                            <a href="#">市场营销</a>
                            <a href="#">市场推广</a>
                            <a href="#">品牌公关</a>
                            <a href="#">策划经理</a>
                    </dd>
                    <dd>
                        <i class="icon-arrow-right"></i>
                        <b>人事</b>
                        	<a href="#">人事/HR</a>
                            <a href="#">行政</a>
                            <a href="#">财务</a>
                            <a href="#">培训</a>
                            <a href="#">绩效考核</a>
                    </dd>
                    <dd>
                        <i class="icon-arrow-right"></i>
                        <b>高级管理</b>
                            <a href="#">CEO/总裁/总经理 </a>
                            <a href="#">事业部负责人</a>
                    </dd>
                    <dd>
                        <i class="icon-arrow-right"></i>
                        <b>销售</b>
                            <a href="#">销售专员</a>
                            <a href="#">销售经理</a>
                            <a href="#">销售工程师</a>
                    </dd>
                    <dd>
                        <i class="icon-arrow-right"></i>
                        <b>媒体</b>
                        	<a href="#">文案</a>
                            <a href="#">编辑</a>
                            <a href="#">广告创意</a>
                            <a href="#">记者</a>
                            <a href="#">媒介经理</a>
                    </dd>
                    <dd>
                        <i class="icon-arrow-right"></i>
                        <b>金融</b>
                        	<a href="#">投资经理</a>
                            <a href="#">投资总监</a>
                            <a href="#">风控</a>
                            <a href="#">证券</a>
                    </dd>
                    <dd>
                        <i class="icon-arrow-right"></i>
                        <b>查看全部职位</b>
                
                    </dd>
                </dl>

			<div class="option-right">
				<div class="flex">
				    <div class="flex-item "><div class="placeholder">
				    	<a href="" class="goimg"><img src="http://localhost/mp/public/static/img/a1.jpg"></a>
				    </div></div>
				    <div class="flex-item"><div class="placeholder">
				    	<a href="" class="goimg"><img src="http://localhost/mp/public/static/img/a2.jpg"></a>
				    </div></div>
				</div>
				<div class="flex">
				    <div class="flex-item"><div class="placeholder">
				    	<a href="" class="goimg"><img src="http://localhost/mp/public/static/img/b1.jpg"></a>
				    </div></div>
				    <div class="flex-item">
				    	<div class="placeholder">
					    	<div class="flex-item"><div class="placeholder">
					    		<a href="" class="goimg"><img src="http://localhost/mp/public/static/img/b21.jpg"></a>
					    	</div></div>
					   		<div class="flex-item"><div class="placeholder">
					   			<a href="" class="goimg"><img src="http://localhost/mp/public/static/img/b22.jpg"></a>
					   		</div></div>
						</div>
					</div>
				</div>
			</div>
			
		</div>


	</div>

	<!---->
	<div class="job">
		<div class="job-box">
			<div class="job-opt">
				<span class="cur">IT·互联网</span>
				<span>金融</span>
				<span>房地产·建筑</span>
				<span>教育培训</span>
				<span>汽车</span>
				<span>娱乐传媒</span>
				<span>医疗健康</span>
				<span>法律咨询</span>
				<span>供应链·物流</span>
				<span>采购贸易</span>
			</div>


			<div class="job-list">
				
				<ul  class="">
					<li class=" job-item"><a href="" class="m-info">
						<p>中间架构师<span class="wage">25-45K·13薪</span></p>
						<p class="job-text">上海 <span class="vline"></span>5-10年<span class="vline"></span>本科</p>
						<p class="job-info"><img src="http://localhost/mp/public/static/img/logo.jpg">米饭联盟<span class="job-hr">陈先生<span class="vline"></span>HR</span></p></a>
					</li>
					<li class=" job-item"><a href="" class="m-info">
						<p>中间架构师<span class="wage">25-45K·13薪</span></p>
						<p class="job-text">上海 <span class="vline"></span>5-10年<span class="vline"></span>本科</p>
						<p class="job-info"><img src="http://localhost/mp/public/static/img/logo.jpg">米饭联盟<span class="job-hr">陈先生<span class="vline"></span>HR</span></p></a>
					</li>
					<li class="job-item"><a href="" class="m-info">
						<p>中间架构师<span class="wage">25-45K·13薪</span></p>
						<p class="job-text">上海 <span class="vline"></span>5-10年<span class="vline"></span>本科</p>
						<p class="job-info"><img src="http://localhost/mp/public/static/img/logo.jpg">米饭联盟<span class="job-hr">陈先生<span class="vline"></span>HR</span></p></a>
					</li>
					<li class="job-item"><a href="" class="m-info">
						<p>中间架构师<span class="wage">25-45K·13薪</span></p>
						<p class="job-text">上海 <span class="vline"></span>5-10年<span class="vline"></span>本科</p>
						<p class="job-info"><img src="http://localhost/mp/public/static/img/logo.jpg">米饭联盟<span class="job-hr">陈先生<span class="vline"></span>HR</span></p></a>
					</li>
					<li class="job-item"><a href="" class="m-info">
						<p>中间架构师<span class="wage">25-45K·13薪</span></p>
						<p class="job-text">上海 <span class="vline"></span>5-10年<span class="vline"></span>本科</p>
						<p class="job-info"><img src="http://localhost/mp/public/static/img/logo.jpg">米饭联盟<span class="job-hr">陈先生<span class="vline"></span>HR</span></p></a>
					</li>
					<li class="job-item"><a href="" class="m-info">
						<p>中间架构师<span class="wage">25-45K·13薪</span></p>
						<p class="job-text">上海 <span class="vline"></span>5-10年<span class="vline"></span>本科</p>
						<p class="job-info"><img src="http://localhost/mp/public/static/img/logo.jpg">米饭联盟<span class="job-hr">陈先生<span class="vline"></span>HR</span></p></a>
					</li>
					<li class="job-item"><a href="" class="m-info">
						<p>中间架构师<span class="wage">25-45K·13薪</span></p>
						<p class="job-text">上海 <span class="vline"></span>5-10年<span class="vline"></span>本科</p>
						<p class="job-info"><img src="http://localhost/mp/public/static/img/logo.jpg">米饭联盟<span class="job-hr">陈先生<span class="vline"></span>HR</span></p></a>
					</li>
					<li class="job-item"><a href="" class="m-info">
						<p>中间架构师<span class="wage">25-45K·13薪</span></p>
						<p class="job-text">上海 <span class="vline"></span>5-10年<span class="vline"></span>本科</p>
						<p class="job-info"><img src="http://localhost/mp/public/static/img/logo.jpg">米饭联盟<span class="job-hr">陈先生<span class="vline"></span>HR</span></p></a>
					</li>
					<li class="job-item"><a href="" class="m-info">
						<p>中间架构师<span class="wage">25-45K·13薪</span></p>
						<p class="job-text">上海 <span class="vline"></span>5-10年<span class="vline"></span>本科</p>
						<p class="job-info"><img src="http://localhost/mp/public/static/img/logo.jpg">米饭联盟<span class="job-hr">陈先生<span class="vline"></span>HR</span></p></a>
					</li>
			</ul>

			<p class="common-tab-more"><a class="btn btn-outline" href="#" ka="open_joblist">查看更多</a></p>
			</div>
			
		</div>

	</div>

	<!---->
	<div class="company">
		<div class="company-box">
			<div class="job-opt">
				<span class="cur">热门企业</span>
				<span>行业巨头</span>
				<span>新锐公司</span>
				<span>上市公司</span>
			
			</div>


			<div class="company-list">
				
				<ul  class="">
					<li class=" company-item">
						<div class="sub-li">
							<a href="" class="com-info">
								<img src="http://localhost/mp/public/static/img/logo.jpg">
							<div class="com-text">
                                <h4>米饭联盟</h4>
                                <p>A轮<span class="vline"></span>互联网</p>
                            </div></a>
                            <a href="/gongsir/7eeb1b44e6e3a2000nNz3tu9.html" target="_blank" ka="index_rcmd_company_1_custompage" class="about-info">
                            <p><span class="pull-right"><span class="blue">2</span>位BOSS在线</span><span class="blue">7</span>个热招职位</p>
                        </a>
						</div>
					</li>
					<li class=" company-item">
						<div class="sub-li">
							<a href="" class="com-info">
								<img src="http://localhost/mp/public/static/img/logo.jpg">
							<div class="com-text">
                                <h4>米饭联盟</h4>
                                <p>A轮<span class="vline"></span>互联网</p>
                            </div></a>
                            <a href="/gongsir/7eeb1b44e6e3a2000nNz3tu9.html" target="_blank" ka="index_rcmd_company_1_custompage" class="about-info">
                            <p><span class="pull-right"><span class="blue">2</span>位BOSS在线</span><span class="blue">7</span>个热招职位</p>
                        </a>
						</div>
					</li>
					<li class=" company-item">
						<div class="sub-li">
							<a href="" class="com-info">
								<img src="http://localhost/mp/public/static/img/logo.jpg">
							<div class="com-text">
                                <h4>米饭联盟</h4>
                                <p>A轮<span class="vline"></span>互联网</p>
                            </div></a>
                            <a href="/gongsir/7eeb1b44e6e3a2000nNz3tu9.html" target="_blank" ka="index_rcmd_company_1_custompage" class="about-info">
                            <p><span class="pull-right"><span class="blue">2</span>位BOSS在线</span><span class="blue">7</span>个热招职位</p>
                        </a>
						</div>
					</li>
					<li class=" company-item">
						<div class="sub-li">
							<a href="" class="com-info">
								<img src="http://localhost/mp/public/static/img/logo.jpg">
							<div class="com-text">
                                <h4>米饭联盟</h4>
                                <p>A轮<span class="vline"></span>互联网</p>
                            </div></a>
                            <a href="/gongsir/7eeb1b44e6e3a2000nNz3tu9.html" target="_blank" ka="index_rcmd_company_1_custompage" class="about-info">
                            <p><span class="pull-right"><span class="blue">2</span>位BOSS在线</span><span class="blue">7</span>个热招职位</p>
                        </a>
						</div>
					</li>
					<li class=" company-item">
						<div class="sub-li">
							<a href="" class="com-info">
								<img src="http://localhost/mp/public/static/img/logo.jpg">
							<div class="com-text">
                                <h4>米饭联盟</h4>
                                <p>A轮<span class="vline"></span>互联网</p>
                            </div></a>
                            <a href="/gongsir/7eeb1b44e6e3a2000nNz3tu9.html" target="_blank" ka="index_rcmd_company_1_custompage" class="about-info">
                            <p><span class="pull-right"><span class="blue">2</span>位BOSS在线</span><span class="blue">7</span>个热招职位</p>
                        </a>
						</div>
					</li>
					<li class=" company-item">
						<div class="sub-li">
							<a href="" class="com-info">
								<img src="http://localhost/mp/public/static/img/logo.jpg">
							<div class="com-text">
                                <h4>米饭联盟</h4>
                                <p>A轮<span class="vline"></span>互联网</p>
                            </div></a>
                            <a href="/gongsir/7eeb1b44e6e3a2000nNz3tu9.html" target="_blank" ka="index_rcmd_company_1_custompage" class="about-info">
                            <p><span class="pull-right"><span class="blue">2</span>位BOSS在线</span><span class="blue">7</span>个热招职位</p>
                        </a>
						</div>
					</li>
					<li class=" company-item">
						<div class="sub-li">
							<a href="" class="com-info">
								<img src="http://localhost/mp/public/static/img/logo.jpg">
							<div class="com-text">
                                <h4>米饭联盟</h4>
                                <p>A轮<span class="vline"></span>互联网</p>
                            </div></a>
                            <a href="/gongsir/7eeb1b44e6e3a2000nNz3tu9.html" target="_blank" ka="index_rcmd_company_1_custompage" class="about-info">
                            <p><span class="pull-right"><span class="blue">2</span>位BOSS在线</span><span class="blue">7</span>个热招职位</p>
                        </a>
						</div>
					</li>
					<li class=" company-item">
						<div class="sub-li">
							<a href="" class="com-info">
								<img src="http://localhost/mp/public/static/img/logo.jpg">
							<div class="com-text">
                                <h4>米饭联盟</h4>
                                <p>A轮<span class="vline"></span>互联网</p>
                            </div></a>
                            <a href="/gongsir/7eeb1b44e6e3a2000nNz3tu9.html" target="_blank" ka="index_rcmd_company_1_custompage" class="about-info">
                            <p><span class="pull-right"><span class="blue">2</span>位BOSS在线</span><span class="blue">7</span>个热招职位</p>
                        </a>
						</div>
					</li>
					<li class=" company-item">
						<div class="sub-li">
							<a href="" class="com-info">
								<img src="http://localhost/mp/public/static/img/logo.jpg">
							<div class="com-text">
                                <h4>米饭联盟</h4>
                                <p>A轮<span class="vline"></span>互联网</p>
                            </div></a>
                            <a href="/gongsir/7eeb1b44e6e3a2000nNz3tu9.html" target="_blank" ka="index_rcmd_company_1_custompage" class="about-info">
                            <p><span class="pull-right"><span class="blue">2</span>位BOSS在线</span><span class="blue">7</span>个热招职位</p>
                        </a>
						</div>
					</li>
					<li class=" company-item">
						<div class="sub-li">
							<a href="" class="com-info">
								<img src="http://localhost/mp/public/static/img/logo.jpg">
							<div class="com-text">
                                <h4>米饭联盟</h4>
                                <p>A轮<span class="vline"></span>互联网</p>
                            </div></a>
                            <a href="/gongsir/7eeb1b44e6e3a2000nNz3tu9.html" target="_blank" ka="index_rcmd_company_1_custompage" class="about-info">
                            <p><span class="pull-right"><span class="blue">2</span>位BOSS在线</span><span class="blue">7</span>个热招职位</p>
                        </a>
						</div>
					</li>
					<li class=" company-item">
						<div class="sub-li">
							<a href="" class="com-info">
								<img src="http://localhost/mp/public/static/img/logo.jpg">
							<div class="com-text">
                                <h4>米饭联盟</h4>
                                <p>A轮<span class="vline"></span>互联网</p>
                            </div></a>
                            <a href="/gongsir/7eeb1b44e6e3a2000nNz3tu9.html" target="_blank" ka="index_rcmd_company_1_custompage" class="about-info">
                            <p><span class="pull-right"><span class="blue">2</span>位BOSS在线</span><span class="blue">7</span>个热招职位</p>
                        </a>
						</div>
					</li>
					<li class=" company-item">
						<div class="sub-li">
							<a href="" class="com-info">
								<img src="http://localhost/mp/public/static/img/logo.jpg">
							<div class="com-text">
                                <h4>米饭联盟</h4>
                                <p>A轮<span class="vline"></span>互联网</p>
                            </div></a>
                            <a href="/gongsir/7eeb1b44e6e3a2000nNz3tu9.html" target="_blank" ka="index_rcmd_company_1_custompage" class="about-info">
                            <p><span class="pull-right"><span class="blue">2</span>位BOSS在线</span><span class="blue">7</span>个热招职位</p>
                        </a>
						</div>
					</li>

			
			</ul>
			<p class="common-tab-more"><a class="btn btn-outline" href="#" ka="open_joblist">查看更多</a></p>
			</div>
			
		</div>

	</div>
	<!-- sidebar -->
<div id="siderbar" style="top: 0px;">
        <div class="sider-index">
            <ul class="siderbar-top">
                <li data-value="interest">
                    <a href="javascript:;" ka="side_interest"><i class="icon-sider-interest"></i>感兴趣</a>
                </li>
                <li data-value="contact">
                    <a href="javascript:;" ka="side_chat"><i class="icon-sider-chat"></i>沟通过</a>
                </li>
                <li data-value="deliver">
                    <a href="javascript:;" ka="side_deliver"><i class="icon-sider-resume"></i>已投递</a>
                </li>
                <li data-value="interview">
                    <a href="javascript:;" ka="side_interview"><i class="icon-sider-interview"></i>面试</a>
                </li>
            </ul>
            <ul class="siderbar-bottom">
                <li>
                    <a class="siderbar-back-top" href="javascript:;" title="返回顶部"></a>
                </li>
                <li>
                    <a class="siderbar-feedback" href="javascript:;">反馈</a>
                </li>
                <li>
                    <a class="siderbar-wechat" href="javascript:;">微信
                      
                    </a>
                </li>
                <li>
                    <a class="siderbar-app" href="javascript:;">APP
                       
                    </a>
                </li>
            </ul>
        </div>
    </div>
<!-- sidebar -->
<!-- foot -->
<div id="footer">
    <div class="inner home-inner">

        <div class="copyright">
            <p>
                <span>Copyright © 2019 MilFun直聘</span><span>闽ICP备14013441号-5</span><span>京ICP证150923号</span>
                <span>
                     <a href="#" ka="link-businesslicense" target="_blank">
                         <img src="https://static.zhipin.com/v2/web/geek/images/icon-badge-1.png" alt="">
                         电子营业执照
                     </a>
                 </span>
                <span><a href="#" ka="link-beian" target="_blank">闽公网安备11010502032801 <img src="https://static.zhipin.com/v2/web/geek/images/icon-beian.png" alt=""></a></span>
                <span><a href="#" ka="link-sdwj" target="_blank">首都网警</a></span>
                <span><a href="#" ka="link-hr-service" target="_blank">人力资源服务许可证</a></span>
            </p>
        </div>
    </div>
</div>
<!-- foot -->
</div>

</body>
</html>