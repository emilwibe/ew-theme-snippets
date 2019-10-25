<?php
  //THE EXCERPT
  add_filter('excerpt_length', function($length) {
    return 20;
  });

  add_filter('excerpt_more', function($more){
    return '...';
  });