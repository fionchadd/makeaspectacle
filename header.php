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
header("X-Clacks-Overhead: GNU Terry Pratchett");
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link type="text/plain" rel="author" href="https://makeaspectacle.co.uk/humans.txt" />
	<?php wp_head(); ?>

	<link rel="stylesheet" href="https://use.typekit.net/ogh2zvl.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'makeaspectacle' ); ?></a>

	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="main-navigation">
<a class="menu-link work" href="/#work">work</a> 
<a class="menu-link about" href="#about">about</a>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
<div class="top-gradient"></div>
	<div id="content" class="site-content">
