<div <?php post_class( 'item' ) ?>>
	
	<?php if ( has_post_thumbnail( $post->ID ) ) : ?>	
	<figure class="feature"><?php the_post_thumbnail( 'thumbnail' );?></figure><!-- feature -->
	<?php endif; ?>
		
	<article>
		
		<header>
			<h3 class="entry-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
		</header>
	
		<div class="entry-content">
			<?php the_excerpt(); ?>
		</div><!-- entry-content -->
	
	</article>

</div><!-- post -->