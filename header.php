<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage IA
 * @since IA 1.0
 */
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <meta http-equiv="cache-control" content="no-cache" />
        <meta http-equiv="pragma" content="no-cache" />
        <meta http-equiv="expires" content="0" />        
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <link rel="shortcut icon" href="common/images/favicon.ico">      
        <!-- core CSS -->
        <link rel="stylesheet"  href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" >
        <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet"  href="<?php echo get_template_directory_uri(); ?>/css/animate.min.css" >
        <link rel="stylesheet"  href="<?php echo get_template_directory_uri(); ?>/css/prettyPhoto.css" >
        <link rel="stylesheet"  href="<?php bloginfo('stylesheet_url'); ?>" >
        <link rel="stylesheet"  href="<?php echo get_template_directory_uri(); ?>/css/responsive.css" >
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <!--[if lt IE 9]>
        <script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/respond.min.js"></script>
        <![endif]-->
        <?php if ( is_admin_bar_showing() ) {?>
    	<style>
    		#site-navigation { top: 28px !important; }
    	</style>
        <?php }?>       
    </head>
    <body class="homepage">
    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-3">
                        <div class="top-number"><p><a href="sk/o-agenture"  title="Slovensky">SK</a> / <a href="en/about-agency/introduction" title="English">EN</a></p></div>
                    </div>
                    <div class="col-sm-6 col-xs-8">
                       <div class="social">
                           <div id="search">
                                <div class="search-box">
				                    <?php get_search_form(); ?>
			                    </div>
                            </div>
                       </div>
                    </div>
                    <?php if ( get_header_image() ) : ?>
	<div id="site-header">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
		</a>
	</div>
	<?php endif; ?>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->
        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo home_url( '/' ); ?>"><img class="hidden-sm" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo IA MPSVR SR" title="Implementačná agentúra pre OP ZaSI"><img class="visible-sm" src="<?php echo get_template_directory_uri(); ?>/images/logom.png" alt="Logo IA MPSVR SR" title="Implementačná agentúra pre OP ZaSI"></a>
                </div>
                <div  id="primary-navigation" class="collapse navbar-collapse navbar-right" role="navigation" >
				    <?php wp_nav_menu( array( 'theme_location' => 'primary', 
                                    'menu_class' => 'nav navbar-nav', 
                                    'menu_id' => 'primary-menu',
                                    'walker' => new twitter_bootstrap_nav_walker() ) ); ?>
		        </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->

