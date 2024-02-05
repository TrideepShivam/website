$(document).ready(function(){
	setTimeout(function(){
		$("#personalAd").css("height","100%");
	},5000);
	$("body").on('click',"#closeAds",function(){
		$("#personalAd").css("height","0%");
	});
	
	$("body").on('click',"#infomore",function(){
		$(this).hide(500);
		$("#info").css({"height":"90%","overflow":"auto"});
	});
	$(".serviceCard").hover(function(){
		$glass = $(this).find(".glassmorphism");
		$glass.css({"top":"30%","left":"100%"});
	},function(){
		$glass = $(this).find(".glassmorphism");
		$glass.css({"top":"-70%","left":"-20%"});
	});
	$(".workCard").hover(function(){
		$text = $(this).find("div");
		$text.css({"top":"0%","opacity":"1"});
	},function(){
		$text = $(this).find("div");
		$text.css({"top":"-50%","opacity":"0"});
	});
	$("#Starter,#homeNav").hover(function(){
		$(".active").removeClass("active");
		$("#homeNav").addClass("active");
	});
	$("#aboutcontainer,#personalinformation,#aboutNav").hover(function(){
		$(".active").removeClass("active");
		$("#aboutNav").addClass("active");
	});
	$("#services,#servicesNav").hover(function(){
		$(".active").removeClass("active");
		$("#servicesNav").addClass("active");
	});
	$("#visits,#visitsNav").hover(function(){
		$(".active").removeClass("active");
		$("#visitsNav").addClass("active");
	});
	$("#gallary,#gallaryNav").hover(function(){
		$(".active").removeClass("active");
		$("#gallaryNav").addClass("active");
	});
	$("#contacts,#contactsNav").hover(function(){
		$(".active").removeClass("active");
		$("#contactsNav").addClass("active");
	});
});