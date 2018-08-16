<?php
/**
 * Created by PhpStorm.
 * User: Julian
 * Date: 9/08/2018
 * Time: 3:29 PM
 */

/* Include Config */
//error_reporting( ~E_NOTICE );
require( 'config.php ');
require( 'classes/Bootstrap.php' );
require( 'classes/Controller.php' );
require( 'classes/Model.php' );

require( 'controllers/home.php' );
require( 'controllers/shares.php' );
require( 'controllers/users.php' );

require( 'models/home.php' );
require( 'models/share.php' );
require( 'models/user.php' );


$bootstrap = new Bootstrap( $_GET );
$controller = $bootstrap->createController();
if ($controller ) {
	$controller->executeAction();
}