<?php

class BridgeHeadingModule extends FLBuilderModule {

	public function __construct()
	{
		parent::__construct(array(
			'name'              => __( 'Heading', 'bb-bridge' ),
			'description'       => __( 'Addon to display your heading.', 'bb-bridge' ),
			'category'		    => __( 'Bridge Modules', 'bb-bridge' ),
			'dir'               => BB_BRIDGE_DIR . 'modules/bridge-heading/',
			'url'               => BB_BRIDGE_URL . 'modules/bridge-heading/',
			'editor_export'     => true, // Defaults to true and can be omitted.
			'enabled'           => true, // Defaults to true and can be omitted.
			'partial_refresh'   => true,
		));		
	}
}


FLBuilder::register_module( 'BridgeHeadingModule', array(
	'general'       => array(
		'title'         => __( 'General', 'bb-bridge' ),
		'sections'      => array(
			'heading'       => array(
				'title'         => __( 'Heading', 'bb-bridge' ),
				'fields'        => array(
					'heading'            => array(
						'type'               => 'select',
						'label'              => __( 'Type', 'bb-bridge' ),
						'default'            => 'h3',
						'options'            => array(
							'h1'                 => __( 'H1', 'bb-bridge' ),
							'h2'                 => __( 'H2', 'bb-bridge' ),
							'h3'                 => __( 'H3', 'bb-bridge' ),
							'h4'                 => __( 'H4', 'bb-bridge' ),
							'h5'                 => __( 'H5', 'bb-bridge' ),
							'h6'                 => __( 'H6', 'bb-bridge' )
						),
					),
					'text'               => array(
						'type'               => 'text',
						'label'              => __( 'Text', 'bb-bridge' ),
						'default'            => 'Heading Text',
						'placeholder'        => 'Heading Text'
					),
					'link'               => array(
						'type'               => 'link',
						'label'              => __( 'Link', 'bb-bridge' ),
						'default'            => '',
						'placeholder'        => 'http://example.com'
					),
					'link_target'        => array(
						'type'               => 'select',
						'label'              => __( 'Link Target', 'bb-bridge' ),
						'default'            => '_self',
						'options'            => array(
							'_self'              => __( 'Same Window', 'bb-bridge' ),
							'_blank'             => __( 'New Window', 'bb-bridge' )
						),
					),
				)
			),
			'sub_heading'   => array(
				'title'         => __( 'Sub Heading', 'bb-bridge' ),
				'fields'        => array(
					'sub_heading_text'   => array(
						'type'               => 'editor',
						'label'              => '',
						'media_buttons'      => false,
						'default'            => '',
					),
				)
			)	
		)
	),
	'style'         => array(
		'title'         => __( 'Style', 'bb-bridge' ),
		'sections'      => array(
			'heading'       => array(
				'title'         => __( 'Heading', 'bb-bridge' ),
				'fields'        => array(
					'color'                  => array(
						'type'                   => 'color',
						'label'                  => __( 'Color', 'bb-bridge' ),
						'show_reset'             => true,
						'show_alpha'             => true,
					),
					'heading_text_align'     => array(
						'type'                   => 'select',
						'label'                  => __( 'Text Align', 'bb-bridge' ),
						'default'                => 'center',
						'options'                => array(
							'left'                   => __( 'Left', 'bb-bridge' ),
							'center'                 => __( 'Center', 'bb-bridge' ),
							'right'                  => __( 'Right', 'bb-bridge' ),
						),
					),				
				),
			),
			'sub_heading'   => array(
				'title'         => __( 'Sub Heading', 'bb-bridge' ),
				'fields'        => array(
					'sub_color'              => array(
						'type'                   => 'color',
						'label'                  => __( 'Color', 'bb-bridge' ),
						'show_reset'             => true,
						'show_alpha'             => true,
					),
					'sub_heading_text_align' => array(
						'type'                   => 'select',
						'label'                  => __( 'Sub Heading Text Align', 'bb-bridge' ),
						'default'                => 'center',
						'options'                => array(
							'left'                   => __( 'Left', 'bb-bridge' ),
							'center'                 => __( 'Center', 'bb-bridge' ),
							'right'                  => __( 'Right', 'bb-bridge' ),
						),
					),					
				),
			),
		)
	),
	'typography'    => array(
		'title'         => __( 'Typography', 'bb-bridge' ),
		'sections'      => array(
			'heading_font'  => array(
				'title'         => __( 'Heading Font', 'bb-bridge' ),
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
			'sub_heading_font'  => array(
				'title'             => __( 'Sub Heading Font', 'bb-bridge' ),
				'fields'            => array(
					'sub_font_family'    => array(
						'type'               => 'font',
						'label'              => __( 'Font Family', 'bb-bridge' ),
						'default'            => array(
							'family'             => 'Default',
							'weight'             => 'Default'
						),
					),
					'sub_font_size'      => array( 
						'type'               => 'text',
						'label'              => __( 'Font Size', 'bb-bridge' ),
						'size'               => '5',
					),
					'sub_font_size_unit' => array(
						'type'               => 'select',
						'label'              => __( 'Font Size Unit', 'bb-bridge' ),
						'default'            => 'px',
						'options'            => array(
							'px'                 => __( 'px', 'bb-bridge' ),
							'%'                  => __( '%', 'bb-bridge' ),
							'em'                 => __( 'em', 'bb-bridge' ),
						),
					),
				)
			)
		)
	),
));