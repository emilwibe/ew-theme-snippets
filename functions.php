<?php
  add_theme_support('title-tag');

  //SCRIPTS AND STYLES
  add_action('wp_enqueue_scripts', function(){
    wp_enqueue_style('core-styles', get_template_directory_uri() . '/dist/css/core.css');
    wp_enqueue_script('scripts-footer', get_template_directory_uri() . '/dist/js/scripts-footer.js', '', '', true);
    wp_enqueue_script('particles-js', get_template_directory_uri() . '/dist/js/particles.js', '', array('scripts-footer'), true);
  });

add_filter( 'excerpt_length', function($length) {
    return 20;
} );

  //REGISTER MENUS
  add_action('after_setup_theme', function(){
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