<?php
/* Plugin Name: Remove images from content
 * Plugin URI: https://github.dev/lupetalo/no-images-in-content
 * GitHub Plugin URI: https://github.dev/lupetalo/no-images-in-content
 * Description: Removes all images in the content. Replaces the_content filter
 * Version: 1.6
*/
}
 function remove_images( $content ) {
   $postOutput = preg_replace('/<img[^>]+./','', $content);
   return $postOutput;
}
add_filter( 'the_content', 'remove_images', 100 );