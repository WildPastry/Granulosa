<?php
/**
 * single
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
<?php  /* start sidebar if */ if (is_active_sidebar(' ')) : ?>
  <div class=' '>
    <div class=' '>
      <?php dynamic_sidebar(' '); ?>
    </div>
  </div>
<?php /* end sidebar if */ endif; ?>

<?php get_footer(); ?>