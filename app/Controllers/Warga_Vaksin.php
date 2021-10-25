<?php

namespace App\Controllers;
use App\Models\Warga_Vaksin_Model;

class Warga_Vaksin extends BaseController
{
	public function __construct()
	{
		$this->Warga_VaksinModel = new Warga_Vaksin_Model();
	}

	public function index() 
	{
		$data['title'] = 'Data Warga Yang Sudah Vaksin';
		$data['warga_vaksin'] = $this->Warga_VaksinModel->getData();
		return view('user/warga_vaksin/index', $data);
	}

	public function add_data() {
		$data['title'] = 'Tambah Data Warga Yang Sudah Vaksin';
		return view('user/warga_vaksin/form_input', $data);
	}

	public function input_data()
	{
		$rules = $this->validate([
			'nik' => 'required|numeric',
			'nama' => 'required|string',
			'jenis_kelamin' => 'required|string',
			'alamat' => 'required|string',
			'no_hp' => 'required|numeric',
			'tgl_vaksin_pertama' => 'required',
		]);

		if (!$rules) {
			session()->setFlashData('gagal', \Config\Services::validation()->getErrors());
			return redirect()->to(base_url('Warga_Vaksin')); 
		}

		$data = [
			'nik'				 => $this->request->getPost('nik'),
			'nama'				 => $this->request->getPost('nama'),
			'alamat'			 => $this->request->getPost('alamat'),
			'jenis_kelamin'		 => $this->request->getPost('jenis_kelamin'),
			'no_hp'				 => $this->request->getPost('no_hp'),
			'tgl_vaksin_pertama' => $this->request->getPost('tgl_vaksin_pertama'),
			'tgl_vaksin_kedua'   => $this->request->getPost('tgl_vaksin_kedua'),
			'keterangan'   		 => $this->request->getPost('keterangan'),
		];

		$this->Warga_VaksinModel->addData($data);
		session()->setFlashData('sukses', 'Data Telah Ditambahkan');
		return redirect()->to(base_url('Warga_Vaksin')); 
	}

	public function update_data($nik)
	{
		$data['title'] = 'Perbarui Data Warga Yang Sudah Vaksin';
		$data['vaksin'] = $this->Warga_VaksinModel->getData($nik);
		return view('user/warga_vaksin/form_update', $data);
	}

	public function edit_data($nik) {

		$rules = $this->validate([
			'nama' => 'required|string',
			'jenis_kelamin' => 'required|string',
			'alamat' => 'required|string',
			'no_hp' => 'required|numeric',
			'tgl_vaksin_pertama' => 'required',
		]);

		if (!$rules) {
			session()->setFlashData('gagal', \Config\Services::validation()->getErrors());
			return redirect()->to(base_url('Warga_Vaksin')); 
		}

		$data = [
			'nama'				 => $this->request->getPost('nama'),
			'alamat'			 => $this->request->getPost('alamat'),
			'jenis_kelamin'		 => $this->request->getPost('jenis_kelamin'),
			'no_hp'				 => $this->request->getPost('no_hp'),
			'tgl_vaksin_pertama' => $this->request->getPost('tgl_vaksin_pertama'),
			'tgl_vaksin_kedua'   => $this->request->getPost('tgl_vaksin_kedua'),
			'keterangan'   		 => $this->request->getPost('keterangan'),
		];

		$this->Warga_VaksinModel->updateData($nik, $data);
		session()->setFlashData('sukses', 'Data Telah Diubah');
		return redirect()->to(base_url('Warga_Vaksin')); 

	}

	public function delete_data($nik)
	{
		$this->Warga_VaksinModel->deleteData($nik);
		session()->setFlashData('sukses', 'Data Terhapus');
		return redirect()->to(base_url('Warga_Vaksin')); 
	}
}
