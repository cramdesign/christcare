<?php if ( has_post_thumbnail() && !get_metabox('hide_featured_image') && !get_metabox('banner_featured_image') ) : ?>

<figure class="feature"><?php the_post_thumbnail( 'large' );?></figure>

<?php endif; ?>
