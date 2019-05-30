<?php
/**
 * content
 * @package granulosa
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <?php /* start singular if */ if (is_singular()) : ?>

    <div class="row">
      <div class="col-12">
        <header class=" ">
          <h3><?php the_title(); ?></h3>
          <?php /* start post type if */ if ('post' == get_post_type()) : ?>
            <div class="postmeta">
              <div class="post-date"><?php the_date(); ?></div><!-- post-date -->
              <div class="post-comment"> <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a></div>
            </div><!-- postmeta -->
          <?php /* end post type if */ endif; ?>
        </header>
      </div>
    </div><!-- row -->

    <div class="row">
      <div class="col-12">

        <?php /* start thumbnail if */ if (has_post_thumbnail()) : ?>
          <?php the_post_thumbnail('medium_large', ['class' => 'singlePostImg', 'alt' => 'image from post']) ?>
        <?php /* end thumbnail if */ endif; ?>

      </div>
      <div class="col-12">
        <?php the_content(); ?>
      </div>
    </div><!-- row -->

  <?php /* else */ else : ?>

    <div class="card">
      <?php /* start thumbnail if */ if (has_post_thumbnail()) : ?>
        <?php the_post_thumbnail('thumbnail', ['class' => 'card-img-top img-fluid', 'alt' => 'image from post']) ?>
      <?php /* end thumbnail if */ endif; ?>

      <div class="card-body">
        <h5 class="card-title"><?php the_title(); ?></h5>
        <?php the_excerpt(); ?>
      </div><!-- card-body -->

      <div class="card-footer">
        <a class="btn btn-danger" href="<?php the_permalink(); ?>">View Post</a>
        <p class="card-text"><small class="text-muted">Posted: <?php the_date('F j, Y'); ?> at
            <?php the_time('g:i a'); ?></small></p>
      </div><!-- card-footer -->
    </div><!-- card -->

  <?php /* END 1ST IF */ endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->