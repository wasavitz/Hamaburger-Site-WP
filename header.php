<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- WP管理画面 → 設置 → 一般 → キャッチフレーズにて内容変更 -->
  <title><?php bloginfo('nane');?></title>
  <!-- WP管理画面 → 設置 → 一般 → キャッチフレーズにて内容変更 -->
  <meta name="description" content="<?php bloginfo('description');?>">
  <link rel="stylesheet" href="//unpkg.com/modern-css-reset/dist/reset.min.css">
  <link
    href="//fonts.googleapis.com/css2?family=M+PLUS+1p:wght@100;300;400;500;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap"
    rel="stylesheet">
  <link href="//use.fontawesome.com/releases/v6.0.0/css/all.css" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body <?php body_class( $class );?>>
  <header class="l-header">
    <div class="p-header c-flex--flow">
      <h1 class="c-title--Roboto p-header__title">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('nane');?></a>
      </h1>
      <h2 class="c-title--Roboto p-header__menu">
        <button type="button" class="menu-button">Menu</button>
      </h2>
      <?php get_search_form( $echo );?>
    </div>
</header>