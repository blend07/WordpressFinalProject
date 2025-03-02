<?php


    /* Template name: About me */
 
  get_header();


?>

<?php

    $title = get_field("page_name");
    $area = get_field("page_area");
    $image = get_field("image")

?>


<div class="container">


     
      <?php


      if(have_posts()):
        while(have_posts()):the_post();



      ?>


     <h2> <?php echo $title; ?> </h2>
     <p> <?php echo $area; ?> </p>
     <p> <?php echo $image; ?> </p>







      <?php
      endwhile;
      endif;


      ?>


</div>




<?php


   get_footer();


?>   