<?php
/**
 * Put here all your custom filter who modify the behavior of a function
 */

function wpdocs_custom_excerpt_length( $length ) {
    return 25;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

// Ajoute un lien lire la suite
function excerpt_read_more_link($output) {
    global $post;
    if(ICL_LANGUAGE_CODE=='fr') $read_next = "Lire la suite...";
    else $read_next = "Mehr lesen...";
    return $output . '<a class="button small" href="'. get_permalink($post->ID) . '">'.$read_next.'</a>';
}
add_filter('the_excerpt', 'excerpt_read_more_link');

// Modifie le excerpt more "[...]" en "..."
function custom_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'custom_excerpt_more' );

function custom_search_filter( $query ) {
   // Si on est entrain de faire une recherche
   if ( $query->is_search ) {

    	switch( $_GET['searchselect']  )
        {
            case 'all':
                $query->set('post_type', array('post', 'epsitecdoc-sections'));
    		break;

            case 'cresus-comptabilite':
                $query->set('post_parent' , 1697);
    		break;

            case 'cresus-salaires':
                $query->set('post_parent' , 1699);
    		break;

            case 'cresus-facturation':
                $query->set('post_parent' , 1701);
    		break;

            case 'cresus-gestion-pe':
                $query->set('post_parent' , 1703);
    		break;

    	    case 'faq':
    		    $query->set( 'category_name', 'faq' );
    		break;

    	    case 'blog':
    		    $query->set( 'category_name', 'blog' );
    		break;
    	}
        // On affiche pas les pages qui ne sont pas des articles (faq, manuel, faq/generalite ...)
        $query->set( 'post__not_in', array( 1687, 1697, 1699, 1701, 1703, 1689, 1705, 1707, 1709, 1711, 1713 ) );

        return $query;
    }
}
add_filter('pre_get_posts','custom_search_filter');