<?php
/**
 * Created by PhpStorm.
 * User: Julian
 * Date: 9/08/2018
 * Time: 4:00 PM
 */

class Home extends Controller{
	protected function Index(){
		$viewmodel = new HomeModel();
		$this->ReturnView( $viewmodel->Index(), true );
	}
}