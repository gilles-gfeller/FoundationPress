<?php
/**
 * Author: Ole Fredrik Lie
 * URL: http://olefredrik.com
 *
 * FoundationPress functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

//Global variables
global $epsitecdocumentor_config;

$epsitecdocumentor_config = array();

$epsitecdocumentor_config['lang_to_path'] = array(
    'fr' => '/manuels/',
    'de' => '/de/handbuch/'
);

$epsitecdocumentor_config['manual_to_path'] = array(
    1 => 'cresus-comptabilite',
    2 => 'cresus-salaires',
    3 => 'cresus-facturation',
    5 => 'cresus-gestion-pe',
    6 => 'cresus-finanzbuchhaltung',
    7 => 'cresus-lohnbuchhaltung',
    8 => 'cresus-faktura',
    9 => 'cresus-small-business'
);

$epsitecdocumentor_config['manual_to_label'] = array(
    1 => 'Crésus Comptabilité',
    2 => 'Crésus Salaires',
    3 => 'Crésus Facturation',
    5 => 'Crésus Gestion PE',
    6 => 'Crésus Finanzbuchhaltung',
    7 => 'Crésus Lohnbuchhaltung',
    8 => 'Crésus Faktura',
    9 => 'Crésus Small Business'
);

$epsitecdocumentor_config['manual_by_lang'] = array(
    'fr' => array(1,2,3,5),
    'de' => array(6,7,8,9)
);

$epsitecdocumentor_config['categ_to_path'] = array(
    2 => '/',
    7 => '/faq/cresus-comptabilite/',
    8 => '/faq/cresus-salaires/',
    9 => '/faq/cresus-facturation/',
    10 => '/faq/cresus-gestion-pe/'
);


/** Various clean up functions */
require_once( 'library/cleanup.php' );

/** Required for Foundation to work properly */
require_once( 'library/foundation.php' );

/** Format comments */
require_once( 'library/class-foundationpress-comments.php' );

/** Register all navigation menus */
require_once( 'library/navigation.php' );

/** Add menu walkers for top-bar and off-canvas */
require_once( 'library/class-foundationpress-top-bar-walker.php' );
require_once( 'library/class-foundationpress-mobile-walker.php' );

/** Create widget areas in sidebar and footer */
require_once( 'library/widget-areas.php' );

/** Return entry meta information for posts */
require_once( 'library/entry-meta.php' );

/** Enqueue scripts */
require_once( 'library/enqueue-scripts.php' );

/** Add theme support */
require_once( 'library/theme-support.php' );

/** Add Nav Options to Customer */
require_once( 'library/custom-nav.php' );


/** Change WP's sticky post class */
require_once( 'library/sticky-posts.php' );

/** Configure responsive image sizes */
require_once( 'library/responsive-images.php' );

/** Add Custom filter */
require_once( 'library/custom-filter.php' );

/** Add Custom action */
require_once( 'library/custom-action.php' );

/** Add Custom functions */
require_once( 'library/custom-function.php' );

/** If your site requires protocol relative url's for theme assets, uncomment the line below */
// require_once( 'library/class-foundationpress-protocol-relative-theme-assets.php' );

