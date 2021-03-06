<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link href="https://fonts.googleapis.com/css?family=Lato:400,700|Merriweather" rel="stylesheet">
		
	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>
			<header id="masthead" class="site-header" role="banner">
				<!-- <div class="site-branding">
					<h1 class="site-title screen-reader-text"><a href="<?php
					// echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php
					// bloginfo( 'name' ); ?></a></h1>
					<p class="site-description"><?php
					// bloginfo( 'description' );
					?></p>
				</div> -->

				<a href="<?php home_url('/'); ?>"><img class="logo-tent" src="<?php echo get_template_directory_uri() . '/content-folder/images/logos/inhabitent-logo-tent.svg' ;?>"></a>
	
					<a class="nav-toggle" aria-controls="primary-menu" aria-expanded="true"><?php
					esc_html( 'Primary Menu' );
					?></a>
										<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'menu_class' => 'primary-menu') ); ?>

					<div class='search-nav'><?php get_search_form(); ?></div>
				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->
			<div id="content" class="site-content">
