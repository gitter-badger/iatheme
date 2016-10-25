<?php
/**
 * The template for displaying the footer
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage IA
 * @since IA 1.0
 */
?><footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="center col-sm-2"><br>
                    <?php if ( is_active_sidebar( 'footer_1' ) ) : ?>
                    <div id="footer_1" class="footer_1 widget-area" role="complementary">
                        <?php dynamic_sidebar( 'footer_1' ); ?>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="center col-sm-6">
                    <?php if ( is_active_sidebar( 'footer_2' ) ) : ?>
	                   <div id="footer_2" class="footer_2 widget-area" role="complementary">
		                  <?php dynamic_sidebar( 'footer_2' ); ?>
	                   </div>
                    <?php endif; ?>
                </div>
                <div class="center col-sm-4">
                     <?php if ( is_active_sidebar( 'footer_3' ) ) : ?>
	                   <div id="footer_3" class="footer_3 widget-area" role="complementary">
		                  <?php dynamic_sidebar( 'footer_3' ); ?>
	                   </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
 </footer>

 	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
	<script src="https://cdn.datatables.net/s/bs/dt-1.10.10/datatables.min.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrapValidator.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.isotope.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
	<!-- wp_footer start -->
	<?php wp_footer(); ?>
	<!-- wp_footer end -->   
</body>
</html>