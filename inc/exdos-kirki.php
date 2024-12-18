<?php

// panel name
new \Kirki\Panel(
	'exdos_panel_id',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'Exdos Options', 'kirki' ),
		'description' => esc_html__( 'My Panel Description.', 'kirki' ),
	]
);

// header logo section
function header_logo_kirki(){
	new \Kirki\Section(
		'header_logo_section',
		[
			'title'       => esc_html__( 'Header Main Logo', 'kirki' ),
			'description' => esc_html__( 'My Section Description.', 'kirki' ),
			'panel'       => 'exdos_panel_id',
			'priority'    => 160,
		]
	);

	new \Kirki\Field\Image(
		[
			'settings'    => 'header_logo',
			'label'       => esc_html__( 'Header Logo', 'kirki' ),
			'description' => esc_html__( 'Upload your logo here', 'kirki' ),
			'section'     => 'header_logo_section',
			'default'     => get_template_directory_uri().'/assets/img/logo/logo-white.png',
		]
	);
	
	
}
header_logo_kirki();


// header info section
function header_info_kirki(){
	new \Kirki\Section(
		'header_info',
		[
			'title'       => esc_html__( 'Header Info', 'kirki' ),
			'description' => esc_html__( 'My Section Description.', 'kirki' ),
			'panel'       => 'exdos_panel_id',
			'priority'    => 160,
		]
	);
	
	new \Kirki\Field\Text(
		[
			'settings' => 'phone_number',
			'label'    => esc_html__( 'Phone Number', 'kirki' ),
			'section'  => 'header_info',
			'default'  => esc_html__( '+ 4 20 7700 1007', 'kirki' ),
			'priority' => 10,
		]
	);
}
header_info_kirki();

// header offcanvas section
function header_offcanvas_kirki(){
	new \Kirki\Section(
		'header_offcanvas',
		[
			'title'       => esc_html__( 'Header Offcanvas', 'kirki' ),
			'description' => esc_html__( 'My Section Description.', 'kirki' ),
			'panel'       => 'exdos_panel_id',
			'priority'    => 160,
		]
	);
	
	new \Kirki\Field\Text(
		[
			'settings' => 'offcanvas_main_title',
			'label'    => esc_html__( 'Offcanvas Main Tittle', 'kirki' ),
			'section'  => 'header_offcanvas',
			'default'  => esc_html__( 'Hello There', 'kirki' ),
			'priority' => 10,
		]
	);
	
	new \Kirki\Field\Textarea(
		[
			'settings' => 'offcanvas_content',
			'label'    => esc_html__( 'Offcanvas Content', 'kirki' ),
			'section'  => 'header_offcanvas',
			'default'  => esc_html__( 'lorem ipsum dollar sit amet', 'kirki' ),
			'priority' => 10,
		]
	);
	
	new \Kirki\Field\Text(
		[
			'settings' => 'offcanvas_email',
			'label'    => esc_html__( 'Offcanvas Email', 'kirki' ),
			'section'  => 'header_offcanvas',
			'default'  => esc_html__( 'hello@exdos.com', 'kirki' ),
			'priority' => 10,
		]
	);
	
	new \Kirki\Field\Text(
		[
			'settings' => 'offcanvas_address',
			'label'    => esc_html__( 'Offcanvas Address', 'kirki' ),
			'section'  => 'header_offcanvas',
			'default'  => esc_html__( 'Avenue de Roma 158b, Lisboa', 'kirki' ),
			'priority' => 10,
		]
	);
	
	new \Kirki\Field\Text(
		[
			'settings' => 'offcanvas_address_url',
			'label'    => esc_html__( 'Offcanvas Address URL', 'kirki' ),
			'section'  => 'header_offcanvas',
			'default'  => esc_html__( '#', 'kirki' ),
			'priority' => 10,
		]
	);
}
header_offcanvas_kirki();


// header social section
function header_social_kirki(){
	new \Kirki\Section(
		'header_social_info',
		[
			'title'       => esc_html__( 'Header Social', 'kirki' ),
			'description' => esc_html__( 'My Section Description.', 'kirki' ),
			'panel'       => 'exdos_panel_id',
			'priority'    => 160,
		]
	);
	
	// My code follow us tittle
	new \Kirki\Field\Text(
		[
			'settings' => 'follow_us_tittle',
			'label'    => esc_html__( 'Follow Us Tittle', 'kirki' ),
			'section'  => 'header_social_info',
			'default'  => esc_html__( 'Follow Us', 'kirki' ),
			'priority' => 10,
		]
	);
	
	new \Kirki\Field\Text(
		[
			'settings' => 'social_fb',
			'label'    => esc_html__( 'Facebook URL', 'kirki' ),
			'section'  => 'header_social_info',
			'default'  => esc_html__( '#', 'kirki' ),
			'priority' => 10,
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'social_tw',
			'label'    => esc_html__( 'Twitter URL', 'kirki' ),
			'section'  => 'header_social_info',
			'default'  => esc_html__( '#', 'kirki' ),
			'priority' => 10,
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'social_in',
			'label'    => esc_html__( 'LinkedIn URL', 'kirki' ),
			'section'  => 'header_social_info',
			'default'  => esc_html__( '#', 'kirki' ),
			'priority' => 10,
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'social_insta',
			'label'    => esc_html__( 'Instagram URL', 'kirki' ),
			'section'  => 'header_social_info',
			'default'  => esc_html__( '#', 'kirki' ),
			'priority' => 10,
		]
	);
}
header_social_kirki();