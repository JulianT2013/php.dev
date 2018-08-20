<?php
/**
 * Created by PhpStorm.
 * User: Julian
 * Date: 17/08/2018
 * Time: 5:09 PM
 */

class Messages {
	public static function setMsg( $text, $type ) {
		if ( $type == 'error' ) {
			$_SESSION['errorMsg'] = $text;
		} else {
			$_SESSION['successMsg'] = $text;
		}
	}

	public static function display() {

		if ( isset( $_SESSION['errorMsg'] ) ) {
			echo '<div class="row"><div class="alert alert-danger alert-dismissible" role="alert">'
			     . $_SESSION['errorMsg'] .
			     '<span type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </span>' .
			     '</div></div>';
		}

		if ( isset( $_SESSION['successMsg'] ) ) {
			echo '<div class="row"><div class="alert alert-success alert-dismissible" role="alert">'
			     . $_SESSION['successMsg'] .
			     '<span type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </span>' .
			     '</div></div>';
		}

	}
}