<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <?php wp_head(); /* Balises Titre + Meta à configurer dans le SEO, wp-head() genère les balises pour nous */ ?>
        <!-- meta -->
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="author" content="" />
        <!-- Favicon -->
        <link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/dist/assets/images/favicon.png"/>
        <!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_directory'); ?>/dist/assets/images/favicon.ico"/><![endif]-->
        <!-- Windows Start Screen tiles -->
        <meta name="application-name" content="support.cresus.ch"/>
        <meta name="msapplication-square70x70logo" content="<?php bloginfo('template_directory'); ?>/dist/assets/images/win-tiles/small.png"/>
        <meta name="msapplication-square150x150logo" content="<?php bloginfo('template_directory'); ?>/dist/assets/images/win-tiles/medium.png"/>
        <meta name="msapplication-wide310x150logo" content="<?php bloginfo('template_directory'); ?>/dist/assets/images/win-tiles/wide.png"/>
        <meta name="msapplication-square310x310logo" content="<?php bloginfo('template_directory'); ?>/dist/assets/images/win-tiles/large.png"/>
        <meta name="msapplication-TileColor" content="#005187"/>
    </head>
	<body <?php body_class(); ?>>
    <?php do_action( 'foundationpress_after_body' ); ?>
    <?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
    <?php do_action( 'foundationpress_layout_start' ); ?>
    <a href="#" class="scrollup" style="display: block;"><i class="fa fa-chevron-circle-up"></i></a>
    <header class="site-header">
		  <a href="<?php bloginfo('url'); ?>" id="logo" title="<?php bloginfo('name'); ?>">
			<img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/logo-cresus-support.svg" alt="<?php bloginfo('name'); ?>">
		  </a>
		  <div id="toptools">
			<?php do_action('wpml_add_language_selector'); ?>
            <a id="website-link" href="http://www.cresus.ch" target="_blank">www.cresus.ch</a>
		  </div>
          <?php
            wp_nav_menu( array(
                'menu' => 'main',
                'id_menu' => 'nav',
                'theme_location' => 'main',
                'echo' => true,
                'items_wrap' => '<ul id="menu-main" class="menu">%3$s</ul>'     // force le menu a avoir l'id menu-main, peu importe la langue
            ));
          ?>
          <button id="burger-button" type="button" class="button menu-icon off-canvas" data-toggle="offCanvasRight"></button>
	</header>
	<section class="container">
	<?php do_action( 'foundationpress_after_header' );