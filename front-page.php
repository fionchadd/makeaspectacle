<?php
/**
 * Homepage Template
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Make_A_Spectacle
 */

get_header();
?>
<?php 
$blog_title = get_bloginfo( 'name' ); 
$blog_tagline = get_bloginfo( 'description' ); 
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<h1 class="page-title screen-reader-text"><?php echo $$blog_title ?></h1>
		<h2 class="page-subtitle screen-reader-text"><?php echo $$blog_tagline ?></h2>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
