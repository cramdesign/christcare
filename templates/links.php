<?php /* Template Name: List Links */ ?>

<?php get_header(); ?>

<!-- links.php -->

<div id="content" class="template-links singular">		
	<div class="row">
	
		<div class="primary">
	
			<section>
				
				<?php while ( have_posts() ) : the_post(); ?>
				
					<div <?php post_class( 'item' ) ?>>
						
						<?php if( !get_metabox('banner_featured_image') ) get_template_part( 'inc/featured', '' ); ?>
							
						<?php if( is_page() ) get_template_part( 'inc/nav', 'page' ); ?>
					
						<article>
							
							<header>
					
								<h1 class="entry-title"><?php the_title(); ?></h1>
								
							</header>
						
							<div class="entry-content">
					
								<?php the_content(); ?>
								
							</div><!-- entry-content -->
						
							<?php 
							
								$args = array(
									
									/* category options */
									'category_before'	=> '<section id=%id class=%class>',
									'category_after'	=> '</section>',
									'title_before'		=> '<h3 class="link-category-title">',
									'title_after'		=> '</h3>',
									'category_order'	=> 'DESC',
									
									/* link options */
									'orderby'			=> 'rating',
									'order'				=> 'DESC',
									'link_before'		=> '<h4 class="link-title">',
									'link_after'		=> '</h4>',
									'show_description'	=> true
									
								);
								
								wp_list_bookmarks( $args ); 
							
							?> 
					
						</article>
					
					</div><!-- post -->
				
				<?php endwhile; ?>
				
			</section>
	
		</div><!-- primary -->
		
	</div><!-- row -->
</div><!-- content -->

<?php get_footer(); ?>
