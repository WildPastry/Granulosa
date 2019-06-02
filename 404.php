<?php
/**
 * 404
 * @package granulosa
 */

get_header(); ?>

<div class="container-fluid">
			<div class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'granulosa' ); ?></h1>
				</header><!-- page-header -->

				<div class="page-content">
					<p><?php _e( 'It looks like nothing was found at this location.', 'granulosa' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- page-content -->
			</div><!-- error-404 -->
</div><!-- container -->

<?php get_footer(); ?>