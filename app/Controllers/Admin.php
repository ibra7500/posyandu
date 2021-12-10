<?php

namespace App\Controllers;
use App\Models\Admin_Model;

class Admin extends BaseController

{	
	public function __construct() {
		$this->Admin_Model = new Admin_Model();
	}

	public function index()
	{
		$data['title'] = 'List User';
		$data['user'] = $this->Admin_Model->getData();
		// print_r($data['user']);
		return view('admin/index', $data);
	}
	
	public function register()
	{
		return view('admin/register');
	}
}