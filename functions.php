<?php
// jQuey and css読み込み
function my_enqueue_scripts() {
    // WordPress本体のjquery.jsを読み込まない
	wp_deregister_script('jquery');
    wp_enqueue_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', array());
    wp_enqueue_script('sidebar_js', get_template_directory_uri(). '/sidebar-function.js', array() );
    wp_enqueue_style('my_styles', get_template_directory_uri(). '/css/style.css', array() );
}
add_action('wp_enqueue_scripts', 'my_enqueue_scripts');
// テーマ機能のサポート許可
function custom_theme_setup() {
    add_theme_support( 'post-thumbnails' );
}
    add_action( 'after_setup_theme', 'custom_theme_setup' );