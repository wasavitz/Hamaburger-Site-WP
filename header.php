<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- WP管理画面 → 設置 → 一般 → キャッチフレーズにて内容変更 -->
  <title><?php bloginfo('name');?></title>
  <!-- WP管理画面 → 設置 → 一般 → キャッチフレーズにて内容変更 -->
  <meta name="description" content="<?php bloginfo('description');?>">
  <?php wp_head(); ?>
</head>

<body <?php body_class();?>>
<?php wp_body_open(); ?>
  <header class="l-header">
    <div class="p-header c-flex--flow">
      <h1 class="c-title--Roboto p-header__title">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name');?></a>
      </h1>
      <h2 class="c-title--Roboto p-header__menu">
        <button type="button" class="menu-button">Menu</button>
      </h2>
      <?php get_search_form( );?>
    </div>
  </header>