$(function(){
	$(".fa-bars").click(function(){
		var height = $(window).innerHeight();
		$("#mobNavList").slideToggle();
		$("#mobNavList").css({
			"height": $height
		})
	})
});