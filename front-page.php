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
			<div class="eye homepage-eye">
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
<div class="project">
	<a target="<?php echo $target; ?>" href="<?php echo $link; ?>">
	<h4 class="project-name"><?php echo $name; ?></h4>
	<div class="project-image"><img class="browser-top" src="/wp-content/themes/makeaspectacle/sass/images/browser-top.svg"><img class="screenshot" src="<?php echo esc_url($fullimage); ?>" alt="<?php echo esc_attr($alt); ?>" /></div>
	</a>
</div>
<?php endwhile; else : endif; ?>
</div>
<?php if( have_rows('about_section') ): 
?>
<div class="about">
	<?php 		while( have_rows('about_section') ): the_row(); 
	$title = get_sub_field( 'title');
	$email = get_sub_field( 'email_address');
	$description = get_sub_field( 'description');
	?>
		<div class="eye-wrapper">
			<div class="eye about-eye">
				<div class="pupil"></div>
				<div class="lid"><div class="lid-inner"><img src="/wp-content/themes/makeaspectacle/sass/images/logo-eyelid.svg"></div></div>
			</div>
			<div class="eye-background">
				<img src="/wp-content/themes/makeaspectacle/sass/images/logo-background.svg">
			</div>
		</div>
			<h3 class="about-title"><?php echo $blog_title; ?></h3>
			<h4 class="about-subtitle"><?php echo $blog_tagline; ?></h4>
			<p class="about-text"><?php echo $description; ?></p>
			<h4 class="about-subtitle"><?php echo $title; ?></h4>
			<a class="email-address" href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
			<?php endwhile; ?>
</div>
<?php endif; ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
