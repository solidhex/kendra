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
	
	
	function handleNav() {
		var mainDiv = $('.main'),
			mainOffset = mainDiv.offset(),
			footerOffset = $('.page > footer').offset();
		
		if (window.scrollY >= mainOffset.top) {
			$('body').addClass('sticky-nav');
		} else {
			$('body').removeClass('sticky-nav');
		}
		
		if (window.scrollY >= footerOffset.top && $('body').hasClass('sticky-nav')) {
			$('body').removeClass('sticky-nav');
		}	
	}
	
	window.addEventListener('scroll', handleNav);
	
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

})(jQuery);


