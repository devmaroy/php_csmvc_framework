<?php

namespace App\Core\Database;

use PDO;
use PDOException;

class QueryBuilder
{
	/**
	 * The PDO instance.
	 *
	 * @var PDO
	 */
	protected $pdo;

	/**
	 * Create a new QueryBuilder instance.
	 *
	 * @param PDO $pdo
	 */
	public function __construct( $pdo ) {
		$this->pdo = $pdo;
	}

	/**
	 * Select all records from a database table.
	 *
	 * @param string $table
	 *
	 * @return array
	 */
	public function selectAll( $table ) {
		$statement = $this->pdo->prepare( "select * from {$table}" );
		$statement->execute();

		return $statement->fetchAll( PDO::FETCH_CLASS );
	}

	/**
	 * Insert a record into a database table.
	 *
	 * @param string $table
	 * @param array $parameters
	 */
	public function insert( $table, $parameters ) {
		$sql = sprintf(
			'insert into %s (%s) values (%s)',
			$table,
			implode( ',', array_keys( $parameters ) ),
			':' . implode( ', :', array_keys( $parameters ) )
		);

		try {
			$statement = $this->pdo->prepare( $sql );
			$statement->execute( $parameters );
		} catch ( PDOException $e ) {
			die( 'Error occured while adding a new record to the database.' );
		}
	}
}
