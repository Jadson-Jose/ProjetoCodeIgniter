<?php

namespace App\Controllers;

class Main extends BaseController
{
	// =================================================================
	public function index()
	{
		echo view('main');
	}
}
