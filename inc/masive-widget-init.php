<?php
	function masive_widgets(){
		//footer contact form
		register_sidebar(array(
			'name' 								=> __('Footer Contact Form', 'masively'),
			'id' 									=> 'masive_social_contact',
			'before_widget' 			=> '<section>',
			'after_widget' 				=> '</section>',
			'before_title' 				=> '',
			'after_title' 				=>''
		));

		//social contact address
		register_sidebar(array(
			'name' 								=> __('Footer Contact Address', 'masively'),
			'id' 									=> 'masive_contact_address',
			'before_widget' 			=> '<section class="alt">',
			'after_widget' 				=> '</p></section>',
			'before_title' 				=> '<h3>',
			'after_title' 				=>'</h3><p>'
		));

		//Theme footer bottom Licence
		register_sidebar(array(
			'name' 								=> __('Theme Licence', 'masively'),
			'id' 									=> 'masive_licence',
			'before_widget' 			=> '<ul><li>',
			'after_widget' 				=> '</li></ul>',
			'before_title' 				=> '',
			'after_title' 				=>''
		));

		//Theme recent posts
		register_sidebar(array(
			'name' 								=> __('Recent Posts', 'masively'),
			'id' 									=> 'masive_recent_posts',
			'before_widget' 			=> '',
			'after_widget' 				=> '',
			'before_title' 				=> '<h2>',
			'after_title' 				=>'</h2>'
		));

		//Signle page category list
		register_sidebar(array(
			'name' 								=> __('Single Page Category', 'masively'),
			'id' 									=> 'single_page_category',
			'before_widget' 			=> '<h4>',
			'after_widget' 				=> '</h4>',
			'before_title' 				=> '<h2>',
			'after_title' 				=>'</h2>'
		));

	}
	add_action('widgets_init', 'masive_widgets');