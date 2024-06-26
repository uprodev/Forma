<?php

include 'inc/enqueue.php';     // add styles and scripts
include 'inc/acf.php';         // custom acf functions
include 'inc/extras.php';      // custom functions
include 'inc/cpt.php';         // custom ajax register and auth
include 'inc/ajax-actions.php';// ajax actions


add_action('after_setup_theme', 'theme_register_nav_menu');


function theme_register_nav_menu(){
	register_nav_menus( array(
        'main-menu' => 'header',
        'footer-menu1'  => 'footer1',
        'footer-menu2'  => 'footer2',
        'footer-bottom'  => 'footer-bottom',
       )
    );
	add_theme_support( 'post-thumbnails'); 
}



if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();

	acf_add_options_sub_page('Theme Settings');
}


add_filter('wpcf7_autop_or_not', '__return_false');


function cq_register_blocks() {
    if( ! function_exists('acf_register_block') )
        return;
    acf_register_block( array(
        'name'          => 'two_images',
        'title'         => 'Two Images',
        'render_template'   => 'parts/two-images.php',
        'category'      => 'common',
        'icon'          => 'format-gallery',
        'mode'          => 'edit',
        'keywords'      => array( 'profile', 'user', 'author' )
    ));
}
add_action('acf/init', 'cq_register_blocks' );

