<?php

use App\Core\App;
use App\Core\Database\QueryBuilder;
use App\Core\Database\Connection;

// Bind the configuration file.
$config = require 'config.php';
App::bind( 'config', $config );


// Get the database configuration file.
try {
	$databaseConfig = App::get( 'config' )[ 'database' ];
} catch ( Exception $e ) {
	die( 'Unable to load the database configuration file.' );
}


// Bind the database connection.
App::bind( 'database', new QueryBuilder( Connection::make( $databaseConfig ) ) );
