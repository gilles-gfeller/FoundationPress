<?php
/**
 * Template part for off canvas menu
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<nav class="mobile-off-canvas-menu off-canvas position-right" id="offCanvasRight" data-off-canvas data-auto-focus="false" role="navigation">
  <?php //foundationpress_mobile_nav();
    $menu = str_replace('sub-menu', 'menu vertical nested', wp_nav_menu(array(	         // Remplace les classes sub-menu en ajoutant des classes
        		'menu' => 'main',																 // Menu créer depuis l'interface WP
        		'id_menu' => 'mobile',															 // id du menu (menu-'mobile')
        		'menu_class' => 'menu vertical drilldown',										 // Classe du menu principal
        		'theme_location' => 'main',														 // Theme principal
        		'echo' => false,																 // on désactive l'echo qui se fait par défaut
        		'items_wrap' => '<ul id="menu-mobile" class="menu vertical drilldown">%3$s</ul>' // on effectue le remplacement des classes des sous-menu dans le menu
        	)));
	echo str_replace('class="menu vertical drilldown">','class="menu vertical drilldown" data-drilldown>', $menu); // Ajout du data-drilldown à la liste principale
	echo '<a id="website-link-mobile" href="http://www.cresus.ch" target="_blank">www.cresus.ch</a>';              // Ajoute le lien vers le site crésus
  ?>
</nav>

<div class="off-canvas-content" data-off-canvas-content>
