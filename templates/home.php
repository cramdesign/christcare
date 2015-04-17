<?php 
	
// Template Name: Front Page with Options

get_header(); 

// Begin the Loop
if ( have_posts() ) : while ( have_posts() ) : the_post(); 

?>

	<div id="hero" class="sidebar">
	
		<?php
			$thumb_size = "banner";
			$thumb_id = get_post_thumbnail_id();
			$thumb = wp_get_attachment_image_src($thumb_id, $thumb_size, true);
			$thumb_url = $thumb[0];
		?>
		
		<article class="primary banner" style="background-image: url(<?php echo $thumb_url; ?>);">
			<figure id="banner" class="feature"><?php the_post_thumbnail( $thumb_size );?></figure>
		</article><!-- primary -->
		
		<aside class="secondary">
			<h3><?php echo get_metabox('feature_title'); ?></h3>
			<p><?php echo get_metabox('feature_description'); ?></p>
			<div><a href="<?php echo get_permalink( get_metabox('feature_page_link') ); ?>" class="button">Read More</a></div>
		</aside><!-- secondary -->
	
	</div><!-- hero -->
	
	
	<div id="quote">
		<div class="row">
			<span>Our mission is to share the love and message of Jesus Christ while addressing the physical, emotional and spiritual needs for the wellness of the patient and their family.</span>
		</div><!-- row -->
	</div><!-- quote -->
	
	
	<div id="content">		
	<div class="sidebar">
	
		<article class="primary">
		
			<?php get_template_part( 'inc/home', 'updates' ); ?>
	
		</article><!-- primary -->
		
		<aside class="secondary">
			
			<div class="entry-content"><?php the_content(); ?></div><!-- entry-content -->
			
		</aside><!-- secondary -->
	
	</div><!-- row -->
	</div><!-- content -->
	
	
	<div id="features">
	<div class="row">
	<div class="grid three borders">
	
		<div class="item intro">
			<h3>Further Reading <br>About Our Ministry</h3>
			<p class="intro">Our beliefs guide our business and are the heart of our medical practice. Our prayerful desire is for this site to be helpful to all who visit.</p>
		</div>
	
		<div id="wander" class="item">
			<h3><?php echo get_metabox('blog_1_title'); ?></h3>
			<p class=""><?php echo get_metabox('blog_1_description'); ?></p>
			<p><a href="<?php echo get_category_link( get_metabox('blog_1_category') ); ?>" class="button">Read More</a></p>
		</div>
	
		<div id="earnest" class="item">
			<h3><?php echo get_metabox('blog_2_title'); ?></h3>
			<p class=""><?php echo get_metabox('blog_2_description'); ?></p>
			<p><a href="<?php echo get_category_link( get_metabox('blog_2_category') ); ?>" class="button">Read More</a></p>
		</div>
	
	</div><!-- grid -->
	</div><!-- row -->
	</div><!-- features -->


<?php endwhile; endif; ?>


<?php get_footer(); ?>