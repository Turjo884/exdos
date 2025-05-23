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

	// header variation
	new \Kirki\Field\Select(
		[
			'settings'    => 'header_style_kirki',
			'label'       => esc_html__( 'Default Header', 'kirki' ),
			'section'     => 'header_info',
			'default'     => 'header_kirki_01',
			'placeholder' => esc_html__( 'Choose an option', 'kirki' ),
			'choices'     => [
				'header_kirki_01' => esc_html__( 'Header Style 01', 'kirki' ),
				'header_kirki_02' => esc_html__( 'Header Style 02', 'kirki' ),
			],
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

	new \Kirki\Field\Repeater(
		[
			'settings' => 'offcanvas_gallery',
			'label'    => esc_html__( 'Gallery Item', 'kirki' ),
			'section'  => 'header_offcanvas',
			'priority' => 10,
			
			'fields'   => [
				'gallery_image'   => [
					'type'        => 'image',
					'label'       => esc_html__( 'Gallery Image', 'kirki' ),
					'description' => esc_html__( 'Please add your gallery image', 'kirki' ),
				],
				
			],
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


// breadcrumb section
function breadcrump_kirki(){
	new \Kirki\Section(
		'breadcrump_section',
		[
			'title'       => esc_html__( 'Breadcrumb', 'kirki' ),
			'description' => esc_html__( 'My Section Description.', 'kirki' ),
			'panel'       => 'exdos_panel_id',
			'priority'    => 160,
		]
	);

	new \Kirki\Field\Image(
		[
			'settings'    => 'breadcrumb_image',
			'label'       => esc_html__( 'Breadcrumb Image', 'kirki' ),
			'description' => esc_html__( 'Upload your logo here', 'kirki' ),
			'section'     => 'breadcrump_section',
		]
	);
	
	
}
breadcrump_kirki();

// footer logo section
function footer_section_kirki(){
	new \Kirki\Section(
		'footer_section',
		[
			'title'       => esc_html__( 'Footer', 'kirki' ),
			'description' => esc_html__( 'My Section Description.', 'kirki' ),
			'panel'       => 'exdos_panel_id',
			'priority'    => 160,
		]
	);

	// footer variation
	new \Kirki\Field\Select(
		[
			'settings'    => 'footer_style_kirki',
			'label'       => esc_html__( 'Default Footer', 'kirki' ),
			'section'     => 'footer_section',
			'default'     => 'footer_kirki_01',
			'placeholder' => esc_html__( 'Choose an option', 'kirki' ),
			'choices'     => [
				'footer_kirki_01' => esc_html__( 'Footer Style 01', 'kirki' ),
				'footer_kirki_02' => esc_html__( 'Footer Style 02', 'kirki' ),
			],
		]
	);

	new \Kirki\Field\Image(
		[
			'settings'    => 'footer_logo',
			'label'       => esc_html__( 'Footer Logo', 'kirki' ),
			'description' => esc_html__( 'Upload your logo here', 'kirki' ),
			'section'     => 'footer_section',
			'default'     => get_template_directory_uri().'/assets/img/logo/logo-white.png',
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'footer_copywright',
			'label'    => esc_html__( 'Footer Copywright', 'kirki' ),
			'section'  => 'footer_section',
			'default'  => esc_html__( '© Copyright 2024 | Alright reserved exdos by ThemePure', 'kirki' ),
			'priority' => 10,
		]
	);

	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'footer_top_switch',
			'label'       => esc_html__( 'Footer Top Switch', 'kirki' ),
			'description' => esc_html__( 'Simple switch control', 'kirki' ),
			'section'     => 'footer_section',
			'default'     => 'off',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'kirki' ),
				'off' => esc_html__( 'Disable', 'kirki' ),
			],
		]
	);

	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'footer_shape_switch',
			'label'       => esc_html__( 'Footer Shape Switch', 'kirki' ),
			'description' => esc_html__( 'Simple switch control', 'kirki' ),
			'section'     => 'footer_section',
			'default'     => 'off',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'kirki' ),
				'off' => esc_html__( 'Disable', 'kirki' ),
			],
		]
	);
	
	
}
footer_section_kirki();