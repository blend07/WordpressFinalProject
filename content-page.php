<?php

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <h1 class="entry-title">
      <?php the_title(); ?>
    </h1>
  </header>
  <!-- .entry-header -->
  
  <div class="entry-content">
    <?php the_content(); ?>
    <?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_attr__( 'Pages:', 'skt-towing' ),
				'after'  => '</div>',
			) );
		?>
  </div>
  <!-- .entry-content -->
  <?php edit_post_link( esc_attr__( 'Edit', 'skt-towing' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
</article>
<!-- #post-## --> 