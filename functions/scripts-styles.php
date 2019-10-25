<?php
  //SCRIPTS AND STYLES
  add_action('wp_enqueue_scripts', function(){
    wp_enqueue_style('core-styles', get_template_directory_uri() . '/dist/css/core.css');
    wp_enqueue_script('scripts-footer', get_template_directory_uri() . '/dist/js/scripts-footer.js', '', '', true);
    wp_enqueue_script('particles-js', get_template_directory_uri() . '/dist/js/particles.js', '', array('scripts-footer'), true);
  });