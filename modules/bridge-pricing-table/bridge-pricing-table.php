<?php

class BridgePricingTableModule extends FLBuilderModule {

	public function __construct()
	{
		parent::__construct(array(
			'name'              => __( 'Pricing Table', 'bb-bridge' ),
			'description'       => __( 'Addon to display your pricing table.', 'bb-bridge' ),
			'category'          => __( 'Bridge Modules', 'bb-bridge' ),
			'dir'               => BB_BRIDGE_DIR . 'modules/bridge-pricing-table/',
			'url'               => BB_BRIDGE_URL . 'modules/bridge-pricing-table/',
			'editor_export'     => true, // Defaults to true and can be omitted.
			'enabled'           => true, // Defaults to true and can be omitted.
			'partial_refresh'   => true,
		));	
	}
}


FLBuilder::register_module( 'BridgePricingTableModule', array(
	'general'       => array( // Tab
		'title'         => __( 'General', 'bb-bridge' ), // Tab title
		'sections'      => array( // Tab Sections
			'general'       => array( // Section
				'fields'        => array( // Section Fields
					'pt_title'                 => array(
						'type'                     => 'text',
						'label'                    => __( 'Title', 'bb-bridge' ),
						'default'                  => '',
						'size'                     => '30',
					),
					'pt_price'                 => array(
						'type'                     => 'text',
						'label'                    => __( 'Price', 'bb-bridge' ),
						'default'                  => '',
						'size'                     => '30',
					),
					'pt_features'              => array(
						'type'                     => 'text',
						'label'                    => __( 'Features', 'bb-bridge' ),
						'default'                  => '',
						'size'                     => '30',
						'multiple'                 => true
					),
					'pt_button_text'           => array(
						'type'                     => 'text',
						'label'                    => __( 'Button Text', 'bb-bridge' ),
						'default'                  => __( 'Sign Up', 'bb-bridge' ),
					),
					'pt_button_link'           => array(
						'type'                     => 'link',
						'label'                    => __( 'Link', 'bb-bridge' ),
						'default'                  => '',
						'placeholder'              => 'http://www.example.com',
						'preview'                  => array(
							'type'                     => 'none',
						)
					),
					'pt_button_link_target'    => array(
						'type'                     => 'select',
						'label'                    => __( 'Buton Link Target', 'bb-bridge' ),
						'default'                  => '_self',
						'options'                  => array(
							'_self'                    => __( 'Same Window', 'bb-bridge' ),
							'_blank'                   => __( 'New Window', 'bb-bridge' )
						),
						'preview'                  => array(
							'type'                     => 'none'
						)
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
					'pt_bg_color'              => array( 
						'type'                     => 'color',
						'label'                    => __( 'Background Color', 'bb-bridge' ),
						'default'                  => '333333',
						'show_reset'               => true,
					),
					'pt_color'                 => array( 
						'type'                     => 'color',
						'label'                    => __( 'Font Color', 'bb-bridge' ),
						'default'                  => 'ffffff',
						'show_reset'               => true,
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
		)
	),
));