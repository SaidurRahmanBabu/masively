<?php
	function masively_scripts(){
		//css files 

		wp_enqueue_style('masively-fonts', "//fonts.googleapis.com/css?family=Merriweather:300,700,300italic,700italic|Source+Sans+Pro:900");

		wp_enqueue_style('masively-noscript', get_template_directory_uri() . '/assets/css/noscript.css', array(), 'null', 'all');

		wp_enqueue_style('masively-style', get_template_directory_uri() . '/assets/css/main.css', array(), time(), 'all');
		
		wp_enqueue_style( 'masive-main', get_stylesheet_uri(), array(), time(), 'all' );
		

		//js files
		wp_enqueue_script('masiv-scrollex', get_template_directory_uri() . '/assets/js/jquery.scrollex.min.js', array(), 'null', true);
		
		wp_enqueue_script('masiv-scrolly', get_template_directory_uri() . '/assets/js/jquery.scrolly.min.js', array(), 'null', true);

		wp_enqueue_script('masiv-browser', get_template_directory_uri() . '/assets/js/browser.min.js', array(), 'null', true);

		wp_enqueue_script('masiv-breakpoints', get_template_directory_uri() . '/assets/js/breakpoints.min.js', array(), 'null', true);

		wp_enqueue_script('masiv-util', get_template_directory_uri() . '/assets/js/util.js', array(), 'null', true);

		wp_enqueue_script('masiv-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), 'null', true);

	}
	add_action( 'wp_enqueue_scripts', 'masively_scripts' );