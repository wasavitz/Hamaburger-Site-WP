<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hamburger-Site</title>
  <meta name="description" content="very delicious Hamburger-Shop">
  <link rel="stylesheet" href="https://unpkg.com/modern-css-reset/dist/reset.min.css">
  <link
    href="https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@100;300;400;500;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap"
    rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v6.0.0/css/all.css" rel="stylesheet">
  <link href="http://wabisabiburger.local/wp-content/themes/Hamburger-Site-WP/css/style.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="http://wabisabiburger.local/wp-content/themes/Hamburger-Site-WP/sidebar-function.js"></script>
  <?php wp_head(); ?>
</head>

<body>  
  <header class="l-header">
    <div class="p-header c-flex--flow">
      <h1 class="c-title--Roboto p-header__title">Hamburger</h1>
      <h2 class="c-title--Roboto p-header__menu">
        <button type="button" class="menu-button">Menu</button>
      </h2>
      <form action="" class="p-search">
        <input type="text" class="c-box p-search__box">
        <input type="button" value="検索" onclick="" class="c-button p-search__button">
      </form>
    </div>
</header>