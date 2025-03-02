<?php
  
//    if(have_post()):

//     while(have_post()): the_post();


//    endwhile;

// else: 
// endif;

 if(have_posts()):
    while( have_posts()) : the_post();
    the_content();
    wp_link_pages();
 endwhile;
endif;             
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="nav-previous alignleft"><?php next_posts_link( 'older posts' );  ?></div>
    <div class="nav-next alignright"><?php previous_posts_link( 'Newer Posts' ) ?></div>

    <?php _e("Sorry no post matched your criteria, try again!");  ?>



</body>
</html>