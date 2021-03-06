<?php
/**

Template Name: Support

This is the template that displays all pages by default.
Please note that this is the WordPress construct of pages and that
other "pages" on your WordPress site will use a different template.

@package FoundationPress
@since FoundationPress 1.0.0

 */

 get_header(); ?>

 <?php get_template_part( 'template-parts/featured-image' ); ?>

        <section id="hero">
            <div class="grid-container">
                <div class="grid-x grid-padding-x align-center">
                <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?>
                <div class="medium-10 cell">
                    <h1><?php the_title(); ?></h1>
                    <ul class="sous-navigation">
                        <li><a href="#manuels"><?php _e( 'manuals', 'support' ); ?></a></li>
                        <li><a href="#faq"><?php _e( 'faq', 'support' ); ?></a></li>
                        <li><a href="#inscription"><?php _e( 'newsletter', 'support' ); ?></a></li>
                    </ul>
                    <?php the_content(); ?>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
              </div>
              <div class="grid-x grid-padding-x align-center">
                <div class="medium-8 cell">
                    <?php get_search_form(); ?>
                </div>
              </div>
            </div>
        </section>
        <section id="manuels">
            <div class="grid-container">
<!--
              <div class="grid-x grid-padding-x align-center">
                <div class="medium-12 cell">
                  <h2 class="section-title text-center"><?php _e( 'manuals', 'support' ); ?></h2>
                </div>
              </div>
              
-->
            <?php if(ICL_LANGUAGE_CODE=='fr') {
                $lien_comptabilite = '/manuels/cresus-comptabilite/';
                $lien_salaires = '/manuels/cresus-salaires/';
                $lien_facturation = '/manuels/cresus-facturation/';
                $lien_gestion_pe = '/manuels/cresus-gestion-pe/';
              } else { 
                $lien_comptabilite = '/de/handbuch/cresus-finanzbuchhaltung/';
                $lien_salaires = '/de/handbuch/cresus-lohnbuchhaltung/';
                $lien_facturation = '/de/handbuch/cresus-faktura/';
                $lien_gestion_pe = '/de/handbuch/cresus-small-business/';
              }
            ?>

              <div class="grid-x grid-padding-x">
                <div class="small-6 medium-6 large-3 cell">
                  <a href="<?php echo $lien_comptabilite; ?>" class="wrap-manuel comptabilite">
                    <img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/book-cresus-comptabilite.svg" alt="Crésus Comptabilité">
                    <h3><span><?php _e( 'cresus', 'support' ); ?></span><?php _e( 'accounting', 'support' ); ?></h3>
                  </a>
                </div>
                <div class="small-6 medium-6 large-3 cell">
                  <a href="<?php echo $lien_salaires; ?>" class="wrap-manuel salaires">
                    <img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/book-cresus-salaires.svg" alt="Crésus Salaires">
                    <h3><span><?php _e( 'cresus', 'support' ); ?></span><?php _e( 'salaries', 'support' ); ?></h3>
                  </a>
                </div>
                <div class="small-6 medium-6 large-3 cell">
                  <a href="<?php echo $lien_facturation; ?>" class="wrap-manuel facturation">
                    <img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/book-cresus-facturation.svg" alt="Crésus Facturation">
                    <h3><span><?php _e( 'cresus', 'support' ); ?></span><?php _e( 'invoicing', 'support' ); ?></h3>
                  </a>
                </div>
                <div class="small-6 medium-6 large-3 cell">
                  <a href="<?php echo $lien_gestion_pe; ?>" class="wrap-manuel gestion-pe">
                    <img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/book-cresus-gestion-pe.svg" alt="Crésus Gestion PE">
                    <h3><span><?php _e( 'cresus', 'support' ); ?></span><?php _e( 'small-business', 'support' ); ?></h3>
                  </a>
                </div>
              </div>
            </div>
        </section>
        <section id="faq">
            <div class="grid-container">
              <div class="grid-x grid-padding-x text-center">
                  <div class="medium-12 cell">
                      <h2 class="section-title"><?php _e( 'topics', 'support' ); ?></h2>
                  </div>
              </div>
              <div class="grid-x grid-padding-x align-center">
                <div class="large-8 cell">
                    <?php  query_posts( array(
                        'category_name'  => 'du-moment',
                        'posts_per_page' => 8,
                        'orderby' => 'date',
                        'order' => 'DESC', )
                    ) ;
                    ?>
                    <ul class="accordion" data-accordion data-allow-all-closed="true">
                		<?php if(have_posts()) : ?>
                		<?php while(have_posts()) : the_post(); ?>
                    <li class="accordion-item" data-accordion-item>
                      <!-- Accordion tab title -->
                      <a href="#" class="accordion-title"><?php the_title(); ?></a>
                      <div class="accordion-content" data-tab-content>
                        <?php
                            if(has_excerpt()) the_excerpt();
                            else the_content();
                        ?>
                      </div>
                    </li>
                    <?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_query(); ?>
                    </ul>
                </div>
              </div>
              <div class="grid-x grid-padding-x">
                <div class="large-12 cell text-center">
                  <a href="/faq" class="button small"><?php _e( 'View all FAQ', 'support' ); ?></a>
                </div>
              </div>
            </div>
        </section>
        
        <section id="accroches">
            <div class="grid-container">
              <div class="grid-x grid-padding-x">
                <div class="medium-6 cell">
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
                <div class="medium-6 cell">
                  <div class="accroches-wrapper">
                    <div class="icon" style="transform: rotate(-45deg);top: -90px; left: -60px;">
                      <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                    </div>
                    <div class="text-center txt-wrapper">
                      <p><?php _e( 'software classes', 'support' ); ?></p>
                      <div class="exergue">
                        <?php _e( 'the formations', 'support' ); ?>
                      </div>
                      <p class="strong"><?php _e( 'online registration', 'support' ); ?></p>
                      <a href="https://www.cresus.ch/support/class/dates" target="_blank"><i class="fa fa-angle-right" aria-hidden="true"></i> <?php _e( 'all the formations', 'support' ); ?></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </section>
        <?php get_template_part( 'template-parts/subscription' ); ?>
        <?php  query_posts( array(
                'category_name'  => 'Blog',
                'orderby' => 'date',
                'order' => 'DESC',
                'posts_per_page' => 4)
                ) ;
        ?>
        <section id="bulletin">
            <div class="grid-container">
              <div class="grid-x grid-margin-x">
                <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?>
                   <div class="card cell large-3 medium-6 small-12">
                      <div class="card-image">
                        <?php
                        if ( has_post_thumbnail() ) {
                            the_post_thumbnail();
                        } else { ?>
                        <img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/img-default.svg" alt="<?php the_title(); ?>" />
                        <?php } ?>
                      </div>
                      <div class="card-section">
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <p class="entry-meta date">
                            <?php the_time("d F Y"); ?>
                        </p>
                        <?php the_field("sous-titre"); ?>
                      </div>
                      <div class="card-divider text-center">
                        <a href="<?php the_permalink(); ?>" class="button small more bouton-bottom"><?php _e( 'read more...', 'support' ); ?></a>
                      </div>
                    </div>
                <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
              </div>
              <div class="grid-x grid-padding-x">
                <div class="small-12 cell text-center">
                  <a href="/bulletins" class="button small"><?php _e( 'show all newsletters', 'support' ); ?></a>
                </div>
              </div>
            </div>
        </section>

 <?php get_footer(); ?>