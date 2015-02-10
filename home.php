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
				<?php dynamic_sidebar('Home Signup Section'); ?>
			</div> <!-- .signup-section -->
		</div> <!-- .col-sm-6 -->
		<?php endif; ?>
		
		<div class="<?php if ( is_active_sidebar( 'signup-section' ) ) : ?>col-sm-6<?php else : ?>col-xs-12<?php endif; ?>">
			<div class="translucent-border">
				<?php 
				if ( is_active_sidebar( 'home-events-section' ) ) : ?> 
					<?php dynamic_sidebar('Home Events Section'); ?>
				<?php endif; ?>
			</div>
		</div> <!-- .col-sm-6 or -12 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
