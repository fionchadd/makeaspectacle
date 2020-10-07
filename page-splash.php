<?php
/**
 * Coming Soon Page Template
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
$page_tagline = get_field( 'homepage_tagline');
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
<div class="above-fold">
	<div class="central-content">
	<div id="stickThis">
		<div class="eye-wrapper homepage-eye-wrapper">
			<div class="eye homepage-eye" id="eye1">
				<div class="pupil" id="pupil1"></div>
			</div>
			<div class="eye-background">
				<img src="/wp-content/themes/makeaspectacle/sass/images/logo-outline-dark-w-background.svg">
			</div>
		</div>
	</div>
			<h1 class="page-title"><?php echo $blog_title; ?></h1>
			<h2 class="page-subtitle"><?php echo $blog_tagline; ?></h2>
	</div>
		<div class="page-bottom"><p class="page-offering"><?php echo $page_tagline; ?></p></div>
		
</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
