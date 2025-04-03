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
	<div class="bottom-gradient"></div>
	<?php
		$blog_title = get_bloginfo( 'name' ); 
		$blog_tagline = get_bloginfo( 'description' ); 
		 if( have_rows('about_section', 14) ): 
?>
<div class="about-section">
	<div class="close"><img alt="close about section" src="/wp-content/themes/makeaspectacle/sass/images/about-close.svg"></div>
	<div class="about-content">
	<?php 	while( have_rows('about_section', 14) ): the_row(); 

	$title = get_sub_field( 'title');
	$email = get_sub_field( 'email_address');
	$description = get_sub_field( 'description');
	?>
		<div class="eye-wrapper">
		<div class="about-eye"><img src="/wp-content/uploads/2020/10/make-a-spectacle-wordpress-development-1.svg" alt="make a spectacle logo"></div>
		</div>
			<p class="header s"><?php echo $blog_title; ?></p>
			<p class="kicker"><?php echo $blog_tagline; ?></p>
			<div class="about-text"><?php echo $description; ?></div>
			<div class="get-in-touch-about">
			<h2 class="kicker"><?php echo $title; ?></h2>
			<div class="about-arrow"><img alt="arrow" src="/wp-content/themes/makeaspectacle/sass/images/about-arrow.svg"></div>
			<a class="kicker email-address" href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
		 </div>
			<?php endwhile; ?>
		 </div>	
</div>
<?php endif; ?>
	<footer id="colophon" class="site-footer">
		
	<div class="eye-wrapper">
	<div class="footer-eye"><img src="/wp-content/uploads/2020/10/make-a-spectacle-wordpress-development-1.svg" alt="make a spectacle logo"></div>
		</div> 
		<div class="site-info">
		<p class="header m"><?php echo $blog_title; ?></p>
			<p class="kicker about-subtitle"><?php echo $blog_tagline; ?></p>
			<p class="kicker get-in-touch"><span>get in touch</span><img alt="arrow" src="/wp-content/themes/makeaspectacle/sass/images/arrow-right.svg"><a class="email-address" href="mailto:hello@makeaspectacle.co.uk">hello@makeaspectacle.co.uk</a></p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.4/gsap.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenLite.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.js"></script>
	<script src="/wp-content/themes/makeaspectacle/js/animation.gsap.js"></script>
	<div class="cursor"></div>
</body>
</html>
