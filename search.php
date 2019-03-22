<?php get_header(); ?>
	<body <?php body_class(array('is-preload')); ?>>
		<?php get_template_part('templates/header-common-menu'); ?>
				<!-- Main -->
					<div id="main">
						<div class="masive-search-result text-center">
							<?php
								if(is_search()){
									_e("Search Result For ", "mamurjor");
									echo '<b>' . get_search_query() . '</b>';
								}
							?>
							<br>
							<?php
								if(!have_posts()){
									_e("no result found!", "mamurjor");
								}else{
									$allsearch = new WP_Query("s=$s&showposts=-1");
									echo 'Total <b>'.$allsearch ->found_posts.'</b> results found.';
								}
							?>
						</div>

						<!-- Posts -->
							<section class="posts">

								<?php while(have_posts()) : the_post(); ?>
								
								<article>
									<header>
										<span class="date"><?php echo get_the_date('F d, Y'); ?></span>
										<h2><a href="<?php the_permalink(); ?>">
											<?php the_title(); ?>
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
												the_post_thumbnail();
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

					</div>

				<!-- Footer -->
		<?php get_footer(); ?>