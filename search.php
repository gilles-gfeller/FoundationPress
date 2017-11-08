<?php get_header(); ?>
    <section id="hero">
        <div class="grid-container">
            <div class="grid-x grid-padding-x align-center">
                <div class="medium-8 cell">
        			<h1><?php _e( 'search result', 'support' ); ?></h1>
                    <br>
                </div>
                <div class="medium-12 cell">
                    <?php get_search_form(); ?>
                </div>
            </div>
        </div>
    </section>
    <section id="result">
<?php if ( have_posts() ) : ?>
        </br>
        <div class="grid-container">
            <div class="grid-x grid-padding-x align-center">
                <div class="medium-3 cell">
                  <?php get_sidebar(); ?>
                </div>
                <div class="medium-9 cell">

                <?php while(have_posts()) : the_post(); ?>

                <article class="clearfix epsitec-search-filtered-item <?=$oEpsitecSearchPlugin->getSearchItemClass($post->ID);?>" <?=$oEpsitecSearchPlugin->getSearchItemData($post->ID);?>>
                  <?php if (in_category('blog')){ ?>
                    <div style="float: left; width:30%; margin-right: 2em;">
                      <?php if ( has_post_thumbnail() ) { the_post_thumbnail('');
              	        } else { ?>
                        <img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/img-default.svg" alt="<?php the_title(); ?>" />
                      <?php } ?>
                    </div>

                  <div class="wrapper" style="float:left;width:63%">
                    <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
                    <?php if (in_category('blog')){ ?>
                      <h5><?php the_field('sous-titre'); ?></h5>
                    <?php } ?>

                    <?php if(get_the_tag_list()) {
                      echo '<div class="tags-wrapper">';
                      echo get_the_tag_list('<ul class="etiquettes"><li data-tooltip data-trigger-class="" aria-haspopup="true" data-disable-hover="false" tabindex="1" title="Afficher tous les articles qui possèdent la même étiquette">','</li><li data-tooltip aria-haspopup="true" data-trigger-class="" data-disable-hover="false" tabindex="1" title="Afficher tous les articles qui possèdent la même étiquette">','</li></ul>');
                      echo '</div>';
                      }?>

                    <?php
                    /* Le contenu du bouton lire la suite (+ traduction) se trouve dans custom-filter.php dans les library */
                    the_excerpt();
                    ?>
                    </div>

                  <?php } else { ?>

                  <div class="wrapper" style="float:right;width:100%">
                    <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
                    <?php if (in_category('blog')){ ?>
                      <h5><?php the_field('sous-titre'); ?></h5>
                    <?php } ?>

                    <?php if(get_the_tag_list()) {
                      echo '<div class="tags-wrapper">';
                      echo get_the_tag_list('<ul class="etiquettes"><li data-tooltip data-trigger-class="" aria-haspopup="true" data-disable-hover="false" tabindex="1" title="Afficher tous les articles qui possèdent la même étiquette">','</li><li data-tooltip aria-haspopup="true" data-trigger-class="" data-disable-hover="false" tabindex="1" title="Afficher tous les articles qui possèdent la même étiquette">','</li></ul>');
                      echo '</div>';
                      }?>

                    <?php
                    /* Le contenu du bouton lire la suite (+ traduction) se trouve dans custom-filter.php dans les library */
                    the_excerpt();
                    ?>
                    </div>
                  <?php } ?>

                  <hr />
                </article>


            <?php endwhile; ?>

                </div>
            </div>
        </div>
<?php else : ?>
        <div class="grid-container">
            <div class="grid-x grid-padding-x align-center">
                <div class="large-9 text-center cell">
                    <div class="grid-x grid-padding-x">
                        <div class="medium-12 cell">
              			         <p><?php _e( "Sorry, there is nothing. Please, try again!", 'support' ); ?></p>
                        </div>
                        <div class="medium-12 cell">
                          <div class="accroches-wrapper">
                            <div class="icon" style="transform: rotate(-30deg);top: -90px; left: -60px;">
                              <i class="fa fa-smile-o" aria-hidden="true"></i>
                            </div>
                            <div class="text-center txt-wrapper">
                              <p><?php _e( 'hotline', 'support' ); ?></p>
                              <div class="exergue">
                                <?php _e( 'hotline phone number', 'support' ); ?>
                              </div>
                              <p class="strong">9:00 – 12:00 et 14:00 – 16:30</p>
                              <a href="https://www.epsitec.ch/support/tarifs/" target="_blank"><i class="fa fa-angle-right" aria-hidden="true"></i> <?php _e( 'hotline price', 'support' ); ?></a>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php endif; ?>
    </section>
<?php get_footer(); ?>
