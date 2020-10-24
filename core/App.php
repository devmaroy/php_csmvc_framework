<?php

// Dependency Injection Container
// Here we can store items using a class and not collection like an array.

namespace App\Core;

class App
{
	/**
	 * All registered keys will be stored here.
	 *
	 * @var array
	 */
	protected static $registry = [];

	/**
	 * Bind a new key and value into the registry/container.
	 *
	 * @param string $key
	 * @param mixed $value
	 */
	public static function bind( $key, $value ) {
		// Save a value to the registry/container.
		static::$registry[ $key ] = $value;
	}

	public static function get( $key ) {
		// Check if a key exists inside registry/container.
		if ( ! array_key_exists( $key, static::$registry ) ) {
			// Key doesn't exist in the registry so we throw a exception.
			throw new Exception( "No key {$key} is bound in the container." );
		}

		// Key exists.

		// Return the value from the registry/container.
		return static::$registry[ $key ];
	}
}
