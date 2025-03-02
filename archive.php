<?php
/* Template Name: Archive */

get_header(); ?>

<div class="container">
     <div class="page_content">
        <section class="site-main">
			<?php if ( have_posts() ) : ?>
                <header class="page-header" >
                    <h1 class="entry-title" >
                        <?php
                            if ( is_category() ) :
                                single_cat_title();

                            elseif ( is_tag() ) :
                                single_tag_title('Tag: ');

                            elseif ( is_author() ) :
                               
                                the_post();
                                printf( esc_attr__( 'Author: %s', 'skt-towing' ), '<span class="vcard">' . get_the_author() . '</span>' );
                                
                                rewind_posts();

                            elseif ( is_day() ) :
                                printf( esc_attr__( 'Day: %s', 'skt-towing' ), '<span>' . get_the_date() . '</span>' );
    
                            elseif ( is_month() ) :
                                printf( esc_attr__( 'Month: %s', 'skt-towing' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );
    
                            elseif ( is_year() ) :
                                printf( esc_attr__( 'Year: %s', 'skt-towing' ), '<span>' . get_the_date( 'Y' ) . '</span>' );
    
                            elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
                                esc_html_e( 'Asides', 'skt-towing' );
    
                            elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
                                esc_html_e( 'Images', 'skt-towing');
    
                            elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
                                esc_html_e( 'Videos', 'skt-towing' );
    
                            elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
                                esc_html_e( 'Quotes', 'skt-towing' );
    
                            elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
                                esc_html_e( 'Links', 'skt-towing' );
    
                            else :
                                esc_html_e( 'Archives', 'skt-towing' );
    
                            endif;
                        ?>
                    </h1>
                    <?php
                       
                        $term_description = term_description();
                        if ( ! empty( $term_description ) ) :
                            printf( '<div class="taxonomy-description">%s</div>', esc_attr($term_description) );
                        endif;
                    ?>
                </header>
				<?php get_search_query(); ?> 

  <?php

$args = [
  "posts_type" => "post",
 
 
];

$query = new WP_Query($args);


  if($query->have_posts()): ?>

  <?php
    while($query->have_posts()): $query->the_post();

  ?>
  <div class="card mb-3">

    <?php
      
      if(has_post_thumbnail()){ ?>

      <img style="width:200px; height:200px;" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" alt="">

      <?php
      } else{
      ?>

<img style="width:200px; height:200px;" src="<?php bloginfo("template_directory");?> ./images/1.png" alt="">



<?php
      }
?>

  <div class="card-body">
    <h5 class="card-title"><?php the_title(); ?></h5>
    <a class="btn btn-primary" href="<?php the_permalink(); ?>">Read More</a>
  </div>


  </div>



<?php
  
  endwhile;
endif;

?>
                <?php  
				// Previous/next post navigation.
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
    </div><!-- site-aligner -->
</div><!-- container -->

<div class="row">

   
</div>
	
<?php get_footer(); ?>