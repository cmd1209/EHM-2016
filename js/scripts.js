(function ($, root, undefined) {

	$(function () {

		'use strict';

		// DOM ready, take it away

		var slidewidth = $('.slidedown').width();
		var slidedown = $( '.slidedown' );
		var stage = $('.stage');
		var activatoricon = $('.menu-activator').find('i');

		$(".menu-activator").toggle(
  function() {
		activatoricon.removeClass("fa-bars");
		activatoricon.addClass("fa-arrow-left");
    slidedown.addClass( "active" );
		stage.css("margin-left", slidewidth);
  }, function() {
		activatoricon.removeClass("fa-arrow-left");
		activatoricon.addClass("fa-bars");
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
			overlay.fadeIn("fast");
  		rundgang.delay(750).removeClass("rundgang-hidden");
		});
		rundgangclose.click(function() {
			rundgang.addClass("rundgang-hidden");
			overlay.fadeOut("fast");
		});
		overlay.click(function() {
			rundgang.addClass("rundgang-hidden");
			overlay.fadeOut("fast");
		});

});//ready func.


})(jQuery, this);
