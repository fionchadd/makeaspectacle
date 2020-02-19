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
		<p class="page-offering"><?php echo $page_tagline; ?></p>
</div>

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
			$size = 'large';
			$fullimage = $image['sizes'][ $size ];
		endif;
?>
<div class="project"><h4 class="project-name"><a target="<?php echo $target; ?>" href="<?php echo $link; ?>"><?php echo $name; ?></a></h4><img class="project-image" src="<?php echo esc_url($fullimage); ?>" alt="<?php echo esc_attr($alt); ?>" /></div>
<?php endwhile; else : endif; ?>
</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
