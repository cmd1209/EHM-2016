!function(a,b,c){a(function(){"use strict";a(".menu-activator").click(function(){a(".slidedown").toggleClass("active")}),a(".owl-carousel").owlCarousel({autoPlay:1e4,navigation:!1,paginationSpeed:800,goToFirstSpeed:3500,singleItem:!0}),a(window).resize(function(){var b=(a(window).height(),600),c=(a(".slidedown"),a(".menu-activator"));a(document).scroll(function(){var d=a(this).scrollTop();d>b?(c.removeClass("unstuck"),c.addClass("stuck")):(c.removeClass("stuck"),c.addClass("unstuck"))})}).resize()})}(jQuery,this);