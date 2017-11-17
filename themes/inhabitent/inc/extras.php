<?php
/**
* Custom functions that act independently of the theme templates.
*
* @package RED_Starter_Theme
*/

/**
* Adds custom classes to the array of body classes.
*
* @param array $classes Classes for the body element.
* @return array
*/
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}
	
	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

//Change WP logo on wp-admin login
function login_logo(){
	echo '<style type = "text/css">
	.login h1 a {
		background: url(content-folder/images/logos/inhabitent-logo-text-dark.svg);
		height: 56px;
		width: 314px;
		background-size: contain;
	}
	</style>';
}
add_action('login_head', 'login_logo');

function login_url(){
	return home_url();
}
add_action('login_headerurl', 'login_url');

function logo_title(){
	return 'inhabitent';
}
add_filter('login_headertitle', 'logo_title');

function inhabitent_dynamic_css(){
	if (! is_page_template('page-templates/about.php' )) {
		return;
	}
$image = CFS()->get ('about_header_image');
if (!$image){
	return;
}

$hero_css = ".page-template-about .entry-header {
	background: linear-gradient(to bottom,
	rgba(0,0,0,0.4) 0%,rgba(0,0,0,0.4) 100%),
	url({$image}) no-repeat center bottom;
	background-size: cover, cover;
}";

wp_add_inline_style('tent-style', $hero_css);
}
add_action('wp_enqueue_scripts', 'inhabitent_dynamic_css');