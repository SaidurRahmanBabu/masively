<?php get_header(); ?>
	<body <?php body_class(array('is-preload')); ?>>
		<?php get_template_part('templates/header-common-menu'); ?>

				<!-- Main -->
					<div id="main" class="masive-tag-page-wrapper">
						<!-- masive-author-info -->
						<div class="masive-author-info">
							<div class="author-details">
								<h2><?php _e('Author Info', 'masively'); ?></h2>
								<?php echo get_avatar(get_the_author_meta('id')); ?>
								<div class="author-bio">
									<h4>
										<?php _e('Author: ', 'masively'); ?>
										<?php echo get_the_author_meta('display_name'); ?>
									</h4>
									<div class="author-social">
										<?php
											if(function_exists('get_field')){
												$masive_author_fb = get_field('facebook');
												$masive_author_twit = get_field('twitter');
												$masive_author_insta = get_field('instagram');
											}
										?>
										<h4>
											<?php _e('Get Connected: ', 'masively'); ?>
											<a href="<?php esc_url($masive_author_fb); ?>">
												<i class="fa fa-facebook"></i>
											</a>
											<a href="<?php esc_url($masive_author_twit); ?>">
												<i class="fa fa-twitter"></i>
											</a>
											<a href="<?php esc_url($masive_author_insta); ?>">
												<i class="fa fa-instagram"></i>
											</a>
										</h4>
									</div>
									<p>
										<?php echo get_the_author_meta('description'); ?>
									</p>
								</div>
							</div>
						</div>

						<!-- Post -->

						<h2><?php _e("Author's posts", 'masively'); ?></h2>
						<?php while(have_posts()) : the_post(); ?>
							<section class="masive-tag-page">
								<div>
									<?php
										if(has_post_thumbnail()){
											the_post_thumbnail();
										}
									?>
								</div>
								<div class="masive-tag-content">
									<h3>
										<a href="<?php the_permalink();?>">
											<?php the_title(); ?>
										</a>
									</h3>
									<?php read_more(20); ?> ...
								</div>
							</section>
						<?php endwhile; ?>

					</div>

<!-- Footer -->
<?php get_footer(); ?>