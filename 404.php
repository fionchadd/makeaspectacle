<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Make_A_Spectacle
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title">Oh no!</h1>
				</header><!-- .page-header -->
				<div class="eye-wrapper error-eye-wrapper">
			<div class="eye error-eye" id="eye4">
				<div class="pupil" id="pupil4"></div>
			</div>
			<div class="eye-background">
				<img src="/wp-content/themes/makeaspectacle/sass/images/logo-outline-dark-w-background.svg">
			</div>
		</div>
				<div class="page-content">
					<p>We couldn't find that page. Maybe try a search? </p>

					<?php
					get_search_form();

					the_widget( 'WP_Widget_Recent_Posts' );
					?>
<p>Or take a look at our work <a href="http://new.makeaspectacle.co.uk/#work">here</a></p>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
