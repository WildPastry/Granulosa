<?php
/**
 * Template Name: Donate
 * @package granulosa
 */

get_header(); ?>

<div class='container-fluid'>

  <!-- main content-area -->
  <section class='content-area content-area-main'>

    <!-- primary-content -->
    <div class='primary-content'>

      <div class="row">
        <?php  /* start posts if */ if (have_posts()) :
          while /* start posts while */ (have_posts()) : the_post();

            get_template_part('template-parts/content');

            get_template_part('form');

          /* end posts while */
          endwhile;

        else :

          get_template_part('template-parts/content', 'none');

        /* end posts if */
        endif; ?>
      </div><!-- row -->

    </div><!-- primary-content -->
  </section> <!-- main content-area -->
</div><!-- container -->

<?php get_footer(); ?>