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
				<img alt="" src="/wp-content/themes/makeaspectacle/sass/images/logo-outline-dark-w-background.svg">
			</div>
		</div>
	</div>
			<h1 class="page-title"><?php echo $blog_title; ?></h1>
			<h2 class="page-subtitle"><?php echo $blog_tagline; ?></h2>
	</div>
		<div class="page-bottom"><p class="page-offering"><?php echo $page_tagline; ?></p></div>
</div>

<div id="work">
	<div class="projects">
<?php if( have_rows('projects') ): 
		while( have_rows('projects') ): the_row(); 
		if ( get_sub_field( 'project_details' ) ) : 
			$details = get_sub_field('project_details'); 
				$name = $details['text'];
				$link = $details['url'];
				$target = $details['target'];
		endif;	
		$image = get_sub_field('image'); 
		if( $image ):

			// Image variables.
			$url = $image['url'];
			$imagetitle = $image['title'];
			$alt = $image['alt'];
		
			// Thumbnail size attributes.
			$size = 'portfolio-screenshot';
			$fullimage = $image['sizes'][ $size ];
		endif;
?>
<div class="project">
	<a class="project-link" <?php echo $target; ?> href="<?php echo $link; ?>">
	<h4 class="project-name"><?php echo $name; ?></h4>
	<div class="project-image"><img  alt=""class="browser-top" src="/wp-content/themes/makeaspectacle/sass/images/browser-top.svg"><img class="screenshot" src="<?php echo esc_url($fullimage); ?>" alt="<?php echo esc_attr($alt); ?>" /></div>
	</a>
</div>
<?php endwhile; else : endif; ?>
	</div>
</div> <!-- work -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
