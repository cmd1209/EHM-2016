!function(a,b,c){a(function(){"use strict";var b=a(".slidedown").width(),c=a(".slidedown"),d=a(".stage"),e=a(".menu-activator").find("i");a(".menu-activator").toggle(function(){e.removeClass("fa-bars"),e.addClass("fa-arrow-left"),c.addClass("active"),d.css("margin-left",b)},function(){e.removeClass("fa-arrow-left"),e.addClass("fa-bars"),c.removeClass("active"),d.css("margin-left","0")}),a(".owl-carousel").owlCarousel({autoPlay:1e4,navigation:!1,paginationSpeed:800,goToFirstSpeed:3500,singleItem:!0,transitionStyle:"fade"});var f=a(".owl-carousel").data("owlCarousel"),g=a(".intro-key");g.mouseenter(function(){a(this).find(".intro-link").addClass("intro-link-active")}),g.mouseleave(function(){a(this).find(".intro-link").removeClass("intro-link-active")});var h=a("#teil1"),i=a("#teil2"),j=a("#teil1start"),k=a("#teil2start"),l=a(".rundgang-close"),m=a(".overlay");j.click(function(){m.fadeIn("fast"),h.delay(750).removeClass("rundgang-hidden"),f.jumpTo(0),f.play()}),l.click(function(){f.stop(),h.addClass("rundgang-hidden"),m.fadeOut("fast")}),m.click(function(){f.stop(),h.addClass("rundgang-hidden"),m.fadeOut("fast")}),k.click(function(){m.fadeIn("fast"),i.delay(750).removeClass("rundgang-hidden"),f.jumpTo(0),f.play()}),l.click(function(){f.stop(),i.addClass("rundgang-hidden"),m.fadeOut("fast")}),m.click(function(){f.stop(),i.addClass("rundgang-hidden"),m.fadeOut("fast")})})}(jQuery,this);