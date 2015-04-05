<?php if ( get_metabox( 'banner_featured_image' ) ) get_template_part( 'inc/featured', '' ); ?>

<div id="content" class="singular">		

	<div class="row">
	
		<div class="primary">
		
			<section>
				<?php while ( have_posts() ) : the_post(); ?>
				
					<div <?php post_class( 'item' ) ?>>
						
						<?php if( is_page() ) get_template_part( 'inc/nav', 'page' ); ?>
					
						<article>
							
							<?php if ( !get_metabox( 'banner_featured_image' ) ) get_template_part( 'inc/featured', '' ); ?>
							
							<header>
								
								<?php
					
									the_title( '<h1 class="entry-title">', '</h1>' );
									
									// only single and blog pages need meta data
									if ( is_single() or is_home() ) get_template_part( 'metadata' );
								
								?>
								
							</header>
						
							<div class="entry-content">
					
								<?php the_content(); ?>
								
							</div><!-- entry-content -->
						
						</article>
					
						<?php wp_link_pages( 'before=<div id="page-links">&after=</div>' ); ?>
				
					</div><!-- post -->
				
				<?php endwhile; ?>
			</section>
		
		</div><!-- primary -->
		
	</div><!-- row -->

</div><!-- content -->
		
