<?php
/**
 * Created by PhpStorm.
 * User: Julian
 * Date: 9/08/2018
 * Time: 3:29 PM
 */

/* Include Config */
require( 'config.php ');
require( 'classes/Bootstrap.php' );

$bootstrap = new Bootstrap( $_GET );
$controller = $bootstrap->createController();