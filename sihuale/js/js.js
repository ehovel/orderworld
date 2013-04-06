// JavaScript Document
$(function(){
		$(".tab li").click(function(){
				$(".tab li").removeClass("blue");
				$(this).addClass("blue");
				$(".news .ul_t").hide();
				var s=$(this).index();
				$(".news .ul_t").eq(s).show();
			});
		/*焦点图的切换*/
		var sw = 0;
		$(".slider-holder .slider-trigger li").mouseover(function(){
			sw = $(".slider-trigger li").index(this);
			myShow(sw);
		});
		function myShow(i){
			$(".slider-holder .slider-trigger li").eq(i).addClass("cur").siblings("li").removeClass("cur");
			$(".slider-holder .slider-list li").eq(i).stop(true,true).fadeIn(600).siblings("li").fadeOut(600);
		}
	});