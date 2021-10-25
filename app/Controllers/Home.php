<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('auth/login');
	}

	public function user()
	{
		return view('user/index');
	}
}
