<?php
/**
 * Template Name: Sidebar
 *
 * @package WordPress
 * @subpackage IA Theme
 * @since IA Theme 1.0
 */
?>
<div id="sidebar">
<div class="col-sm-3">
<?php if ( is_active_sidebar( 'left_sidebar_1' ) ) : ?>
	<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'left_sidebar_1' ); ?>
	</div><!-- #primary-sidebar -->
<?php endif; ?>
</div>
</div>        