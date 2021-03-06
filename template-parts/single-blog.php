<section id="hero">
    <div class="grid-container">
        <div class="grid-x grid-padding-x align-center">
            <div class="large-6 cell">
    			<h1>Bulletins Crésus</h1>
            </div>
        </div>
    </div>
</section>
<br />
<section id="detail">
    <div class="grid-container">
                <div class="grid-x grid-padding-x align-center">
                        <div class="medium-8 large-6 cell">
                            <div class="wrapper">
                                <div class="date clearfix">
                                    <table>
                                        <tbody style="border: none">
                                            <tr>
                                                <?php if(ICL_LANGUAGE_CODE=='fr'): ?>
                                                    <!-- TO TRANSLATE title="<?php _e( 'previous', 'support' ); ?>" / title="<?php _e( 'next', 'support' ); ?>"-->
                                                    <td style="width: 5%; font-size: 2em;" class="text-left"><?php previous_post_link( '%link', '<i class="fa fa-angle-left" data-trigger-class="" data-tooltip aria-hidden="true" aria-haspopup="true" data-disable-hover="false" tabindex="1" title="Précédent"></i>', TRUE ); ?></td>
                                                    <td style="width: 90%" class="text-center">Bulletin N°<?php the_field('numero'); ?> - <?php the_date(); ?></td>
                                                    <td style="width: 5%; font-size: 2em;" class="text-right"><?php next_post_link( '%link', '<i class="fa fa-angle-right" data-trigger-class="" data-tooltip aria-hidden="true" aria-haspopup="true" data-disable-hover="false" tabindex="1" title="Suivant"></i>', TRUE ); ?></td>
                                                <?php else : ?>
                                                    <!-- TO TRANSLATE title="<?php _e( 'previous', 'support' ); ?>" / title="<?php _e( 'next', 'support' ); ?>"-->
                                                    <td style="width: 5%; font-size: 2em;" class="text-left"><?php previous_post_link( '%link', '<i class="fa fa-angle-left" data-trigger-class="" data-tooltip aria-hidden="true" aria-haspopup="true" data-disable-hover="false" tabindex="1" title="Früher"></i>', TRUE ); ?></td>
                                                    <td style="width: 90%" class="text-center">Bulletin N°<?php the_field('numero'); ?> - <?php the_date(); ?></td>
                                                    <td style="width: 5%; font-size: 2em;" class="text-right"><?php next_post_link( '%link', '<i class="fa fa-angle-right" data-trigger-class="" data-tooltip aria-hidden="true" aria-haspopup="true" data-disable-hover="false" tabindex="1" title="Nächste"></i>', TRUE ); ?></td>
                                                <?php endif; ?>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="img-full">
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                        <?php if ( has_post_thumbnail() ) { the_post_thumbnail();
                        	        } else { ?>
                                            <img src="<?php bloginfo('template_directory'); ?>/images/img-default.svg" alt="<?php the_title(); ?>" />
                                        <?php } ?>
                                        </a>
                                </div>
                                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                                <h3><?php the_field('sous-titre'); ?></h3>
                                <?php the_content(); ?>
                            </div>
                        </div>
                </div>
        </div>
</section>
<!--
<section id="sous-navigation">
    <div class="row text-center">
        <div class="large-12 columns clearfix">
            <div class="float-left"><?php previous_post_link( '%link', 'précédant', TRUE ); ?></div>
            <div class="float-right"><?php next_post_link( '%link', 'suivant', TRUE ); ?></div>
        </div>
    </div>
</section>
-->
<?php get_template_part( 'template-parts/subscription' ); ?>
<?php  query_posts( array(
        'category_name'  => 'Blog',
        'orderby' => 'date',
        'order' => 'DESC',
        'posts_per_page' => 4,)
        ) ;
?>
<section id="bulletin">
        <div class="grid-container">
                <div class="grid-x grid-margin-x">
                    <?php if(have_posts()) : ?>
                    <?php while(have_posts()) : the_post(); ?>
                        <div class="card cell large-3 medium-6 small-12">
                            <div class="card-image hide-for-small-only">
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
                                <a href="<?php the_permalink(); ?>" class="button more small"><?php _e( 'read more...', 'support' ); ?></a>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_query(); ?>
                </div>
                <?php
                    if(ICL_LANGUAGE_CODE=='fr') echo do_shortcode('[ajax_load_more button_label="CHARGER PLUS" button_loading_label="Chargement" category="Blog" posts_per_page="4" offset="5" pause="true" pause_override="false" scroll="false" transition_container="false" container_type="div" css_classes="grid-x grid-margin-x"]');
                    else echo do_shortcode('[ajax_load_more button_label="Mehr laden" button_loading_label="Laden" category="Blog" posts_per_page="4" offset="5" pause="true" pause_override="false" scroll="false" transition_container="false" container_type="div" css_classes="grid-x grid-margin-x"]');
                ?>
        </div>
</section>