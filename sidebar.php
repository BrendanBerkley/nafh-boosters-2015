<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package NAFH-Boosters-2015
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area col-sm-4" role="complementary">
	<div class="translucent-border">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div>
</div><!-- #secondary -->
