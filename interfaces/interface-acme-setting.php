<?php

interface Acme_Setting {

	public function register();
	public function display();
	public function sanitize( $input );

}