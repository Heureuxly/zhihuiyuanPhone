//index
$(function(){
	$(".button").click(function(event){
		$(".menu").toggleClass("menu_hide");
		return false;
	})
	$(document).click(function(){
		$(".menu").addClass("menu_hide");
	})


	$(".menu_1 li").eq(1).click(function(){
		$(".menu-a").toggleClass("menu_hide");
		$(".menu_2").not(".menu-a").addClass("menu_hide");
		return false;
		
	})
	$(".menu_1 li").eq(6).click(function(){
		$(".menu-b").toggleClass("menu_hide");
		$(".menu_2").not(".menu-b").addClass("menu_hide");
		return false;
		
	})
	$(".menu_1 li").eq(10).click(function(){
		$(".menu-c").toggleClass("menu_hide");
		$(".menu_2").not(".menu-c").addClass("menu_hide");
		return false;

	})
	$(".menu_1 li").eq(14).click(function(){
		$(".menu-d").toggleClass("menu_hide");
		$(".menu_2").not(".menu-d").addClass("menu_hide");
		return false;
		
	})
	$(".menu_1 li").eq(17).click(function(){
		$(".menu-e").toggleClass("menu_hide");
		$(".menu_2").not(".menu-e").addClass("menu_hide");
		return false;
		
	})
	$(".menu_1 li").eq(21).click(function(){
		$(".menu-f").toggleClass("menu_hide");
		$(".menu_2").not(".menu-f").addClass("menu_hide");
		return false;
		
	})
})


function loada (){
	var oIn = document.getElementById("imgid1");

	oIn.addEventListener('touchstart',touch,false);
	oIn.addEventListener('touchend',touch,false);


	function touch(event){
	var event = event || window.event;
         
    var oInp = document.getElementById('imgid1');
    switch(event.type){
            case "touchstart":
            oInp.style.color="#19264a";
            break;
            case "touchend":
            oInp.style.color="#dedfe0";
        }
    }
}

function loadb (){
	var oIn = document.getElementById("imgid2");

	oIn.addEventListener('touchstart',touch,false);
	oIn.addEventListener('touchend',touch,false);


	function touch(event){
	var event = event || window.event;
         
    var oInp = document.getElementById('imgid2');
    switch(event.type){
            case "touchstart":
            oInp.style.color="#19264a";
            break;
            case "touchend":
            oInp.style.color="#dedfe0";
        }
    }
}

function loadc (){
	var oIn = document.getElementById("imgid3");

	oIn.addEventListener('touchstart',touch,false);
	oIn.addEventListener('touchend',touch,false);


	function touch(event){
	var event = event || window.event;
         
    var oInp = document.getElementById('imgid3');
    switch(event.type){
            case "touchstart":
            oInp.style.color="#19264a";
            break;
            case "touchend":
            oInp.style.color="#dedfe0";
        }
    }
}



window.addEventListener('load',loadb,false);
window.addEventListener('load',loadc,false);



//文字垂直居中
$(function(){
	a = $(".box-one-word").outerHeight()-2;
	$(".box-one-word").css("line-height",a+"px");
	
})
$(window).resize(function(){
	a = $(".box-one-word").outerHeight()-2;
	$(".box-one-word").css("line-height",a+"px");
})

