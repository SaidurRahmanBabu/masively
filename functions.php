<?php
	//text domain
	load_theme_textdomain('masively');
	//theme scripts enqueue
	require_once('inc/masively-scripts.php');
	//add_theme_supports, featured post, read more
	require_once('inc/masive-after-setup-theme.php');
	//all widgets function
	require_once('inc/masive-widget-init.php');
	//tgm plugins
	require_once('inc/tgm.php');
	//afc functionalities
	require_once('inc/masive-acf.php');

	//Custom Header bg and color
	function masive_custom_header_bg_color(){
		if(current_theme_supports('custom-background')){
			?>
			<style>
				#intro h1, #intro p, #intro p a {
					color: #<?php echo get_header_textcolor(); ?>;
				}
			</style>
			<?php
		}
	}
	add_action('wp_head', 'masive_custom_header_bg_color');

	//add_filter( 'acf/settings/show_admin', '__return_false' );
