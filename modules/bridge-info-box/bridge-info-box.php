<?php

class BridgeInfoBoxModule extends FLBuilderModule {

	public function __construct()
	{
		parent::__construct(array(
			'name'              => __( 'Info Box', 'bb-bridge' ),
			'description'       => __( 'Addon to display your info.', 'bb-bridge' ),
			'category'		    => __( 'Bridge Modules', 'bb-bridge' ),
			'dir'               => BB_BRIDGE_DIR . 'modules/bridge-info-box/',
			'url'               => BB_BRIDGE_URL . 'modules/bridge-info-box/',
			'editor_export'     => true, // Defaults to true and can be omitted.
			'enabled'           => true, // Defaults to true and can be omitted.
			'partial_refresh'   => true,
		));
	}
}


FLBuilder::register_module( 'BridgeInfoBoxModule', array(
	'general'       => array( // Tab
		'title'         => __( 'General', 'bb-bridge' ), // Tab title
		'sections'      => array( // Tab Sections
			'general'       => array( // Section
			'title'         => __( 'Info Box', 'bb-bridge' ), // Section Title
				'fields'        => array( // Section Fields
					'icon'                 => array(
						'type'                 => 'icon',
						'label'                => __( 'Icon', 'bb-bridge' ),
						'default'              => 'fa fa-home',
						'show_remove'          => true,
					),
					'title'                => array(
						'type'                 => 'text',
						'label'                => __( 'Title', 'bb-bridge' ),
						'default'              => 'Info Box',
						'size'                 => '50',
					),
					'desc'                 => array(
						'type'                 => 'textarea',
						'label'                => __( 'Description', 'bb-bridge' ),
						'default'              => 'Description',
					),
					'link_title'           => array(
						'type'                 => 'text',
						'label'                => __( 'Link Title', 'bb-bridge' ),
						'default'              => 'Read More',
						'size'                 => '50',
					),
					'link_url'             => array(
						'type'                 => 'text',
						'label'                => __( 'Link URL', 'bb-bridge' ),
						'default'              => '',
						'placeholder'          => 'http://example.com',
					),
					'link_target'          => array(
						'type'                 => 'select',
						'label'                => __( 'Link Target', 'bb-bridge' ),
						'default'              => '_self',
						'options'              => array(
							'_self'                => __( 'Same Window', 'bb-bridge' ),
							'_blank'               => __( 'New Window', 'bb-bridge' )
						),
					),
				)
			)
		)
	),
	'style'       => array(
		'title'         => __( 'Style', 'bb-bridge' ),
		'sections'      => array(
			'background'    => array(
				'title'         => __( 'Background', 'bb-bridge' ),
				'fields'        => array(
					'bg_type'            => array(
						'type'               => 'select',
						'label'              => __( 'Type', 'bb-bridge' ),
						'default'            => 'none',
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
			'shadow'        => array(
				'title'         => __( 'Shadow', 'bb-bridge' ),
				'fields'        => array(
					'shadow'             => array(
						'type'               => 'select',
						'label'              => __( 'Use Shadow', 'bb-bridge' ),
						'default'            => 'no',
						'options'            => array(
							'no'                 => __( 'No', 'bb-bridge' ),
							'yes'                => __( 'Yes', 'bb-bridge' ),
						),
						'toggle'             => array(
							'yes'                => array(
								'fields'             => array( 'shadow_h_offset', 'shadow_v_offset', 'shadow_blur', 'shadow_color', ),
							),
						),
					),
					'shadow_h_offset'    => array(
						'type'               => 'text',
						'label'              => __( 'Horizontal Offset', 'bb-bridge' ),
						'description'        => 'px',
						'default'            => '2',
						'size'               => '5',
						'placeholder'        => '2'
					),
					'shadow_v_offset'    => array(
						'type'               => 'text',
						'label'              => __( 'Vertical Offset', 'bb-bridge' ),
						'description'        => 'px',
						'default'            => '2',
						'size'               => '5',
						'placeholder'        => '2'
					),
					'shadow_blur'        => array(
						'type'               => 'text',
						'label'              => __( 'Blur', 'bb-bridge' ),
						'description'        => 'px',
						'default'            => '6',
						'size'               => '5',
						'placeholder'        => '6'
					),
					'shadow_color'       => array(
						'type'               => 'color',
						'label'              => __( 'Color', 'bb-bridge' ),
						'default'            => '000000',
					),			
				)
			),
			'border'         => array(
				'title'          => __( 'Border', 'bb-bridge' ),
				'fields'         => array(
					'border_style'       => array(
						'type'               => 'select',
						'label'              => __( 'Type', 'bb-bridge' ),
						'default'            => 'none',
						'help'               => __( 'The type of border to use. Double borders must have a width of at least 3px to render properly', 'bb-bridge' ),
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
					'border_width'       => array( 
						'type'               => 'dimension',
						'label'              => __( 'Border Width', 'bb-bridge' ),
						'description'        => 'px',
						'default'            => '',
						'placeholder'        => '0',
					),
					'border_color'       => array( 
						'type'               => 'color',
						'label'              => __( 'Border Color', 'bb-bridge' ),
						'default'            => '',
						'show_reset'         => true,
					),
				),
			),
			'colors'         => array(
				'title'          => __( 'Colors', 'bb-bridge' ),
				'fields'         => array(
					'icon_color'         => array( 
						'type'               => 'color',
						'label'              => __( 'Icon Color', 'bb-bridge' ),
						'default'            => '',
						'show_reset'         => true,
					),
					'icon_bg_color'      => array(
						'type'               => 'color',
						'label'              => __( 'Icon Background', 'bb-bridge' ),
						'default'            => '',
						'show_reset'         => true,
					),
					'heading_color'      => array( 
						'type'               => 'color',
						'label'              => __( 'Heading Color', 'bb-bridge' ),
						'default'            => '',
						'show_reset'         => true,
					),
					'text_color'         => array( 
						'type'               => 'color',
						'label'              => __( 'Text Color', 'bb-bridge' ),
						'default'            => '',
						'show_reset'         => true,
					),
					'link_color'         => array( 
						'type'               => 'color',
						'label'              => __( 'Link Color', 'bb-bridge' ),
						'default'            => '',
						'show_reset'         => true,
					),
				),
			)
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
			'hover_shadow'  => array(
				'title'         => __( 'Shadow', 'bb-bridge' ),
				'fields'        => array(
					'hover_shadow'             => array(
						'type'                     => 'select',
						'label'                    => __( 'Use Shadow', 'bb-bridge' ),
						'default'                  => 'no',
						'options'                  => array(
							'no'                       => __( 'No', 'bb-bridge' ),
							'yes'                      => __( 'Yes', 'bb-bridge' ),
						),
						'toggle'               => array(
							'yes'                  => array(
								'fields'               => array( 'hover_shadow_h_offset', 'hover_shadow_v_offset', 'hover_shadow_blur', 'hover_shadow_color', ),
							),
						),
					),
					'hover_shadow_h_offset'    => array(
						'type'                     => 'text',
						'label'                    => __( 'Horizontal Offset', 'bb-bridge' ),
						'description'              => 'px',
						'default'                  => '2',
						'size'                     => '5',
						'placeholder'              => '2'
					),
					'hover_shadow_v_offset'    => array(
						'type'                     => 'text',
						'label'                    => __( 'Vertical Offset', 'bb-bridge' ),
						'description'              => 'px',
						'default'                  => '2',
						'size'                     => '5',
						'placeholder'              => '2'
					),
					'hover_shadow_blur'        => array(
						'type'                     => 'text',
						'label'                    => __( 'Blur', 'bb-bridge' ),
						'description'              => 'px',
						'default'                  => '6',
						'size'                     => '5',
						'placeholder'              => '6'
					),
					'hover_shadow_color'       => array(
						'type'                     => 'color',
						'label'                    => __( 'Color', 'bb-bridge' ),
						'default'                  => '000000',
					),			
				)
			),
			'colors'        => array(
				'title'         => __( 'Colors', 'bb-bridge' ),
				'fields'        => array(
					'icon_hover_color'     => array( 
						'type'                 => 'color',
						'label'                => __( 'Icon Color', 'bb-bridge' ),
						'default'              => '',
						'show_reset'           => true,
					),
					'icon_bg_hover_color'  => array(
						'type'                 => 'color',
						'label'                => __( 'Icon Background', 'bb-bridge' ),
						'default'              => '',
						'show_reset'           => true,
					),
					'heading_hover_color'  => array( 
						'type'                 => 'color',
						'label'                => __( 'Heading Color', 'bb-bridge' ),
						'default'              => '',
						'show_reset'           => true,
					),
					'text_hover_color'     => array( 
						'type'                 => 'color',
						'label'                => __( 'Text Color', 'bb-bridge' ),
						'default'              => '',
						'show_reset'           => true,
					),
					'link_box_hover_color' => array( 
						'type'                 => 'color',
						'label'                => __( 'Link Color On Box Hover', 'bb-bridge' ),
						'default'              => '',
						'show_reset'           => true,
					),
					'link_hover_color'     => array( 
						'type'                 => 'color',
						'label'                => __( 'Link Color On Link Hover', 'bb-bridge' ),
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
			'heading_font'  => array(
				'title'         => __( 'Heading Font', 'bb-bridge' ),
				'fields'        => array(
					'heading_font_family'    => array(
						'type'                   => 'font',
						'label'                  => __( 'Font Family', 'bb-bridge' ),
						'default'                => array(
							'family'                 => 'Default',
							'weight'                 => 'Default'
						),
					),
					'heading_font_size'      => array( 
						'type'                   => 'text',
						'label'                  => __( 'Font Size', 'bb-bridge' ),
						'size'                   => '5',
					),
					'heading_font_size_unit' => array(
						'type'                   => 'select',
						'label'                  => __( 'Font Size Unit', 'bb-bridge' ),
						'default'                => 'px',
						'options'                => array(
							'px'                     => __( 'px', 'bb-bridge' ),
							'%'                      => __( '%', 'bb-bridge' ),
							'em'                     => __( 'em', 'bb-bridge' ),
						),
					),
				)
			),
			'text_font'          => array(
				'title'         => __( 'Text Font', 'bb-bridge' ),
				'fields'        => array(
					'text_font_family'       => array(
						'type'                   => 'font',
						'label'                  => __( 'Text Font Family', 'bb-bridge' ),
						'default'                => array(
							'family'                 => 'Default',
							'weight'                 => 'Default'
						),
					),
					'text_font_size'         => array( 
						'type'                   => 'text',
						'label'                  => __( 'Font Size', 'bb-bridge' ),
						'size'                   => '5',
					),
					'text_font_size_unit'    => array(
						'type'                   => 'select',
						'label'                  => __( 'Font Size Unit', 'bb-bridge' ),
						'default'                => 'px',
						'options'                => array(
							'px'                     => __( 'px', 'bb-bridge' ),
							'%'                      => __( '%', 'bb-bridge' ),
							'em'                     => __( 'em', 'bb-bridge' ),
						),
					),
				)
			)
		)
	)
));