<?php
	//theme supports
	function masive_after_setup(){
		add_theme_support('title-tag');
		$masive_custom_logo = array(
			'height' 				=> 100,
			'width' 				=> 100
		);
		add_theme_support('custom-logo', $masive_custom_logo);
		
		$masive_custom_header = array(
			'header-text' 				=> true,
			'default-text-color' 	=> '#fff',
			'height' 							=> 100,
			'width' 							=> 100,
			'flex-height' 				=> true,
			'flex-width' 					=> true
		);
		add_theme_support('custom-header', $masive_custom_header);

		add_theme_support('custom-background');

		add_theme_support('post-thumbnails');

		add_image_size( 'masive_rect', 450, 300, false );

		register_nav_menus(array(
			'main-menu' 		=> __('Main Menu','masively'),
			'footer-menu' 	=> __('Footer Menu','masively'),
			'social-menu' 	=> __('Social Menu','masively'),
		));

	}
	add_action('after_setup_theme', 'masive_after_setup');

	//Home featured post
	register_post_type('masive_feature_post', array(
		'labels' => array(
			'name' => __('Featured Post', 'masively')
		),
		'public' => true,
		'supports' => array('title', 'editor', 'thumbnail')
	));

	//read more function
	function read_more($words){
		$massive_content = explode(" ", get_the_content());

		$slice_content = array_slice($massive_content, 0, $words);

		echo implode(" ", $slice_content);
	}

	//shorten home page title 
	function short_title($after = '', $length) {
		$mytitle = explode(' ', get_the_title(), $length);
			if (count($mytitle)>=$length) {
				array_pop($mytitle);
				$mytitle = implode(" ",$mytitle). $after;
			} else {
				$mytitle = implode(" ",$mytitle);
		}
	return $mytitle;
}