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
                <div class="medium-4 cell">
                  <?php get_sidebar(); ?>
                </div>
                <div class="medium-8 cell">

                <?php while(have_posts()) : the_post(); ?>

<<<<<<< HEAD
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

=======
<div class="main-wrap">
	<main id="search-results" class="main-content">

	<header>
	    <h1 class="entry-title"><?php _e( 'Search Results for', 'foundationpress' ); ?> "<?php echo get_search_query(); ?>"</h1>
	</header>
>>>>>>> upstream/master

            <?php endwhile; ?>

<<<<<<< HEAD
                </div>
            </div>
        </div>
<?php else : ?>
        <div class="grid-container">
            <div class="grid-x grid-padding-x align-center">
                <div class="large-8 text-center cell">
                    <br>
    			    <p><?php _e( "Sorry, there is nothing. Please, try again!", 'support' ); ?></p>
                </div>
            </div>
        </div>
<?php endif; ?>
    </section>
<?php get_footer(); ?>
=======
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
		<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>

	<?php endif; ?>

	<?php
	if ( function_exists( 'foundationpress_pagination' ) ) :
		foundationpress_pagination();
	elseif ( is_paged() ) :
	?>
		<nav id="post-nav">
			<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
			<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
		</nav>
	<?php endif; ?>
	
	</main>
<?php get_sidebar(); ?>

</div>

<?php get_footer();
>>>>>>> upstream/master
