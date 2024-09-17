<?php
add_action( 'after_setup_theme', 'tlc_setup' );
function tlc_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	register_nav_menu( 'primary', __( 'Primary Menu', 'tlc' ) );
}

add_action( 'wp_enqueue_scripts', 'tlc_load_scripts' );
function tlc_load_scripts() {

	define('ENQUEUE_VERSION', '1.0.0');

	//post id, so we can restrict unnecessary scripts
	global $post;
	$pid = is_singular() ? $post->ID : null;

	$deps = array('jquery');

	wp_enqueue_script( 'jquery' );

	// fitvids
	wp_register_script('fitvids',
		get_bloginfo('template_url') . '/dist/js/jquery.fitvids.js',
		array(),
		ENQUEUE_VERSION,
		true
	);
	wp_enqueue_script('fitvids');

	// fitvids
	wp_register_script('slick',
		get_bloginfo('template_url') . '/dist/js/slick.min.js',
		array(),
		ENQUEUE_VERSION,
		true
	);
	wp_enqueue_script('slick');

	// main js
	wp_register_script('main-js',
		get_bloginfo('template_url') . '/dist/js/main.js',
		$deps,
		ENQUEUE_VERSION,
		true
	);
	wp_enqueue_script('main-js');

	// main css
	wp_register_style('main-css',
		get_stylesheet_uri(),
		array(),
		ENQUEUE_VERSION
	);
	wp_enqueue_style('main-css');
}

//Remove Gutenberg Block Library CSS from loading on the frontend
function remove_wp_block_library_css(){
	wp_dequeue_style( 'wp-block-library' );
	wp_dequeue_style( 'wp-block-library-theme' );
}
add_action( 'wp_enqueue_scripts', 'remove_wp_block_library_css', 100 );


// Remove emoji
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');


add_filter( 'wp_title', 'tlc_filter_wp_title' );
function tlc_filter_wp_title( $title ) {
	return $title . esc_attr( get_bloginfo( 'name' ) );
}


// Post Navigation
function post_navigation() {
	$prev_page = get_previous_posts_link('<svg class="post-grid--icon icon-arrow-left"><use xlink:href="#icon-arrow-left"></use></svg> Previous Posts');
	$next_page = get_next_posts_link('More Posts <svg class="post-grid--icon icon-arrow-right"><use xlink:href="#icon-arrow-right"></use></svg>');
	if($prev_page || $next_page) {
		echo '<div class="post-grid-nav">';
		if ($prev_page) {
			echo  '<div class="post-grid-nav--item">' . $prev_page . '</div>';
		} else {
			echo '<div class="post-grid-nav--item"><svg class="post-grid-nav--icon icon-arrow-left"><use xlink:href="#icon-arrow-left"></use></svg> Previous Posts</div>';
		}
		if ($next_page) {
			echo  '<div class="post-grid-nav--item">' . $next_page . '</div>';
		} else {
			echo '<div class="post-grid-nav--item">More Posts <svg class="post-grid-nav--icon icon-arrow-right"><use xlink:href="#icon-arrow-right"></use></svg></div>';
		}
		echo '</div>';
	}
}


// Image Sizes
add_image_size( 'full-width-image', 1000, 360, true );
add_image_size( 'full-width-image-2x', 2000, 720, true );

add_image_size( 'before-after-image', 586, 396, true );
add_image_size( 'before-after-image-2x', 1172, 792, true );

add_image_size( 'home-hero', 754, 456, true );
add_image_size( 'home-hero-2x', 1508, 912, true );

add_image_size( 'head-shot', 380, 532, true );
add_image_size( 'head-shot-2x', 760, 1064, true );

add_image_size( 'symptoms-image', 482, 432, true );
add_image_size( 'symptoms-image-2x', 964, 864, true );

add_image_size( 'section-image', 586, 432, true );
add_image_size( 'section-image-2x', 1172, 864, true );

add_image_size( 'section-vertical-image', 482, 624, true );
add_image_size( 'section-vertical-image-2x', 964, 1248, true );

add_image_size( 'treatment-image', 516, 516 );
add_image_size( 'treatment-image-2x', 1032, 1032 );

add_image_size( 'four-columns', 406 );
add_image_size( 'four-columns-2x', 816 );
add_image_size( 'four-columns-3x', 1218 );

add_image_size( 'five-columns', 518 );
add_image_size( 'five-columns-2x', 1036 );
add_image_size( 'five-columns-3x', 1554 );

add_image_size( 'six-columns', 628 );
add_image_size( 'six-columns-2x', 1256 );
add_image_size( 'six-columns-3x', 1884 );

add_image_size( 'landing-before-after', 406, 320, true );
add_image_size( 'landing-before-after-2x', 816, 640, true );
add_image_size( 'landing-before-after-3x', 1218, 960, true );


// Default blog image
function get_default_blog_image($size=null){
	static $image_id;

	if(is_null($image_id))
		$image_id = (int) get_field('default_image', 'options');

	$image = wp_get_attachment_image_src($image_id, $size);
	return $image[0];
}


// ACF Options Page
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}


// add editor the privilege to edit theme
$role_object = get_role( 'editor' );
$role_object->add_cap( 'edit_theme_options' );


// Remove ninja form stylesheets
function wpgood_nf_display_enqueue_scripts(){
  wp_dequeue_style( 'nf-display' );
}
add_action( 'nf_display_enqueue_scripts', 'wpgood_nf_display_enqueue_scripts');


// Add Editor role permissions for Ninja Forms
add_filter( 'ninja_forms_admin_parent_menu_capabilities', 'nf_subs_capabilities' ); // Parent Menu
add_filter( 'ninja_forms_admin_all_forms_capabilities', 'nf_subs_capabilities' ); // Forms Submenu
add_filter( 'ninja_forms_admin_submissions_capabilities', 'nf_subs_capabilities' ); // Submissions Submenu
function nf_subs_capabilities( $cap ) {
  return 'edit_posts'; // EDIT: User Capability
}


// SVG Uploads
function custom_mtypes( $m ){
    $m['svg'] = 'image/svg+xml';
    $m['svgz'] = 'image/svg+xml';
    return $m;
}
add_filter( 'upload_mimes', 'custom_mtypes' );
