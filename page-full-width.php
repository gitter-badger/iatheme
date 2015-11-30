<?php
/**
 * Template Name: Full Width Page
 *
 * @package WordPress
 * @subpackage IA Theme
 * @since IA Theme 1.0
 */
?>
<?php get_header(); ?>
<section id="content">
<div class="container">
	
	<div class="col-sm-12">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			<p><?php the_content(__('(viac...)')); ?></p>
		<hr> <?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
	</div>

</div>
<div id="delimiter">
</section>
<?php get_footer(); ?>