<?php

?>

<div id="sidebar">
  <?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
  <h3 class="widget-title">
    <?php esc_html_e( 'Archives', 'skt-towing' ); ?>
  </h3>
  <aside id="archives" class="widget">
    <ul>
      <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
    </ul>
  </aside>
  <h3 class="widget-title">
    <?php esc_html_e( 'Meta', 'skt-towing' ); ?>
  </h3>
  <aside id="meta" class="widget">
    <ul>
      <?php wp_register(); ?>
      <li>
        <?php wp_loginout(); ?>
      </li>
      <?php wp_meta(); ?>
    </ul>
  </aside>
  <?php endif; // end sidebar widget area ?>
</div>
<!-- sidebar -->