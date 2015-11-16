<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
	<![endif]-->
	
	<?php wp_head(); ?>
	
	<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/respond.js" type="text/javascript"></script>
	<![endif]-->

</head>


<body <?php body_class(); ?>>
	
	
<div class="wrap">


<header id="header">
<div class="row">

	<div id="masthead">
		<h1 class="site-title"><a href="<?php echo home_url( "/" ); ?>"><?php bloginfo( "name" ); ?></a></h1>
	</div>
		
	<nav id="menu">
		<input type="checkbox" id="menu-toggle" class="toggle">
		<label for="menu-toggle" class="toggle">Menu</label>
		<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'menu_class' => 'menu target' )); ?>
	</nav>
	
</div><!-- row -->
</header>


<main>
