<?php
/**
* Plugin Name: Character
* Description: a plugin to create a new character with attributes
* Version: 1.0
* Author: Tom Passow
* Author URI: http://tompassow.com/
**/


//load jquery
function insert_jquery(){
   wp_enqueue_script('jquery');
}
add_filter('wp_head','insert_jquery');



// Register Custom Post Types
add_action('init', 'register_custom_posts_init');
function register_custom_posts_init() {
    // Register Products
    $character_labels = array(
        'name'               => 'Character',
        'singular_name'      => 'Character',
        'menu_name'          => 'Characters'
    );
    $character_args = array(
        'labels'             => $character_labels,
        'public'             => true,
        'capability_type'    => 'post',
        'has_archive'        => true,
        'supports'           => array( 'characters' )
    );
    register_post_type('character', $character_args);
}



	

?>