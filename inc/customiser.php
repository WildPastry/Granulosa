<?php
/**
 * customiser
 * @package granulosa
 */
add_action('customize_register', 'npl_customize_register');
function npl_customize_register($wp_customize)
{
  // remove default options –––––––––––––––––––––––––––––––––––––––––––––––
  // $wp_customize->remove_section('static_front_page'); // Home Page Settings
  $wp_customize->remove_section('custom_css'); // Additional CSS
  // ––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––

  // create homepage panel ––––––––––––––––––––––––––––––––––––––––––––––––
  // $wp_customize->add_panel('homepage_panel', array(
  //   'title'      => __('Home Page Content', 'granulosa'),
  //   'priority'   => 10,
  //   'description' => 'Edit the home page content'
  // ));
  // ––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––

  // create colours panel –––––––––––––––––––––––––––––––––––––––––––––––––
  $wp_customize->add_panel('site_colours_panel', array(
    'title'      => __('Site Colours', 'granulosa'),
    'priority'   => 15,
    'description' => 'Edit the site colours'
  ));
  // –––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––

  // colours –––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––
  // background
  $wp_customize->add_section('background_colour_section', array(
    'title'      => __('Background colour', 'granulosa'),
    'priority'   => 10,
    'panel' => 'site_colours_panel'
  ));

  $wp_customize->add_setting('background_colour_setting', array(
    'default'   => '#fff',
    'transport' => 'refresh',
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control(
    $wp_customize,
    'background_colour_control',
    array(
      'label'      => __('Set the background color', 'granulosa'),
      'section'    => 'background_colour_section',
      'settings'   => 'background_colour_setting',
    )
  ));

  // paragraph text
  $wp_customize->add_section('paragraph_colour_section', array(
    'title'      => __('Body text', 'granulosa'),
    'priority'   => 15,
    'panel' => 'site_colours_panel'
  ));

  $wp_customize->add_setting('paragraph_colour_setting', array(
    'default'   => '#2b2b2b',
    'transport' => 'refresh',
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control(
    $wp_customize,
    'paragraph_colour_control',
    array(
      'label'      => __('Set the body text colour', 'granulosa'),
      'section'    => 'paragraph_colour_section',
      'settings'   => 'paragraph_colour_setting',
    )
  ));

  // header and footer
  $wp_customize->add_section('bar_colour_section', array(
    'title'      => __('Header and footer', 'granulosa'),
    'priority'   => 20,
    'panel' => 'site_colours_panel'
  ));

  $wp_customize->add_setting('bar_colour_setting', array(
    'default'   => '#fff',
    'transport' => 'refresh',
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control(
    $wp_customize,
    'bar_colour_control',
    array(
      'label'      => __('Set Header and footer colour', 'granulosa'),
      'section'    => 'bar_colour_section',
      'settings'   => 'bar_colour_setting',
    )
  ));

  // featured posts ––––––––––––––––––––––––––––––––––––––––––––––––––––––
  // $wp_customize->add_section('front_page_section', array(
  //   'title'      => __('Front Page Info', 'granulosa'),
  //   'priority'   => 25,
  // ));

  // $wp_customize->add_setting('featured-post-setting', array(
  //   'default'   => ' ',
  //   'transport' => 'refresh',
  // ));

  // $args = array(
  //   'posts_per_page' => -1
  // );

  // $allPosts = get_posts($args);

  // $options = array();
  // $options[''] = 'Please select a post';
  // foreach ($allPosts as $singlePost) {
  //   $options[$singlePost->ID] = $singlePost->post_title;
  // }

  // $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'featured-post-control', array(
  //   'label'      => __('Featured Post', 'granulosa'),
  //   'section'    => 'front_page_section',
  //   'settings'   => 'featured-post-setting',
  //   'type'       => 'select',
  //   'choices' => $options
  // )));
  // –––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––

} // end of customiser function

// css for colours panel –––––––––––––––––––––––––––––––––––––––––––––––––
add_action('wp_head', 'granulosa_customize_css');
function granulosa_customize_css()
{
  ?>
  <style type="text/css">
    /* background */
    body {
      background-color:
        <?php echo get_theme_mod('background_colour_setting', '#fff');
        ?>;
    }

    /* paragraph text */
    p,
    li {
      color:
        <?php echo get_theme_mod('paragraph_colour_setting', '#2b2b2b');
        ?>;
    }

    /* header and footer */
    .navbar,
    .footer {
      background-color:
        <?php echo get_theme_mod('bar_colour_setting', '#fff');
        ?>;
    }
  </style>
<?php
}
// –––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––
