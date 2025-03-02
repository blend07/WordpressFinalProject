<?php
    /*
        Template Name: New Page
    */
?>
<?php get_header();?>
<h1>This Is New Page</h1>
<?php

    $args = [
        "posts_per_page" => 3,
       // "category_name" => "sports"
        "category_in" => [7,3,5]
    ];

    $query = new WP_Query($args);

if($query -> have_posts() ):
    while($query -> have_posts() ):$query-> the_post();?>
        <h1><?php the_title(); ?></h1>
        <p><?php the_content();?></p>
        <small><?php the_date(); ?></small>
        <hr>
        <br>
    <?php endwhile;
endif;
?>


<?php

get_sidebar();

?>

<?php get_footer(); ?>