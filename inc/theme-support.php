<?php
/**
 * theme support
 * @package granulosa
 */

// theme support action
add_action('after_setup_theme', 'granulosa_add_theme_support');
// theme support function
function granulosa_add_theme_support()
{
  add_theme_support('post-thumbnails');
  add_theme_support('wp-block-styles');
  add_theme_support('post-formats', array('text', 'image'));

  // add default size for custom logo
  $defaults = array(
    'flex-height' => true,
    'flex-width'  => true
  );
  // add custom logo to theme support
  add_theme_support('custom-logo', $defaults);
}

// remove the ability to edit code from the apperance menu
function remove_editor_menu() {
  remove_action('admin_menu', '_add_themes_utility_last', 101);
  }
  add_action('_admin_menu', 'remove_editor_menu', 1);