$(document).ready(function(){

    // main slide
    var $paging = $(".slides_container>li>a");
    var pagingIdx = 0;

    $(".prev").click(function (evt) {
        evt.preventDefault();
        if (pagingIdx >= 0) {
            pagingIdx--;
            $(".slides-container>li").eq(pagingIdx).fadeIn().siblings().hide();

        }else{
            pagingIdx = 1;
            $(".slides-container>li").eq(pagingIdx).fadeIn().siblings().hide();
        }
        $paging.eq(pagingIdx).parent().addClass("on").siblings().removeClass("on");
    });

    $(".next").click(function (evt) {
        evt.preventDefault();
        if (pagingIdx <= 1) {
            pagingIdx++;
            $(".slides-container>li").eq(pagingIdx).fadeIn().siblings().hide();
        } else {
            pagingIdx = 0;
            $(".slides-container>li").eq(pagingIdx).fadeIn().siblings().hide();
        }
        $paging.eq(pagingIdx).parent().addClass("on").siblings().removeClass("on");
    });


    //right btn
	$(window).scroll(function () {
		// 스크롤시 페이지업 버튼 보이기
		var this_scroll_top = $(this).scrollTop();
		if (this_scroll_top > 0) {
			$(".top_btn").fadeIn();
		} else {
			$(".top_btn").fadeOut();
		}
	});
	
	$('.top_btn').click(function(){
	$('html, body').animate({scrollTop:0},500);
	return false;
	});

	//animate
	//$('#logoarea').waypoint(function() {
		//$('.main_cont').addClass('animated fadeInUp');
	//}, { offset: '100%' });

	if ( $(".sub_article .sub_title").length ) {
		var text1 = $(".sub_article .sub_title").text();
		$("#sub_article_wrap .sub_article .sub_menu .list-group a:contains('"+text1+"')").addClass("active");
	}
    
}); 