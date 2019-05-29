<?php
/**
 * @package Granulosa
 */
get_header(); ?>

<!-- container -->
<div class='container-fluid'>

  <!-- site-main-content -->
  <section class='site-main-content'>

    <!-- site-bloglist -->
    <div class='site-bloglist'>

      <?php  /* start posts if */ if (have_posts()) :

        while /* start posts while */ (have_posts()) : the_post();

          get_template_part('content');

        /* end posts while */
        endwhile;
        the_posts_pagination();

      else :

        get_template_part('no-results');

      /* end posts if */
      endif; ?>

    </div><!-- site-bloglist -->

  </section> <!-- site-main-content -->

  <?php  /* start sidebar if */ if (is_active_sidebar(' ')) : ?>
    <div class=' '>
      <div class=' '>
        <?php dynamic_sidebar(' '); ?>
      </div>
    </div>
  <?php /* end sidebar if */ endif; ?>

</div><!-- container -->

<?php get_footer(); ?>