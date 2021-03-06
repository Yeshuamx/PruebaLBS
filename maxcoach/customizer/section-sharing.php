<?php
$section  = 'social_sharing';
$priority = 1;
$prefix   = 'social_sharing_';

Maxcoach_Kirki::add_field( 'theme', array(
	'type'        => 'multicheck',
	'settings'    => $prefix . 'item_enable',
	'label'       => esc_attr__( 'Sharing Links', 'maxcoach' ),
	'description' => esc_html__( 'Check to the box to enable social share links.', 'maxcoach' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => array( 'facebook', 'twitter', 'linkedin', 'tumblr' ),
	'choices'     => array(
		'facebook' => esc_attr__( 'Facebook', 'maxcoach' ),
		'twitter'  => esc_attr__( 'Twitter', 'maxcoach' ),
		'linkedin' => esc_attr__( 'Linkedin', 'maxcoach' ),
		'tumblr'   => esc_attr__( 'Tumblr', 'maxcoach' ),
		'email'    => esc_attr__( 'Email', 'maxcoach' ),
	),
) );

Maxcoach_Kirki::add_field( 'theme', array(
	'type'        => 'sortable',
	'settings'    => $prefix . 'order',
	'label'       => esc_attr__( 'Order', 'maxcoach' ),
	'description' => esc_html__( 'Controls the order of social share links.', 'maxcoach' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => array(
		'facebook',
		'twitter',
		'linkedin',
		'tumblr',
		'email',
	),
	'choices'     => array(
		'facebook' => esc_attr__( 'Facebook', 'maxcoach' ),
		'twitter'  => esc_attr__( 'Twitter', 'maxcoach' ),
		'linkedin' => esc_attr__( 'Linkedin', 'maxcoach' ),
		'tumblr'   => esc_attr__( 'Tumblr', 'maxcoach' ),
		'email'    => esc_attr__( 'Email', 'maxcoach' ),
	),
) );
