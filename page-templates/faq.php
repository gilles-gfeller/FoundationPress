<?php
/*
Template Name: FAQ
*/
?>

<?php get_header(); ?>

	<?php if(have_posts()) : ?>
	<?php while(have_posts()) : the_post(); ?>
		
  <div data-sticky-container>
    <section id="header-manuel" data-sticky data-options="marginTop:0;" style="width:100%; z-index:777" data-top-anchor="header-manuel:top" data-btm-anchor="content:bottom">
      <div class="grid-container" >
          <div class="grid-x grid-padding-x align-center">
            <div class="large-8 medium-10 cell">
              <div class="clearfix">
                <div class="float-left">
                  <h1><?php the_title(); ?></h1>
                </div>
                <div class="float-right">
                  <table style="margin-bottom: 0px;">
                    <tbody style="background: none; border:none;">
                      <tr>
                        <td style="padding: 0px;">
                          <a data-open="modalSearch" class="show-for-small-only">
                            <i class="fa fa-search" aria-hidden="true"></i>
                          </a>
                            <form role="search" id="searchform-manuals" method="get" class="search-form hide-for-small-only" action="<?php bloginfo('home'); ?>/">
                              <label>
                                <input type="search" class="search-field" name="s" id="s" placeholder="<?php _e( 'search in the FAQ', 'support' ); ?>" value="<?php echo $_GET['s']; ?>" title="<?php _e( 'search by keywords', 'support' ); ?>" />
                              </label>
                              <input type="submit" class="search-submit" value="<?php _e( 'search in the FAQ', 'support' ); ?>" />
                              <input type="hidden" name="searchselect" value="faq" />
                            </form>   
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
  </div>
  
    <section id="content">
      <div class="grid-container">
        <div class="grid-x grid-padding-x align-center">
          <div class="large-8 medium-10 cell" style="padding-top: 2em;">

                  <?php the_content(); ?>
                  <?php endwhile; ?>
                  <?php endif; ?>                		
  
<!-- faq/generalites -->
                  <?php wp_reset_query(); ?>
                  <?php  query_posts( array(
                      'cat'=>'6',
                      'orderby' => 'date',
                      'order' => 'ASC', )
                      ) ;
                  ?>
                  <h3><?php _e( 'cresus', 'support' ); ?> <?php _e( 'general', 'support' ); ?></h3>
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

<!-- faq/cresus-comptabilite -->
                  <?php wp_reset_query(); ?>
                  <?php  query_posts( array(
                      'cat'=>'7',
                      'orderby' => 'date',
                      'order' => 'ASC', )
                      ) ;
                  ?>
                  <h3><?php _e( 'cresus', 'support' ); ?> <?php _e( 'accounting', 'support' ); ?></h3>
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

<!-- faq/cresus-salaires -->
                  <?php wp_reset_query(); ?>
                  <?php  query_posts( array(
                      'cat'=>'8',
                      'orderby' => 'date',
                      'order' => 'ASC', )
                      ) ;
                  ?>
                  <h3><?php _e( 'cresus', 'support' ); ?> <?php _e( 'salaries', 'support' ); ?></h3>
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

<!-- faq/cresus-facturation -->
                  <?php wp_reset_query(); ?>
                  <?php  query_posts( array(
                      'cat'=>'9',
                      'orderby' => 'date',
                      'order' => 'ASC', )
                      ) ;
                  ?>
                  <h3><?php _e( 'cresus', 'support' ); ?> <?php _e( 'invoicing', 'support' ); ?></h3>
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

                </div>
            </div>
        </div>
    </section>    
    
<?php get_footer(); ?>