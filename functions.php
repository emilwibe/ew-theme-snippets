<?php
  //THEME SUPPORT
  require_once('functions/theme-support');

  //SCRIPTS AND STYLES
  require_once ('functions/scripts-styles.php');



  //the_excerpt
  add_filter('excerpt_length', function($length) {
    return 20;
  });

  add_filter('excerpt_more', function($more){
    return '...';
  });
  //REGISTER MENUS
  add_action('after_setup_theme', function() {
    register_nav_menus(array(
      'nav_primary' => 'Primary'
    ));
  });

  //REGISTER WIDGETS
    add_action('widgets_init', function(){
        register_sidebar(array(
        'name' => __('Primary Widgets'),
        'id' => 'prim_widgets',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget_heading">',
        'after_title' => '</h2>'
        ));
    });