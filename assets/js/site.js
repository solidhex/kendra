(function($) {

	var readMoreLink = $('.read-more');
	
	function handleLink(e) {
		e. preventDefault();
		
		var target = $('.more');
		
		if (!target.hasClass('showing')) {
			target.addClass('showing');
			readMoreLink.html('Read<br>Less');
		} else {
			target.removeClass('showing');
			readMoreLink.html('Read<br>More');
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
	
	$('.close').on('click', function (e) {
		e.preventDefault();
		$('.nav-overlay').toggleClass('active');
		$('body').removeClass('why-scroll');
		
	});
	
	$('a[rel=external]').on('click', function (e) {
		e.preventDefault();
		window.open($(this).attr('href'));
	});
	
	$(window).on('load', handleNavContainer);

})(jQuery);


