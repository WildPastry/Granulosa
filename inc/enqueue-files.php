<?php
/**
 * enqueue files
 * @package granulosa
 */
add_action('wp_enqueue_scripts', 'enqueue_files');
function enqueue_files()
{
  // css
  wp_enqueue_style('granulosa_bootstrap_css', get_template_directory_uri() . '/assets/css/vendor/bootstrap.css', array(), '4.1.3');
  wp_enqueue_style('granulosa_css', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0');

  // js
  wp_enqueue_script('granulosa_jquery_js', get_template_directory_uri() . '/assets/js/vendor/jquery.min.js', array(), '3.3.1', true);
  wp_enqueue_script('granulosa_bootstrap_js', get_template_directory_uri() . '/assets/js/vendor/bootstrap.min.js', array(), '4.1.3', true);
  wp_enqueue_script('granulosa_popper_js', get_template_directory_uri() . '/assets/js/vendor/popper.min.js', array(), '1.0.0', true);
  wp_enqueue_script('granulosa_js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true);
}
