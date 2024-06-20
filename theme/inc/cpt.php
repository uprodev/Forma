<?php

add_action( 'init', 'register_post_types' );

function register_post_types(){

    register_post_type( 'sectors', [
        'label'  => null,
        'labels' => [
            'name'               => 'sectors',
            'singular_name'      => 'Sector',
            'menu_name'          => 'Sectors',
        ],
        'description'            => '',
        'public'                 => true,
        'show_in_menu'           => null,
        'show_in_rest'        => null, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => null,
        'menu_icon'           => 'dashicons-layout',
        'hierarchical'        => false,
        'supports'            => [ 'title', 'thumbnail', 'page-attributes' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => [],
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ] );

}