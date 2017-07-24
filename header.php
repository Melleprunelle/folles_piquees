<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
    <!DOCTYPE html>
    <html <?php language_attributes(); ?> class="no-js">

    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700" rel="stylesheet">
        <!-- ESPACE BLANC EN TROP -->
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <div id="page" class="">
            <div id="" class="">
                <header id="masthead" class="site-header" role="banner">
                       <div class="logo">
                            <?php twentyfifteen_the_custom_logo();?>
                        </div><div class="site-branding" id="menu-menu-principal">
                        <?php wp_nav_menu(); ?>
                     
                        <form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <?php wp_dropdown_categories('show_option_all=' ); ?>
                            <input type="submit" class="submit" name="submit" id="searchsubmit" value="Rechercher" />
                        </form>
                    </div>
                    <!-- .site-branding -->
                </header>
                <!-- .site-header -->

            </div>
            <!-- .sidebar -->



            <div id="content" class="site-content">