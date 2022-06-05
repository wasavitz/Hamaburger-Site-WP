<?php if (have_posts()) : /* 1.投稿データがあるかの条件分岐。 */
  while (have_posts()) : the_post(); ?>

    <!-- 2.表示する投稿データがあれば繰り返し処理開始 -->
    <section class="p-hero">
      <!-- アイキャッチ画像が設定されていない時は決まった画像を表示する -->
      <?php if (has_post_thumbnail()) : ?>
        <!-- アイキャッチ画像を表示するテンプレートタグ -->
        <?php the_post_thumbnail('full'); ?>
        <!-- ( '  ' )によって画像サイズ変更 -->
      <?php else : ?>
        <!-- アイキャッチ画像がない時のイメージ写真 -->
        <img src="<?php bloginfo('template_url'); ?>/img/noimage.gif" width="100" height="100" alt="デフォルト画像" />
      <?php endif; ?>

      <h2 id="post-<?php the_ID(); ?>" <?php post_class('p-hero__title'); ?>>
        <!-- 投稿タイトル表示 -->
        <?php the_title(); ?>
      </h2>
    </section>

    <div class="c-container">
      <article class="p-article c-flex--flow">
        <?php the_content(); ?>
      </article>
    </div>

  <?php endwhile; // 5.繰り返し処理ここまで。投稿データがまだあればwhileに戻る。なければ終了
else : ?><p>表示する記事がありません</p>
<?php endif;  //8.条件分岐終了 
?>