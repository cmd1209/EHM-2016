(function ($, root, undefined) {

	$(function () {

		'use strict';

		// DOM ready, take it away
		$(".menu-activator").click(function() {
  		$('.slidedown').toggleClass("active")
		});
		$(".owl-carousel").owlCarousel({
			autoPlay : 10000,
			navigation: false,
			paginationSpeed : 800,
			goToFirstSpeed : 3500,
			singleItem : true,
		});
		$(window).resize(function(){
				var windowHeight = $(window).height();
				var ninetypercent = 600;
				var slidedown = $('.slidedown');
				var activator = $('.menu-activator');
    $(document).scroll(function(){
      var y = $(this).scrollTop();
      if( y > ninetypercent) {
        activator.removeClass('unstuck');
        activator.addClass('stuck');
        } else {
        activator.removeClass('stuck');
        activator.addClass('unstuck');
      }
    });
  }).resize();
});


})(jQuery, this);
