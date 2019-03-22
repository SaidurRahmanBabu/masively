
					<footer id="footer">
						<!-- footer contact form -->
						<section>
							<?php
								if(is_active_sidebar( 'masive_social_contact' )){
									dynamic_sidebar('masive_social_contact');
								}
							?>
						</section>
						
						<!-- footer contact address -->
						<section class="split contact">
							<?php
								if(is_active_sidebar( 'masive_contact_address' )){
									dynamic_sidebar('masive_contact_address');
								}
							?>

							<section>
								<h3><?php _e("Social", "masively"); ?></h3>
								
								<ul class="icons alt">
									<?php 
										get_template_part('templates/masive-social-menu'); 
									?>
								</ul>
							</section>
						</section>
					</footer>

				<!-- Copyright -->
					<div id="copyright">
						
						<?php
							if(is_active_sidebar( 'masive_licence' )){
								dynamic_sidebar('masive_licence');
							}
						?>
						
					</div>

			</div>

		<?php wp_footer(); ?>
	</body>
</html>