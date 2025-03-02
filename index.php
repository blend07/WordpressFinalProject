<?php


get_header(); 
?>
<?php if ( 'page' == get_option( 'show_on_front' ) && ( '' != get_option( 'page_for_posts' ) ) && $wp_query->get_queried_object_id() == get_option( 'page_for_posts' ) ) : ?>

<div class="container">
  <div class="page_content">
    <section class="site-main">
      <div class="blog-post">
        <?php
                    if ( have_posts() ) :
                        
                        while ( have_posts() ) : the_post();
                            
                            get_template_part( 'content', get_post_format() );
                    
                        endwhile;
						
						the_posts_pagination( array(
							'mid_size' => 2,
							'prev_text' => __( 'Back', 'skt-towing' ),
							'next_text' => __( 'Onward', 'skt-towing' ),
							'screen_reader_text' => __( 'Posts navigation', 'skt-towing' )
						) );
                    else :
                        
                         get_template_part( 'no-results', 'index' );
                    
                    endif;
                    ?>
      </div>
      
    </section>
    <?php get_sidebar();?>
    <div class="clear"></div>
  </div>
  
</div>

<?php else: ?>
<div class="clear"></div>
<section class="menu_page" id="latestpost">
  <div class="container">
    <div>
      <h2 class="section_title">
        <?php esc_attr_e('Latest Bikes','skt-towing'); ?>
        <span></span></h2>
      <?php
	  $p = 0;
	  $args = array('post__not_in' => get_option('sticky_posts'), 'orderby' => 'date', 'order' => 'desc', 'paged' => get_query_var('paged') );
	  $postquery = new WP_Query( $args );
	  ?>
      <?php while( $postquery->have_posts() ) : $postquery->the_post(); ?>
      <?php $p++; ?>
      <div class="news-box <?php if( $p%3==0 ){?>last<?php } ?>">
        <div class="news-thumb"> <a href="<?php the_permalink(); ?>">
          <?php if( has_post_thumbnail() ) { ?>
          <?php the_post_thumbnail(); ?>
          <?php } else {  ?>
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/img_404.png" />
          <?php } ?>
          </a>
          <div class="date-news"><span><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( "ID" ) )) ; ?>"><?php echo get_the_author_link(); ?></a></span> <span class="byadmin-home"><?php echo get_the_time('M d,Y'); ?></span> </div>
        </div>
        <div class="news"> <a href="<?php the_permalink(); ?>">
          <h4>
            <?php the_title(); ?>
          </h4>
          </a> <?php the_excerpt(); ?> <div class="spacenews"></div><a href="<?php the_permalink(); ?>" class="read-more">
          <?php esc_attr_e('Read More','skt-towing');?>
          </a> </div>
      </div>
      <?php if( $p%3==0 ){?>
      <div class="clear"></div>
      <?php } ?>
      <?php endwhile; ?>
      <?php 

	the_posts_pagination( array(
		'mid_size' => 2,
		'prev_text' => __( 'Back', 'skt-towing' ),
		'next_text' => __( 'Onward', 'skt-towing' ),
		'screen_reader_text' => __( 'Posts navigation', 'skt-towing' )
	) );
	?>
    </div>
   
    <div class="clear"></div>
  </div>
  
</section>
<?php endif; ?>
<?php get_footer(); ?>