<?php

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('single-post'); ?>>
  <header class="entry-header">
    <h2 class="single_title">
      <?php the_title(); ?>
    </h2>
  </header>
  
  <div class="postmeta">
    <div class="post-date"><?php echo get_the_date(); ?></div>
    
    <div class="post-comment"> &nbsp;|&nbsp; <a href="<?php comments_link(); ?>">
      <?php comments_number(); ?>
      </a></div>
    <div class="clear"></div>
  </div>
  
  <?php 
        if (has_post_thumbnail() ){
			echo '<div class="post-thumb">';
            the_post_thumbnail();
			echo '</div>';
		}
        ?>
  <div class="entry-content">
    <?php the_content(); ?>
    <?php
        wp_link_pages( array(
            'before' => '<div class="page-links">' . esc_attr__( 'Pages:', 'skt-towing' ),
            'after'  => '</div>',
        ) );
        ?>
    <div class="postmeta">
      <div class="post-categories">
        <?php the_category(', '); ?>
      </div>
      <div class="post-tags">
        <?php the_tags(', '); ?>
      </div>
      <div class="clear"></div>
    </div>
    
  </div>
  
  <footer class="entry-meta">
    
  </footer>
  
</article>