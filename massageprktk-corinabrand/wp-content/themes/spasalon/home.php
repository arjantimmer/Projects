<?php
  $is_front_page = get_option('spa_theme_options');
  if ( $is_front_page['front_page'] != 'yes' ) {
  get_template_part('index');
  }
  else { 
  get_header(); 
  get_footer();
  }
  ?>