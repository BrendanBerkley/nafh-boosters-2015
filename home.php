<?php
/**
 * The home page.
 *
 * @package NAFH-Boosters-2015
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php 
		if ( is_active_sidebar( 'signup-section' ) ) : ?> 
		<div class="signup-section translucent-border">
			<?php dynamic_sidebar('Signup Section'); ?>
		</div> <!-- .signup-section -->
		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
