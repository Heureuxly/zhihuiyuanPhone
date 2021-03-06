<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title><?php echo ($msgTitle); ?></title>
<style type="text/css">
body {
	background:url(/zhihuiyuan/zhihuiyuanPhone/Public/<?php echo MODULE_NAME;?>/img/weibo_bg.jpg);
	overflow-x:hidden;
	overflow-y:hidden;
}
.info {
	width:80%;
	height:10rem;
	padding:6.25rem 0 0 0;
	background:#fafafa;
	margin:6.25rem auto;
	text-align:center;
}
.text {
	height:38px;
	font-size:1.6em;
	font-weight:bold;
	color:#666;
	text-indent:45px;
}
.success {
	background:url(/zhihuiyuan/zhihuiyuanPhone/Public/<?php echo MODULE_NAME;?>/img/jump_success.png) no-repeat;
}
.error {
	background:url(/zhihuiyuan/zhihuiyuanPhone/Public/<?php echo MODULE_NAME;?>/img/jump_error.png) no-repeat;
}
.jump {
	color:#666;
	padding:55px 15px 0 0;
	text-align:right;
}
a {
	color:#06f;
	text-decoration:none;
}
a:hover {
	color:#f60;
}
</style>
</head>
<body>


<?php
if ($status) { ?>
<div class="info">
	<span class="text success"><?php echo ($message); ?></span>
	<p class="jump">页面自动 <a id="href" href="<?php echo($jumpUrl); ?>">跳转</a> 等待时间： <b id="wait"><?php echo($waitSecond); ?></b></p>
</div>
<?php
} else { ?>
<div class="info">
	<span class="text error"><?php echo ($error); ?></span>
	<p class="jump">页面自动 <a id="href" href="<?php echo($jumpUrl); ?>">跳转</a> 等待时间： <b id="wait"><?php echo($waitSecond); ?></b></p>
</div>
<?php
} ?>
<script type="text/javascript">
(function(){
	var wait = document.getElementById('wait'),href = document.getElementById('href').href;
	var interval = setInterval(function(){
		var time = --wait.innerHTML;
		if(time <= 0) {
			location.href = href;
			clearInterval(interval);
		};
	}, 1000);
})();
</script>
</body>
</html>