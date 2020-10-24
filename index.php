<?php

require 'vendor/autoload.php';
require 'core/bootstrap.php';

use App\Core\Router;
use App\Core\Request;


// Load router.
$router = Router::load( 'app/routes.php' );

// Direct traffic to the right controller's method.
try {
	$router->direct( Request::uri(), Request::method() );
} catch ( Exception $e ) {
	die( $e->getMessage() );
}
