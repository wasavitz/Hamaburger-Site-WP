<?php
/* 
 *
 * Template Name: front-page
 * 
 */
?>

<?php get_header(); ?>

  <main class="l-main">
    <article>
      <section class="p-hero-top c-bg--prop">
        <h2 class="p-hero-top__title">
          ダミーサイト
        </h2>
      </section>
      <section class="p-brunch">
        <ul class="p-brunch__wrapper c-flex--flow">
          <li class="p-brunch-menu c-bg--prop">
            <div class="p-brunch-menu__container c-flex--flow">
              <h2 class="p-brunch-menu__container__title c-title--Roboto">
                Take Out
              </h2>
              <div class="p-brunch-menu__container__Descriptions">
                <dl class="p-brunch-desc">
                  <dt class="p-brunch-desc__heading">
                    Take OUT
                  </dt>
                  <dd class="p-brunch-desc__text c-text">
                    当店のテイクアウトで利用できる商品を掲載しています
                  </dd>
                </dl>
                <dl class="p-brunch-desc">
                  <dt class="p-brunch-desc__heading">
                    Take OUT
                  </dt>
                  <dt class="p-brunch-desc__text c-text">
                    当店のテイクアウトで利用できる商品を掲載しています
                  </dt>
                </dl>
              </div>
            </div>
          </li>
          <li class="p-brunch-menu c-bg--prop">
            <div class="p-brunch-menu__container c-flex--flow">
              <h2 class="p-brunch-menu__container__title c-title--Roboto">
                Eat In
              </h2>
              <div class="p-brunch-menu__container__Descriptions">
                <dl class="p-brunch-desc">
                  <dt class="p-brunch-desc__heading">
                    Take OUT
                  </dt>
                  <dd class="p-brunch-desc__text c-text">
                    当店のテイクアウトで利用できる商品を掲載しています
                  </dd>
                </dl>
                <dl class="p-brunch-desc">
                  <dt class="p-brunch-desc__heading">
                    Take OUT
                  </dt>
                  <dt class="p-brunch-desc__text c-text">
                    当店のテイクアウトで利用できる商品を掲載しています
                  </dt>
                </dl>
              </div>
            </div>
          </li>
        </ul>
      </section>
      <section class="p-access">
        <picture class="p-access__picture">
          <source srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/img/access-map--pc.svg" media="(min-width: 1025px)" />
          <source srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/img/access-map--tab.svg" media="(min-width: 600px)" />
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/access-map--sp.svg" alt="アクセス" class="p-access-image" />
        </picture>
        <div class="p-access__wrapper">
        </div>
        <div class="p-access__desc">
          <h2 class="p-access__desc__heading">
            見出しが入ります
          </h2>
          <p class="p-access__desc__text">
            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
          </p>
        </div>
      </section>
    </article>
  </main>
  <?php get_sidebar(); ?>  
<?php get_footer(); ?>  