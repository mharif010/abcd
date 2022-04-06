<?php
/**
 * Plugin Name: ABCD Plugin
 * Plugin URI: https://github.com/abcd
 * Description: This is an Abcd WP plugin that utilizes Abcd for licensing.
 * Version: 1.0.0
 * Author: Abcd
 * Author URI: https://Abcd.sh
 * License: GPL
 */

if (!defined("ABSPATH")) {
  exit; // Exit if accessed directly
}

function add_files_scripts() {
  
  wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/style.css', array(), '1.1', 'all');
  
  wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/script.js', array ( 'jquery' ), 1.1, true);
  
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
      wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'add_files_scripts' );

// function that runs when shortcode is called
function Abcd_template_shortcode() { 
  
// Things that you want to do.
$message = ''; 
$message .='<form action="" method="">';
$message .='<input type="text" placeholder="enter text here"><button type="submit">Submit</submit>';
$message .='</form>';
  
// Output needs to be return
return $message;
}
// register shortcode
add_shortcode('abcd_form', 'Abcd_template_shortcode');