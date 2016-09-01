<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no;" name="viewport" />

	<title>金牌项目</title>

	<link rel="stylesheet" href="/zhihuiyuan(1)/Public/Home/css/public.css">
	<link rel="stylesheet" href="/zhihuiyuan(1)/Public/Home/css/word.css" >
	<link rel="stylesheet" href="/zhihuiyuan(1)/Public/Home/css/font-awesome.css">

	<script src="/zhihuiyuan(1)/Public/Home/js/jquery.js" type="text/javascript"></script>
	<script src="/zhihuiyuan(1)/Public/Home/js/check.js"></script>
    <script src="/zhihuiyuan(1)/Public/Home/js/index.js"></script>
    <script src="/zhihuiyuan(1)/Public/Home/js/reg.js"></script>
    <script src="/zhihuiyuan(1)/Public/Home/js/themenav.js"></script>
</head>
<body>
	<header>
		<div class="button">
			<img src="/zhihuiyuan(1)/Public/Home/img/button.png" alt="">
		</div>
		<nav class="menu_hide menu">
			<ul class="menu_1">
				<li class="menu_li"><a href="/zhihuiyuan(1)/index.html">首页</a></li>
				<li class="menu_li"><a href="javascript:void(0)">群体介绍</a></li>
				<li class="menu-a menu_hide menu_2"><a href="eightsystem.html">八大系统</a></li>
				<li class="menu-a menu_hide menu_2"><a href="tencenter.html">十大中心</a></li>
				<li class="menu-a menu_hide menu_2"><a href="thirtysystem.html">36个项目体系</a></li>
				<li class="menu-a menu_hide menu_2"><a href="committee.html">经营委员会</a></li>
				<li class="menu_li"><a href="javascript:void(0)">商学院</a></li>
				<li class="menu-b menu_hide menu_2"><a href="class.html">系列课程</a></li>
				<li class="menu-b menu_hide menu_2"><a href="teacher.html">讲师推荐</a></li>
				<li class="menu-b menu_hide menu_2"><a href="demand.html">培训需求</a></li>
				<li class="menu_li"><a href="javascript:void(0)">管理咨询</a></li>
				<li class="menu-c menu_hide menu_2"><a href="">咨询范围</a></li>
				<li class="menu-c menu_hide menu_2"><a href="counselor.html">咨询师专区</a></li>
				<li class="menu-c menu_hide menu_2"><a href="">咨询需求</a></li>
				<li class="menu_li"><a href="javascript:void(0)">资源整合</a></li>
				<li class="menu-d menu_hide menu_2"><a href="need.html">资源需求</a></li>
				<li class="menu-d menu_hide menu_2"><a href="supply.html">资源供应</a></li>
				<li class="menu_li"><a href="javascript:void(0)">会员企业专区</a></li>
				<li class="menu-e menu_hide menu_2"><a href="">企业辅导</a></li>
				<li class="menu-e menu_hide menu_2"><a href="">企业交流</a></li>
				<li class="menu-e menu_hide menu_2"><a href="">企业集群</a></li>
				<li class="menu_li"><a href="javascript:void(0)">VIP会员专区</a></li>
				<li class="menu-f menu_hide menu_2"><a href="goldteacher.html">金牌讲师</a></li>
				<li class="menu-f menu_hide menu_2"><a href="goldclass.html">金牌课程</a></li>
				<li class="menu-f menu_hide menu_2"><a href="goldcounselor.html">金牌咨询师</a></li>
				<li class="menu-f menu_hide menu_2"><a href="goldproject.html">金牌项目</a></li>
				<li class="menu-f menu_hide menu_2"><a href="goldneed.html">金牌资源</a></li>
				<li class="menu-f menu_hide menu_2"><a href="goldsupply.html">金牌客源</a></li>
			</ul>
		</nav>
		    <a href="/zhihuiyuan(1)/index.html">
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

	<main id="content">
		<div class="title">
            <h1><?php echo ($matter1); ?></h1>
        </div>
        <div class="main_word">
        	<p><?php echo ($matter); ?></p>
        </div>

	

	<!--侧边导航栏-->
	<aside class="class_theme">
		<div class="class_theme_button">
			<p class="theme_button">课程主题</p>
			<i class="fa fa-hand-o-right theme_hand fa-2x"></i>
		</div>
		<div class="class_nav">
			
			<ul>
			<?php if(is_array($tit)): foreach($tit as $key=>$v): ?><li><a href="/zhihuiyuan(1)/Glod/goldproject/id/<?php echo ($id); ?>"><?php echo ($v["dataname"]); ?></a></li><?php endforeach; endif; ?>	
			</ul>
		

		</div>
	</aside>

	<aside class="bottom_bar">
		<ul><a href="">
			<li id="imgid1">
				<i class="fa fa-qq fa-2x"></i>
				<span>联系客服</span>
			</li>
			</a>
			<a href="">
			<li id="imgid2">
				<i class="fa fa-map-marker fa-2x"></i>
				<span>地图定位</span>
			</li>
			</a>
			<a href="login.html">
			<li id="imgid3">
				<i class="fa fa-th-large fa-2x"></i>
				<span>登陆注册</span>
			</li>
			</a>
		</ul>
	</aside>

</body>
</html>