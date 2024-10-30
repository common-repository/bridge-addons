<?php

class BridgeTeamMemberModule extends FLBuilderModule {

	public function __construct()
	{
		parent::__construct(array(
			'name'              => __( 'Team Member', 'bb-bridge' ),
			'description'       => __( 'Addon to display your team member.', 'bb-bridge' ),
			'category'		    => __( 'Bridge Modules', 'bb-bridge' ),
			'dir'               => BB_BRIDGE_DIR . 'modules/bridge-team-member/',
			'url'               => BB_BRIDGE_URL . 'modules/bridge-team-member/',
			'editor_export'     => true, // Defaults to true and can be omitted.
			'enabled'           => true, // Defaults to true and can be omitted.
			'partial_refresh'   => true,
		));
	}
}


FLBuilder::register_module( 'BridgeTeamMemberModule', array(
	'general'       => array( // Tab
		'title'         => __( 'General', 'bb-bridge' ), // Tab title
		'sections'      => array( // Tab Sections
			'general'       => array( // Section
				'title'         => __( 'Member Details', 'bb-bridge' ),
				'fields'        => array( // Section Fields
					'member_image'         => array(
						'type'                 => 'photo',
						'label'                => __( 'Team Member Image', 'bb-bridge' ),
					),
					'member_name'          => array(
						'type'                 => 'text',
						'label'                => __( 'Team Member Name', 'bb-bridge' ),
						'default'              => '',
						'size'                 => '30',
					),
					'member_position'      => array(
						'type'                 => 'text',
						'label'                => __( 'Team Member Position', 'bb-bridge' ),
						'default'              => '',
						'size'                 => '30',
					),
					'member_description'   => array(
						'type'                 => 'textarea',
						'label'                => __( 'Team Member Description', 'bb-bridge' ),
						'default'              => '',
						'rows'                 => '6',
					),
					'social'     => array(
						'type'          => 'form',
						'label'         => __( 'Social Profile', 'bb-bridge' ),
						'form'          => 'social_profile',
						'multiple'      => true
					),
				)
			)
		)
	),
	'style'         => array(
		'title'         => __( 'Style', 'bb-bridge' ),
		'sections'      => array(
			'image'          => array(
				'title'          => __( 'Image', 'bb-bridge' ),
				'fields'         => array(
					'style'                  => array(
						'type'                   => 'select',
						'label'                  => __( 'Image Style', 'bb-bridge' ),
						'default'                => 'default',
						'help'                   => 'Rounded images require square format image',
						'options'                => array(
							'default'                => __( 'Default', 'bb-bridge' ),
							'rounded'                => __( 'Rounded', 'bb-bridge' ),
							'custom'                 => __( 'Custom', 'bb-bridge' ),
						),
						'toggle'                 => array(
							'custom'                 => array(
								'fields'                 => array( 'img_top_left', 'img_top_right', 'img_bottom_left', 'img_bottom_right' ),
							),
						),
					),
					'img_top_left'           => array(
						'type'                   => 'text',
						'label'                  => __( 'Top Left Radius', 'bb-bridge' ),
						'description'            => 'px',
						'default'                => '0',
						'size'                   => '5',
						'placeholder'            => '0'
					),
					'img_top_right'          => array(
						'type'                   => 'text',
						'label'                  => __( 'Top Right Radius', 'bb-bridge' ),
						'description'            => 'px',
						'default'                => '0',
						'size'                   => '5',
						'placeholder'            => '0'
					),
					'img_bottom_left'        => array(
						'type'                   => 'text',
						'label'                  => __( 'Bottom Left Radius', 'bb-bridge' ),
						'description'            => 'px',
						'default'                => '0',
						'size'                   => '5',
						'placeholder'            => '0'
					),
					'img_bottom_right'       => array(
						'type'                   => 'text',
						'label'                  => __( 'Bottom Right Radius', 'bb-bridge' ),
						'description'            => 'px',
						'default'                => '0',
						'size'                   => '5',
						'placeholder'            => '0'
					),
				),
			),
			'description'    => array(
				'title'          => __( 'Description', 'bb-bridge' ),
				'fields'         => array(
					'text_align'        => array(
						'type'              => 'select',
						'label'             => __( 'Descrition Text Align', 'bb-bridge' ),
						'default'           => 'left',
						'options'           => array(
							'left'              => __( 'Left', 'bb-bridge' ),
							'center'            => __( 'Center', 'bb-bridge' ),
							'right'             => __( 'Right', 'bb-bridge' ),
						),
					),
					'text_color'        => array( 
						'type'              => 'color',
						'label'             => __( 'Text Color', 'bb-bridge' ),
						'show_reset'        => true,
					),
					'bg_color'          => array( 
						'type'              => 'color',
						'label'             => __( 'Description Background Color', 'bb-bridge' ),
						'show_reset'        => true,
					),
					'padding'           => array(
						'type'              => 'dimension',
						'label'             => 'Padding',
						'description'       => 'px',
						'default'           => '20',
						'placeholder'       => '20',
					),
				),
			),
		)
	),
));

/**
 * Register a settings form to use in the "form" field type above.
 */
FLBuilder::register_settings_form( 'social_profile', array(
	'title' => __( 'Social Profile', 'bb-bridge' ),
	'tabs'  => array(
		'general'      => array( // Tab
			'title'         => __( 'General', 'bb-bridge' ), // Tab title
			'sections'      => array( // Tab Sections
				'general'       => array( // Section
					'title'         => '', // Section Title
					'fields'        => array( // Section Fields
						'social_icon'   => array(
							'type'              => 'icon',
							'label'             => __( 'Social Profile Icon', 'bb-bridge' ),
						),
						'social_link'    => array(
							'type'              => 'text',
							'label'             => __( 'Social Profile Link', 'bb-bridge' ),
						)
					)
				)
			)
		),
	)
));