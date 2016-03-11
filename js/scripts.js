(function ($, root, undefined) {

	$(function () {

		'use strict';

		// DOM ready, take it away

		var slidewidth = $('.slidedown').width();
		var slidedown = $( '.slidedown' );
		var stage = $('.stage');
		var activatoricon = $('.menu-activator').find('i');
		var header = $('header');
		var pagethumbnail = $('.page-thumbnail');

		$(".menu-activator").toggle(
  function() {
		if (stage.width() > 960 ){
			pagethumbnail.css("margin-left", slidewidth);
			header.css("margin-left", slidewidth);
		}
		activatoricon.removeClass("fa-bars");
		activatoricon.addClass("fa-arrow-left");
    slidedown.addClass( "active" );
		if (stage.width() < 960 ){
			header.css("margin-left", "0");
		}
		stage.css("margin-left", slidewidth);
  }, function() {
		activatoricon.removeClass("fa-arrow-left");
		activatoricon.addClass("fa-bars");
    slidedown.removeClass( "active" );
		header.css("margin-left", "0");
		stage.css("margin-left", "0");
		pagethumbnail.css("margin-left", "0");
  }
);

		$(".owl-carousel").owlCarousel({
			autoPlay : 10000,
			navigation: false,
			paginationSpeed : 800,
			goToFirstSpeed : 3500,
			singleItem : true,
			transitionStyle : "fade"
		});

		var owl = $(".owl-carousel").data('owlCarousel');

		var introrollover = $(".intro-key");

		introrollover.mouseenter(function() {
  		$(this).find(".intro-link").addClass("intro-link-active");
		});
		introrollover.mouseleave(function() {
  		$(this).find(".intro-link").removeClass("intro-link-active");
		});

		var teil1 = $('#teil1');
		var searchactivator = $('.search-icon');
		var searchfield = $('.searchwrapper');
		var teil2 = $('#teil2');
		var teil1start = $('#teil1start');
		var teil2start = $('#teil2start');
		var rundgangclose = $('.rundgang-close');
		var overlay = $('.overlay');
		var startcontent = $('#startcontent');


		teil1start.click(function() {
			overlay.fadeIn("fast");
  		teil1.delay(750).removeClass("rundgang-hidden");
			owl.jumpTo(0)
			owl.play();
		});
		rundgangclose.click(function() {
			owl.stop();
			teil1.addClass("rundgang-hidden");
			overlay.fadeOut("fast");
		});
		overlay.click(function() {
			owl.stop();
			teil1.addClass("rundgang-hidden");
			overlay.fadeOut("fast");
		});

		teil2start.click(function() {
			overlay.fadeIn("fast");
  		teil2.delay(750).removeClass("rundgang-hidden");
			owl.jumpTo(0)
			owl.play();
		});
		rundgangclose.click(function() {
			owl.stop();
			teil2.addClass("rundgang-hidden");
			overlay.fadeOut("fast");
		});
		overlay.click(function() {
			owl.stop();
			teil2.addClass("rundgang-hidden");
			overlay.fadeOut("fast");
		});

		searchactivator.toggle(function() {
			searchfield.fadeIn("fast");
			header.css("margin-top", '56px');
			pagethumbnail.css("margin-top", '56px');
			startcontent.css("margin-top", '60px');
			searchactivator.addClass("fa-arrow-up");
		}, function () {
			searchfield.fadeOut("fast");
			header.css("margin-top", 0);
			pagethumbnail.css("margin-top", 0);
			startcontent.css("margin-top", 0);
			searchactivator.removeClass("fa-arrow-up");
		});


});//ready func.


})(jQuery, this);
