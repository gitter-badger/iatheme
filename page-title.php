<?php
/**
 * Template Name: Title Page
 *
 * @package WordPress
 * @subpackage IA Theme
 * @since IA Theme 1.0
 */
?>
<?php get_header(); ?>
<section id="content">
<div class="container">
	<?php get_sidebar(); ?>
	<div class="col-sm-9 pull-right">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<h1><?php the_title(); ?></h1>
			
			<p><?php the_content(__('(viac...)')); ?></p>
		 <?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
	</div>

</div>
<div id="delimiter">
</section>
<?php get_footer(); ?>