<?php get_header(); ?>
	<body <?php body_class(array('is-preload')); ?>>
		<?php get_template_part('templates/header-common-menu'); ?>

				<!-- Main -->
					<div id="main">

						<!-- Post -->
						<?php while(have_posts()) : the_post(); ?>
							<section class="post">
								<header class="major">
									<span class="date"><?php the_date('F d, Y'); ?></span>
									<h1><?php the_title(); ?></h1>


										<div class="masive-post-details">
											<p>
												<?php _e('<b>Posted By</b>', 'masively') ?>
												<?php the_author_posts_link(); ?> <span style="width:5px; display: inline-block;"></span>

												 <?php _e('<b>Comments</b>', 'masively') ?> (<?php comments_popup_link('No Comment', '1 Comment', '% Comments', 'masive-comment', 'Comments Disabled'); ?>)
												
											</p>
											<p><?php _e('<b>Tags: </b>', 'masively'); ?>
												<?php
													if(has_tag()){
														the_tags( '<b>', ', ', '</b>' );
													}
												?>
											</p>
										</div>



									<p><?php the_field('short_text'); ?></p>
								</header>
								<div class="image main">
									<?php
										if(has_post_thumbnail()){
											the_post_thumbnail();
										}
									?>
								</div>
								<p><?php the_content(); ?></p>

								<!-- get next previous post lik -->
								<div class="next-prev-post">
									<p>
										<?php previous_post_link('<b>Prev Post:</b> %link', '%title'); ?>
									</p>
									<p>
										<?php next_post_link('<b>Next Post:</b> %link', '%title'); ?>
									</p>
								</div>

								<!-- Related Post -->
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

								<!-- masive-author-info -->
								<div class="masive-author-info">
									<div class="author-details">
										<h2><?php _e('Author Info', 'masively'); ?></h2>
										<?php echo get_avatar(get_the_author_meta('id')); ?>
										<div class="author-bio">
											<h4>
												<?php _e('Author: ', 'masively'); ?>
												<?php echo the_author_posts_link(get_the_author_meta('display_name')); ?>
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

								<!-- single post comments -->
								<div class="masive-comments-wrapper">
									<?php
										if(comments_open()){
											comments_template();
										}
									?>
								</div>

							</section>
						<?php endwhile; ?>

					</div>

				<!-- Footer -->
				<?php get_footer(); ?>