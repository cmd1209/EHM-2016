(function ($, root, undefined) {

	$(function () {

		'use strict';

		// DOM ready, take it away
		$(".menu-activator").click(function() {
  		$('.slidedown').toggleClass("active")
  		$('.stage').toggleClass("shoved")
		});

		$(".owl-carousel").owlCarousel({
			autoPlay : 10000,
			navigation: false,
			paginationSpeed : 800,
			goToFirstSpeed : 3500,
			singleItem : true,
		});
		var introrollover = $(".intro-key");

		introrollover.mouseenter(function() {
  		$(this).find(".intro-link").addClass("intro-link-active");
		});
		introrollover.mouseleave(function() {
  		$(this).find(".intro-link").removeClass("intro-link-active");
		});




  $(window).scroll(function(){
    var winTop = $(window).scrollTop();
		var header = $("header");
		var logo = $(".logo");
    if(winTop >= 35 && $(".page-thumbnail").css("position") == "relative" ){
      header.addClass("header-sticky");
			logo.addClass("logo-minimal");
    }else{
      header.removeClass("header-sticky");
			logo.removeClass("logo-minimal");
    }//if-else
  });//win func.
});//ready func.


})(jQuery, this);
