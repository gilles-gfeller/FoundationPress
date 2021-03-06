<?php
/**

Template Name: Test

This is the template that displays all pages by default.
Please note that this is the WordPress construct of pages and that
other "pages" on your WordPress site will use a different template.

@package FoundationPress
@since FoundationPress 1.0.0

 */

 get_header(); ?>

 <?php get_template_part( 'template-parts/featured-image' ); ?>
    <script>
        $(document).ready(function() {
            $(".slider").slick({
                // default options
                infinite: true,
                // responsive options
                responsive: [{
                    // Under 9999px, Large only
                    breakpoint: 9999,
                    settings: { slidesToShow: 4, slidesToScroll: 0, infinite: true, dots: false, arrows: false, centerMode: true }
                },{
                    // Under 1024px, Medium only
                    breakpoint: 1024,
                    settings: { slidesToShow: 3, slidesToScroll: 1, initialSlide: 1, infinite: true, speed: 300, dots: true, arrows: false, centerMode: true }
                },{
                    // Under 800px, Small only
                    breakpoint: 800,
                    settings: { slidesToShow: 2, slidesToScroll: 1, initialSlide: 1, infinite: true, speed: 300, dots: true, arrows: false, centerMode: true }
                }, {
                    // Under 640px, Small only
                    breakpoint: 640,
                    settings: { slidesToShow: 1, slidesToScroll: 1, initialSlide: 1, infinite: true, speed: 300, dots: true, arrows: false, centerMode: true }
                }]
            });
        });
    </script>
    <section class="box-pricing">
        <div class="slider">
            <div class="box">
              <header class="evaluation">ÉVALUATION</header>
              <div class="content">
                <span class="price">Gratuit<span class="month">&nbsp;</span></span>
                <ul class="features">
                  <li class="title">Crésus Comptabilité</li>
                  <li>Pour essayer</li>
                </ul>
              </div>
              <footer>
                <a href="comptabilite-achat1.htm">Télécharger</a>
              </footer>
            </div>
            <div class="box">
                <header>LOCATION</header>
                <div class="content">
                    <span class="price"><span class="amount">22.–</span><span class="month">PAR MOIS</span></span>
                    <ul class="features">
                      <li class="title">Crésus Comptabilité</li>
                      <li>Mises à jour incluses</li>
                    </ul>
                </div>
                <footer>
                    <a href="comptabilite-achat1.htm">Commander</a>
                </footer>
            </div>
            <div class="box">
                <header>CLOUD</header>
                <div class="content">
                    <span class="price"><span class="amount">57.–</span><span class="month">PAR MOIS</span></span>
                    <ul class="features">
                      <li class="title">Crésus Comptabilité</li>
                      <li>Mises à jour incluses</li>
                    </ul>
                </div>
                <footer>
                    <a href="comptabilite-achat1.htm">Commander</a>
                </footer>
            </div>
            <div class="box">
                <header>ACHAT</header>
                <div class="content">
                    <span class="price"><span class="amount">550.–</span><span class="month">UNIQUE</span></span>
                    <ul class="features">
                    <li class="title">Crésus Comptabilité</li>
                    <li>Mises à jour en option 110.–&nbsp;par an</li>
                    </ul>
                </div>
                <footer>
                    <a href="comptabilite-achat1.htm">Commander</a>
                </footer>
            </div>
        </div>
    </section>
    <section id="manuels">
        <div class="grid-container">
          <div class="grid-x grid-padding-x align-center">
            <div class="medium-12 cell">
              <h2 class="section-title text-center"><?php _e( 'manuals', 'support' ); ?></h2>
            </div>
          </div>
          <div class="grid-x grid-padding-x">
            <div class="small-6 medium-6 large-3 cell">
              <a href="/manuels/cresus-comptabilite/" class="wrap-manuel comptabilite">
                <img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/icon-cresus-comptabilite.svg" alt="Crésus Comptabilité">
                <h3><span><?php _e( 'cresus', 'support' ); ?></span><?php _e( 'accounting', 'support' ); ?></h3>
              </a>
            </div>
            <div class="small-6 medium-6 large-3 cell">
              <a href="/manuels/cresus-salaires/" class="wrap-manuel salaires">
                <img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/icon-cresus-salaires.svg" alt="Crésus Salaires">
                <h3><span><?php _e( 'cresus', 'support' ); ?></span><?php _e( 'salaries', 'support' ); ?></h3>
              </a>
            </div>
            <div class="small-6 medium-6 large-3 cell">
              <a href="/manuels/cresus-facturation/" class="wrap-manuel facturation">
                <img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/icon-cresus-facturation.svg" alt="Crésus Facturation">
                <h3><span><?php _e( 'cresus', 'support' ); ?></span><?php _e( 'invoicing', 'support' ); ?></h3>
              </a>
            </div>
            <div class="small-6 medium-6 large-3 cell">
              <a href="/manuels/cresus-gestion-pe/" class="wrap-manuel gestion-pe">
                <img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/icon-cresus-gestion-pe.svg" alt="Crésus Gestion PE">
                <h3><span><?php _e( 'cresus', 'support' ); ?></span><?php _e( 'small-business', 'support' ); ?></h3>
              </a>
            </div>
          </div>
        </div>
    </section>
    <section id="faq">
        <div class="grid-container">
          <div class="grid-x grid-padding-x">
            <div class="medium-12 cell">
              <h2 class="section-title text-center"><?php _e( 'faq', 'support' ); ?></h2>
            </div>
          </div>
          <div class="grid-x grid-padding-x">
            <div class="large-6 cell">
                <?php  query_posts( array(
                    'category_name'  => 'du-moment',
                    'posts_per_page' => 4,
                    'orderby' => 'date',
                    'order' => 'DESC', )
                ) ;
                ?>
                <h4 class=""><!-- <i class="fa fa-clock-o" aria-hidden="true"></i> --> <?php _e( 'topics', 'support' ); ?></h4>
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
            <div class="large-6 cell">
                <?php  query_posts( array(
                    'category_name'  => 'tres-frequentes',
                    'posts_per_page' => 4,
                    'orderby' => 'date',
                    'order' => 'DESC', )
                ) ;
                ?>
                <h4 class=""><!-- <i class="fa fa-comments-o" aria-hidden="true" ></i> --> <?php _e( 'very faq', 'support' ); ?></h4>
                <ul class="accordion" data-accordion data-allow-all-closed="true">
        		<?php if(have_posts()) : ?>
        		<?php while(have_posts()) : the_post(); ?>
                <li class="accordion-item" data-accordion-item>
                  <!-- Accordion tab title -->
                  <a href="#" class="accordion-title"><?php the_title(); ?></a>
                  <div class="accordion-content" data-tab-content>
                    <?php the_content(); ?>
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
              <a href="/faq" class="button"><?php _e( 'View all FAQ', 'support' ); ?></a>
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
                  <a href="https://www.epsitec.ch/support/tarifs/" target="_blank"><i class="fa fa-angle-down" aria-hidden="true"></i> <?php _e( 'hotline price', 'support' ); ?></a>
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
                  <a href="https://www.cresus.ch/support/class/dates" target="_blank" class="strong"> <?php _e( 'all the formations', 'support' ); ?></a>
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
                    <a href="<?php the_permalink(); ?>" class="button small bouton-bottom"><?php _e( 'read more...', 'support' ); ?></a>
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
