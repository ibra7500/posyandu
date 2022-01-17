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
	
	public function register(){
		return view('admin/register');
	}

	public function delete_data($id){
		$this->Admin_Model->deleteData($id);
		session()->setFlashData('sukses', 'Data Terhapus');
		return redirect()->to(base_url('Admin')); 
	}

	public function update_data($id) {
		$data['title'] = 'Update Data User';
		$data['user'] = $this->Admin_Model->getData($id);
		return view('admin/form_update', $data);
	}

	public function edit_data($id) {
		$rules = $this->validate([
			'email' => 'required',
			'username' => 'required',
			'fullname' => 'required|string',
		]);

		if (!$rules) {
			session()->setFlashData('gagal', \Config\Services::validation()->getErrors());
			return redirect()->to(base_url('Admin/update_data/'.$id)); 
		}

		$data = [
			'email'		     => $this->request->getPost('email'),			
			'username'		 => $this->request->getPost('username'),
			'fullname' 		 => $this->request->getPost('fullname'),
		];

		$this->Admin_Model->updateData($id, $data);
		session()->setFlashData('sukses', 'Data Telah Diubah');
		return redirect()->to(base_url('Admin')); 
	}

}