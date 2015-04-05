<div <?php post_class( 'item' ) ?>>
	
	<?php
		
		if ( has_post_thumbnail( $post->ID ) ) :
		
			$size = is_singular() and !is_front_page() ? "large" : "thumbnail";
		
			echo( '<figure class="feature">' . get_the_post_thumbnail( $post->ID, $size ) . '</figure>' );
		
		endif; 
	
	?>
		
	<article>
		
		<header>
			
			<?php 
				
				// if its a singular page, it doesn't need a link.
				
				if ( is_singular() and !is_front_page() ) : 
				
					the_title( '<h1 class="entry-title">', '</h1>' );
				
				else :
				
					the_title( '<h1 class="entry-title"><a href="' . get_the_permalink() . '">', '</a></h1>' );
					
				endif;
				

				// only single and blog pages need meta data
				if ( is_single() or is_home() ) get_template_part( 'metadata' );
				
			?>
						
		</header>
	
		<div class="entry-content">
		
			<?php is_front_page() ? the_excerpt() : the_content(); ?>
			
		</div><!-- entry-content -->
	
	</article>

</div><!-- post -->
