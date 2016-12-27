<?php
/**
 * author:      Skylar Kong
 * version:     1.0.0
 * created:     27.12.2016
 *
 */

function kassavirtanen_scripts_style() {

    $parent_style = 'twentysixteen';
    $child_style = 'twentysixteen-child';

    $kassavirtanen_version = wp_get_theme() -> get('Version');


    // Parent style
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );

    // Enqueue child theme stylesheet
    wp_enqueue_style( 'twentysixteen-child',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        $kassavirtanen_version
    );

    // Enqueue child theme main stylesheet
    wp_enqueue_style( 'twentysixteen-main',
        get_stylesheet_directory_uri() . '/assets/stylesheet/main.css',
        array( $child_style ),
        $kassavirtanen_version
    );
}

add_action( 'wp_enqueue_scripts', 'kassavirtanen_scripts_style' );

?>