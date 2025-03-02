<?php

function add_script(){

    wp_enqueue_style("style", get_template_directory_uri()."./style.css",false, "1.0", "all");
    wp_enqueue_script("main", get_template_directory_uri()."./js/main.js",array('jquery'), "1.0");
    wp_enqueue_style("main", get_template_directory_uri()."./css/main.css",false, "1.0", "all");
    wp_enqueue_style("bootstrap.min", get_template_directory_uri()."./css/bootstrap.min.css",false, "1.0", "all");
    wp_enqueue_script("bootstrap.bundle.min", get_template_directory_uri()."./js/bootstrap.bundle.min.js",false, "1.0", "all");
}

add_action("wp_enqueue_scripts","add_script");

    function ds_menu(){
        add_theme_support('menus');
        register_nav_menu('primary', "Primary menu");

    }

    add_action("init", "ds_menu");

    add_theme_support("post-thumbnails");

    function ds_theme_init(){
        register_sidebar(array(
            "name" => "__(Primary Sidebar, 'DSTHEME')",
            "id" => "sidebar-1",
            "before_widget"  => '<aside id= "%1$s" class="widget %2$s" >',
            "after_widget" => '</aside>',
            "before_title" => '<h2 class="widget-title">',
            "after_title" => '</h2>'
        ));
    }

    add_action('widgets_init', 'ds_theme_init');


    // Metoda e pare
    // function create_post_type(){
    //     register_post_type('movies',
    //     array(
    //         'labels' => array(
    //             'name' => __('Movies'),
    //             'singular_name' => __('Movie')
    //         ),
    //         'public' => true,
    //         'has_archive' => true,
    //         'rewrite' => array('slug' => 'movies'),
    //         'show_in_rest' => true,
    //         'supports' => array('title','editor', 'thumbnail', 'comments')
    //     )
        
    //     );

        
    // }

    // add_action('init' , 'create_post_type');

    // flush_rewrite_rules();

    function create_post_type2(){
        $labels = array(
            'name' => _x('Movies', 'post type general name'),
            'singular_name' => _x('Movie', 'post type singular name'),
            'add_new' => __('Add New'),
            'add_new_item' => __('Add New Movie'),
            'edit_item' => __('Edit Movie'),
            'new_item' => __('New Movie'),
            'all_item' => __('All Movies'),
            'view_item' => __('View Movie'),
            'search_items' => __('Search Movies'),
            'not_found' => __('No movies found'),
            'not_found_in_trash' => __('No movies found in the trash'),
            'parent_item_colon' => '',
            'menu_name' => 'Movies'
        );

        $args = array(
            'labels' => $labels,
            'description' => 'Movie details',
            'public' => true,
            'menu_position' => 5,
            'supports' => array('title', 'editor', 'thumbnail', 'comments'),
            'has_archive' => true

        );
        
        register_post_type('movie', $args);
    }

    add_action('init', 'create_post_type2');

    flush_rewrite_rules();


    function movies_taxonomy(){
        $args = [
            'labels' => array(
                'name' => ('Movie Genres'),
                'singular_name' => ('Movie Genre'),
                'add_new_item' => ('Add new movie genre'),
                'edit_name' => ('Edit Movie Genres')

            ),

            'public' => true,
            'hierarchical' => true
        ];

        register_taxonomy(
            'type', array('movie'), $args
        );
    }

    add_action('init', 'movies_taxonomy');
    

?>