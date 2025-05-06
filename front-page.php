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
		<svg id="eye" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 50 35.4" style="enable-background:new 0 0 50 35.4;" xml:space="preserve"> 
		<defs>
		<clipPath id="mask2">
				<path class="st0" d="M0,17.6c.5-.8,1.1-1.6,1.6-2.4,3.2-4.6,7.3-8.5,12-11.6C16.7,1.5,20.2.3,23.9,0c3.1-.2,6.2.4,9,1.8,3.3,1.5,6.3,3.6,8.9,6.1,2.9,2.6,5.4,5.6,7.6,8.9.2.3.3.6.5.9,0,.3-.3.6-.4.9-3.5,5.3-8,9.8-13.3,13.3-3,2-6.6,3.2-10.2,3.5-3.1,0-6.2-.5-9-1.8-3.2-1.5-6.2-3.5-8.7-5.9-2.9-2.7-5.5-5.7-7.7-9-.2-.3-.4-.6-.6-1.1Z"/>
</clipPath>
</defs>
<g clip-path="url(#mask2)" id="eyeArea">
<path  class="outer" d="M0,17.6c0.5-0.8,1.1-1.6,1.6-2.4c3.2-4.6,7.3-8.5,12-11.6c3.1-2.1,6.6-3.3,10.3-3.6c3.1-0.2,6.2,0.4,9,1.8 c3.3,1.5,6.3,3.6,8.9,6.1c2.9,2.6,5.4,5.6,7.6,8.9c0.2,0.3,0.3,0.6,0.5,0.9c-0.1,0.3-0.3,0.6-0.4,0.9c-3.5,5.3-8,9.8-13.3,13.3 c-3,2-6.6,3.2-10.2,3.5c-3.1,0.1-6.2-0.5-9-1.8c-3.2-1.5-6.2-3.5-8.7-5.9c-2.9-2.7-5.5-5.7-7.7-9C0.4,18.4,0.2,18.1,0,17.6z M45.9,17.8c-0.1-0.2-0.1-0.3-0.2-0.5c-0.4-0.6-0.9-1.2-1.4-1.7C41.4,12,37.9,8.9,34,6.5c-2.1-1.3-4.5-2.2-6.9-2.5 c-3.3-0.4-6.7,0.2-9.6,1.8C12.9,8.2,9,11.5,5.8,15.6c-0.5,0.7-1,1.4-1.6,2.1c0.6,0.8,1.1,1.5,1.7,2.1c2.9,3.6,6.3,6.7,10.2,9.1 c6,3.6,11.9,3.6,17.9,0.1c3.3-2,6.3-4.6,8.9-7.5C43.9,20.3,44.8,19.1,45.9,17.8L45.9,17.8z"></path> 
<path id="pupil" class="pupil" d="M34,17.7c0.1,4.9-3.9,9-8.8,9c0,0-0.1,0-0.1,0c-5,0-9-4-9-8.9c0-5,4-9,8.9-9C29.9,8.7,33.9,12.7,34,17.7 C34,17.6,34,17.6,34,17.7z"></path> 
</g>
</svg> 
		</div>
	</div>
			<h1 class="header xl page-title"><?php echo $blog_title; ?></h1>
			<h2 class="kicker page-subtitle"><?php echo $blog_tagline; ?></h2>
	</div>
		<div class="page-bottom"><p class="kicker page-offering"><?php echo $page_tagline; ?></p></div>
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
	<div class="project-image"><img aria-hidden="true" alt="" class="browser-top" src="/wp-content/themes/makeaspectacle/assets/browser-top.svg">
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
