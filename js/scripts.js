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

		var rundgang = $('.rundgang');
		var rundgangstart = $('.rundgang-start');
		var rundgangclose = $('.rundgang-close');
		var overlay = $('.overlay');

		rundgangstart.click(function() {
  		rundgang.removeClass("rundgang-hidden");
  		overlay.slideDown("slow");
		});
		rundgangclose.click(function() {
			rundgang.addClass("rundgang-hidden");
			overlay.slideUp("fast");
		});
		overlay.click(function() {
			rundgang.addClass("rundgang-hidden");
			overlay.slideUp("fast");
		});

});//ready func.


})(jQuery, this);
