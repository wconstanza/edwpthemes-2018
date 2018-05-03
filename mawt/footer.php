</main>
  <footer class="Footer">
    <?php
       wp_nav_menu( array(
          'theme_location' => 'social_menu',
          'container' => 'nav',
          'container_class' => 'SocialMedia'
        ) );
    ?>
    <div>
      <small>&copy; <?php echo date('Y'); ?> por @jonmircha</small>
    </div>
  </footer>
  <?php wp_footer(); ?>
</body>
</html>
