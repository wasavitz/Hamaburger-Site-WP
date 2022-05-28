<?php 
    $templates = wp_get_theme()->get_page_templates();
    foreach ( $templates as $template_name => $template_filename ) {
        echo "$template_name ($template_filename)<br />";
    }
 ?>

<main class="l-main">
    <article class="p-single">
      <section class="p-single__hero c-title--align-v c-bg--prop">
        <h2 class="p-single__hero__title">ショップについて</h2>
      </section>
      <div class="c-container">
        <article class="p-article c-flex--flow">
        <?php
          if ( have_posts() ):
	          while( have_posts() ):the_post();
		          the_content();
	          endwhile;
            endif;
        ?>
        </article>
      </div>
    </article>
  </main>

  <?php get_sidebar(); ?>  
<?php get_footer(); ?>