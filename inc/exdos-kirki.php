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

// section
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

// section
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
		'settings' => 'offcanvas_main-title',
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