<!-- Wrapper -->
			<div id="wrapper" class="fade-in">

				<!-- Intro -->
				<?php if(is_home()){ ?>
					<div id="intro">
							<h1><?php bloginfo('name'); ?></h1>
							<?php echo html_entity_decode(get_bloginfo('description')); ?>

						<ul class="actions">
							<li><a href="#header" class="button icon solo fa-arrow-down scrolly">Continue</a></li>
						</ul>
					</div>
					<?php
				}else{
					?>
					<style>
						#intro {
							display: none;
						}
					</style>
					<?php
				}

					?>

				<!-- Header -->
					<header id="header">
						<a href="<?php bloginfo('home');?>" class="logo">
							<?php
								if(current_theme_supports('custom-logo')){
									if(has_custom_logo()){
										echo get_custom_logo();
									}
									else{
										bloginfo('name');
									}
								}
							?>
						</a>
					</header>

				<!-- Nav -->
					<nav id="nav">
						<ul class="links">
							<?php
								wp_nav_menu(array(
									'theme_location' 	=> 'main-menu',
									'menu_class' 			=> 'links'
								));
							?>
						</ul>
						<ul class="icons">
							<?php 
								get_template_part('templates/masive-social-menu'); 
							?>
							<li>
								<div class="masive-search">
									<form method="get" action="<?php bloginfo('home'); ?>">
										<input name="s" type="text" placeholder="Search...">
									</form>
								</div>
							</li>


						</ul>
					</nav>