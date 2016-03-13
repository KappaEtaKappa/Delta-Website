<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require("../wp-load.php");
include( '../wp-admin/includes/image.php' );
$json = file_get_contents("people.json");
$json = json_decode($json);
foreach ($json as $person){
	echo $person->Name . "<BR>";
	$post = array(
	  'post_title'     => $person->Name,
	  'post_type'      => "person",
	  // 'post_category'  => array($person->Role),
	  'post_status'    => "publish"
	);  
	echo $name;
	$id = wp_insert_post($post);
	foreach ($person as $key => $value){
		add_post_meta($id, $key, $value);
	}
	wp_set_post_terms($id,array($person->Role),"status");

	if ($person->Image){
	//ADD THEIR PHOTO
	$filename = substr($person->Image,strrpos($person->Image, "/")+1);
	$filename = urldecode($filename);
	$url = "../wp-content/uploads/".$filename;
	file_put_contents("../wp-content/uploads/".$filename, fopen($person->Image, 'r'));
	// $wp_filetype = wp_check_filetype(basename($filename), null );
	// $attachment = array(
	// 'post_mime_type' => $wp_filetype['type'],
	// 'post_title' => preg_replace('/\.[^.]+$/', '', basename($filename)),
	// 'post_content' => '',
	// 'post_status' => 'inherit'
	// );
	// $attach_id = wp_insert_attachment( $attachment, $filename, $id );
	// // $attach_data = wp_generate_attachment_metadata( $attach_id, $filename );
	// // wp_update_attachment_metadata( $attach_id, $attach_data );


  $wp_filetype = wp_check_filetype(basename($filename), null );
  $wp_upload_dir = wp_upload_dir();
  $attachment = array(
     'guid' => $wp_upload_dir['url'] . '/' . basename( $filename ), 
     'post_mime_type' => $wp_filetype['type'],
     'post_title' => preg_replace( '/\.[^.]+$/', '', basename( $filename ) ),
     'post_content' => '',
     'post_status' => 'inherit'
  );
  $attach_id = wp_insert_attachment( $attachment, $filename, $id );
  // you must first include the image.php file
  // for the function wp_generate_attachment_metadata() to work
  // require_once( ABSPATH . 'wp-admin/includes/image.php' );
  $attach_data = wp_generate_attachment_metadata( $attach_id, $url );
  wp_update_attachment_metadata( $attach_id, $attach_data );
  add_post_meta($id, '_thumbnail_id', $attach_id, true);




		
	}


// $cur_post_id = wp_insert_post( $my_post );

// $filename = "/path/to/local/file.png";

// $wp_filetype = wp_check_filetype(basename($filename), null );
// $attachment = array(
// 	'post_mime_type' => $wp_filetype['type'],
// 	'post_title' => preg_replace('/\.[^.]+$/', '', basename($filename)),
// 	'post_content' => '',
// 	'post_status' => 'inherit'
// );
// $attach_id = wp_insert_attachment( $attachment, $filename, $cur_post_id );





}

// echo $id;
// $post = get_post($id);
// print_r($post);
?>