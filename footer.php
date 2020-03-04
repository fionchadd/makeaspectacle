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
	<?php
		$blog_title = get_bloginfo( 'name' ); 
		$blog_tagline = get_bloginfo( 'description' ); 
		 if( have_rows('about_section', 14) ): 
?>
<div class="about-section">
	<div class="close"><img src="/wp-content/themes/makeaspectacle/sass/images/about-close.svg"></div>
	<div class="about-content">
	<?php 	while( have_rows('about_section', 14) ): the_row(); 

	$title = get_sub_field( 'title');
	$email = get_sub_field( 'email_address');
	$description = get_sub_field( 'description');
	?>
		<div class="eye-wrapper">
			<div class="eye about-eye" id="eye2">
				<div class="pupil" id="pupil2"></div>
			</div>
			<div class="eye-background">
				<img src="/wp-content/themes/makeaspectacle/sass/images/logo-outline-white-w-background.svg"">
			</div>
		</div>
			<h3 class="about-title"><?php echo $blog_title; ?></h3>
			<h4 class="about-subtitle"><?php echo $blog_tagline; ?></h4>
			<div class="about-text"><?php echo $description; ?></div>
			<h4 class="about-subtitle final"><?php echo $title; ?></h4>
			<div class="about-arrow"><img src="/wp-content/themes/makeaspectacle/sass/images/about-arrow.svg"></div>
			<a class="email-address" href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
			<?php endwhile; ?>
		 </div>	
</div>
<?php endif; ?>
	<footer id="colophon" class="site-footer">
	<div class="eye-wrapper">
			<div class="eye footer-eye" id="eye3">
				<div class="pupil" id="pupil3"></div>
			</div>
			<div class="eye-background">
				<img src="/wp-content/themes/makeaspectacle/sass/images/logo-outline-white-w-background.svg">
			</div>
		</div>
		<div class="site-info">
		<h3 class="about-title"><?php echo $blog_title; ?></h3>
			<h4 class="about-subtitle"><?php echo $blog_tagline; ?></h4>
			<div class="get-in-touch"><span>get in touch</span><img src="/wp-content/themes/makeaspectacle/sass/images/arrow-right.svg"><a class="email-address" href="mailto:hello@makeaspectacle.co.uk">hello@makeaspectacle.co.uk</a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="/wp-content/themes/makeaspectacle/js/jquery.waypoints.min.js"></script> <!--  waypoints --> 
 <script src="/wp-content/themes/makeaspectacle/js/inview.min.js"></script>  <!-- inview --> 
 <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script> <!-- scrollmagic for platform parallax --> 
<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script> <!-- indicators for scrollmagic --> 
</body>
</html>
