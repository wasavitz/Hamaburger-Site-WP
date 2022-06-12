<?php get_header(); ?>

<main class="l-main">
  <article class="p-archive">
    <section class="p-archive__hero c-bg--prop">
      <div class="p-archive__hero__image"></div>
      <h2 class="p-archive__hero__title c-title--Roboto">Menu:</h2>
      <p class="p-archive__hero__sub-title"><?php single_cat_title(); ?></p>
    </section>
    <div class="c-container">
      <article class="p-archive__description">
        <?php echo category_description(); ?>
      </article>
      <section class="p-archive__cards c-flex--flow">
        <!-- ループ処理開始の記述 -->
        <?php if (have_posts()) :
          while (have_posts()) : the_post(); ?>
            <article class="p-card">
              <div class="p-card__flame">
                <!-- アイキャッチ画像を表示するテンプレートタグ -->
                <?php if (has_post_thumbnail()) : ?>
                  <!-- ( '  ' )によって画像サイズ変更 -->
                  <?php the_post_thumbnail('full'); ?>

                <?php else : ?>
                  <!-- アイキャッチ画像がない時のイメージ写真 -->
                  <img src="<?php bloginfo('template_url'); ?>/img/noimage.gif" width="100" height="100" alt="デフォルト画像" />
                <?php endif; ?>
              </div>
              <div class="p-card__description">
                <div class="p-card-desc">
                  <h3 class="p-card-desc__title"><?php the_title(); ?></h3>
                  <dl class="p-card-desc__block">
                    <?php the_excerpt(); ?>
                  </dl>
                </div>
                <p class="p-card-button">
                  <a href="<?php the_permalink(); ?>" class="p-card-button__link">詳しく見る</a>
                </p>
              </div>
            </article>
            <!-- ↓↓↓ ループ処理終了の記述　↓↓↓ -->
        <?php endwhile;
        endif; ?>
        <!-- ↑↑↑ ループ処理終了の記述 ↑↑↑　-->
      </section>
      <section class="c-page-nation">
        <p class="c-page-nation__text">
          Page  <?php show_page_number(''); ?> / <?php max_show_page_number(''); ?>
        </p>
        <?php
        $args = array(
          'mid_size' => 2,
          'prev_text' => '<i class="fas fa-angle-left"></i> 前へ',
          'next_text' => '次へ <i class="fas fa-angle-right"></i>',
          'screen_reader_text' => 'ページ送り機能',
        );
        the_posts_pagination($args);
        ?>
      </section>
    </div>
  </article>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>