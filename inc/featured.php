<?php if ( has_post_thumbnail() && !get_metabox('hide_featured_image') ) : ?>

	<?php if ( get_metabox('banner_featured_image') ) : ?>
	
	<figure id="banner" class="feature"><?php the_post_thumbnail( 'banner' );?></figure>
	
	<?php else : ?>
	
	<figure class="feature"><?php the_post_thumbnail( 'large' );?></figure>
	
	<?php endif; ?>

<?php endif; ?>