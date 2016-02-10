(function ($, root, undefined) {

	$(function () {

		'use strict';

		// DOM ready, take it away

		var slidewidth = $('.slidedown').width();
		var slidedown = $( '.slidedown' );
		var stage = $('.stage');

		$(".menu-activator").toggle(
  function() {
    slidedown.addClass( "active" );
		stage.css("margin-left", slidewidth);
  }, function() {
    slidedown.removeClass( "active" );
		stage.css("margin-left", "0");
  }
);

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
    if(winTop >= 35 && header.css("width") >= "250px" ){
      header.addClass("header-sticky");
			logo.addClass("logo-minimal");
    }else{
      header.removeClass("header-sticky");
			logo.removeClass("logo-minimal");
    }//if-else
  });//win func.
});//ready func.


})(jQuery, this);
