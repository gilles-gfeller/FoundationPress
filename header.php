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
	<?php
        do_action( 'foundationpress_after_body' );
        $mobile = wp_is_mobile();
     ?>
    <!-- variable vrai ou faux si on est sur mobile -->
	<?php if ( $mobile ) : ?>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<?php do_action( 'foundationpress_layout_start' ); ?>

	<header class="site-header" role="banner">

		<div class="off-canvas-content" data-off-canvas-content>
		  <a href="<?php bloginfo('url'); ?>" id="logo" <?php if($mobile) echo 'style="position: absolute; left: 50%; transform: translateX(-50%);"'; ?> title="<?php bloginfo('name'); ?>">
			<img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/logo-cresus-support.svg" alt="<?php bloginfo('name'); ?>">
		  </a>
		  <?php
			if($mobile) {
				do_action('wpml_add_language_selector');
			}
		  ?>
		  <div id="toptools">
			<?php
				if(!$mobile) {
					do_action('wpml_add_language_selector');
					echo '<a id="website-link" href="http://www.cresus.ch" target="_blank">www.cresus.ch</a>';
				}
			?>
		  </div>
            <?php
                if(!$mobile) {
                    wp_nav_menu( array( 'menu' => 'main', 'id_menu' => 'main', 'theme_location' => 'main'));
                } else {
                    echo '<button id="burger-button" type="button" style="background-color:transparent ;position: absolute;right:10px; top: 50%; transform: translateY(-50%);" class="button menu-icon" data-toggle="offCanvasRight"></button>';
                }
            ?>
		</div>
	</header>

	<section class="container">
		<?php do_action( 'foundationpress_after_header' );
