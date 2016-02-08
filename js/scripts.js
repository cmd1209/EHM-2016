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

});

})(jQuery, this);
