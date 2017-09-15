<?php
/**
 * Put here all your custom action who modify wordpress or component of wordpress
 */

// Ajout d'un style pour l'éditeur wysiwyg
function gn_ajouter_styles_editeur() {
    add_editor_style( 'editor-style.css' );
}

add_action( 'init', 'gn_ajouter_styles_editeur' );

// Ajout d'un menu pour la documentation
function add_links_menu() {
    add_menu_page('insertion-manuel', 'Documentation', 'administrator', 'documentation.php', '', 'images/marker.png', 50);
    add_filter( 'query_vars', 'addnew_query_vars', 10, 1 );
    // Ajoute la variable $_GET['page'] au Backend
    function addnew_query_vars($vars)
    {
        $vars[] = 'doc'; // Définir le ou les noms des variables
        return $vars;
    }
}

add_action('admin_menu', 'add_links_menu');