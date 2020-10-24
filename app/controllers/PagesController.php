<?php

namespace App\Controllers;

class PagesController
{
	/**
	 * Show the home page.
	 */
	public function home() {
		// Do some stuff here.
		//

		$welcome = 'Custom MVC Framework';

		// Show a view with the data.
		return view( 'index', [ 'welcome' => $welcome ] );
	}

	public function about() {
		// Do some stuff here.
		//

		$title = 'About page';

		// Show a view with the data.
		return view( 'about', [ 'title' => $title ] );
	}
}
