<?php

get_header();

if(have_posts()) : while(have_posts()) : the_post() ?>
            <?php the_title('<h1>','</h1>'); ?>
            <?php if ( is_single() && 'post' == get_post_type() ): ?>
                <?php the_content(); ?>
                <?php if (comments_open() || get_comments_number() ): ?> 
                    <?php comments_template(); ?>
                <?php endif; ?>                     
            <?php else: ?>
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>">lees meer</a>
            <?php endif; ?>
        <?php endwhile; endif;
	
get_footer();

?>

