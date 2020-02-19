<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 * 
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Make_A_Spectacle
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

	<link rel="stylesheet" href="https://use.typekit.net/ogh2zvl.css">
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'makeaspectacle' ); ?></a>

	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="main-navigation">
<a class="menu-link work" href="/#work">work</a> 
<div class="eye-wrapper">
		<div class="eye header-eye">
			<div class="pupil"></div>
			<div class="lid"><div class="lid-inner"><img src="/wp-content/themes/makeaspectacle/sass/images/logo-eyelid.svg"></div></div>
		</div>
		<div class="eye-background">
			<img src="/wp-content/themes/makeaspectacle/sass/images/logo-background.svg">
		</div>
</div>
<a class="menu-link about" href="#about">about</a>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
