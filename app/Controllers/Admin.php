<?php

namespace App\Controllers;

class Admin extends BaseController
{
	public function index()
	{
		$data['title'] = 'User List';
		return view('admin/userlist');
	}
	
	public function register()
	{
		return view('admin/register');
	}

}
