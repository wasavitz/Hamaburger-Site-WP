<?php
// jQuey and css読み込み
function my_enqueue_scripts() {
    // Google Fonts & font-awesome読み込み
    wp_enqueue_script( 'mplus1p', '//fonts.googleapis.com/css2?family=M+PLUS+1p:wght@100;300;400;500;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap', array() );
    wp_enqueue_script( 'font-awesome', '//use.fontawesome.com/releases/v6.0.0/css/all.css', array());
    // WordPress本体のjquery.jsを読み込まない
	wp_deregister_script('jquery');
    wp_enqueue_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', array());
    wp_enqueue_script('sidebar_js', get_template_directory_uri(). '/sidebar-function.js', array() );
    // cssのスタイル読み込み（リセットcss；modern-css）
    wp_enqueue_style('modern', '//unpkg.com/modern-css-reset/dist/reset.min.css', array(), false, 'all');
    wp_enqueue_style('my_styles', get_template_directory_uri(). '/css/style.css', array('modern'), false, 'all' );
}
add_action('wp_enqueue_scripts', 'my_enqueue_scripts');

// テーマ機能のサポート許可 
function custom_theme_setup() {
    //アイキャッチ画像（投稿サムネイル）
    add_theme_support( 'post-thumbnails' );
     //投稿タイトル
     add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'custom_theme_setup' );

// function custom_block_editor() {
//     //アイキャッチ画像（投稿サムネイル）
//     add_filter( 'use_default_gallery_style', '__return_false' );
//      //投稿タイトル
// }
// add_action( 'after_setup_theme', 'custom_block_editor' );

// //本体ギャラリーCSS停止
