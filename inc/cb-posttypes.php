<?php

/*

function cb_register_post_types() {

    $labels = [
        "name" => __( "Stories", "cb-gaffsy" ),
        "singular_name" => __( "Story", "cb-gaffsy" ),
    ];

    $args = [
        "label" => __( "Stories", "cb-gaffsy" ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "menu_icon" => "dashicons-format-quote",
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        // "rewrite" => [ "slug" => "stories", "with_front" => false ],
        "query_var" => true,
        "supports" => [ "title",  "thumbnail", "editor" ],
        "show_in_graphql" => false,
        "exclude_from_search" => true
    ];

    register_post_type( "stories", $args );

}

// add_action( 'init', 'cb_register_post_types' );

add_action( 'after_switch_theme', 'cb_rewrite_flush' );
function cb_rewrite_flush() {
    cb_register_post_types();
    flush_rewrite_rules();
}

*/