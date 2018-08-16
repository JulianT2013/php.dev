<?php
/**
 * Created by PhpStorm.
 * User: Julian
 * Date: 10/08/2018
 * Time: 5:36 PM
 */

class shares extends Controller{
	protected function Index(){
		$viewmodel = new ShareModel();
		$this->ReturnView($viewmodel->Index(), true);
	}

	protected function add(){
		$viewmodel = new ShareModel();
		$this->ReturnView($viewmodel->add(), true);
	}
}

