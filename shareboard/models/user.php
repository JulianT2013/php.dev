<?php
/**
 * Created by PhpStorm.
 * User: Julian
 * Date: 10/08/2018
 * Time: 5:53 PM
 */

class UserModel extends Model {
	public function register() {
		// Sanitize POST
		$post = filter_input_array( INPUT_POST, FILTER_SANITIZE_STRING );

		$password = md5( $post['password'] );

		if ( isset( $post['submit'] ) ) {
			// Insert into MySQL
			$this->query( 'INSERT INTO users (uname, email, password) VALUES(:uname, :email, :password)' );
			$this->bind( ':uname', $post['uname'] );
			$this->bind( ':email', $post['email'] );
			$this->bind( ':password', $password );
			$this->execute();
			// Verify
			if ( $this->lastInsertId() ) {
				// Redirect
				header( 'Location: ' . ROOT_URL . 'users/login' );
			}
		}
		return;
	}
}