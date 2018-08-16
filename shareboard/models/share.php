<?php
/**
 * Created by PhpStorm.
 * User: Julian
 * Date: 10/08/2018
 * Time: 5:53 PM
 */

class ShareModel {

	public function Index() {
		$this->query( 'SELECT * FROM shares' );
		$rows = $this->resultSet();
		return  $rows;
	}
}