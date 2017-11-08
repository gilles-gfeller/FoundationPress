<<<<<<< HEAD
<?php get_header(); ?>

<?php if ( have_posts() ) : ?>

    <section id="hero">
      <div class="grid-x align-center">
        <div class="large-8 cell">
    			<h1><?php _e( 'search result', 'support' ); ?></h1>
        </div>
      </div>
    </section>   

    <section id="result">
        <div class="grid-container">
          <br>
          <div class="grid-x grid-padding-x">
            <div class="medium-4 cell">
              <?php get_sidebar(); ?>
            </div>
            <div class="medium-8 cell">
            <?php while(have_posts()) : the_post(); ?>
            <article>
              <?php if (in_category('blog')){ ?>
                <div style="float: left; width:30%; margin-right: 2em;">
                  <?php if ( has_post_thumbnail() ) { the_post_thumbnail();
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

                <?php the_excerpt(); ?>

                <?php if(get_the_tag_list()) {
                  echo '<div class="tags-wrapper">';
                  echo '<h5>';
                  _e( 'tags', 'support' );
                  echo '</h5>';
                  echo get_the_tag_list('<ul class="etiquettes"><li data-tooltip aria-haspopup="true" data-trigger-class="" data-disable-hover="false" tabindex="1" title="Afficher tous les articles qui possèdent la même étiquette">','</li><li data-tooltip data-trigger-class="" aria-haspopup="true" class="" data-disable-hover="false" tabindex="1" title="Afficher tous les articles qui possèdent la même étiquette">','</li></ul>');
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
          <div class="grid-x grid-padding-x">
            <div class="small-12 text-center cell">
              <h2><?php _e( 'new search', 'support' ); ?></h2>
              <?php get_search_form(); ?>
              <a href="#" class="adveced-search"><i class="fa fa-angle-down" aria-hidden="true"></i> <?php _e( 'advanced search', 'support' ); ?></a>
            </div>
          </div>
        </div>
    </section>
    
<?php else : ?>

    <section id="hero">
        <div class="grid-container">
          <div class="grid-x align-center">
            <div class="large-8 small-centered columns">
        			<h1><?php _e( 'no result', 'support' ); ?></h1>
            </div>
          </div>
          <div class="grid-x grid-padding-x align-center">
            <div class="small-12 cell text-center">
              <p><?php _e( "Sorry, there is nothing. Please, try again!", 'support' ); ?></p>
              <?php get_search_form(); ?>
              <a href="#" class="adveced-search"><i class="fa fa-angle-down" aria-hidden="true"></i> <?php _e( 'advanced search', 'support' ); ?></a>
            </div>
          </div>
        </div>
    </section>

    
<?php endif; ?>

<?php get_footer(); ?>
=======
<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div class="main-wrap">
	<main class="main-content">
	<?php if ( have_posts() ) : ?>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
		<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; // End have_posts() check. ?>

		<?php /* Display navigation to next/previous pages when applicable */ ?>
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
