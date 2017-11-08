<?php

get_header();

if(have_posts()) :
    while(have_posts()) : the_post();
        if (in_category('blog')) get_template_part( 'template-parts/single-blog' );
        elseif (in_category('faq')) get_template_part( 'template-parts/single-faq' );
        else {
            echo "Hello single !";
            //echo '<pre>'; print_r($post);
            /* Debug des custom_post
            global $post;
            setup_postdata( $post );
            var_dump($post); */
        }
    endwhile;
endif;
wp_reset_query();

<<<<<<< HEAD
get_footer();

?>
=======
<div class="main-wrap">
	<main class="main-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', '' ); ?>
			<?php the_post_navigation(); ?>
			<?php comments_template(); ?>
		<?php endwhile;?>
	</main>
<?php get_sidebar(); ?>
</div>
<?php get_footer();
>>>>>>> upstream/master
