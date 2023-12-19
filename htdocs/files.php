<?php

include 'lib/load.php';
$upload_path = get_config('upload_path');
$fname = $_GET['name'];
$image_path = $upload_path . $fname;
// $image_path = str_replace('..', '', $image_path);
ob_clean(); 
if (is_file($image_path)) {
    //TODO: Lot of security things to think about here
    //TODO: Check why caching is not working on the client side.
    header("Content-Type:".mime_content_type($image_path));
    header("Content-Length: " . filesize($image_path));
    header('Cache-control: max-age=' . (60 * 60 * 24 * 365));
    header('Expires: ' . gmdate(DATE_RFC1123, time() + 60 * 60 * 24 * 365));
    // header('Last-Modified: '.gmdate(DATE_RFC1123, filemtime($path_to_image)));
    header_remove('Pragma');
    readfile($image_path);
}
?>