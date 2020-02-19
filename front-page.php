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
<div class="above-fold">
	<div class="central-content">
	<div class="eye-wrapper">
		<div class="eye">
			<div class="pupil"></div>
			<div class="lid"><div class="lid-inner"><img src="/wp-content/themes/makeaspectacle/sass/images/logo-eyelid.svg"></div></div>
		</div>
		<div class="eye-background">
			<img src="/wp-content/themes/makeaspectacle/sass/images/logo-background.svg">
		</div>
	</div>
		<h1 class="page-title"><?php echo $blog_title; ?></h1>
		<h2 class="page-subtitle"><?php echo $blog_tagline; ?></h2>
</div>
		<p class="page-offering">We specialise in creating websites for people in the creative industries.</p>
</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
