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
   
    <script src="/zhihuiyuan(1)/Public/Home/js/themenav.js"></script>
</head>
<body>
	<header>
		<div class="button">
			<img src="/zhihuiyuan(1)/Public/Home/img/button.png" alt="">
		</div>
		<nav class="menu">
			<ul class="menu_1">
			<?php echo ($content2); ?>
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
				<?php if(is_array($newsCount2)): foreach($newsCount2 as $key=>$v): ?><li><a href="/zhihuiyuan(1)/Glod/goldproject/id/<?php echo ($v[id]); ?>"><?php echo ($v["dataname"]); ?></a></li><?php endforeach; endif; ?>	
			</ul>
		

		</div>
	</aside>

	<aside class="bottom_bar">
		<ul><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=2994985924&site=qq&menu=yes">

			<li id="imgid1">
				<i class="fa fa-qq fa-2x"></i>
				<span>联系客服</span>
			</li>
			</a>
			<a href="/zhihuiyuan(1)/Map/index">
			<li id="imgid2">
				<i class="fa fa-map-marker fa-2x"></i>
				<span>地图定位</span>
			</li>
			</a>
			<a href="/zhihuiyuan(1)/Login/index">
			<li id="imgid3">
				<i class="fa fa-th-large fa-2x"></i>
				<span>登陆注册</span>
			</li>
			</a>
		</ul>
	</aside>

</body>
</html>