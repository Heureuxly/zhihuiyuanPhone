//侧边导航 课程主题
$(function(){
	$(".class_theme_button").click(function(){
		$(".class_theme").toggleClass("show");
		return false;
	})

	$(document).click(function(){
		$(".class_theme").removeClass("show");
	})
})

