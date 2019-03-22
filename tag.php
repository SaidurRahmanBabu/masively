<?php get_header(); ?>
	<body <?php body_class(array('is-preload')); ?>>
		<?php get_template_part('templates/header-common-menu'); ?>

				<!-- Main -->
					<div id="main" class="masive-tag-page-wrapper">
						<div class="text-center">
							<h3>
								<?php _e('Tag Name: ', 'masively');?>
								<span style="color: #18bfef;"><?php single_tag_title(); ?></span>
							</h3>
						</div>

						<!-- Post -->
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