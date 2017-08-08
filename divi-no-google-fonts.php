<?php
/*
Plugin Name: Divi No Google Fonts
Plugin URI: https://github.com/mmirus/divi-no-google-fonts
Description: Dequeue Google Fonts loaded by the Divi theme (and the Monarch plugin).
Author: Matt Mirus
Author URI: https://github.com/mmirus
Version: 1.0
GitHub Plugin URI: https://github.com/mmirus/divi-no-google-fonts
*/

function divi_no_google_fonts() {
  wp_dequeue_style( 'divi-fonts' ); // dequeue Divi fonts
  wp_dequeue_style( 'et-gf-open-sans' ); // dequeue Open Sans from Monarch
}
add_action( 'wp_enqueue_scripts', 'divi_no_google_fonts', 20 );
