<?php
/*
Plugin Name: Image Compressor
Plugin URI: http://manulthanura.com/
Description: Compresses WEBP, JPEG, and PNG images to improve website load times.
Version: 1.0
Author: Manul Thanura
Author URI: http://manulthanura.com/
*/

add_filter('wp_handle_upload', 'compress_uploaded_images');

function compress_uploaded_images($file) {
    if ($file['type'] == 'image/jpeg' || $file['type'] == 'image/png' || $file['type'] == 'image/webp') {
        $image = new Imagick($file['file']);
        $image->setImageCompressionQuality(75); // Set the compression quality here
        $image->writeImage($file['file']);
    }
    return $file;
}
