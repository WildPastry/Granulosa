<?php
/**
 * content
 * @package granulosa
 */

// get thumbnail image
$defaultThumb = get_template_directory_uri() . '/assets/img/default-img.jpg';
$thumbnailImg = wp_get_attachment_url(get_post_thumbnail_id($post->ID));

?>

<?php /* start singular if */ if (is_singular()) : ?>

  <!-- thumbnail image -->
  <div class="thumbnailWrap">
    <?php /* start thumbnail if */ if (has_post_thumbnail()) : ?>
      <?php echo '<div class="thumbnailImg" style="background-image: url(' . $thumbnailImg . ');background-position: center; background-size: cover;  background-repeat: no-repeat;"></div>';
    else :
      echo '<div class="thumbnailImg" style="background-image: url(' . $defaultThumb . ');background-position: center; background-size: cover;  background-repeat: no-repeat;"></div>';
      ?>
    <?php /* end thumbnail if */ endif; ?>
  </div><!-- thumbnailWrap -->

  <!-- title - date - comments -->
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

    <div class="col-12">
      <?php the_content(); ?>
    </div>
  </div><!-- row -->

<?php /* else */ else : ?>

  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
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
  </div><!-- col -->

<?php /* end singular if */ endif; ?>