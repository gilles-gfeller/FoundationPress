<!-- SIDEBAR -->
<div id="sidebar" data-sticky-container>
    <?php global $oEpsitecSearchPlugin; ?>
    <div id="epsitec-search-sidebar-wrapper" class="nav sticky" data-sticky data-top-anchor="285" data-btm-anchor="accroche:bottom" style="width:100%">
        <? if($_GET['s']!='') { ?>
        <ul id="epsitec-search-sidebar-ul-manuels" class="epsitec-search-sidebar-ul">
            <li><h3><? _e( 'category', 'support' ); ?></h3></li>
            <?= $oEpsitecSearchPlugin->displaySidebarManuel(); ?>
        </ul>
        <? }
        $AllTags = $oEpsitecSearchPlugin->displaySidebarTags();
        if(substr($AllTags,0,4) == "<li>") { ?>
        <ul id="epsitec-search-sidebar-ul-tags" class="epsitec-search-sidebar-ul">
            <li><h3><? _e( 'tags', 'support' ); ?></h3></li>
            <?= $AllTags; ?>
        </ul>
        <? } ?>
    </div>
</div>
<!--// SIDEBAR -->
