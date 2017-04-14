(function() {
	
	function handleNav() {
		var mainDiv = document.querySelector('.main'),
			divOffset = mainDiv.offsetTop;
			
			if (window.scrollY >= divOffset) {
				document.body.classList.add('sticky-nav');
			} else {
				document.body.classList.remove('sticky-nav');
			}
	}

	window.addEventListener('scroll', handleNav);
	
	var link = document.querySelector('.read-more');
	
	link.addEventListener('click', function (e) {
		e.preventDefault();
		var target = document.querySelector('.more');
		
		if (!target.classList.contains('showing')) {
			target.classList.add('showing');
			link.innerHTML = 'Read<br>Less';
		} else {
			target.classList.remove('showing');
			link.innerHTML = 'Read<br>More';
		}
	});
	
}());