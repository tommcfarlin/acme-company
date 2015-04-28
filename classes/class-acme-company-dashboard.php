<?php

class Acme_Company_Dashboard {

	protected $views;

	public function __construct() {
		$this->views = trailingslashit( plugin_dir_path( dirname( __FILE__ ) ) . 'views' );
	}

	public function run() {

		add_action( 'admin_menu', array( $this, 'add_menu_items' ) );
		$this->create_settings();

	}

	public function add_menu_items() {

		add_submenu_page(
			'tools.php',
			'Acme Company',
			'Add New Company',
			'edit_posts',
			'add_new_company',
			array( $this, 'display_acme_company' )
		);

	}

	public function display_acme_company() {
		include_once $this->views . 'dashboard.php';
	}

	private function create_settings() {

		$name = new Acme_Company_Name();
		$name->run();

	}

}