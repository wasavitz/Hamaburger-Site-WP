<?php
// jQuey and css読み込み
function my_enqueue_scripts()
{
  // // Google Fonts & font-awesome読み込み
  wp_register_style( 'googleFonts', '//fonts.googleapis.com/css2?family=M+PLUS+1p:wght@100;300;400;500;700;800;900|Roboto:wght@100;300;400;500;700;900');
  wp_enqueue_style( 'googleFonts');
  wp_enqueue_script('font-awesome', '//use.fontawesome.com/releases/v6.0.0/css/all.css', array());
  // WordPress本体のjquery.jsを読み込まない
  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', array());
  wp_enqueue_script('sidebar_js', get_template_directory_uri() . '/sidebar-function.js', array());
  // cssのスタイル読み込み（リセットcss；modern-css）
  wp_enqueue_style('modern', '//unpkg.com/modern-css-reset/dist/reset.min.css', array(), false, 'all');
  wp_enqueue_style('my_styles', get_template_directory_uri() . '/css/style.css', array('modern'), false, 'all');
}
add_action('wp_enqueue_scripts', 'my_enqueue_scripts');

// テーマ機能のサポート許可 
function custom_theme_setup()
{
  //アイキャッチ画像（投稿サムネイル）
  add_theme_support('post-thumbnails');
  //投稿タイトル
  add_theme_support('title-tag');
  add_theme_support( 'automatic-feed-links' );
  add_theme_support( 'custom-header' );
  add_theme_support( "custom-background");
}
add_action('after_setup_theme', 'custom_theme_setup');

// メイン画像上にテンプレートファイル毎のテキストを表示 『現在：不使用』
// function get_category_title()
// {
//   if (is_archive()) :
//     $category_obj = get_the_category();
//     return $category_obj[1]->name;
//   elseif (is_page()) :
//     return get_the_title();
//   elseif (is_page()) :
//     return get_the_title();
//   endif;
// }

// function get_category_description()
// {
//   if (is_archive()) :
//     $category_description = get_the_category();
//     return $category_description[2]->description;
//   elseif (is_page()) :
//     return get_the_title();
//   elseif (is_page()) :
//     return get_the_title();
//   endif;
// }

// サイドバー、フッターのカスタムメニュー化
function register_my_menus()
{
  register_nav_menus(array( //複数のナビゲーションメニューを登録する関数
    //'「メニューの位置」の識別子' => 'メニューの説明の文字列',
    'sidebar-menu' => 'Sidebar Menu',
    'footer-menu'  => 'Footer Menu',
  ));
}
add_action('after_setup_theme', 'register_my_menus');

//現在のページ数の取得
function show_page_number() {
  global $wp_query;
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  $max_page = $wp_query->max_num_pages;
  echo $paged;
}
//総ページ数の取得
function max_show_page_number() {
  global $wp_query;
  $max_page = $wp_query->max_num_pages;
  echo $max_page;
}

// function custom_block_editor() {
//     //アイキャッチ画像（投稿サムネイル）
//     add_filter( 'use_default_gallery_style', '__return_false' );
//      //投稿タイトル
// }
// add_action( 'after_setup_theme', 'custom_block_editor' );

// //本体ギャラリーCSS停止
