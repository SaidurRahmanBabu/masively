
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
									<li>
										<a href="<?php echo esc_url($social_facebook); ?>" class="icon alt fa-twitter"><span class="label">Twitter</span></a>
									</li>

									<li>
										<a href="<?php echo esc_url($social_twitter); ?>" class="icon alt fa-facebook"><span class="label">Facebook</span></a>
									</li>
									<li>
										<a href="<?php echo esc_url($social_instagram); ?>" class="icon alt fa-instagram"><span class="label">Instagram</span></a>
									</li>
									<li>
										<a href="<?php echo esc_url($social_github); ?>" class="icon alt fa-github"><span class="label">GitHub</span></a>
									</li>
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