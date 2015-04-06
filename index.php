<?php get_header(); ?>

<div id="content">

	<div class="row sidebar">

		<div class="primary">

			<?php 

				if ( have_posts() ) : while ( have_posts() ) : the_post();

					get_template_part( 'inc/content', '' );

				endwhile; endif;

				the_posts_pagination( array( 'mid_size' => 2, 'prev_text' => 'Prev', 'next_text' => 'Next' ) );

			?>

		</div><!-- primary -->

		<div class="secondary">

			<?php get_sidebar(); ?>

		</div><!-- secondary -->

	</div><!-- row -->

</div><!-- content -->

<?php if ( is_singular() and ( comments_open() or 0 != get_comments_number() ) ) comments_template(); ?>

<?php get_footer(); ?>