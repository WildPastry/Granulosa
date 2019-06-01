<?php
/**
 * header
 * @package granulosa
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php the_title(); ?></title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <!-- custom logo -->
  <?php
  $custom_logo_size = get_theme_mod('custom_logo');
  $custom_logo = wp_get_attachment_image_src($custom_logo_size, $defaults);
  $default_logo = get_template_directory_uri() . '/assets/img/default-logo.jpg';
  if ($custom_logo == "") : $custom_logo = $default_logo;
  else : $custom_logo = $custom_logo[0];
  endif;
  ?>

  <!-- home url -->
  <?php $url = home_url(); ?>

  <!-- logo -->
  <div class="navWrap">
    <a class="" title="Granulosa" href="<?php echo $url; ?>">
      <img src="<?php echo $custom_logo; ?>" />
    </a>
  </div>

  <!-- nav -->
  <nav class="navbar navbar-light navbar-expand-md" role="navigation">
    <div class="navbarWrap">
      <div class="navbarTogglerWrap">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <?php
      wp_nav_menu(array(
        'theme_location' => 'header_menu',
        'depth' => 2,
        'container' => 'div',
        'container_class' => 'collapse navbar-collapse',
        'container_id' => 'bs-example-navbar-collapse-1',
        'menu_class' => 'nav navbar-nav',
        'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
        'walker' => new WP_Bootstrap_Navwalker(),
      ));
      ?>
    </div><!-- navbarWrap -->
  </nav><!-- nav -->
  <?php
  ?>