<?php
/**
 * Created by PhpStorm.
 * User: Julian
 * Date: 10/08/2018
 * Time: 5:36 PM
 */

class Shares extends Controller{
	protected function Index(){
		$viewmodel = new HomeModel();
		$this->ReturnView( $viewmodel->Index(), true );
	}
}