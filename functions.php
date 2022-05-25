<?php
function my_enqueue_scripts() {
    // WordPress本体のjquery.jsを読み込まない
	wp_deregister_script('jquery');
    wp_enqueue_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', array());
    wp_enqueue_script('sidebar_js', get_template_directory_uri(). '/sidebar-function.js', array() );
    wp_enqueue_style('my_styles', get_template_directory_uri(). '/css/style.css', array() );
}
add_action('wp_enqueue_scripts', 'my_enqueue_scripts');

