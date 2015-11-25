<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage IA Theme
 * @since IA Theme 1.0
 */

get_header(); ?>

<section id="content">
<div class="container">
	
	<div class="col-sm-12">
		<header class="page-header">
				<h1 class="page-title"><?php _e( 'Page not found'); ?></h1>
		</header>
		<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'iatheme' ); ?></p>
	</div>

</div>
</section>
<?php get_footer(); ?>
