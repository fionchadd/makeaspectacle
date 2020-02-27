<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Make_A_Spectacle
 */

?>

	</div><!-- #content -->
	<?php if( have_rows('about_section', 14) ): 
?>
<div class="about">
	<?php 	while( have_rows('about_section', 14) ): the_row(); 
	$blog_title = get_bloginfo( 'name' ); 
	$blog_tagline = get_bloginfo( 'description' ); 
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
	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'makeaspectacle' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'makeaspectacle' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'makeaspectacle' ), 'makeaspectacle', '<a href="http://makeaspectacle.co.uk">Make A Spectacle</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
