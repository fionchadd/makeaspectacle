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
		<ul class="unstyled" id="project-area">
<?php if( have_rows('projects') ): 
		while( have_rows('projects') ): the_row(); 
		if ( get_sub_field( 'project_details' ) ) : 
			$details = get_sub_field('project_details'); 
				$name = $details['text'];
				$link = $details['url'];
				$target = $details['target'];
		endif;	
		$image = get_sub_field('image'); 
		$size = 'portfolio-screenshot';
		$link = get_sub_field('project_name');
		if($link):
			$link_url = $link['url'];
			$link_title = $link['title'];
			$link_target = $link['target'] ? $link['target'] : '_self';
		endif;

?>
<li class="project">
<a class="project-link" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
	<p class="header l project-name"><?php echo $link_title; ?></p>
	<div class="project-image"><img aria-hidden="true" alt="" class="browser-top" src="/wp-content/themes/makeaspectacle/sass/images/browser-top.svg">
	<?php echo wp_get_attachment_image( $image, $size,  "", ["class" => "screenshot"] ); ?>
</div>
	</a>
	</li>
<?php endwhile; else : endif; ?>
	</ul>
	</div>
</div> <!-- work -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
