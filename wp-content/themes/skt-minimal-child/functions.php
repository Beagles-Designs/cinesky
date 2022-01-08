<?php
/**
* Cinesky Child functions and definitions
*
* @link http://codex.wordpress.org/Theme_Development
* @link http://codex.wordpress.org/Child_Themes
*
* @package WordPress
* @subpackage Accelerate Marketing
* @since Accelerate Marketing 2.0
*/

// Enqueue scripts and styles
function skt_minimal_child_scripts(){
	wp_enqueue_style( 'accelerate-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'accelerate-style' ));
}
add_action( 'wp_enqueue_scripts', 'skt_minimal_child_scripts' );


function create_custom_post_types() {
    register_post_type( 'project_types',
        array(
            'labels' => array(
                'name' => __( 'Project Types' ),
                'singular_name' => __( 'Project Type' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'project-types' ),
        )
    );
    register_post_type( 'cranes',
        array(
            'labels' => array(
                'name' => __( 'Cranes' ),
                'singular_name' => __( 'Cranes' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'cranes' ),
        )
    );

    register_post_type( 'additions',
        array(
            'labels' => array(
                'name' => __( 'Additions' ),
                'singular_name' => __( 'Addition' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'additions' ),
        )
    );

    register_post_type( 'remote_heads',
        array(
            'labels' => array(
                'name' => __( 'Remote Heads' ),
                'singular_name' => __( 'Remote Head' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'remote-heads' ),
        )
    );

    register_post_type( 'past_projects',
        array(
            'labels' => array(
                'name' => __( 'Past Projects' ),
                'singular_name' => __( 'Past Projects' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'past-projects' ),
        )
    );


}
add_action( 'init', 'create_custom_post_types' );

