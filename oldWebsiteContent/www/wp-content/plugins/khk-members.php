<?php
/**
 * @package KHK_Directory
 * @version 1.0
 */
/*
Plugin Name: KHK Directory
Depends: SuperCPT
Description: Creates a "Person" Custom Post Type for all KHK alumni/members/pledges.
Author: Lucas Mullens
Version: 1.0
Author URI: http://lucasmullens.com/
*/


function KHK_Directory() {
    if ( ! class_exists( 'Super_Custom_Post_Type' ) )
        return;
    $people = new Super_Custom_Post_Type( 'person' , "Person", "People", array(
      'supports' => array("title", "thumbnail", "category"),
      'has_archive'=>true,
      'rewrite' => array(
              'slug'=>'directory',
              'with_front'=> false,
          )
      ));
    $status = new Super_Custom_Taxonomy( 'status', 'Status', 'Statuses', 'statuses');
    connect_types_and_taxes( $people, array($status ) );
    $people->set_icon( 'user' );
    $people->add_meta_box( array(
        'id'      => 'Information',
        'context' => 'normal',
        'fields'  => array(
            'Major'        => array(),
            'Graduating Class'        => array(),
            'E-Mail'        => array(),
            'Web Site'        => array(),
            'Home Town'        => array(),
            'Birthday'        => array(),
            'Current Office(s) Held'        => array(),
            'Past Office(s) Held'        => array(),
            'Interests'        => array(),
            'Goals'        => array(),
            'Best Things about KHK'        => array(),
            // 'Role'        => array()
        )
    ) );
}
add_action( 'after_setup_theme', 'KHK_Directory' );

?>
