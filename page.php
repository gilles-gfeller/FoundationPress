<?php get_header(); ?>

    <?php if(have_posts()) : ?>
		
    <?php
    /*$directory = bloginfo('template_directory');
    if ( is_page( 'cresus-comptabilite' ) || '1697' == $post->post_parent ) {
        $bgHero = 'background: url('.$directory.'/dist/assets/images/icon.svg) left top #c8e1f3; background-size: 800px;';
    } elseif ( is_page( 'cresus-salaires' ) || '1699' == $post->post_parent ) {
        $bgHero = 'background: url('.$directory.'/dist/assets/images/icon.svg) left top #fee4bb; background-size: 800px;';
    } elseif ( is_page( 'cresus-facturation' ) || '1701' == $post->post_parent ) {
        $bgHero = 'background: url('.$directory.'/dist/assets/images/icon.svg) left top #cfe4c1; background-size: 800px;';
    } elseif ( is_page( 'cresus-gestion-pe' ) || '1703' == $post->post_parent ) { 
        $bgHero = 'background: url('.$directory.'/dist/assets/images/icon.svg) left top #d5b8d6; background-size: 800px;';
    } else {
        $bgHero = 'background: url('.$directory.'/dist/assets/images/icon.svg) left top #c8e1f3; background-size: 800px;';
    } */
    ?>

    <section id="hero" style="">
        <div class="grid-container">
            <div class="grid-x grid-padding-x align-center">
                <div class="small-12 cell">
            	    <h1><?php the_title(); ?></h1>
                </div>
            </div>
      </div>
    </section>
    <section id="ariane">
      <div class="grid-container">
        <div class="grid-x grid-padding-x align-center">
            <div class="small-12 cell">
                <?php custom_breadcrumbs(); ?>
            </div>
        </div>
      </div>
    </section>

    <div class="reveal large" id="modalSearch" data-reveal>
      <h2 class="text-center"><?php _e( 'search', 'support' ); ?></h2>
      <?php get_search_form(); ?>
      <button class="close-button" data-close aria-label="Close modal" type="button">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>

    <section id="content">
        <div class="grid-container">
            <div class="grid-x grid-padding-x">
                <div class="medium-4 cell">
                    <?php get_sidebar(); ?>
                </div>
                <div class="medium-8 cell">
                  <?php while(have_posts()) : the_post(); ?>

                  <?php

                  if ( is_page( 'manuels' ) || '1687' == $post->post_parent ) {
                  echo '<h5>';
                  the_content();
                  echo '</h5>';
        //           echo '<a href="#" data-open="modalSearch">recherche</a>';
                  echo '<hr />';
                  } elseif ( is_page( 'faq' ) || '1689' == $post->post_parent ) {
                  echo '<h5>';
                  the_content();
                  echo '</h5>';
                  echo '<hr />';
                  } elseif ( is_page( 'handbuch' ) || '4384' == $post->post_parent ) {
                  echo '<h5>';
                  the_content();
                  echo '</h5>';
                  echo '<hr />';


                  } else { } ?>

                  <?php endwhile; ?>
                  <?php endif; ?>

                  <!-- <?php the_content(); ?> -->
                  <!-- <a href="#"><i class="fa fa-angle-down" aria-hidden="true"></i> Archives des Manuels</a>
                  <hr /> -->

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

                  } elseif ( is_page( 1705 )) { // faq/generalites  ?>

                  <?php wp_reset_query(); ?>
                  <?php  query_posts( array(
                      'cat'=>'6',
                      'orderby' => 'date',
                      'order' => 'ASC', )
                      ) ;
                  ?>

                  <ul class="accordion" data-accordion data-multi-expand="true" data-allow-all-closed="true">
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

                  <?php } elseif ( is_page( 1707 )) { // faq/cresus-comptabilite  ?>

                  <?php wp_reset_query(); ?>
                  <?php  query_posts( array(
                      'cat'=>'7',
                      'orderby' => 'date',
                      'order' => 'ASC', )
                      ) ;
                  ?>

                  <ul class="accordion" data-accordion data-multi-expand="true" data-allow-all-closed="true">
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

                  <?php } elseif ( is_page( 1709 )) {  // faq/cresus-salaires  ?>

                  <?php wp_reset_query(); ?>
                  <?php  query_posts( array(
                      'cat'=>'8',
                      'orderby' => 'date',
                      'order' => 'ASC', )
                      ) ;
                  ?>

                  <ul class="accordion" data-accordion data-multi-expand="true" data-allow-all-closed="true">
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

                  <?php } elseif ( is_page( 1711 )) { // faq/cresus-facturation  ?>

                  <?php wp_reset_query(); ?>
                  <?php  query_posts( array(
                      'cat'=>'9',
                      'orderby' => 'date',
                      'order' => 'ASC', )
                      ) ;
                  ?>

                  <ul class="accordion" data-accordion data-multi-expand="true" data-allow-all-closed="true">
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


                  <?php } elseif ( is_page( 1689 )) { // faq  ?>

                  <?php  query_posts( array(
                    'category_name'  => 'du-moment',
                    'posts_per_page' => 4,
                    'orderby' => 'date',
                    'order' => 'DESC', )
                  ) ;
                  ?>
                  <h4 class=""><?php _e( 'topics', 'support' ); ?></h4>
                  <ul class="accordion" data-accordion data-multi-expand="true" data-allow-all-closed="true">
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

                  <?php  query_posts( array(
                    'category_name'  => 'tres-frequentes',
                    'posts_per_page' => 4,
                    'orderby' => 'date',
                    'order' => 'ASC', )
                  ) ;
                  ?>
                  <h4 class=""><?php _e( 'very faq', 'support' ); ?></h4>
                  <ul class="accordion" data-accordion data-multi-expand="true" data-allow-all-closed="true">
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


                  <?php } else { }?>


                  <div class="accroches-wrapper">
                    <br />
                    <div class="icon" style="transform: rotate(-0deg);top: -90px; left: -50px;">
                      <i class="fa fa-life-ring" aria-hidden="true"></i>
                    </div>
                    <div class="text-center txt-wrapper">
                      <p><?php _e( 'Did not find an answer?', 'support' ); ?></p>
                      <div class="exergue"><?php _e( 'Ask your question now', 'support' ); ?></div>
                      <p><a href="https://www.cresus.ch/support/question" target="_blank" class="strong"><?php _e( 'Our hotline is available online 24/7', 'support' ); ?></a></p>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </section>

    <section id="search">
        <div class="grid-container">
            <div class="grid-x grid-padding-x">
                <div class="small-12 text-center cell">
                  <h2><?php _e( 'search', 'support' ); ?></h2>
                  <?php get_search_form(); ?>
                </div>
            </div>
      </div>
    </section> 


<?php get_footer(); ?>