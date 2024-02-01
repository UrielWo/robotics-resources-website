<?php 

function robotics_files() {
    //wp_enqueue_style('custom-google-fonts','https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('robotics_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts','robotics_files');