<footer class="l-footer c-bg--prop c-flex--flow">
    <div class="p-footer">
      <nav class="p-footer__Nav">
        <?php
          wp_nav_menu(array(
            'theme_location' => 'footer-menu',
            'container' => 'false',
          ));
        ?>
      </nav>
      <p class="p-footer__copyright">Copyright: RaiseTech</p>
    </div>
  </footer>
  <div class="c-wrapper"></div>
  <?php wp_footer(); ?>
</body>
</html>