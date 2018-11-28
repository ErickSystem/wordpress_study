<?php 

function wpcurso_customizer( $wp_customize ){

	// Copyright

	$wp_customize->add_section( 
		'sec_copyright', array(
			'title' => __('Copyright', 'wpcurso'),
			'description' => __('Copyright Section', 'wpcurso')
		)
	);

	$wp_customize->add_setting(
		'set_copyright', array(
			'type' => 'theme_mod',
			'default' => __('Copyright X - All rights reserved', 'wpcurso'),
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);

	$wp_customize->add_control(
		'set_copyright', array(
			'label' => __('Copyright', 'wpcurso'),
			'description' => __('Choose whether to show the Services section or not', 'wpcurso'),
			'section' => 'sec_copyright',
			'type' => 'text'
		)
	);	

	// Map

	$wp_customize->add_section( 
		'sec_map', array(
			'title' => __('Map', 'wpcurso'),
			'description' => __('Map Section', 'wpcurso')
		)
	);	

	// API Key

	$wp_customize->add_setting(
		'set_map_apikey', array(
			'type' => 'theme_mod',
			'default' => '',
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);

	$wp_customize->add_control(
		'set_map_apikey', array(
			'label' => __('API Key', 'wpcurso'),
			'description' => sprintf(
				__('Get your key <a target="_blank" href="%s">here</a>', 'wpcurso'),
				'https://console.developers.google.com/flows/enableapi?apiid=maps_backend'),
			'section' => 'sec_map',
			'type' => 'text'
		)
	);

	// Address

	$wp_customize->add_setting(
		'set_map_address', array(
			'type' => 'theme_mod',
			'default' => '',
			'sanitize_callback' => 'esc_textarea'
		)
	);

	$wp_customize->add_control(
		'set_map_address', array(
			'label' => __('Type your address here', 'wpcurso'),
			'description' => __('No special characters allowed', 'wpcurso'),
			'section' => 'sec_map',
			'type' => 'textarea'
		)
	);	

	// Slider

	$wp_customize->add_section( 
		'sec_slider', array(
			'title' => __('Slider', 'wpcurso'),
			'description' => __('Slider Section', 'wpcurso')
		)
	);

	// Design

	$wp_customize->add_setting(
		'set_slider_option', array(
			'type' => 'theme_mod',
			'default' => '1',
			'sanitize_callback' => 'wpcurso_sanitize_select'
		)
	);

	$wp_customize->add_control(
		'set_slider_option', array(
			'label' => __('Choose your design type here', 'wpcurso'),
			'description' => __('Choose your design type', 'wpcurso'),
			'section' => 'sec_slider',
			'type' => 'select',
			'choices' => array(
				'1' => __('Design Type 1', 'wpcurso'),
				'2' => __('Design Type 2', 'wpcurso'),
				'3' => __('Design Type 3', 'wpcurso'),
				'4' => __('Design Type 4', 'wpcurso')
			)
		)
	);	

	// Limit

	$wp_customize->add_setting(
		'set_slider_limit', array(
			'type' => 'theme_mod',
			'default' => '5',
			'sanitize_callback' => 'absint'
		)
	);

	$wp_customize->add_control(
		'set_slider_limit', array(
			'label' => __('Number of posts to display', 'wpcurso'),
			'description' => __('Choose the number of posts to be displayed', 'wpcurso'),
			'section' => 'sec_slider',
			'type' => 'number'
		)
	);	

	// Front Page Loops

	$wp_customize->add_section( 
		'sec_loops', array(
			'title' => __('Front Page Loops', 'wpcurso'),
			'description' => __('Controls the loops in front page', 'wpcurso')
		)
	);

	$wp_customize->add_setting(
		'set_loop1_categories', array(
			'type' => 'theme_mod',
			'default' => '',
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);

	$wp_customize->add_control(
		'set_loop1_categories', array(
			'label' => __('Categories to include in first loop', 'wpcurso'),
			'description' => __('Choose the categories to include in first loop. Use commas to sepate the categories. For example 4,5,8,20', 'wpcurso'),
			'section' => 'sec_loops',
			'type' => 'text'
		)
	);

	$wp_customize->add_setting(
		'set_loop2_posts_per_page', array(
			'type' => 'theme_mod',
			'default' => '2',
			'sanitize_callback' => 'absint'
		)
	);

	$wp_customize->add_control(
		'set_loop2_posts_per_page', array(
			'label' => __('Number of posts to display in second loop', 'wpcurso'),
			'description' => __('Choose the number of posts to display in second loop', 'wpcurso'),
			'section' => 'sec_loops',
			'type' => 'number'
		)
	);


	$wp_customize->add_setting(
		'set_loop2_categories_to_exclude', array(
			'type' => 'theme_mod',
			'default' => '',
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);

	$wp_customize->add_control(
		'set_loop2_categories_to_exclude', array(
			'label' => __('Categories to exclude in second loop', 'wpcurso'),
			'description' => __('Choose the categories to exclude in second loop. Use commas to sepate the categories. For example 4,5,8,20', 'wpcurso'),
			'section' => 'sec_loops',
			'type' => 'text'
		)
	);


	$wp_customize->add_setting(
		'set_loop2_categories_to_include', array(
			'type' => 'theme_mod',
			'default' => '',
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);

	$wp_customize->add_control(
		'set_loop2_categories_to_include', array(
			'label' => __('Categories to include in second loop', 'wpcurso'),
			'description' => __('Choose the categories to include in second loop. Use commas to sepate the categories. For example 4,5,8,20', 'wpcurso'),
			'section' => 'sec_loops',
			'type' => 'text'
		)
	);

}
add_action( 'customize_register', 'wpcurso_customizer' );

function wpcurso_sanitize_select( $input, $setting ){
 
    //input must be a slug: lowercase alphanumeric characters, dashes and underscores are allowed only
    $input = sanitize_key($input);

    //get the list of possible select options 
    $choices = $setting->manager->get_control( $setting->id )->choices;
                     
    //return input if valid or return default option
    return ( array_key_exists( $input, $choices ) ? $input : $setting->default );                
     
}