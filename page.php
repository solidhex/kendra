<?php

	$skip_pages = array( 
		'creative-direction',
		'strategy',
		'brand-and-identity',
		'digital-product',
		'packaging',
		'print',
		'art-direction'
	);
	
	$url =  'http://' . $_SERVER['HTTP_HOST'] . '/projects?sort';
	
	if (in_array($post->post_name, $skip_pages)) {
		header('Location: ' . $url);
	}

?>

test nav


<?php //get_footer(); ?>