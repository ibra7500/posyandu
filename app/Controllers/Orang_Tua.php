<?php

namespace App\Controllers;
use App\Models\Orang_Tua_Model;

class Orang_Tua extends BaseController
{
	public function __construct() {
		$this->Orang_Tua_Model = new Orang_Tua_Model();
	}

	public function index() {
		$data['title'] = 'Data Orang Tua';
		$data['orang_tua'] = $this->Orang_Tua_Model->getData();
		return view('user/ortu/index', $data);
	}

	public function add_data() {
		$data['title'] = 'Tambah Data Orang Tua';
		return view('user/ortu/form_input', $data);
	}

	public function input_data()
	{
		$rules = $this->validate([
			'nik_ayah' => 'required|numeric',
			'nama_ayah' => 'required|string',
			'nik_ibu' => 'required|numeric',
			'nama_ibu' => 'required|string',
			'alamat' => 'required|string',
			'no_hp_ayah' => 'required|numeric',
			'no_hp_ibu' => 'required|numeric',
		]);

		if (!$rules) {
			session()->setFlashData('gagal', \Config\Services::validation()->getErrors());
			return redirect()->to(base_url('Orang_Tua/add_data')); 
		}

		$data = [
			'nik_ayah'		 => $this->request->getPost('nik_ayah'),
			'nama_ayah'		 => $this->request->getPost('nama_ayah'),	
			'nik_ibu'		 => $this->request->getPost('nik_ibu'),
			'nama_ibu'		 => $this->request->getPost('nama_ibu'),	
			'alamat'		 => $this->request->getPost('alamat'),
			'no_hp_ayah'	 => $this->request->getPost('no_hp_ayah'),
			'no_hp_ibu'	 	 => $this->request->getPost('no_hp_ibu'),
		];

		$this->Orang_Tua_Model->addData($data);
		session()->setFlashData('sukses', 'Data Telah Ditambahkan');
		return redirect()->to(base_url('Orang_Tua')); 
	}

	public function update_data($id_ortu){
		$data['title'] = 'Perbarui Data Orang Tua';
		$data['ortu'] = $this->Orang_Tua_Model->getData($id_ortu);
		return view('user/ortu/form_update', $data);
	}

	public function edit_data($id_ortu){

		$rules = $this->validate([
			'nik_ayah' => 'required|numeric',
			'nama_ayah' => 'required|string',
			'nik_ibu' => 'required|numeric',
			'nama_ibu' => 'required|string',
			'alamat' => 'required|string',
			'no_hp_ayah' => 'required|numeric',
			'no_hp_ibu' => 'required|numeric',
		]);

		if (!$rules) {
			$id_ortu = $this->request->getPost('id_ortu');
			session()->setFlashData('gagal', \Config\Services::validation()->getErrors());
			return redirect()->to(base_url('Orang_Tua/update_data/'.$id_ortu)); 
		}

		$data = [
			'nik_ayah'		 => $this->request->getPost('nik_ayah'),
			'nama_ayah'		 => $this->request->getPost('nama_ayah'),	
			'nik_ibu'		 => $this->request->getPost('nik_ibu'),
			'nama_ibu'		 => $this->request->getPost('nama_ibu'),	
			'alamat'		 => $this->request->getPost('alamat'),
			'no_hp_ayah'	 => $this->request->getPost('no_hp_ayah'),
			'no_hp_ibu'	 	 => $this->request->getPost('no_hp_ibu'),
		];		

		$this->Orang_Tua_Model->updateData($id_ortu, $data);
		session()->setFlashData('sukses', 'Data Telah Diubah');
		return redirect()->to(base_url('Orang_Tua')); 
	}
	public function delete_data($id_ortu){
		$this->Orang_Tua_Model->deleteData($id_ortu);
		session()->setFlashData('sukses', 'Data Terhapus');
		return redirect()->to(base_url('Orang_Tua')); 
	}

}
