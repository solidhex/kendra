!function($){function e(e){e.preventDefault();var o=$(".more");o.hasClass("showing")?(o.removeClass("showing"),a.html("<span>Read</span> <span>More</span>")):(o.addClass("showing"),a.html("<span>Read</span> <span>Less</span>"))}function o(){if($("body").hasClass("home")){var e=$(".main"),o=e.offset(),a=$(".page > header");window.scrollY>=o.top-a.height()?a.addClass("alt"):a.removeClass("alt")}}var a=$(".read-more");a.on("click",e),window.addEventListener("scroll",o),$(".down").on("click",function(e){e.preventDefault();var o=$(".work"),a=o.offset().top;$("html, body").animate({scrollTop:a},500)}),$(".burger-container").on("click",function(e){e.preventDefault(),$(".nav-overlay").toggleClass("active"),$("body").addClass("why-scroll")}),$(".view-by-category").on("click",function(e){e.preventDefault(),$(".category-overlay").toggleClass("active"),$("body").addClass("why-scroll")}),$(".close").on("click",function(e){e.preventDefault(),$(this).parent().toggleClass("active"),$("body").removeClass("why-scroll")}),$("a[rel=external]").on("click",function(e){e.preventDefault(),window.open($(this).attr("href"))}),$(window).on("load",o),$(document).ready(function(){var e=$(".slider-wrap"),o=$(".slider-wrap > .slides").bxSlider({pager:!1,controls:!1,auto:!0,mode:"fade",speed:600,hideControlOnEnd:!0,onSliderLoad:function(){e.css("visibility","visible")}});$(e).on("click",function(e){window.console.log(e.type,"next slide"),e.preventDefault(),o.goToNextSlide()}),$(".arrows a").on("click",function(e){e.preventDefault(),$(this).hasClass("arrow-prev")?o.goToPrevSlide():$(this).hasClass("arrow-next")&&o.goToNextSlide()})})}(jQuery);