<?php
  $is_front_page = get_option('spa_theme_options');
  if ( 'posts' == get_option( 'show_on_front') && $is_front_page['front_page'] != 'yes' ) {
  get_template_part('index');
  }
  else { 
  get_header(); 
  get_template_part('index', 'slider') ;
  get_template_part('index', 'home');
  get_footer();
  }
  ?>