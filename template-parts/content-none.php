<section class="">
	<header class="">
		<h1 class="page-title"><?php _e( 'Nothing Found', 'granulosa' ); ?></h1>
	</header><!-- page-header -->

	<div class="page-content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) :

			printf(
				'<p>' . wp_kses(
					__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'granulosa' ),
					array(
						'a' => array(
							'href' => array(),
						),
					)
				) . '</p>',
				esc_url( admin_url( 'post-new.php' ) )
			);

		elseif ( is_search() ) :
			?>

			<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'granulosa' ); ?></p>
			<?php
			get_search_form();

		else :
			?>

			<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'granulosa' ); ?></p>
			<?php
			get_search_form();

		endif;
		?>
	</div><!-- page-content -->
</section><!-- no-results -->