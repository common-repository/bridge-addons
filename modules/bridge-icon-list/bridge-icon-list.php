<?php

class BridgeIconListModule extends FLBuilderModule {

	public function __construct()
	{
		parent::__construct(array(
			'name'              => __( 'Icon List', 'bb-bridge' ),
			'description'       => __( 'Addon to display your icon list.', 'bb-bridge' ),
			'category'		    => __( 'Bridge Modules', 'bb-bridge' ),
			'dir'               => BB_BRIDGE_DIR . 'modules/bridge-icon-list/',
			'url'               => BB_BRIDGE_URL . 'modules/bridge-icon-list/',
			'editor_export'     => true, // Defaults to true and can be omitted.
			'enabled'           => true, // Defaults to true and can be omitted.
			'partial_refresh'   => true,
		));		
	}
}


FLBuilder::register_module( 'BridgeIconListModule', array(
	'general'       => array( // Tab
		'title'         => __( 'General', 'bb-bridge' ), // Tab title
		'sections'      => array( // Tab Sections
			'general'       => array( // Section
				'title'         => __( 'Settings', 'bb-bridge'),
				'fields'        => array( // Section Fields
					'list_icon'         => array(
						'type'              => 'icon',
						'label'             => __( 'List Icon', 'bb-bridge' ),
						'default'           => '',
						'show_remove'       => true,
					),
					'list_items'        => array(
						'type'              => 'text',
						'label'             => __( 'List Item', 'bb-bridge' ),
						'default'           => '',
						'size'              => '30',
						'multiple'          => true
					),
				)
			)
		)
	),
	'style'         => array(
		'title'         => __( 'Style', 'bb-bridge' ),
		'sections'      => array(
			'colors'        => array(
				'title'         => __( 'Colors', 'bb-bridge' ),
				'fields'        => array(
					'icon_color'        => array( 
						'type'              => 'color',
						'label'             => __( 'Icon Color', 'bb-bridge' ),
						'show_reset'        => true,
					),
					'text_color'        => array( 
						'type'              => 'color',
						'label'             => __( 'Text Color', 'bb-bridge' ),
						'show_reset'        => true,
					),
				)
			),
			'alignment'     => array(
				'title'         => __( 'Alignment', 'bb-bridge' ),
				'fields'        => array(
					'text_align'        => array(
						'type'              => 'select',
						'label'             => __( 'Text Align', 'bb-bridge' ),
						'default'           => 'left',
						'options'           => array(
							'left'              => __( 'Left', 'bb-bridge' ),
							'center'            => __( 'Center', 'bb-bridge' ),
							'right'             => __( 'Right', 'bb-bridge' ),
						),
					),
				)
			),
		)
	),
	'typography'    => array(
		'title'         => __( 'Typography', 'bb-bridge' ),
		'sections'      => array(
			'heading_font'  => array(
				'title'         => __( 'Font', 'bb-bridge' ),
				'fields'        => array(
					'font_family'       => array(
						'type'              => 'font',
						'label'             => __( 'Font Family', 'bb-bridge' ),
						'default'           => array(
							'family'            => 'Default',
							'weight'            => 'Default'
						),
					),
					'font_size'         => array( 
						'type'              => 'text',
						'label'             => __( 'Font Size', 'bb-bridge' ),
						'size'              => '5',
					),
					'font_size_unit'    => array(
						'type'              => 'select',
						'label'             => __( 'Font Size Unit', 'bb-bridge' ),
						'default'           => 'px',
						'options'           => array(
							'px'                => __( 'px', 'bb-bridge' ),
							'%'                 => __( '%', 'bb-bridge' ),
							'em'                => __( 'em', 'bb-bridge' ),
						),
					),
				)
			),
		)
	),
));