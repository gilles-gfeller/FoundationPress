<?php

get_header();

if(have_posts()) :
    while(have_posts()) : the_post();
        if (in_category('blog'))
        {
            get_template_part( 'template-parts/single-blog' );
        } elseif (in_category('faq'))
        {
            get_template_part( 'template-parts/single-faq' );
        } else {
            Hello
        }
    endwhile;
endif;
wp_reset_query();

get_footer(); ?>