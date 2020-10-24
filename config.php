<?php

// Configuration file for this app.

return [
	'database' => [
		'name'       => 'php_csmvc_db',
		'username'   => 'root',
		'password'   => 'root',
		'connection' => 'mysql:host=127.0.0.1',
		'options'    => [
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
		]
	]
];
