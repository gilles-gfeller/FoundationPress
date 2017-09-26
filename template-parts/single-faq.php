<section id="hero">
    <div class="grid-container">
      <div class="grid-x align-center">
        <div class="large-12 cell">
    			<h1>Foire aux questions</h1>
        </div>
      </div>
    </div>
</section>

<section id="ariane">
    <div class="grid-container">
      <div class="grid-x grid-padding-x">
        <div class="large-12 cell">
          <?php custom_breadcrumbs(); ?>
        </div>
      </div>
    </div>
</section>

<section>
  <div class="grid-container">
      <div class="grid-x grid-padding-x">
        <div class="medium-4 cell">
          <?php get_sidebar(); ?>
        </div>
        <div class="medium-8 cell">
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <?php the_content(); ?>

            <?php if(get_the_tag_list()) {
              echo '<div class="tags-wrapper">';
              echo '<h5>';
              _e( 'tags', 'support' );
              echo '</h5>';
              echo get_the_tag_list('<ul class="etiquettes"><li data-tooltip data-trigger-class="" aria-haspopup="true" data-disable-hover="false" tabindex="1" title="Afficher tous les articles qui possèdent la même étiquette">','</li><li data-tooltip data-trigger-class="" aria-haspopup="true" data-disable-hover="false" tabindex="1" title="Afficher tous les articles qui possèdent la même étiquette">','</li></ul>');
              echo '</div>';
              }?>

          <?php
          if ( is_page( 'cresus-comptabilite' ) || '1697' == $post->post_parent ) {
            if(function_exists('get_documentor')){ get_documentor('1'); }
          } elseif ( is_page( 'cresus-salaires' ) || '1699' == $post->post_parent ) {
          echo '<h3>Crésus-salaires</h3>';
          } elseif ( is_page( 'cresus-facturation' ) || '1701' == $post->post_parent ) {
          echo '<h3>Crésus Facturation</h3>';
           } else {
          }
          ?>

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
      <div class="row">
        <div class="small-12 text-center columns">
          <h2><?php _e( 'search', 'support' ); ?></h2>
          <?php get_search_form(); ?>
        </div>
      </div>
    </div>
</section>