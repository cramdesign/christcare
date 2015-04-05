<?php 
	
	get_header(); 

	get_template_part( 'inc/content', 'singular' ); 
	 
	// load the comments.php file if it is needed
	// if ( comments_open() or 0 != get_comments_number() ) comments_template(); 

	get_footer(); 
	
?>