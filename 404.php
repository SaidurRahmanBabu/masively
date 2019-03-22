<?php get_header(); ?>
	<body <?php body_class(array('is-preload')); ?>>
		<?php get_template_part('templates/header-common-menu'); ?>

				<!-- Main -->
					<div id="main">

						<section class="text-center">
							<h1>404 ERROR!</h1>
							<h2><?php _e('Page Not Found!', 'masively'); ?></h2>
							<b>Go Back </b><a href="<?php esc_url(bloginfo('home')); ?>">Home</a>
						</section>

						<section>
							<div class="recent-posts">
								<?php
									if(is_active_sidebar('masive_recent_posts')){
										dynamic_sidebar('masive_recent_posts');
									}
								?>
							</div>
						</section>

					</div>

				<!-- Footer -->
				<?php get_footer(); ?>