<?php
/**
 * Template part for off canvas menu
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<nav class="mobile-off-canvas-menu off-canvas position-right" id="offCanvasRight" data-off-canvas data-auto-focus="false" role="navigation">
  <?php
    $menu = str_replace('sub-menu', 'menu vertical nested',wp_nav_menu(array(                    // Remplace les classes sub-menu en ajoutant des classes
        		'menu' => 'main',																 // Menu créer depuis l'interface WP
        		'id_menu' => 'mobile',															 // id du menu (menu-'mobile')
        		'menu_class' => 'vertical menu',										         // Classe du menu principal
        		'theme_location' => 'main',														 // Theme principal
        		'echo' => false,																 // on désactive l'echo qui se fait par défaut
        		'items_wrap' => '<ul id="menu-mobile" class="vertical menu">%3$s</ul>'           // on effectue le remplacement des classes des sous-menu dans le menu
        	)));
    echo $menu;
  ?>
  <div id="wpml-mobile">
    <?php do_action('wpml_add_language_selector'); ?>
  </div>
  <div id="website-mobile">
    <a href="http://www.cresus.ch" target="_blank">www.cresus.ch</a>
  </div>
</nav>
<script>
    // Lorsque le document est chargé
    $(document).ready(function() {
        // lorsqu'on a cliqué sur le burger-button
        $('#burger-button').on( "click", function() {
            // on ajoute le bouton pour fermer l'overlay sur l'overlay
                $('.js-off-canvas-overlay').html(
                '<button id="close-button" aria-label="Close menu" type="button" data-close>' +
                    '<a href="#" class="close">' +
                '</button>'
                );
                $('#close-button').addClass("show");
        });
    });
</script>
<div class="off-canvas-content" data-off-canvas-content>
