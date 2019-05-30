<?php
/**
 * content
 * @package granulosa
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <?php
    if (is_sticky() && is_home() && !is_paged()) {
      printf('<span class="">%s</span>', _x('Featured', 'post', 'granulosa'));
    }
    if (is_singular()) :
      the_title('<h1 class="">', '</h1>');
    else :
      the_title(sprintf('<h2 class=""><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>');
    endif;
    ?>
  </header><!-- entry-header -->
  
  <p>Posted: <?php the_date('F j, Y'); ?> at <?php the_time('g:i a'); ?></p>

  <div class="entry-content">
    <?php
    the_content(
      sprintf(
        wp_kses(
          __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'granulosa'),
          array(
            'span' => array(
              'class' => array(),
            ),
          )
        ),
        get_the_title()
      )
    );

    wp_link_pages(
      array(
        'before' => '<div class="">' . __('Pages:', 'granulosa'),
        'after'  => '</div>',
      )
    );
    ?>
  </div><!-- entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->