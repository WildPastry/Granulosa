<?php
/**
 * functions
 * @package granulosa
 */

// enqueue css & scripts
require get_template_directory() . '/inc/enqueue-files.php';

// nav
require get_template_directory() . '/inc/granulosa-nav.php';

// bootstrap nav
require get_template_directory() . '/inc/bootstrap-nav.php';

// theme support
require get_template_directory() . '/inc/theme-support.php';

// customiser
require get_template_directory() . '/inc/customiser.php';
