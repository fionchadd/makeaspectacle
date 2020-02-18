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

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<h1 class="page-title screen-reader-text"><?php printf( esc_html__( 'textdomain' ), get_bloginfo ( 'name' ) ); ?></h1>
		<h2 class="page-subtitle screen-reader-text"><?php printf( esc_html__( 'textdomain' ), get_bloginfo ( 'description' ) ); ?></h2>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
