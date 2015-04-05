<div class="updates">
	
	<?php $front_cat = get_metabox( 'home_updates_category' ); ?>
	
	<h2><?php echo get_cat_name( $front_cat ); ?></h2>
	
	<div class="slats">
	
		<?php
			
			$args = array( 'posts_per_page' => 3, 'category' => $front_cat );
			$myposts = get_posts( $args );
			
			foreach ( $myposts as $post ) : 
			
				setup_postdata( $post );
				get_template_part( 'inc/content', 'archive' );
			
			endforeach;
			
			wp_reset_postdata();
			
		?>
	
	</div><!-- slats -->
	
	<p><a href="<?php echo get_category_link( $front_cat ); ?>" class="button">View all posts</a></p>

</div><!-- updates -->