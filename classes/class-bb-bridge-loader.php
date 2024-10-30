<?php

class BB_Bridge_Loader {
	
	static public function init() {
		add_action( 'plugins_loaded', __CLASS__ . '::setup_hooks' );
	}
	
	static public function setup_hooks() {
		if ( ! class_exists( 'FLBuilder' ) ) {
			return;	
		}

		add_action( 'init', __CLASS__ . '::load_modules' );
	}
	
	static public function load_modules() {
		require_once BB_BRIDGE_DIR . 'modules/bridge-button/bridge-button.php';
		require_once BB_BRIDGE_DIR . 'modules/bridge-heading/bridge-heading.php';
		require_once BB_BRIDGE_DIR . 'modules/bridge-icon-list/bridge-icon-list.php';
		require_once BB_BRIDGE_DIR . 'modules/bridge-image/bridge-image.php';
		require_once BB_BRIDGE_DIR . 'modules/bridge-info-box/bridge-info-box.php';
		require_once BB_BRIDGE_DIR . 'modules/bridge-notification/bridge-notification.php';
		require_once BB_BRIDGE_DIR . 'modules/bridge-pricing-table/bridge-pricing-table.php';
		require_once BB_BRIDGE_DIR . 'modules/bridge-team-member/bridge-team-member.php';
		require_once BB_BRIDGE_DIR . 'modules/bridge-testimonial/bridge-testimonial.php';
		require_once BB_BRIDGE_DIR . 'modules/bridge-testimonial-slider/bridge-testimonial-slider.php';
	}
}

BB_Bridge_Loader::init();