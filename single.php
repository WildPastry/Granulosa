<?php
/**
 * @package granulosa
 */
get_header(); ?>

<div class="container-fluid">

  <?php  /* start posts if */ if (have_posts()) : ?>
    <?php  /* start posts while */ while (have_posts()) : the_post() ?>

      <!-- content from template -->
      <div class="row">
        <?php get_template_part('template-parts/content', get_post_format()); ?>
      </div><!-- row -->

    <?php /* end posts while */ endwhile; ?>
  <?php /* end posts if */ endif; ?>

</div><!-- container -->

<?php get_footer(); ?>