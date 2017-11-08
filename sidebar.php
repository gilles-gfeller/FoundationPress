<!-- SIDEBAR -->
<?php
function isPageActive($pageName) {
    if (is_page($pageName)) {
        return "actif";
    }
    else {
        return "";
    }
}
function isCatActive($Categories, $CatName) {
    foreach($Categories as $category){
        if ($category->slug == $CatName) {
            return true;
        }
    }
    return false;
}
function displayBlock($pageName) {
    if (is_page($pageName)) {
        return "block";
    }
    else {
        return "none";
    }
}
?>
<<<<<<< HEAD



<div id="sidebar" data-sticky-container>
    <?php	$categories = get_the_category();           // recupere toutes les categories de la page
    $categories = array_reverse($categories);   // reverse du tableau car premier element = dernier niveau de categorie (ex.: cresus-salaires)
    // Test de la variable $_GET['s'] pour savoir si on est sur la page de recherche
    if (is_page( 'manuels' ) || '1687' == $post->post_parent || (isCatActive($categories,'manuels') && !isset($_GET['s'])) ) {
        ?>
        <ul class="nav sticky" data-sticky data-top-anchor="285" data-btm-anchor="accroche:bottom" style="width:100%">
            <li id="cresus-comptabilite">
                <a href="<?php bloginfo('url'); ?>/manuels/cresus-comptabilite" class="<?php if(isCatActive($categories,"cresus-comptabilite") || isPageActive("cresus-comptabilite")) echo "actif"; ?> tabs" >
                    <img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/icon-cresus-comptabilite.svg" alt="<?php _e( 'Crésus Comptabilité', 'support' ); ?>" />
                    <?php _e( 'Crésus Comptabilité', 'support' ); ?>
                </a>
                <div style="display: <?php echo displayBlock ("cresus-comptabilite") ?>">
                    <?php
                    if (is_page("cresus-comptabilite")) {
                        if(function_exists('get_epsitecdocumentor')){ get_epsitecdocumentor('1','1'); }
                    } ?>
                </div>
            </li>
            <li id="cresus-salaires">
                <a href="<?php bloginfo('url'); ?>/manuels/cresus-salaires" class="<?php if(isCatActive($categories,"cresus-salaires") || isPageActive("cresus-salaires")) echo "actif"; ?> tabs" >
                    <img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/icon-cresus-salaires.svg" alt="<?php _e( 'Crésus Salaires', 'support' ); ?>" />
                    <?php _e( 'Crésus Salaires', 'support' ); ?>
                </a>
                <div style="display: <?php echo displayBlock ("cresus-salaires") ?>">
                    <?php
                    if (is_page("cresus-salaires")) {
                        if(function_exists('get_epsitecdocumentor')){ get_epsitecdocumentor('2','1'); }
                    } ?>
                </div>
            </li>
            <li id="cresus-facturation">
                <a href="<?php bloginfo('url'); ?>/manuels/cresus-facturation" class="<?php if(isCatActive($categories,"cresus-facturation") || isPageActive("cresus-facturation")) echo "actif"; ?> tabs" >
                    <img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/icon-cresus-facturation.svg" alt="<?php _e( 'Crésus Facturation', 'support' ); ?>" />
                    <?php _e( 'Crésus Facturation', 'support' ); ?>
                </a>
                <div style="display: <?php echo displayBlock ("cresus-facturation") ?>">
                    <?php
                    if (is_page("cresus-facturation")) {
                        if(function_exists('get_epsitecdocumentor')){ get_epsitecdocumentor('3','1'); }
                    } ?>
                </div>
            </li>
            <li id="cresus-gestion-pe">
                <a href="<?php bloginfo('url'); ?>/manuels/cresus-gestion-pe" class="<?php if(isCatActive($categories,"cresus-gestion-pe") || isPageActive("cresus-gestion-pe")) echo "actif"; ?> tabs" >
                    <img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/icon-cresus-gestion-pe.svg" alt="<?php _e( 'Crésus Gestion PE', 'support' ); ?>" />
                    <?php _e( 'Crésus Gestion PE', 'support' ); ?>
                </a>
                <div style="display: <?php echo displayBlock ("cresus-gestion-pe") ?>">
                    <?php
                    if (is_page("cresus-gestion-pe")) {
                        if(function_exists('get_epsitecdocumentor')){ get_epsitecdocumentor('5','1'); }
                    } ?>
                </div>
            </li>
        </ul>


    <?php } elseif (is_page( 'handbuch' ) || '4384' == $post->post_parent || (isCatActive($categories,'manuels') && !isset($_GET['s'])) ) { ?>
        <ul class="nav sticky" data-sticky data-top-anchor="285" data-btm-anchor="accroche:bottom" style="width:100%">
            <li id="cresus-comptabilite">
                <a href="<?php bloginfo('url'); ?>/handbuch/cresus-finanzbuchhaltung/" class="<?php if(isCatActive($categories,"cresus-finanzbuchhaltung") || isPageActive("cresus-finanzbuchhaltung")) echo "actif"; ?> tabs" >
                    <img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/icon-cresus-comptabilite.svg" alt="<?php _e( 'Crésus Comptabilité', 'support' ); ?>" />
                    <?php _e( 'Crésus Comptabilité', 'support' ); ?>
                </a>
                <div style="display: <?php echo displayBlock ("cresus-finanzbuchhaltung") ?>">
                    <?php
                    if (is_page("cresus-finanzbuchhaltung")) {
                        if(function_exists('get_epsitecdocumentor')){ get_epsitecdocumentor('6','1'); }
                    } ?>
                </div>
            </li>
            <li id="cresus-salaires">
                <a href="<?php bloginfo('url'); ?>/handbuch/cresus-lohnbuchhaltung" class="<?php if(isCatActive($categories,"cresus-lohnbuchhaltung") || isPageActive("cresus-lohnbuchhaltung")) echo "actif"; ?> tabs" >
                    <img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/icon-cresus-salaires.svg" alt="<?php _e( 'Crésus Salaires', 'support' ); ?>" />
                    <?php _e( 'Crésus Salaires', 'support' ); ?>
                </a>
                <div style="display: <?php echo displayBlock ("cresus-lohnbuchhaltung") ?>">
                    <?php
                    if (is_page("cresus-lohnbuchhaltung")) {
                        if(function_exists('get_epsitecdocumentor')){ get_epsitecdocumentor('7','1'); }
                    } ?>
                </div>
            </li>
            <li id="cresus-facturation">
                <a href="<?php bloginfo('url'); ?>/handbuch/cresus-faktura" class="<?php if(isCatActive($categories,"cresus-faktura") || isPageActive("cresus-faktura")) echo "actif"; ?> tabs" >
                    <img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/icon-cresus-facturation.svg" alt="<?php _e( 'Crésus Facturation', 'support' ); ?>" />
                    <?php _e( 'Crésus Facturation', 'support' ); ?>
                </a>
                <div style="display: <?php echo displayBlock ("cresus-faktura") ?>">
                    <?php
                    if (is_page("cresus-faktura")) {
                        if(function_exists('get_epsitecdocumentor')){ get_epsitecdocumentor('8','1'); }
                    } ?>
                </div>
            </li>
            <li id="cresus-gestion-pe">
                <a href="<?php bloginfo('url'); ?>/handbuch/cresus-small-business" class="<?php if(isCatActive($categories,"cresus-small-business") || isPageActive("cresus-small-business")) echo "actif"; ?> tabs" >
                    <img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/icon-cresus-gestion-pe.svg" alt="<?php _e( 'Crésus Gestion PE', 'support' ); ?>" />
                    <?php _e( 'Crésus Gestion PE', 'support' ); ?>
                </a>
                <div style="display: <?php echo displayBlock ("cresus-small-business") ?>">
                    <?php
                    if (is_page("cresus-small-business")) {
                        if(function_exists('get_epsitecdocumentor')){ get_epsitecdocumentor('9','1'); }
                    } ?>
                </div>
            </li>
        </ul>

    <?php } elseif ( is_page( 'faq' ) || '1689' == $post->post_parent || ( isCatActive($categories,'faq')  && !isset($_GET['s']) ) ) { ?>
        <ul class="nav sticky" data-sticky data-top-anchor="285" data-btm-anchor="accroche:bottom" style="width:100%">
            <li id="cresus-generalites">
                <a href="<?php bloginfo('url'); ?>/faq/generalites" class="<?php if(isCatActive($categories,"generalites") || isPageActive("generalites")) echo "actif"; ?> tabs">
                    <img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/icon-cresus-logiciels2.svg" alt="<?php _e( 'Crésus Généralités', 'support' ); ?>" />
                    <?php _e( 'Crésus Généralités', 'support' ); ?>
                </a>
            </li>
            <li id="cresus-comptabilite">
                <a href="<?php bloginfo('url'); ?>/faq/cresus-comptabilite" class="<?php if(isCatActive($categories,"cresus-comptabilite") || isPageActive("cresus-comptabilite")) echo "actif"; ?> tabs">
                    <img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/icon-cresus-comptabilite.svg" alt="<?php _e( 'Crésus Comptabilité', 'support' ); ?>" />
                    <?php _e( 'Crésus Comptabilité', 'support' ); ?>
                </a>
            </li>
            <li id="cresus-salaires">
                <a href="<?php bloginfo('url'); ?>/faq/cresus-salaires" class="<?php if(isCatActive($categories,"cresus-salaires") || isPageActive("cresus-salaires")) echo "actif"; ?> tabs">
                    <img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/icon-cresus-salaires.svg" alt="<?php _e( 'Crésus Salaires', 'support' ); ?>" />
                    <?php _e( 'Crésus Salaires', 'support' ); ?>
                </a>
            </li>
            <li id="cresus-facturation">
                <a href="<?php bloginfo('url'); ?>/faq/cresus-facturation" class="<?php if(isCatActive($categories,"cresus-facturation") || isPageActive("cresus-facturation")) echo "actif"; ?> tabs">
                    <img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/icon-cresus-facturation.svg" alt="<?php _e( 'Crésus Facturation', 'support' ); ?>" />
                    <?php _e( 'Crésus Facturation', 'support' ); ?>
                </a>
            </li>
            <li id="cresus-gestion-pe">
                <a href="<?php bloginfo('url'); ?>/faq/cresus-gestion-pe" class="<?php if(isCatActive($categories,"cresus-gestion-pe") || isPageActive("cresus-gestion-pe")) echo "actif"; ?> tabs" >
                    <img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/icon-cresus-gestion-pe.svg" alt="<?php _e( 'Crésus Gestion PE', 'support' ); ?>" />
                    <?php _e( 'Crésus Gestion PE', 'support' ); ?>
                </a>
            </li>
        </ul>
    <?php } else { echo "Filtre pour la recherche en cours de dev."; }
    ?>
</div>
<!--// SIDEBAR -->
=======
<aside class="sidebar">
	<?php dynamic_sidebar( 'sidebar-widgets' ); ?>
</aside>
>>>>>>> upstream/master
