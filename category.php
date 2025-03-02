<?php


get_header(); ?>

<div class="container">
     <div class="page_content">
        <section class="site-main">
            <header class="page-header">
				<h1 class="entry-title"><?php single_cat_title( esc_attr_e('Category: ', 'skt-towing') ); ?></h1>
            </header>
			<?php if ( have_posts() ) : ?>
                <div class="blog-post">
                    <?php /* Start the Loop */ ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php get_template_part( 'content', get_post_format() ); ?>
                    <?php endwhile; ?>
                </div>
                <?php  
				
				the_posts_pagination( array(
							'mid_size' => 2,
							'prev_text' => __( 'Back', 'skt-towing' ),
							'next_text' => __( 'Onward', 'skt-towing' ),
							'screen_reader_text' => __( 'Posts navigation', 'skt-towing' )
				) );
			    ?>
            <?php else : ?>
                <?php get_template_part( 'no-results', 'archive' ); ?>
            <?php endif; ?>
       </section>
       <?php get_sidebar();?>       
        <div class="clear"></div>
    </div>
</div>

<?php get_footer(); ?>