<?php

$actions = [
    'filter',
];

foreach($actions as $action){
    add_action('wp_ajax_'.$action, $action);
    add_action('wp_ajax_nopriv_'.$action, $action);
}

function filter(){

    $args['post_type'] = 'post';
    $args['posts_per_page'] = 15;
    $args['orderby'] = 'date';
    $args['order'] = 'DESC';

    if($_GET['filter']){
        $args['tax_query'] = [
            [
                'taxonomy' => 'category',
                'field' => 'id',
                'terms' => $_GET['filter'],
            ]
        ];
    }

    $wp_query = new WP_Query($args);

    while($wp_query->have_posts()): $wp_query->the_post();

        get_template_part('parts/news');

    endwhile;
    wp_reset_postdata();

    die();
}
