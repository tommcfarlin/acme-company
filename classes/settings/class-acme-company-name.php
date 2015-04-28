<?php

class Acme_Company_Name extends Acme_Company_Dashboard implements Acme_Setting {

	public function run() {
		add_action( 'admin_init', array( $this, 'register' ) );
	}

	public function register() {

		register_setting(
			'acme_company_group',		// Group of options
			'acme_company',     	    // Name of options
			array( $this, 'sanitize' )	// Sanitization function
		);

		add_settings_section(
			'acme-company',			    // ID of the settings section
			'Company',  			    // Title of the section
			'',
			'acme-company-page'			// ID of the page
		);

		add_settings_field(
			'acme-company-name',		// The ID of the settings field
			'Name',				        // The name of the field of setting(s)
			array( $this, 'display' ),
			'acme-company-page',		// ID of the page on which to display these fields
			'acme-company'			    // The ID of the setting section
		);

	}

	public function display() {

		// Now grab the options based on what we're looking for
		$company_options = get_option( 'acme_company' );
		$name = isset( $company_options['name'] ) ? $company_options['name'] : '';

		// And display the view
		include_once $this->views . 'partials/company-name.php';

	}

	public function sanitize( $input ) {

		// The array in which the new, sanitized input will go
		$new_input = array();

		// Read the company name from the array of options
		$val = $input['name'];

		// Sanitize the information
		$val = strip_tags( stripslashes( $val ) );
		$new_input['name'] = sanitize_text_field( $val );

		return $new_input;

	}

}