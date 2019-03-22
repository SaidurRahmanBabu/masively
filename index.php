<?php get_header(); ?>
	<body <?php body_class(array('is-preload')); ?>>
		<?php get_template_part('templates/header-common-menu'); ?>
				<!-- Main -->
					<div id="main">

						<!-- Featured Post -->
						<?php if(! is_paged()): ?>
							<article class="post featured">
								<?php 
									$masiv_feature = new WP_Query(array(
										'post_type' 			=> 'masive_feature_post',
										'posts_per_page' 	=> 1
									));
								?>
								<?php while($masiv_feature->have_posts()) : $masiv_feature->the_post(); ?>

								<header class="major">
									<span class="date"><?php the_date('F d, Y'); ?></span>

									<h2><a href="<?php the_permalink(); ?>">
										<?php the_title(); ?></a>
									</h2>

									<?php the_field('short_text'); ?>
								</header>

								<a href="<?php the_permalink(); ?>" class="image main">
									<?php
										if(has_post_thumbnail()){
											the_post_thumbnail();
										}
									?>
								</a>
								<ul class="actions special">
									<li><a href="<?php the_permalink(); ?>" class="button large"><?php _e('Full Story', 'masively'); ?></a></li>
								</ul>

							<?php endwhile; ?>
							</article>
						<?php endif; ?>

						<!-- Posts -->
							<section class="posts">

								<?php while(have_posts()) : the_post(); ?>
								
								<article>
									<header>
										<span class="date"><?php echo get_the_date('F d, Y'); ?></span>
										<h2><a href="<?php the_permalink(); ?>">
											<?php echo short_title('...', 5); ?>
										</a></h2>

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

									</header>
									<a href="<?php the_permalink(); ?>" class="image fit">
										<?php
											if(current_theme_supports('post-thumbnails')){
												the_post_thumbnail( 'post-thumbnail', 'masive_rect' );
											}
										?>
									</a>
									<p>
										<p><?php read_more(25); ?> ...</p>									
									</p>

									<ul class="actions special">
										<li>
											<a href="<?php the_permalink(); ?>" class="button"><?php _e('Full Story', 'masively'); ?></a>
										</li>
									</ul>
								</article>

							<?php endwhile; ?>

							</section>

						<!-- Footer -->
							<footer>
								<div class="pagination">

									<?php
										the_posts_pagination(array(
											'screen_reader_text' 	=> ' ',
											'prev_text' 					=> __('Prev', 'masively'),
											'next_text' 					=> __('Next', 'masively'),
											'mid_size' 						=> 5
										));
									?>
								</div>
								
							</footer>

					</div>

				<!-- Footer -->
		<?php get_footer(); ?>