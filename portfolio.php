<?php
    /*
        Template Name: Portfolio
    */
?>
<?php get_header();?>
<h1>This Is Portfolio Template</h1>
<?php

    $args = [
        "posts_per_page" => 4,
        // "category_name" => "sports"
         "category_in" => [3,4]
       // "cat" => 3
    ];

    $query = new WP_Query($args);

if($query -> have_posts() ):
    while($query -> have_posts() ):$query-> the_post();?>
        <h1><?php the_title(); ?></h1>
        <p><?php the_content();?></p>
        <small><?php the_date(); ?></small>
        <br>
    <?php endwhile;
endif;
?>

<?php get_footer(); ?>