<?php get_header(); ?>

<!-- archive.php -->

<?php

if ( class_exists( 'WPFeaturedImgCategories' ) ) :

	$term_id = get_query_var('cat');
	$thumbnail_id = get_option( '_wpfifc_taxonomy_term_'.$term_id.'_thumbnail_id_', 0 );
	
	if ( $thumbnail_id > 0 ) {
		
		$image = wp_get_attachment_image_src( $thumbnail_id, "large" );
		$banner = '<figure id="banner" class="feature"><img src="' . $image[0] . '"></figure>';
		echo( $banner );
					
	}
	
endif;

?>

<div id="content" class="archive">

	<header>
		
		<div class="row">
		
			<header>
				<h1 class="category-title entry-title"><?php single_cat_title( $prefix = '', $display = true ); ?></h1>
			</header>
			
			<?php if( is_category() ) echo( '<div class="entry-content">' . category_description() . '</div>' ); ?>
			
		</div><!-- row -->
		
	</header>
	
	
	<div class="row">
	
		<section>
			<div class="slats">
			
				<?php 
				
					if ( have_posts() ) : 
					
						while ( have_posts() ) : the_post();
					
							get_template_part( 'inc/content', 'archive' );
						
						endwhile;
						
						get_template_part( 'inc/pagination' );
					
					else :
					
						echo( '<h2 class="nothing">No posts yet...</h2>' );
					
					endif; 
				
				?>
			
			</div><!-- slats -->
		</section>
	
	
	</div><!-- row -->
	
</div><!-- content -->


<?php get_footer(); ?>