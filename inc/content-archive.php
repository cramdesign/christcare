<div <?php post_class( 'item' ) ?>>

	<?php
		
		if ( has_post_thumbnail( $post->ID ) ) :
				
			echo( '<figure class="feature"><a href="' . get_the_permalink() . '">' . get_the_post_thumbnail( $post->ID, 'thumbnail' ) . '</a></figure>' );
		
		endif; 
	
	?>

	<article>

        <header>
			
			<?php the_title( '<h3 class="entry-title"><a href="' . get_the_permalink() . '">', '</a></h3>' ); ?>

        </header>

		<div class="entry-content">
		
			<?php is_category() || is_archive() || is_home() || is_front_page() ? the_excerpt() : the_content(); ?>
			
		</div>

		<?php if ( ! is_front_page() ) : ?>
		
			<footer>
				<p><small>Posted in <?php the_category(', ') ?></small></p>
			</footer>
			
		<?php endif; ?>

	</article>

</div><!-- item post -->
