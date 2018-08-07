<?php
class User {
	public function __construct() {
		// echo 'Constructor called';
	}

	public function register() {
		echo 'User Registered';
	}

	public function login( $username, $password ) {
		$this->auth_user( $username, $password );
	}

	public function auth_user( $username, $password ) {
		echo $username . ' is now authenticated';
	}

	public function __destruct() {
		// echo 'Destructor called';
	}
}

$User = new User;

// $User->register();
$User->login( 'Julian', '1234 ');
