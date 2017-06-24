<?php
function wpdocs_scripts_method() {
    wp_enqueue_style( 'custom-style', get_stylesheet_directory_uri() . '/css/main.css');
}
add_action( 'wp_enqueue_scripts', 'wpdocs_scripts_method' );
?>
