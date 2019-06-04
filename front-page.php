<?php
/**
 * front-page
 * @package granulosa
 */

// get header image
$defaultHead = get_template_directory_uri() . '/assets/img/default-head.jpg';
$featuredImg = get_header_image();

// get custom intro text
$customText = get_theme_mod('custom_intro_setting');
$defaultText = 'Welcome to Granulosa';

get_header(); ?>

<div class='container-fluid'>

  <?php if ($customText == "") : echo '<h1>' . $defaultText . '</h1>';
  else :
    echo '<h1>' . $customText . '</h1>';
  endif;
  ?>

  <!-- main content-area -->
  <section class='content-area content-area-main'>
    <div class="featuredImgWrap">
      <?php /* start featured if */ if (has_header_image()) : ?>
        <?php echo '<div class="featuredImg" style="background-image: url(' . $featuredImg . ');background-position: center; background-size: cover;  background-repeat: no-repeat;"></div>';
      else :
        echo '<div class="featuredImg" style="background-image: url(' . $defaultHead . ');background-position: center; background-size: cover;  background-repeat: no-repeat;"></div>';
        ?>
      <?php /* end featured if */ endif; ?>
    </div>

    <!-- primary-content -->
    <div class='primary-content'>

      <div class="row">
        <?php  /* start posts if */ if (have_posts()) :
          while /* start posts while */ (have_posts()) : the_post();

            get_template_part('template-parts/content');

          /* end posts while */
          endwhile;

        // the_posts_pagination();

        else :

          get_template_part('template-parts/content', 'none');

        /* end posts if */
        endif; ?>
      </div><!-- row -->

    </div><!-- primary-content -->

  </section> <!-- main content-area -->

</div><!-- container -->

<?php get_footer(); ?>