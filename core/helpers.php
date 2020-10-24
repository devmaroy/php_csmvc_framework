<?php

/**
 * Require a view.
 *
 * @param string $name
 * @param array $data
 *
 * @return mixed
 */
function view( $name, $data = [] ) {
	$view = "app/views/{$name}.view.php";
	extract( $data );

	// Check if a view exists.
	if ( ! file_exists( $view ) ) {
		// File doesn't exists.
		die('View cannot be found. Make sure the view exists.');
	}

	// View exists.
	return require $view;
}

/*
 * Redirect to a new page.
 *
 * @param string $path
 */
function redirect( $path ) {
	header( "Location: /{$path}" );
}
