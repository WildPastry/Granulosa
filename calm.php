  <!-- secondary content area -->
  <section class="content-area content-area-secondary">

    <?php  /* feature posts */
    $featuredPostID = get_theme_mod('featured-post-setting');
    if /* start feature posts ID if */ ($featuredPostID) :
      ?>

      <?php
      $args = array(
        'p' => $featuredPostID
      );
      $featuredPost = new WP_Query($args);
      ?>

    <?php /* end feature posts ID if */ endif; ?>

    <div class="row">

      <?php /* start feature posts if */ if ($featuredPost->have_posts()) : ?>
        <?php /* start feature posts while */ while ($featuredPost->have_posts()) : $featuredPost->the_post(); ?>

          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 mb-4">
            <div class="card">
              <div class="card-header">
                <?php the_title(); ?>
              </div>
              <div class="card-body">
                <?php the_content(); ?>
              </div>
              <a href="<?php the_permalink(); ?>" class="btn btn-danger btn-block">Find out more</a>
            </div>
          </div>

        <?php /* end feature posts while */ endwhile; ?>
      <?php /* end feature posts if */ endif; ?>

    </div><!-- row -->
  </section><!-- secondary content-area -->