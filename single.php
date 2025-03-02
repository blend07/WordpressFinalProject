<?php


get_header(); ?>

<div class="container">
     <div class="page_content">
        <section class="site-main">            
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'content', 'single' ); ?>
                    <span class="left"><?php previous_post_link(); ?></span>    <span class="right"><?php next_post_link(); ?></span>
                    <?php
                    
                    if ( comments_open() || '0' != get_comments_number() )
                    	comments_template();
                    ?>
                <?php endwhile; ?>          
         </section>       
        <?php get_sidebar();?>
       
        <div class="clear"></div>
    </div>
</div>
<?php get_footer(); ?>