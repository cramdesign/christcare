<?php 
	
	if ( has_post_thumbnail() && !get_metabox('hide_featured_image') ) :

		$size = get_metabox( 'banner_featured_image' ) ? 'banner' : 'large'; 
				
		echo( '<figure class="feature ' . $size . '">' . get_the_post_thumbnail( $post->ID, $size ) . '</figure>' );

	endif; 

?>