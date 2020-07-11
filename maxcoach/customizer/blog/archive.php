<?php
$section  = 'blog_archive';
$priority = 1;
$prefix   = 'blog_archive_';

$sidebar_positions   = Maxcoach_Helper::get_list_sidebar_positions();
$registered_sidebars = Maxcoach_Helper::get_registered_sidebars();

Maxcoach_Kirki::add_field( 'theme', array(
	'type'     => 'custom',
	'settings' => $prefix . 'group_title_' . $priority++,
	'section'  => $section,
	'priority' => $priority++,
	'default'  => '<div class="big_title">' . esc_html__( 'Header', 'maxcoach' ) . '</div>',
) );

Maxcoach_Kirki::add_field( 'theme', array(
	'type'        => 'select',
	'settings'    => 'blog_archive_header_type',
	'label'       => esc_html__( 'Header Style', 'maxcoach' ),
	'description' => esc_html__( 'Select header style that displays on blog archive pages.', 'maxcoach' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => '',
	'choices'     => Maxcoach_Header::instance()->get_list( true, esc_html__( 'Use Global Header Style', 'maxcoach' ) ),
) );

Maxcoach_Kirki::add_field( 'theme', array(
	'type'     => 'radio-buttonset',
	'settings' => 'blog_archive_header_overlay',
	'label'    => esc_html__( 'Header Overlay', 'maxcoach' ),
	'section'  => $section,
	'priority' => $priority++,
	'default'  => '',
	'choices'  => array(
		''  => esc_html__( 'Use Global', 'maxcoach' ),
		'0' => esc_html__( 'No', 'maxcoach' ),
		'1' => esc_html__( 'Yes', 'maxcoach' ),
	),
) );

Maxcoach_Kirki::add_field( 'theme', array(
	'type'     => 'radio-buttonset',
	'settings' => 'blog_archive_header_skin',
	'label'    => esc_html__( 'Header Skin', 'maxcoach' ),
	'section'  => $section,
	'priority' => $priority++,
	'default'  => '',
	'choices'  => array(
		''      => esc_html__( 'Use Global', 'maxcoach' ),
		'dark'  => esc_html__( 'Dark', 'maxcoach' ),
		'light' => esc_html__( 'Light', 'maxcoach' ),
	),
) );

Maxcoach_Kirki::add_field( 'theme', array(
	'type'     => 'custom',
	'settings' => $prefix . 'group_title_' . $priority++,
	'section'  => $section,
	'priority' => $priority++,
	'default'  => '<div class="big_title">' . esc_html__( 'Page Title Bar', 'maxcoach' ) . '</div>',
) );

Maxcoach_Kirki::add_field( 'theme', array(
	'type'        => 'select',
	'settings'    => 'blog_archive_title_bar_layout',
	'label'       => esc_html__( 'Title Bar Style', 'maxcoach' ),
	'description' => esc_html__( 'Select default Title Bar that displays on archive blog pages.', 'maxcoach' ),
	'section'     => $section,
	'priority'    => $priority++,
	'choices'     => Maxcoach_Title_Bar::instance()->get_list( true, esc_html__( 'Use Global Title Bar', 'maxcoach' ) ),
) );

Maxcoach_Kirki::add_field( 'theme', array(
	'type'     => 'custom',
	'settings' => $prefix . 'group_title_' . $priority++,
	'section'  => $section,
	'priority' => $priority++,
	'default'  => '<div class="big_title">' . esc_html__( 'Sidebar', 'maxcoach' ) . '</div>',
) );

Maxcoach_Kirki::add_field( 'theme', array(
	'type'        => 'select',
	'settings'    => 'blog_archive_page_sidebar_1',
	'label'       => esc_html__( 'Sidebar 1', 'maxcoach' ),
	'description' => esc_html__( 'Select sidebar 1 that will display on blog archive pages.', 'maxcoach' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => 'blog_sidebar',
	'choices'     => $registered_sidebars,
) );

Maxcoach_Kirki::add_field( 'theme', array(
	'type'        => 'select',
	'settings'    => 'blog_archive_page_sidebar_2',
	'label'       => esc_html__( 'Sidebar 2', 'maxcoach' ),
	'description' => esc_html__( 'Select sidebar 2 that will display on blog archive pages.', 'maxcoach' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => 'none',
	'choices'     => $registered_sidebars,
) );

Maxcoach_Kirki::add_field( 'theme', array(
	'type'     => 'radio-buttonset',
	'settings' => 'blog_archive_page_sidebar_position',
	'label'    => esc_html__( 'Sidebar Position', 'maxcoach' ),
	'section'  => $section,
	'priority' => $priority++,
	'default'  => 'right',
	'choices'  => $sidebar_positions,
) );

Maxcoach_Kirki::add_field( 'theme', array(
	'type'     => 'custom',
	'settings' => $prefix . 'group_title_' . $priority++,
	'section'  => $section,
	'priority' => $priority++,
	'default'  => '<div class="big_title">' . esc_html__( 'Others', 'maxcoach' ) . '</div>',
) );

Maxcoach_Kirki::add_field( 'theme', array(
	'type'        => 'select',
	'settings'    => 'blog_archive_style',
	'label'       => esc_html__( 'Blog Style', 'maxcoach' ),
	'description' => esc_html__( 'Select blog style that display for archive pages.', 'maxcoach' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => 'grid',
	'choices'     => array(
		'grid' => esc_attr__( 'Grid', 'maxcoach' ),
	),
) );

Maxcoach_Kirki::add_field( 'theme', array(
	'type'            => 'custom',
	'settings'        => $prefix . 'group_title_' . $priority++,
	'section'         => $section,
	'priority'        => $priority++,
	'default'         => '<div class="group_title">' . esc_html__( 'Grid Columns', 'maxcoach' ) . '</div>',
	'active_callback' => array(
		array(
			'setting'  => 'blog_archive_style',
			'operator' => '==',
			'value'    => 'grid',
		),
	),
) );

Maxcoach_Kirki::add_field( 'theme', array(
	'type'            => 'slider',
	'settings'        => 'blog_archive_lg_columns',
	'label'           => esc_html__( 'Large Device', 'maxcoach' ),
	'section'         => $section,
	'priority'        => $priority++,
	'default'         => 2,
	'transport'       => 'auto',
	'choices'         => array(
		'min'  => 0,
		'max'  => 6,
		'step' => 1,
	),
	'active_callback' => array(
		array(
			'setting'  => 'blog_archive_style',
			'operator' => '==',
			'value'    => 'grid',
		),
	),
) );

Maxcoach_Kirki::add_field( 'theme', array(
	'type'            => 'slider',
	'settings'        => 'blog_archive_md_columns',
	'label'           => esc_html__( 'Medium Device', 'maxcoach' ),
	'section'         => $section,
	'priority'        => $priority++,
	'default'         => 2,
	'transport'       => 'auto',
	'choices'         => array(
		'min'  => 0,
		'max'  => 6,
		'step' => 1,
	),
	'active_callback' => array(
		array(
			'setting'  => 'blog_archive_style',
			'operator' => '==',
			'value'    => 'grid',
		),
	),
) );

Maxcoach_Kirki::add_field( 'theme', array(
	'type'            => 'slider',
	'settings'        => 'blog_archive_sm_columns',
	'label'           => esc_html__( 'Small Device', 'maxcoach' ),
	'section'         => $section,
	'priority'        => $priority++,
	'default'         => 1,
	'transport'       => 'auto',
	'choices'         => array(
		'min'  => 0,
		'max'  => 6,
		'step' => 1,
	),
	'active_callback' => array(
		array(
			'setting'  => 'blog_archive_style',
			'operator' => '==',
			'value'    => 'grid',
		),
	),
) );
