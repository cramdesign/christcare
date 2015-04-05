<div class="meta">
	
	<p class="time"><?php the_time( get_option( 'date_format' ) ); ?></p>
	
	<?php if( get_comments_number() != 0 ) : ?>
        <p class="comments"><?php comments_popup_link('No Comments', '1 Comment', '% Comments', 'comments-link', ''); ?></p>
	<?php endif; ?>
	
	<?php if( has_category() ) : ?>
		<p class="category"><?php the_category(', ') ?></p>
	<?php endif; ?>
	
</div><!-- meta -->
