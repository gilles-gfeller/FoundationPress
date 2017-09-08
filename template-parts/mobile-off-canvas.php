<?php
/**
 * Template part for off canvas menu
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<div class="off-canvas position-right" id="offCanvasRight" data-off-canvas data-transition="overlap">
	<?php
		$menu = str_replace('sub-menu', 'menu vertical nested', wp_nav_menu(array(	 // Remplace les sub-menu en ajoutant des classes
			'menu' => 'mobile',																 // Menu créer depuis l'interface WP
			'id_menu' => 'mobile',															 // id du menu (menu-'mobile')
			'menu_class' => 'menu vertical drilldown',										 // Classe du menu principal
			'theme_location' => 'main',														 // Theme principal
			'echo' => false,																 // on désactive l'echo qui se fait par défaut
			'items_wrap' => '<ul id="menu-mobile" class="menu vertical drilldown">%3$s</ul>' // on effectue le remplace dans le menu principal
		)));
		echo str_replace('class="menu vertical drilldown">','class="menu vertical drilldown" data-drilldown>', $menu); // Ajout du data-drilldown à la liste principale
		do_action('wpml_add_language_selector');
		echo '<a id="website-link-mobile" href="http://www.cresus.ch" target="_blank">www.cresus.ch</a>';
	?>
	<button class="close-button" aria-label="Close menu" type="button" data-close>
		<span aria-hidden="true">&times;</span>
	</button>
</div>
