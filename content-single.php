<?php
/**
 * @package NAFH-Boosters-2015
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title color-purple">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php nafh_boosters_2015_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'nafh-boosters-2015' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php nafh_boosters_2015_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
