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
        <div class="clanok">
            <div class="row">
                <div class="col-sm-12 clanok-item">
                    <?php //wdp_slider(1); ?>
                </div>
            </div>
        </div>
		<?php // the_breadcrumbs(); ?>
		<?php //query_posts('cat=1');  // Uncategorized only show on TitlePage 
 			if( get_option('permalink_structure') ) {
				 $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			 } else {
				$paged = (get_query_var('page')) ? get_query_var('page') : 1;
			 }
            		$args = array(
                		'category__and' => array(15,15), 
                		'paged' => $paged
                		);
            		query_posts($args); 
        	?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php if (is_single()) :
				the_title('<h2>', '</h2>' );
			?>
			<?php if( ! has_tag('no-date',$post)) { ?>
				<div class="published"><?php _e('Published'); echo(' '); the_time('l, j F Y'); ?></div>
			<?php } ?>

			<p><?php the_content(__('(viac...)')); ?></p>
			<?php
			else :
				?>
				<div class="clanok">
				<div class="row">
				<div class="col-sm-12 clanok-item">
				<?php
				$icon= get_post_meta( get_the_ID(), 'icon', true );
				if ( ! empty( $icon) ) {
    					echo('<i class="icon pull-left obrazok img-responsive fa fa-' . $icon . '" aria-hidden="true"></i>' );
				}else{
					if ( has_post_thumbnail() ) {
						the_post_thumbnail(array(100, 100) , array( 'class' => 'pull-left obrazok img-responsive') );
					}
				}

				
				
				$forward = get_post_meta( get_the_ID(), 'forward', true );
				// Check if the forward field has a value.
				if ( ! empty( $forward ) ) {
    					the_title('<h2 class="entry-title"><a href="' . esc_url( $forward ) . '" rel="bookmark">', '</a></h2>' );
				}else{
					the_title('<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				}
				?>
				
				<?php if( ! has_tag('no-date',$post)) { ?>
					<h5><?php _e('Published'); echo(' '); the_time('l, j F Y'); ?></h5>
				<?php } ?>
				
				<?php
				$perex = get_post_meta( get_the_ID(), 'perex', true );
				// Check if the perex field has a value.
				if ( ! empty( $perex ) ) {
    					echo '<h3><p>'.$perex.'</p></h3>';
				} ?>

				</div>
				</div>
				</div>		
			<?php endif; ?>
		<?php endwhile; ?>
            <?php wpex_pagination(); ?>
        <?php else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>
		
	</div>

</div>
<div id="delimiter"></div>
</section>
<?php get_footer(); ?>
