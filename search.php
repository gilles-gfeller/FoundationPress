<?php get_header(); ?>

<?php if ( have_posts() ) : ?>

    <section id="hero">
        <div class="grid-container">
            <div class="grid-x grid-padding-x align-center">
                <div class="large-8 small-centered cell">
            			<h1><?php _e( 'search result', 'support' ); ?></h1>
                </div>
            </div>
        </div>
    </section>

    <section id="result">
        </br>
        <div class="grid-container">
            <div class="grid-x grid-padding-x align-center">
                <div class="large-4 cell">
                  <?php get_sidebar(); ?>
                </div>
                <div class="large-8 cell">

                <?php while(have_posts()) : the_post(); ?>

                <article>
                  <?php if (in_category('blog')){ ?>
                    <div style="float: left; width:30%; margin-right: 2em;">
                      <?php if ( has_post_thumbnail() ) { the_post_thumbnail('');
              	        } else { ?>
                        <img src="<?php bloginfo('template_directory'); ?>/images/img-default.svg" alt="<?php the_title(); ?>" />
                      <?php } ?>
                    </div>
                  <?php } ?>
                  <div class="wrapper">
                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    <?php if (in_category('blog')){ ?>
                      <h5><?php the_field('sous-titre'); ?></h5>
                    <?php } ?>
                    <?php
                    /* Le contenu du bouton lire la suite (+ traduction) se trouve dans custom-filter.php dans les library */
                    the_excerpt();
                    ?>

                    <?php if(get_the_tag_list()) {
                      echo '<div class="tags-wrapper">';
                      echo '<h5>';
                      _e( 'tags', 'support' );
                      echo '</h5>';
                      echo get_the_tag_list('<ul class="etiquettes"><li data-tooltip data-trigger-class="" aria-haspopup="true" data-disable-hover="false" tabindex="1" title="Afficher tous les articles qui possèdent la même étiquette">','</li><li data-tooltip aria-haspopup="true" data-trigger-class="" data-disable-hover="false" tabindex="1" title="Afficher tous les articles qui possèdent la même étiquette">','</li></ul>');
                      echo '</div>';
                      }?>
                      <br />
                    <?php if(get_the_category_list()) {
                      echo '<div class="category-wrapper">';
                      echo '<h5>';
                      _e( 'category', 'support' );
                      echo '</h5>';
                      echo tooltips_category_class(get_the_category_list());
                      echo '</div>';
                      }?>
                      <hr />
                      <br />
                  </div>
                </article>


            <?php endwhile; ?>

                </div>
            </div>
        </div>
    </section>

    <section id="search">
        <div class="grid-container">
            <div class="grid-x grid-padding-x align-center">
                <div class="small-12 text-center cell">
                      <h2><?php _e( 'new search', 'support' ); ?></h2>
                      <?php get_search_form(); ?>
                </div>
            </div>
      </div>
    </section>

<?php else : ?>

    <section id="hero">
        <div class="grid-container">
            <div class="grid-x grid-padding-x align-center">
                <div class="large-8 small-centered cell">
    			    <h1><?php _e( 'no result', 'support' ); ?></h1>
                </div>
                <div class="small-12 columns text-center">
                    <p><?php _e( "Sorry, there is nothing. Please, try again!", 'support' ); ?></p>
                    <?php get_search_form(); ?>
                </div>
            </div>
        </div>
    </section>


<?php endif; ?>

<?php get_footer(); ?>