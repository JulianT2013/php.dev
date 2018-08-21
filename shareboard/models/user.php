<?php
/**
 * Created by PhpStorm.
 * User: Julian
 * Date: 10/08/2018
 * Time: 5:53 PM
 */

class UserModel extends Model {
	public function register() {
		/* Sanitize POST */
		$post = filter_input_array( INPUT_POST, FILTER_SANITIZE_STRING );

		$password = md5( $post['password'] );

		if ( isset( $post['submit'] ) ) {

			if ( $post['uname'] == '' || $post['email'] == '' || $post['password'] == '' ) {
				Messages::setMsg( 'Please Fill In All Fields', 'error' );
				return;
			}

			/* Compare Login */
			$this->query( 'INSERT INTO users (uname, email, password) VALUES(:uname, :email, :password)' );
			$this->bind( ':uname', $post['uname'] );
			$this->bind( ':email', $post['email'] );
			$this->bind( ':password', $password );
			$this->execute();

			/* Verify */
			if ( $this->lastInsertId() ) {
				/* Redirect */
				header( 'Location: ' . ROOT_URL . 'users/login' );
			}
		}
		return;
	}

	public function login() {
		/* Sanitize POST */
		$post = filter_input_array( INPUT_POST, FILTER_SANITIZE_STRING );

		$password = md5( $post['password'] );

		if ( isset( $post['submit'] ) ) {

			if ( $post['email'] == '' || $post['password'] == '' ) {
				Messages::setMsg( 'Please Fill In All Fields', 'error' );
				return;
			}

			/* Compare Login */
			$this->query( 'SELECT * FROM users WHERE email = :email AND password = :password' );
			$this->bind( ':email', $post['email'] );
			$this->bind( ':password', $password );
			$this->execute();

			$row = $this->single();

			if ( $row ) {
				$_SESSION['is_logged_in'] = true;
				$_SESSION['user_data']    = [
					'id'    => $row['id'],
					'name'  => $row['uname'],
					'email' => $row['email'],
				];
				header( 'Location: ' . ROOT_URL . 'shares' );
			} else {
				Messages::setMsg( 'Incorrect Login', 'error' );
			}
		}
		return;
	}
}