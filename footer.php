<?php
/**
 * footer
 * @package granulosa
 */

if (has_nav_menu('footer_menu')) {
  wp_nav_menu(array(
    'theme_location' => 'footer_menu',
    'menu_class' => '',
    'container_class' => ''
  ));
} ?>

<footer class="footer">
  <div class="container-fluid">
    <div class="footerWrap">
      <a target="_blank" href="<?php echo esc_url(__('https://mikeparker.co.nz/', 'granulosa')); ?>">
        <?php printf(__('Theme by %s', 'granulosa'), 'Mike Parker'); ?>
      </a>
      <p class="">Material &copy; Granulosa</p>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>