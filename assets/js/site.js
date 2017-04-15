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
			offset = mainDiv.offset();
		
		if (window.scrollY >= offset.top) {
			$('body').addClass('sticky-nav');
		} else {
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

})(jQuery);


