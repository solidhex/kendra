(function() {
	
	function handleNav() {
		var mainDiv = document.querySelector('.main'),
			divOffset = mainDiv.offsetTop;
			
			if (window.scrollY >= divOffset) {
				document.body.classList.add('sticky-nav');
				console.log('add class');
			} else {
				document.body.classList.remove('sticky-nav');
				console.log('remove class');
			}
	}

	window.addEventListener('scroll', handleNav);
	
}());