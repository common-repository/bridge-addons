<?php

class BridgeButtonModule extends FLBuilderModule {

	public function __construct()
	{
		parent::__construct(array(
			'name'              => __( 'Button', 'bb-bridge' ),
			'description'       => __( 'Addon to display your buttons.', 'bb-bridge' ),
			'category'		    => __( 'Bridge Modules', 'bb-bridge' ),
			'dir'               => BB_BRIDGE_DIR . 'modules/bridge-button/',
			'url'               => BB_BRIDGE_URL . 'modules/bridge-button/',
			'editor_export'     => true,
			'enabled'           => true,
			'partial_refresh'   => true,
		));		
	}
}


FLBuilder::register_module( 'BridgeButtonModule', array(
	'general'       => array(
		'title'         => __( 'General', 'bb-bridge' ),
		'sections'      => array(
			'general'       => array(
				'fields'        => array(
					'button_text'        => array(
						'type'               => 'text',
						'label'              => __( 'Button Text', 'bb-bridge' ),
						'default'            => __( 'Button', 'bb-bridge' ),
					),
					'button_link'        => array(
						'type'               => 'link',
						'label'              => __( 'Button Link', 'bb-bridge' ),
						'placeholder'        => 'http://www.example.com',
						'default'            => '',
					),
					'button_link_target' => array(
						'type'               => 'select',
						'label'              => __( 'Link Target', 'bb-bridge' ),
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
			'size'          => array(
				'title'         => __( 'Size', 'bb-bridge' ),
				'fields'        => array(
					'size'               => array(
						'type'               => 'select',
						'label'              => __( 'Button Size', 'bb-bridge' ),
						'default'            => 'medium',
						'options'            => array(
							'small'              => __( 'Small', 'bb-bridge' ),
							'medium'             => __( 'Medium', 'bb-bridge' ),
							'large'              => __( 'Large', 'bb-bridge' ),
							'custom'             => __( 'Custom', 'bb-bridge' )
						),
						'toggle'             => array(
							'custom'             => array(
								'fields'             => array( 'padding_left', 'padding_right', 'padding_top', 'padding_bottom' ),
							),
						)
					),
					'padding_left'       => array(
						'type'               => 'text',
						'label'              => __( 'Padding Left', 'bb-bridge' ),
						'default'            => '0',
						'description'        => 'px',
						'size'               => '5',
						'placeholder'        => '0'
					),
					'padding_right'      => array(
						'type'               => 'text',
						'label'              => __( 'Padding Right', 'bb-bridge' ),
						'default'            => '0',
						'description'        => 'px',
						'size'               => '5',
						'placeholder'        => '0'
					),
					'padding_top'        => array(
						'type'               => 'text',
						'label'              => __( 'Padding Top', 'bb-bridge' ),
						'default'            => '0',
						'description'        => 'px',
						'size'               => '5',
						'placeholder'        => '0'
					),
					'padding_bottom'     => array(
						'type'               => 'text',
						'label'              => __( 'Padding Bottom', 'bb-bridge' ),
						'default'            => '0',
						'description'        => 'px',
						'size'               => '5',
						'placeholder'        => '0'
					),
				),
			),
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
			'alignment'     => array(
				'title'         => __( 'Alignment', 'bb-bridge' ),
				'fields'        => array(
					'alignment'          => array(
						'type'               => 'select',
						'label'              => __( 'Alignment', 'bb-bridge' ),
						'default'            => 'center',
						'options'            => array(
							'left'               => __( 'Left', 'bb-bridge' ),
							'center'             => __( 'Center', 'bb-bridge' ),
							'right'              => __( 'Right', 'bb-bridge' ),
						),
					),
				),
			),
			'icon'          => array(
				'title'         => __( 'Icon', 'bb-bridge' ),
				'fields'        => array(
					'icon'              => array( 
						'type'              => 'icon',
						'label'             => __( 'Icon', 'bb-bridge' ),						
						'show_remove'       => true,
					),
					'icon_position'     => array(
						'type'              => 'select',
						'label'             => __( 'Icon Position', 'bb-bridge' ),
						'default'           => 'before',
						'options'           => array(
							'before'            => __( 'Before Text', 'bb-bridge' ),
							'after'             => __( 'After Text', 'bb-bridge' ),
						),
					),
				),
			),
			'background'    => array(
				'title'         => __( 'Background', 'bb-bridge' ),
				'fields'        => array(
					'background'         => array(
						'type'               => 'select',
						'label'              => __( 'Type', 'bb-bridge' ),
						'default'            => 'color',
						'options'            => array(
							'none'              => __( 'None', 'bb-bridge' ),
							'color'             => __( 'Color', 'bb-bridge' ),
						),
						'toggle'             => array(
							'color'              => array(
								'fields'             => array( 'bg_color' ),
							),
						),
					),
					'bg_color'           => array(
						'type'               => 'color',
						'label'              => __( 'Background Color', 'bb-bridge' ),
						'default'            => '',
						'show_reset'         => true,
						'show_alpha'         => true,
					),			
				)
			),
			'colors'        => array(
				'title'         => __( 'Colors', 'bb-bridge' ),
				'fields'        => array(
					'color'              => array( 
						'type'               => 'color',
						'label'              => __( 'Text Color', 'bb-bridge' ),
						'default'            => 'ffffff',
					),
				),
			),
			'border'         => array(
				'title'          => __( 'Border', 'bb-bridge' ),
				'fields'         => array(
					'border_style'       => array(
						'type'               => 'select',
						'label'              => __( 'Type', 'bb-bridge' ),
						'default'            => 'none',
						'options'            => array(
							'none'               => __( 'None', 'bb-bridge' ),
							'solid'              => __( 'Solid', 'bb-bridge' ),
							'dashed'             => __( 'Dashed', 'bb-bridge' ),
							'dotted'             => __( 'Dotted', 'bb-bridge' ),							
							'double'             => __( 'Double', 'bb-bridge' ),
						),
						'toggle'             => array(
							'solid'              => array(
								'fields'             => array( 'border_color', 'border_width' ),
							),
							'dashed'              => array(
								'fields'             => array( 'border_color', 'border_width' ),
							),
							'dotted'              => array(
								'fields'             => array( 'border_color', 'border_width' ),
							),
							'double'              => array(
								'fields'             => array( 'border_color', 'border_width' ),
							),
						),
					),
					'border_color'       => array( 
						'type'               => 'color',
						'label'              => __( 'Color', 'bb-bridge' ),
						'default'            => '',
						'show_reset'         => true,
						'show_alpha'         => true,
					),
					'border_width'       => array( 
						'type'               => 'dimension',
						'label'              => __( 'Width', 'bb-bridge' ),
						'description'        => 'px',
						'default'            => '',
						'placeholder'        => '0',
					),					
				),
			),
		)
	),
	'hover'    => array(
		'title'         => __( 'Hover', 'bb-bridge' ),
		'sections'      => array(
			'transition'    => array(
				'title'         => __( 'Transition', 'bb-bridge' ),
				'fields'        => array(
					'hover_speed'        => array( 
						'type'               => 'text',
						'label'              => __( 'Speed', 'bb-bridge' ),
						'default'            => '0.2',
						'description'        => 'seconds',
						'size'               => '5',
						'placeholder'        => '0.2'
					),
					'hover_timing'         => array(
						'type'               => 'select',
						'label'              => __( 'Timing', 'bb-bridge' ),
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
			'background'         => array(
				'title'         => __( 'Background', 'bb-bridge' ),
				'fields'        => array(
					'hover_bg_type'      => array(
						'type'               => 'select',
						'label'              => __( 'Type', 'bb-bridge' ),
						'default'            => 'none',
						'options'            => array(
							'none'              => __( 'None', 'bb-bridge' ),
							'color'             => __( 'Color', 'bb-bridge' ),
						),
						'toggle'             => array(
							'color'              => array(
								'fields'             => array( 'hover_bg_color' ),
							),
						),
					),
					'hover_bg_color'     => array(
						'type'               => 'color',
						'label'              => __( 'Background Color', 'bb-bridge' ),
						'default'            => 'eeeeee',
						'show_reset'         => true,
						'show_alpha'         => true,
					),
				),
			),
			'colors'        => array(
				'title'         => __( 'Colors', 'bb-bridge' ),
				'fields'        => array(
					'hover_color'     => array( 
						'type'                 => 'color',
						'label'                => __( 'Text Color', 'bb-bridge' ),
						'default'              => '',
						'show_reset'           => true,
					),
				),
			),
		)
	),
	'typography'    => array(
		'title'         => __( 'Typography', 'bb-bridge' ),
		'sections'      => array(
			'font'          => array(
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
			)
		)
	),
));