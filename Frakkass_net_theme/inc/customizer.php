<?php
	function cleancut_customize_register($wp_customize){
		// vitrine Section
  		$wp_customize->add_section('vitrine', array(
			'title'          => __('vitrine', 'cleancut'),
			'description'    => sprintf( __('Options pour la vitrine', 'cleancut')
			),
			'priority'       => 130,
		));

		// Image Setting
		  $wp_customize->add_setting('vitrine_image', array(
		    'default' => get_bloginfo('template_directory') . '/img/vitrine.jpg',
		    'type'    => 'theme_mod'

		 ));

		 // Image Control
		 $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'vitrine_image', array(
		     'label'    => __('Background Image', 'cleancut'),
		     'section'  => 'vitrine',
		     'settings' => 'vitrine_image',
		     'priority' => 1,
		 )));

		 // Height Setting
		$wp_customize->add_setting( 'vitrine_height', array(
			'default'              => _x(700, 'cleancut'),
			'type'                 => 'theme_mod'
		));

		// Height Control
		$wp_customize->add_control( 'vitrine_height', array(
			'label'    => __('hauteur de la vitrine', 'cleancut'),
			'section'  => 'vitrine',
			'priority' => 2,
		));

		// Heading Setting
		$wp_customize->add_setting( 'vitrine_heading', array(
			'default'              => _x('Chris Net Theme', 'cleancut'),
			'type'                 => 'theme_mod'
		));

		// Heading Control
		$wp_customize->add_control( 'vitrine_heading', array(
			'label'    => __('Heading', 'cleancut'),
			'section'  => 'vitrine',
			'priority' => 3,
		));

		// Text Setting
		$wp_customize->add_setting( 'vitrine_text', array(
			'default'              => _x('Un thème Wordpress par Chris', 'cleancut'),
			'type'                 => 'theme_mod'
		));

		// Text Control
		$wp_customize->add_control( 'vitrine_text', array(
			'label'    => __('Texte', 'cleancut'),
			'section'  => 'vitrine',
			'priority' => 4,
		));


		// Social Section
		 $wp_customize->add_section('social', array(
		     'title'          => __('Social', 'cleancut'),
		     'description'    => sprintf( __('Liens vers les réseaux sociaux', 'cleancut')
		     ),
		     'priority'       =>140,
		 ));

		 // Facebook URL Setting
		 $wp_customize->add_setting('facebook_url', array(
		   'default'              => _x('http://www.facebook.com', 'cleancut'),
		   'type'                 => 'theme_mod'
		 ));

		 // Facebook URL Control
		 $wp_customize->add_control( 'facebook_url', array(
		   'label'    => __('Facebook URL', 'cleancut'),
		   'section'  => 'social',
		   'priority' => 1,
		 ));

		 // Twitter URL Setting
		$wp_customize->add_setting('twitter_url', array(
		'default'              => _x('http://www.twitter.com', 'cleancut'),
		'type'                 => 'theme_mod'
		));

		// Twitter URL Control
		$wp_customize->add_control( 'twitter_url', array(
		'label'    => __('Twitter URL', 'cleancut'),
		'section'  => 'social',
		'priority' =>2,
		));

		// Linkedin URL Setting
		 $wp_customize->add_setting('linkedin_url', array(
		   'default'              => _x('http://www.linkedin.com', 'cleancut'),
		   'type'                 => 'theme_mod'
		 ));

		 // Linkedin URL Control
		 $wp_customize->add_control( 'linkedin_url', array(
		   'label'    => __('LinkedIn URL', 'cleancut'),
		   'section'  => 'social',
		   'priority' =>2,
		 ));

		 // Bottom Banner Section
		$wp_customize->add_section('banner', array(
		    'title'          => __('Bannière du bas', 'cleancut'),
		    'description'    => sprintf( __('Options pour la bannière du bas', 'cleancut')
		    ),
		    'priority'       => 160,
		));

		// Image Setting
		$wp_customize->add_setting('banner_image', array(
		'default' => get_bloginfo('template_directory') . '/img/banner.jpg',
		'type'    => 'theme_mod'

		));

		// Image Control
		$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'banner_image', array(
		'label'    => __('Image de fond', 'cleancut'),
		'section'  => 'banner',
		'settings' => 'banner_image',
		'priority' => 1,
		)));


		// Heading Setting
		$wp_customize->add_setting( 'banner_heading', array(
		  'default'              => _x('Suivez nous sur les réseaux sociaux', 'cleancut'),
		  'type'                 => 'theme_mod'
		));

		// Heading Control
		$wp_customize->add_control( 'banner_heading', array(
		  'label'    => __('Titre', 'cleancut'),
		  'section'  => 'banner',
		  'priority' => 3,
		));


		 // Misc Options Section
		$wp_customize->add_section('misc', array(
		 'title'          => __('Divers Options', 'cleancut'),
		 'description'    => sprintf( __('Divers options pour le thême', 'cleancut')
		 ),
		 'priority'       => 150,
		));

		$wp_customize->add_setting('animation', array(
	    'default'    => '1'
	));

	$wp_customize->add_control(
	    new WP_Customize_Control(
	        $wp_customize,
	        'animation',
	        array(
	            'label'     => __('Activer Animation', 'cleancut'),
	            'section'   => 'misc',
	            'settings'  => 'animation',
	            'type'      => 'checkbox',
	        )
	    )
	);

	}

	add_action('customize_register','cleancut_customize_register');