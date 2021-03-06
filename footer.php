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

</div><!-- container-fluid -->

<footer class="footer">
  <div class="container-fluid">
    <div class="footerWrap">
      <a target="_blank" href="<?php echo esc_url(__('https://mikeparker.co.nz/', 'granulosa')); ?>">
        <?php printf(__('Theme by %s', 'granulosa'), 'Mike Parker'); ?>
      </a>
      <p class="">Material &copy; <a href='http://gctf.org.nz/index.htm' target='_blank'>GCTRF</a></p>
    </div>
  </div>
</footer><!-- footer -->

<?php wp_footer(); ?>
</body>

</html>