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
		<?php wp_nav_menu(array('theme-location' => 'secondary', 
					/* 'menu' => 'secondary-menu', */
					'menu_class' => 'bocne_menu',
					'before' => '<i class="fa fa-angle-double-right"></i> ',
					'walker' => new twitter_bootstrap_nav_walker() )); ?>
	</div><!-- #primary-sidebar -->
<?php endif; ?>
</div>
</div>  
