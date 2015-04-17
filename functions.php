<?php
/* Load support files 
-------------------------------------------------------------- */
require_once( 'functions/editor-styles.php' );
require_once( 'functions/metabox/metabox_options.php' );
require_once( 'functions/customizer.php' );


/* Register Theme Features 
-------------------------------------------------------------- */
function custom_theme_features()  {


	// sets max image width inserted into a post
	if ( ! isset( $content_width ) ) $content_width = 1040;


	// Remove ugly inline css in gallery shortcode
	add_filter( 'use_default_gallery_style', '__return_false' );


	// restore the links section
	add_filter( 'pre_option_link_manager_enabled', '__return_true' );


	// Menus
	register_nav_menu( 'primary', 'Primary menu' );
	register_nav_menu( 'social', 'Social menu' );


	// Editor stylesheet
	add_editor_style ( 'css/html.css' );


	// add support for featured images
	add_theme_support( 'post-thumbnails' ); 
	add_image_size( 'banner', 1300, 550, true );


	// Enable support for HTML5 markup.
	add_theme_support( 'html5', array(
		'comment-list',
		'comment-form',
		'search-form',
		'comment-form',
		'gallery',
		'caption'
	) );


	// allow WordPress to control the title tag
	add_theme_support( 'title-tag' );


}
add_action( 'after_setup_theme', 'custom_theme_features' );



/* Register widget areas
-------------------------------------------------------------- */
function custom_theme_widgets() {


	register_sidebar(array(
		'name'			=> 'Sidebar Widgets',
		'id'			=> 'sidebar',
		'description'	=> 'These are widgets for all sidebars.',
		'before_widget'	=> '<div id="%1$s" class="widget %2$s">',
		'after_widget'	=> '</div><!-- end widget -->',
		'before_title'	=> '<h3 class="title">',
		'after_title'	=> '</h3>'
	));


}
add_action( 'widgets_init', 'custom_theme_widgets' );



/* Register theme javascript and stylesheets
-------------------------------------------------------------- */
if ( !function_exists( 'custom_theme_scripts' ) ) : function custom_theme_scripts() {


	// load comments stylesheet and javascript only if it is needed
	if ( is_singular() and ( comments_open() or 0 != get_comments_number() ) ) : 
		
			wp_enqueue_style ( 'comments', get_template_directory_uri() . '/css/comments.css' );
			if ( get_option('thread_comments') ) wp_enqueue_script( 'comment-reply' );
			
	endif;
	

	// Styles
	wp_enqueue_style( 'norm', get_template_directory_uri() . '/css/norm.css' );
	wp_enqueue_style( 'base', get_template_directory_uri() . '/css/base.css' );
	wp_enqueue_style( 'menu', get_template_directory_uri() . '/css/menu.css' );
	wp_enqueue_style( 'html', get_template_directory_uri() . '/css/html.css' );
	wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css' );


	// Conditionally load styles for IE
	global $wp_styles;
	wp_enqueue_style( 'ie-style', get_template_directory_uri() . '/css/ie.css' );
	$wp_styles->add_data( 'ie-style', 'conditional', 'lt IE 9' );


} endif;
add_action('wp_enqueue_scripts', 'custom_theme_scripts', 5);



/*	Register login stylesheet
-------------------------------------------------------------- */
if ( !function_exists( 'login_scripts' ) ) : function login_scripts() {

	wp_enqueue_style( 'login-style', get_template_directory_uri() . '/css/login.css' );

} endif;
add_action( 'login_enqueue_scripts', 'login_scripts', 5 );



/* custom menu walker
-------------------------------------------------------------- */
class MV_Cleaner_Walker_Nav_Menu extends Walker {
	
    var $tree_type = array( 'post_type', 'taxonomy', 'custom' );
    var $db_fields = array( 'parent' => 'menu_item_parent', 'id' => 'db_id' );
    
    function start_lvl(&$output, $depth) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"sub-menu\">\n";
    }
    
    function end_lvl(&$output, $depth) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n";
    }
    
    function start_el(&$output, $item, $depth, $args) {
        global $wp_query;
        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
        $class_names = $value = '';
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $classes = in_array( 'current-menu-item', $classes ) ? array( 'current-menu-item' ) : array();
        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
        $class_names = strlen( trim( $class_names ) ) > 0 ? ' class="' . esc_attr( $class_names ) . '"' : '';
        $id = apply_filters( 'nav_menu_item_id', '', $item, $args );
        $id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';
        $output .= $indent . '<li' . $id . $value . $class_names .'>';
        $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
        $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
        $item_output = $args->before;
        $item_output .= '<a'. $attributes .'>';
        $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;
        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
    
    function end_el(&$output, $item, $depth) {
        $output .= "</li>\n";
    }
    
}



/* Replaces the excerpt "more" text by a link
-------------------------------------------------------------- */
function new_excerpt_more($more) {
	global $post;
	return '... <a class="moretag" href="'. get_permalink($post->ID) . '">[Read the full text]</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');



/* remove junk from head
-------------------------------------------------------------- */
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 );
remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );




/* Custom User Contact Info
-------------------------------------------------------------- */
function extra_contact_info($contactmethods) {
	
	unset($contactmethods['yim']);
	unset($contactmethods['jabber']);
	$contactmethods['facebook'] = 'Facebook';
	$contactmethods['twitter'] = 'Twitter';
	$contactmethods['linkedin'] = 'LinkedIn';
	return $contactmethods;
	
}
add_filter('user_contactmethods', 'extra_contact_info');



