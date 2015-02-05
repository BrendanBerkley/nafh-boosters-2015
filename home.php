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
		<div class="col-sm-6">
			<div class="signup-section translucent-border">
				<?php dynamic_sidebar('Signup Section'); ?>
			</div> <!-- .signup-section -->
		</div> <!-- .col-sm-6 -->
		<?php endif; ?>
		
		<div class="<?php if ( is_active_sidebar( 'signup-section' ) ) : ?>col-sm-6<?php else : ?>col-xs-12<?php endif; ?>">
			<div class="home-section translucent-border">
				Schedule and updates go here
			</div>
		</div> <!-- .col-sm-6 or -12 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
