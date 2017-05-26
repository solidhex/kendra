(function($) {
	
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
		
	$(document).ready(function () {
		
		var $container = $('.slider-wrap'),
			$message = $('.home-hero-message');
		
		$('.home-hero-media > .slides').bxSlider({
			pager: false,
			auto: false,
			mode: "fade",
			speed: 800,
			nextSelector: '#slider-next',
			prevSelector: '#slider-prev',
			onSliderLoad: function () {
				$container.css('visibility', 'visible');
				$('.loader').remove();
				$message.animate({
					opacity: 1
				}, 300);
			}
		});	
		
	});
	  
})(jQuery);