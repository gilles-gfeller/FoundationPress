<?php
/*
Template Name: Manuels
*/
?>

<?php get_header(); ?>

    <?php
    if ( is_page( 1697 )) { // manuels/cresus-comptabilite
      $manuel = 'cresus-comptabilite';
    } elseif ( is_page( 1699 )) { // manuels/cresus-salaires
      $manuel = 'cresus-salaires';
    } elseif ( is_page( 1701 )) { // manuels/cresus-facturation
      $manuel = 'cresus-facturation';
    } elseif ( is_page( 1703 )) { // manuels/cresus-gestion-pe
      $manuel = 'cresus-gestion-pe';
    } elseif ( is_page( 4386 )) { // manuels/cresus-finanzbuchhaltung
      $manuel = 'cresus-finanzbuchhaltung';
    } elseif ( is_page( 4388 )) { // manuels/cresus-lohnbuchhaltung
      $manuel = 'cresus-lohnbuchhaltung';
    } elseif ( is_page( 4390 )) { // manuels/cresus-faktura
      $manuel = 'cresus-faktura';
    } elseif ( is_page( 4392 )) { // manuels/cresus-small-business
      $manuel = 'cresus-small-business';
    } else { echo 'rien ici';} ?>


		<?php if(have_posts()) : ?>
		<?php while(have_posts()) : the_post(); ?>

  <div data-sticky-container>
    <section id="header-manuel" data-sticky data-options="marginTop:0;" style="width:100%; z-index:777" data-top-anchor="header-manuel:top" data-btm-anchor="content:bottom">
        <div class="grid-container" >
            <div class="grid-x grid-padding-x align-center">
                <div class="large-8 medium-10 cell">
                  <div class="clearfix">
                    <div class="float-left"><h1><?php the_title(); ?></h1></div>
<!--                     <div class="float-right"><a data-open="modalSearch" style="color:<?php echo '#'.$txtcolor; ?>"><i class="fa fa-search" aria-hidden="true"></i></a><a href="#" onclick="openNav()" style="color:<?php echo '#'.$txtcolor; ?>"><i class="fa  fa-list-ul" aria-hidden="true"></i></a></div> -->
                    <div class="float-right">
                      <table style="margin-bottom: 0px;">
                        <tbody style="background: none; border:none;">
                          <tr>
                            <td style="padding: 0px;">
                              <a data-open="modalSearch" class="show-for-small-only" data-trigger-class="" data-tooltip aria-hidden="true" aria-haspopup="true" data-disable-hover="false" tabindex="1" title="<?php _e( 'search by keywords', 'support' ); ?>">
                                <i class="fa fa-search" aria-hidden="true"></i>
                              </a>
                                <form role="search" id="searchform-manuals" method="get" class="search-form hide-for-small-only" action="<?php bloginfo('home'); ?>/" data-trigger-class="" data-tooltip aria-hidden="true" aria-haspopup="true" data-disable-hover="false" tabindex="1" title="<?php _e( 'search by keywords', 'support' ); ?>">
                                  <label>
                                    <input type="search" class="search-field" name="s" id="s" placeholder="<?php _e( 'search in this manual', 'support' ); ?>" value="<?php echo $_GET['s']; ?>" />
                                  </label>
                                  <input type="submit" class="search-submit" value="<?php _e( 'search in this manual', 'support' ); ?>" />
                                  <input type="hidden" name="searchselect" value="<?php echo $manuel; ?>" />
                                </form>
                            </td>
                            <td style="padding: 0px 10px 0px 0px;">
                              <a style="cursor: pointer;" onclick="" data-trigger-class="" data-tooltip aria-hidden="true" aria-haspopup="true" data-disable-hover="false" tabindex="1" title="titre">
                                <i class="fa  fa-chevron-left" aria-hidden="true"></i>
                              </a>
                            </td>
                            <td style="padding: 0px 10px 0px 0px;">
                              <a style="cursor: pointer;" onclick="" data-trigger-class="" data-tooltip aria-hidden="true" aria-haspopup="true" data-disable-hover="false" tabindex="1" title="titre">
                                <i class="fa  fa-chevron-right" aria-hidden="true"></i>
                              </a>
                            </td>
                            <td style="padding: 0px;">
                              <a style="cursor: pointer;" onclick="openNav()" data-trigger-class="" data-tooltip aria-hidden="true" aria-haspopup="true" data-disable-hover="false" tabindex="1" title="<?php _e( 'table of contents', 'support' ); ?>">
                                <i class="fa  fa-list-ul" aria-hidden="true"></i>
                              </a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
            </div>
      </div>
        <div id="myNav" class="volet">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
          <div class="volet-content">
            <?php
            if ( is_page( 1697 )) { // manuels/cresus-comptabilite
              if(function_exists('get_epsitecdocumentor')){ get_epsitecdocumentor('1','1'); }

            } elseif ( is_page( 1699 )) { // manuels/cresus-salaires
              if(function_exists('get_epsitecdocumentor')){ get_epsitecdocumentor('2','1'); }

            } elseif ( is_page( 1701 )) { // manuels/cresus-facturation
              if(function_exists('get_epsitecdocumentor')){ get_epsitecdocumentor('3','1'); }

            } elseif ( is_page( 1703 )) { // manuels/cresus-gestion-pe
              if(function_exists('get_epsitecdocumentor')){ get_epsitecdocumentor('5','1'); }

            } elseif ( is_page( 4386 )) { // manuels/cresus-finanzbuchhaltung
              if(function_exists('get_epsitecdocumentor')){ get_epsitecdocumentor('6','1'); }

            } elseif ( is_page( 4388 )) { // manuels/cresus-lohnbuchhaltung
              if(function_exists('get_epsitecdocumentor')){ get_epsitecdocumentor('7','1'); }

            } elseif ( is_page( 4390 )) { // manuels/cresus-faktura
              if(function_exists('get_epsitecdocumentor')){ get_epsitecdocumentor('8','1'); }

            } elseif ( is_page( 4392 )) { // manuels/cresus-small-business
              if(function_exists('get_epsitecdocumentor')){ get_epsitecdocumentor('9','1'); }

            } else { echo 'rien ici';} ?>
          </div>
        </div>
    </section>
  </div>

