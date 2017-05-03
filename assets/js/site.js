(function($) {

	var readMoreLink = $('.read-more');
	
	function handleLink(e) {
		e. preventDefault();
		
		var target = $('.more');
		
		if (!target.hasClass('showing')) {
			target.addClass('showing');
			readMoreLink.html('<span>Read</span> <span>Less</span>');
		} else {
			target.removeClass('showing');
			readMoreLink.html('<span>Read</span> <span>More</span>');
		}
		
	}
	
	readMoreLink.on('click', handleLink);
	
	
	function handleNavContainer() {
		
		if ($('body').hasClass('home')) {
			var mainDiv = $('.main'),
				mainOffset = mainDiv.offset(),
				header = $('.page > header');
				
				if (window.scrollY >=  mainOffset.top - header.height()) {
					header.addClass('alt');
				} else {
					header.removeClass('alt');
				}
		}
		
	}
	
	window.addEventListener('scroll', handleNavContainer);
	
	$('.down').on('click', function (e) {

		e.preventDefault();
		
		var workDiv = $('.work'),
			offset = workDiv.offset().top;

		$('html, body').animate({
			scrollTop: offset
		}, 500);
	});
	
	$('.burger-container').on('click', function (e) {
		e.preventDefault();
		$('.nav-overlay').toggleClass('active');
		$('body').addClass('why-scroll');
	});
	
	$('.view-by-category').on('click', function (e) {
		e.preventDefault();
		$('.category-overlay').toggleClass('active');
		$('body').addClass('why-scroll');
	});
	
	$('.close').on('click', function (e) {
		e.preventDefault();
		
		$(this).parent().toggleClass('active');
		
		$('body').removeClass('why-scroll');
		
	});
	
	$('a[rel=external]').on('click', function (e) {
		e.preventDefault();
		window.open($(this).attr('href'));
	});
	
	$(window).on('load', handleNavContainer);
	
	$(document).ready(function () {
		var $slider = $('.slider-wrap > .slides').bxSlider({
			pager: false,
			controls: false,
			auto: true,
			mode: "fade"
		});
		
		$('.slider-wrap').on('click', function (e) {
			window.console.log(e.type, 'next slide');
			e.preventDefault();
			$slider.goToNextSlide();
		});
		
		$('.arrows a').on('click', function (e) {
			e.preventDefault();
			animateHeading();
			if ($(this).hasClass('arrow-prev')) {
				$slider.goToPrevSlide();
			} else if ($(this).hasClass('arrow-next')) {
				$slider.goToNextSlide();
			}
		});
		
	});
	
	function animateHeading() {
		window.console.log('%crun animateHeading', 'background-color: teal');
	}
	
	function workDetailScroll() {
		var $heading = $('.slider > h2'),
			offset = $heading.offset();
		
			// if (window.scrollY >= offset.top) {
// 				// console.log(offset.top + 'px');
// 				//$heading.addClass('animate-top');
// 				var coords = -(offset.top) + 'px';
// 				window.console.log(coords);
// 				$heading.animate({
// 					top: coords
// 				}, 350, function () {
// 					$(this).fadeOut('fast');
// 				});
// 			} else {
// 				$heading.removeClass('animate-top');
// 			}
		
	}
	
	window.addEventListener('scroll', workDetailScroll);
	
})(jQuery);


