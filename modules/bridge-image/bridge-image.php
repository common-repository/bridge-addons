<?php

class BridgeImageModule extends FLBuilderModule {

	public function __construct()
	{
		parent::__construct(array(
			'name'              => __( 'Image', 'bb-bridge' ),
			'description'       => __( 'Addon to display your images.', 'bb-bridge' ),
			'category'		    => __( 'Bridge Modules', 'bb-bridge' ),
			'dir'               => BB_BRIDGE_DIR . 'modules/bridge-image/',
			'url'               => BB_BRIDGE_URL . 'modules/bridge-image/',
			'editor_export'     => true, // Defaults to true and can be omitted.
			'enabled'           => true, // Defaults to true and can be omitted.
			'partial_refresh'   => true,
		));		
	}
}


FLBuilder::register_module( 'BridgeImageModule', array(
	'general'       => array(
		'title'         => __( 'General', 'bb-bridge' ),
		'sections'      => array(
			'general'       => array(
				'fields'        => array(
					'image'              => array(
						'type'               => 'photo',
						'label'              => __( 'Select Image', 'bb-bridge' ),
					),
					'image_link'         => array(
						'type'               => 'link',
						'label'              => __( 'Image Link', 'bb-bridge' ),
						'placeholder'        => 'http://www.example.com',
						'default'            => '',
					),
					'image_link_target' => array(
						'type'               => 'select',
						'label'              => __( 'Image Link Target', 'bb-bridge' ),
						'default'            => '_self',
						'options'            => array(
							'_self'              => __( 'Same Window', 'bb-bridge' ),
							'_blank'             => __( 'New Window', 'bb-bridge' )
						),
					),
				)
			)
		)
	),
	'style'         => array(
		'title'         => __( 'Style', 'bb-bridge' ),
		'sections'      => array(
			'corners'        => array(
				'title'          => __( 'Corner Radius', 'bb-bridge' ),
				'fields'         => array(
					'top_left'               => array(
						'type'                   => 'text',
						'label'                  => __( 'Top Left', 'bb-bridge' ),
						'description'            => 'px',
						'default'                => '',
						'size'                   => '5',
						'placeholder'            => '0'
					),
					'top_right'              => array(
						'type'                   => 'text',
						'label'                  => __( 'Top Right', 'bb-bridge' ),
						'description'            => 'px',
						'default'                => '',
						'size'                   => '5',
						'placeholder'            => '0'
					),
					'bottom_left'            => array(
						'type'                   => 'text',
						'label'                  => __( 'Bottom Left', 'bb-bridge' ),
						'description'            => 'px',
						'default'                => '',
						'size'                   => '5',
						'placeholder'            => '0'
					),
					'bottom_right'           => array(
						'type'                   => 'text',
						'label'                  => __( 'Bottom Right', 'bb-bridge' ),
						'description'            => 'px',
						'default'                => '',
						'size'                   => '5',
						'placeholder'            => '0'
					),
				),
			),
		)
	),
	'hover'         => array(
		'title'         => __( 'Hover', 'bb-bridge' ),
		'sections'      => array(
			'hover'         => array(
				'title'         => __( 'Hover', 'bb-bridge' ),
				'fields'        => array(
					'hover_speed'        => array( 
						'type'               => 'text',
						'label'              => __( 'Hover Transition Speed', 'bb-bridge' ),
						'default'            => '0.2',
						'description'        => 'seconds',
						'size'               => '5',
						'placeholder'        => '0.2'
					),
					'hover_timing'         => array(
						'type'               => 'select',
						'label'              => __( 'Hover Transition Timing', 'bb-bridge' ),
						'default'            => 'ease-in-out',
						'options'            => array(
							'linear'             => __( 'Linear', 'bb-bridge' ),
							'ease'               => __( 'Ease', 'bb-bridge' ),
							'ease-in'            => __( 'Ease In', 'bb-bridge' ),
							'ease-out'           => __( 'Ease Out', 'bb-bridge' ),
							'ease-in-out'        => __( 'Ease In Out', 'bb-bridge' ),
							
						),
					),
				),
			),
			'type'          => array(
				'title'         => __( 'Type', 'bb-bridge' ),
				'fields'        => array(
					'hover_type'         => array(
						'type'               => 'select',
						'label'              => __( 'Hover Type', 'bb-bridge' ),
						'default'            => 'color',
						'options'            => array(
							'image'              => __( 'Image', 'bb-bridge' ),
							'color'              => __( 'Color', 'bb-bridge' ),
							'filter'             => __( 'Filter', 'bb-bridge' ),
						),
						'toggle'             => array(
							'color'              => array(
								'fields'             => array( 'hover_color', 'hover_opacity', 'hover_text' ),
							),
							'image'              => array(
								'fields'             => array( 'hover_image' ),
							),
							'filter'             => array(
								'fields'             => array( 'hover_filter' ),
							),
						),
					),
					'hover_color'            => array( 
						'type'                   => 'color',
						'label'                  => __( 'Background Color', 'bb-bridge' ),
						'default'                => '',
						'show_reset'             => true,
						'show_alpha'             => true,
					),
					'hover_text'             => array(
						'type'                   => 'textarea',
						'label'                  => __( 'Text', 'bb-bridge' ),
						'default'                => '',
					),
					'hover_image'            => array(
						'type'                   => 'photo',
						'label'                  => __( 'Select Image Hover', 'bb-bridge' ),
					),
					'hover_filter'           => array(
						'type'                   => 'select',
						'label'                  => __( 'Image Hover Filter', 'bb-bridge' ),
						'default'                => 'grayscale',
						'options'                => array(
							'grayscale'              => __( 'Grayscale', 'bb-bridge' ),
							'sepia'                  => __( 'Sepia', 'bb-bridge' ),
						),
					)
				),
			),
		)
	),
));