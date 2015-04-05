<?php get_header(); ?>

<div id="content">

	<div class="row sidebar">

		<div class="primary">

			<?php 

				if ( have_posts() ) : while ( have_posts() ) : the_post();

					get_template_part( 'inc/content', '' );

				endwhile; endif;

				get_template_part( 'inc/pagination' );

			?>

		</div><!-- primary -->

		<div class="secondary">

			<?php get_sidebar(); ?>

		</div><!-- secondary -->

	</div><!-- row -->

</div><!-- content -->

<?php if ( is_singular() and ( comments_open() or 0 != get_comments_number() ) ) comments_template(); ?>

<?php get_footer(); ?>