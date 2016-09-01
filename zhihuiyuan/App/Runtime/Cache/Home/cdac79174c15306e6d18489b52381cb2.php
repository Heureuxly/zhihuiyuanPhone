<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no;" name="viewport" />
	

	<title>智慧源-首页</title>
	<link rel="stylesheet" href="/zhihuiyuan(1)/Public/Home/css/public.css">
	<link rel="stylesheet" href="/zhihuiyuan(1)/Public/Home/css/screen.css" >

	<!--media="only screen and (max-device-width:760px) and (-webkit-min-device-pixel-ratio:2)"-->
	<!--zhihuiyuan index for mobile-->

	<link rel="stylesheet" href="/zhihuiyuan(1)/Public/Home/css/font-awesome.css">

	<script src="/zhihuiyuan(1)/Public/Home/js/jquery.js" type="text/javascript"></script>
	<script src="/zhihuiyuan(1)/Public/Home/js/index.js" type="text/javascript"></script>
</head>
<body>
	<header>
		<div class="button">
			<img src="/zhihuiyuan(1)/Public/Home/img/button.png" alt="">
		</div>
		<nav class="menu_hide menu">
			<ul class="menu_1">
				<a href="index.html"><li class="menu_li">首页</li></a>
				<a href="javascript:void(0)"><li class="menu_li">群体介绍</li></a>
				<a href="eightsystem.html"><li class="menu-a menu_hide menu_2">八大系统</li></a>
				<a href="tencenter.html"><li class="menu-a menu_hide menu_2">十大中心</li></a>
				<a href="thirtysystem.html"><li class="menu-a menu_hide menu_2">36个项目体系</li></a>
				<a href="committee.html"><li class="menu-a menu_hide menu_2">经营委员会</li></a>
				<a href="javascript:void(0)"><li class="menu_li">商学院</li></a>
				<a href="class.html"><li class="menu-b menu_hide menu_2">系列课程</li></a>
				<a href="teacher.html"><li class="menu-b menu_hide menu_2">讲师推荐</li></a>
				<a href="demand.html"><li class="menu-b menu_hide menu_2">培训需求</li></a>
				<a href="javascript:void(0)"><li class="menu_li">管理咨询</li></a>
				<a href=""><li class="menu-c menu_hide menu_2">咨询范围</li></a>
				<a href="counselor.html"><li class="menu-c menu_hide menu_2">咨询师专区</li></a>
				<a href=""><li class="menu-c menu_hide menu_2">咨询需求</li></a>
				<a href="javascript:void(0)"><li class="menu_li">资源整合</li></a>
				<a href="need.html"><li class="menu-d menu_hide menu_2">资源需求</li></a>
				<a href="supply.html"><li class="menu-d menu_hide menu_2">资源供应</li></a>
				<a href="javascript:void(0)"><li class="menu_li">会员企业专区</li></a>
				<a href=""><li class="menu-e menu_hide menu_2">企业辅导</li></a>
				<a href=""><li class="menu-e menu_hide menu_2">企业交流</li></a>
				<a href=""><li class="menu-e menu_hide menu_2">企业集群</li></a>
				<a href="javascript:void(0)"><li class="menu_li">VIP会员专区</li></a>
				<a href="goldteacher.html"><li class="menu-f menu_hide menu_2">金牌讲师</li></a>
				<a href="goldclass.html"><li class="menu-f menu_hide menu_2">金牌课程</li></a>
				<a href="goldcounselor.html"><li class="menu-f menu_hide menu_2">金牌咨询师</li></a>
				<a href="goldproject.html"><li class="menu-f menu_hide menu_2">金牌项目</li></a>
				<a href="goldneed.html"><li class="menu-f menu_hide menu_2">金牌资源</li></a>
				<a href="goldsupply.html"><li class="menu-f menu_hide menu_2">金牌客源</li></a>
			</ul>
		</nav>
			<a href="index.html">
		    <div class="top">
			<div class="logo">
				<img src="/zhihuiyuan(1)/Public/Home/img/logo.png" alt="">
			</div>
			<div class="word">
				<img src="/zhihuiyuan(1)/Public/Home/img/word.png" alt="">
			</div>
		    </div>
	    	</a>
	</header>

	<main>
	<section class="box">
		<article>
			<img src="/zhihuiyuan(1)/Public/Home/img/pic-01.jpg" alt="">
		</article>
	</section>
	
	<section class="box-one">
		<div class="box-header">
			<div class="box-header-lf"></div>
			<h1>两化融合产品升级</h1>
		</div>
		<article class="box-one-b">
			
			<ul>
				<li><a href="http://www.zady.cn/aqpt/login.jsp">
					<div class="box-one-pic"><img src="/zhihuiyuan(1)/Public/Home/img/两化融合图片_01.png" alt="">
					</div>
					<div class="box-one-word">
						<p>CSR企业责任平台</p>
					</div></a>
				</li>
				<?php if(is_array($content)): foreach($content as $key=>$v): ?><li><a href="/zhihuiyuan(1)/Glod/index/id/<?php echo ($id); ?>">
					<div class="box-one-pic"><img src="/zhihuiyuan(1)/Public/uploads/<?php echo ($v["pic"]); ?>.png" alt="">
					</div>
					<div class="box-one-word">
					<p><?php echo ($v["dataname"]); ?></p>
					</div></a>
				</li><?php endforeach; endif; ?>
			</ul>
				
		</article>
	</section>
	<div class="clearfix"></div>

	<section class="box-two">
		<div class="box-header">
			<div class="box-header-lf"></div>
			<h1>总裁教练集群统帅</h1>
		</div>
		<article class="box-one-b">
			<ul>
				<li><a href="javascript:void(0)">
					<img src="/zhihuiyuan(1)/Public/Home/img/总裁教练_01.png" alt=""></a>
				</li>
				<li><a href="javascript:void(0)">
					<img src="/zhihuiyuan(1)/Public/Home/img/总裁教练_02.png" alt=""></a>
				</li>
				<li><a href="javascript:void(0)">
					<img src="/zhihuiyuan(1)/Public/Home/img/总裁教练_03.png" alt=""></a>
				</li>
				<li><a href="javascript:void(0)">
					<img src="/zhihuiyuan(1)/Public/Home/img/总裁教练_04.png" alt=""></a>
				</li>
				<li><a href="javascript:void(0)">
					<img src="/zhihuiyuan(1)/Public/Home/img/总裁教练_05.png" alt=""></a>
				</li>
				<li><a href="javascript:void(0)">
					<img src="/zhihuiyuan(1)/Public/Home/img/总裁教练_06.png" alt=""></a>
				</li>
			</ul>
		</article>
		<div class="clearfix"></div>
		<div class="box-block"></div>
	</section>

	</main>


	

	<aside class="bottom_bar">
		<ul><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=2994985924&site=qq&menu=yes">

			<li id="imgid1">
				<i class="fa fa-qq fa-2x"></i>
				<span>联系客服</span>
			</li>
			</a>
			<a href="map.html">
			<li id="imgid2">
				<i class="fa fa-map-marker fa-2x"></i>
				<span>地图定位</span>
			</li>
			</a>
			<a href="Login/login.html">
			<li id="imgid3">
				<i class="fa fa-th-large fa-2x"></i>
				<span>登陆注册</span>
			</li>
			</a>
		</ul>
	</aside>
</body>
</html>