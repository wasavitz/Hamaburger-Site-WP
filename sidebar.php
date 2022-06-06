<aside class="l-sidebar c-transition">
  <div class="p-sidebar">
    <p class="p-sidebar__button c-transition">
      <button class="p-sidebar-button">
        <span class="p-sidebar-button__line c-transition"></span>
        <span class="p-sidebar-button__line c-transition"></span>
      </button>
    </p>
    <h2 class="p-sidebar__title">Menu</h2>
    <nav class="">
      <?php
        wp_nav_menu(array(
          'theme_location' => 'sidebar-menu',
          'container' => 'false',
        ));
      ?>
    </nav>
  </div>
</aside>