<?php
/**
 * nav
 * @package granulosa
 */

// add header and footer menus
add_action('init', 'register_my_menu');
function register_my_menu()
{
    register_nav_menu('header_menu', __('Top Menu'));
    register_nav_menu('footer_menu', __('Bottom Menu'));
}