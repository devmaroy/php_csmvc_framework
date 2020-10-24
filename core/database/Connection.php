<?php

namespace App\Core\Database;

use PDO;
use PDOException;

class Connection
{
	/**
	 * Create a new PDO connection.
	 *
	 * @param array $config
	 *
	 * @return PDO | null
	 */
	public static function make( $config ) {
		try {
			return new PDO(
				$config[ 'connection' ] . ';dbname=' . $config[ 'name' ],
				$config[ 'username' ],
				$config[ 'password' ],
				$config[ 'options' ]
			);
		} catch ( PDOException $e ) {
			die( "Couldn't connect to the database." );
		}
	}
}
