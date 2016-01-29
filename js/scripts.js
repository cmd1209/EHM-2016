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
});

})(jQuery, this);
