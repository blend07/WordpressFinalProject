<?php
 
  get_header();

?>


<div class="container">

     
      <?php

      if(have_posts()):
        while(have_posts()):the_post();


      ?>

      <article id="post" <?php the_ID(); ?> class=<?php post_class(); ?> >

     <h2> <?php the_title(); ?> </h2>
     <p> <?php the_content(); ?> </p>

     <div>
        <?php the_post_thumbnail('medium'); ?> <!-- array(width,height) or 'medium' , 'large'..  -->
     </div>

     <small> <?php the_category(); edit_post_link();  ?> </small>

     
     <?php
        if(comments_open()){
            comments_template();
        }
        else{
            echo "Komentet nuk i kemi te lejuara";     
        }

      ?>

      </article>





      <?php
      endwhile;
      endif;

      ?>



</div>







<?php

   get_footer();

?>   