<script>
var myNav = document.getElementById("myNav");
function openNav() {
    var width = window.innerWidth;
    if (width<640){
        myNav.style.width = "90%";
    } else if (width<1024){
        myNav.style.width = "50%";
    } else {
        myNav.style.width = "30%";
    }
}

function closeNav() {
    myNav.style.width = "0%";
}
</script>


    <?php endwhile; ?>
    <?php endif; ?>
    <?php wp_reset_query(); ?>

    <section id="content" onclick="closeNav()">
      <div class="grid-container">
        <div class="grid-x grid-padding-x align-center">
          <div class="large-8 medium-10 cell" style="padding-top: 2em;">
            <?php
            if ( is_page( 1697 )) { // manuels/cresus-comptabilite
              if(function_exists('get_epsitecdocumentor')){ get_epsitecdocumentor('1','2'); }

            } elseif ( is_page( 1699 )) { // manuels/cresus-salaires
              if(function_exists('get_epsitecdocumentor')){ get_epsitecdocumentor('2','2'); }

            } elseif ( is_page( 1701 )) { // manuels/cresus-facturation
              if(function_exists('get_epsitecdocumentor')){ get_epsitecdocumentor('3','2'); }

            } elseif ( is_page( 1703 )) { // manuels/cresus-gestion-pe
              if(function_exists('get_epsitecdocumentor')){ get_epsitecdocumentor('5','2'); }

            } elseif ( is_page( 4386 )) { // manuels/cresus-finanzbuchhaltung
              if(function_exists('get_epsitecdocumentor')){ get_epsitecdocumentor('6','2'); }

            } elseif ( is_page( 4388 )) { // manuels/cresus-lohnbuchhaltung
              if(function_exists('get_epsitecdocumentor')){ get_epsitecdocumentor('7','2'); }

            } elseif ( is_page( 4390 )) { // manuels/cresus-faktura
              if(function_exists('get_epsitecdocumentor')){ get_epsitecdocumentor('8','2'); }

            } elseif ( is_page( 4392 )) { // manuels/cresus-small-business
              if(function_exists('get_epsitecdocumentor')){ get_epsitecdocumentor('9','2'); }

            } else { echo 'rien ici';} ?>
          </div>
        </div>
      </div>
    </section>


    <div class="reveal large" id="modalSearch" data-reveal data-animation-in="scale-in-down fast" data-animation-out="scale-out-up fast">
      <h2 class="text-center"><?php _e( 'search', 'support' ); ?></h2>
      <?php get_search_form(); ?>
      <button class="close-button" data-close aria-label="Close modal" type="button">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>


<?php get_footer(); ?>
