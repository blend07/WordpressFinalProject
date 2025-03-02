<?php
 
    get_header(); 

?>

 <div class="row">

   <?php get_search_query(); ?> 

  <?php

  if(have_posts()): ?>

  <?php
    while(have_posts()): the_post();

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
    <p class="card-text"><?php the_content(); ?></p>
    <a class="btn btn-primary" href="<?php the_permalink(); ?>">Read More</a>
  </div>


  </div>



<?php
  
  endwhile;
endif;

?>
</div>




<?php
 
    get_footer();

?>