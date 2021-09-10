<?php 
function register_my_menu(){
    register_nav_menu( 'main-menu', 'Menu principal' );
  }
  add_action( 'after_setup_theme', 'register_my_menu' );

  add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_style( 'style', get_stylesheet_uri()); 
  });


?>