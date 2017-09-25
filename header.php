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
		<?php wp_head(); ?>
        <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
        <!-- meta -->
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="author" content="" />
        <!-- mon icon -->
        <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/dist/assets/images/favicon.ico" />
        <link rel="icon" href="<?php bloginfo('template_directory'); ?>/dist/assets/images/favicon.png" type="image/png" />
        <!-- mon icon -->
        <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/dist/assets/images/favicon.ico" />
	</head>
	<body <?php body_class(); ?>>
    <?php do_action( 'foundationpress_after_body' ); ?>
    <?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
    <?php do_action( 'foundationpress_layout_start' ); ?>
    <a href="#" class="scrollup" style="display: block;"><i class="fa fa-chevron-circle-up"></i></a>
    <header class="site-header" role="banner">
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