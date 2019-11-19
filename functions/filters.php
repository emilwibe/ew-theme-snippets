<?php
  //THE EXCERPT
  add_filter('excerpt_length', function($length) {
    return 20;
  });

  add_filter('excerpt_more', function($more){
    return '...';
  });

  //ALLOW WEBP IMAGE FORMAT UPLOAD
	function webp_upload_mimes( $existing_mimes ) {
		// add webp to the list of mime types
		$existing_mimes['webp'] = 'image/webp';

		// return the array back to the function with our added mime type
		return $existing_mimes;
	}
	add_filter( 'mime_types', 'webp_upload_mimes' );