<?php get_header(); ?>
	<body <?php body_class(array('is-preload')); ?>>
		<?php get_template_part('templates/header-common-menu'); ?>

				<!-- Main -->
					<div id="main">

								<!-- Related Post -->
							<section>
								<div class="related-posts-wrapper">
									<div class="masive-related-posts">
										<h2><?php _e('Related Posts', 'masively'); ?></h2>

										<?php if(function_exists('the_field')): ?>
											<?php
												$masive_related_post 	= get_field('related_post');

												$masive_post_query 		= new WP_Query(array(

													'post__in' 				=> $masive_related_post,
													'orderby' 				=> 'post__in',
													'posts_per_page' 	=> 4

												));
											?>
											<?php while($masive_post_query -> have_posts()) : $masive_post_query -> the_post(); ?>

												<div class="masive-rel-posts">
													<div class="rel-post-img">
														<?php
															if(has_post_thumbnail()){
																the_post_thumbnail();
															}
														?>
													</div>

													<div class="rel-post-link">
														<h4>
															<a href="<?php the_permalink(); ?>">
																<?php the_title(); ?>
															</a>
														</h4>
														<p><?php read_more(10); ?> ...</p>
													</div>
												</div>

											<?php endwhile; ?>
											<?php wp_reset_query(); ?>
										<?php endif ?>
									</div>
									<div class="single-page-category">
										<?php
											if(is_active_sidebar('single_page_category')){
												dynamic_sidebar('single_page_category');
											}
										?>
									</div>
								</div>

								

							</section>

					</div>

				<!-- Footer -->
				<?php get_footer(); ?>