<?php

function my_enqueue_scripts() {
    $url = esc_url( get_template_directory_uri() );
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'bundle_js', $url .'/assets/js/bundle.js', array() );
    wp_enqueue_style( 'my_styles', $url . '/assets/css/styles.css', [] );
}
add_action( 'wp_enqueue_scripts', 'my_enqueue_scripts' );