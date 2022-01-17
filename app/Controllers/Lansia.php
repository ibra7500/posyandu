<?php

namespace App\Controllers;
use App\Models\Lansia_Model;

class Lansia extends BaseController
{

	public function __construct() {
		
		$this->Lansia_Model = new Lansia_Model();
	}

	public function index() 
	{
		$data['title'] = 'Data Lansia';
		$data['lansia'] = $this->Lansia_Model->getData();
		return view('user/lansia/index', $data);
	}
	public function add_data() {
		$data['title'] = 'Tambah Data Lansia';
		return view('user/lansia/form_input', $data);
	}

	public function input_data()
	{
		$rules = $this->validate([
			'nik_lansia' => 'required|numeric',
			'nama_lansia' => 'required|string',
			'jenis_kelamin' => 'required|string',
			'tgl_lahir' => 'required',
			'alamat' => 'required|string',
			'no_hp' => 'required|numeric',
			'status_kesehatan' => 'required',
		]);

		if (!$rules) {
			session()->setFlashData('gagal', \Config\Services::validation()->getErrors());
			return redirect()->to(base_url('Lansia')); 
		}

		$data = [
			'nik_lansia'		 => $this->request->getPost('nik_lansia'),
			'nama'				 => $this->request->getPost('nama_lansia'),			
			'jenis_kelamin'		 => $this->request->getPost('jenis_kelamin'),
			'tgl_lahir' 		 => $this->request->getPost('tgl_lahir'),
			'alamat'			 => $this->request->getPost('alamat'),
			'no_hp'				 => $this->request->getPost('no_hp'),
			'status_kesehatan'   => $this->request->getPost('status_kesehatan'),
		];

		$this->Lansia_Model->addData($data);
		session()->setFlashData('sukses', 'Data Telah Ditambahkan');
		return redirect()->to(base_url('Lansia')); 
	}
	public function update_data($nik_lansia){
		$data['title'] = 'Perbarui Data Lansia';
		$data['lansia'] = $this->Lansia_Model->getData($nik_lansia);
		return view('user/lansia/form_update', $data);
	}

	public function edit_data($nik_lansia) {

		$rules = $this->validate([
			'nama_lansia' => 'required|string',
			'jenis_kelamin' => 'required|string',
			'tgl_lahir' => 'required',
			'alamat' => 'required|string',
			'no_hp' => 'required|numeric',
			'status_kesehatan' => 'required',
		]);

		if (!$rules) {
			session()->setFlashData('gagal', \Config\Services::validation()->getErrors());
			return redirect()->to(base_url('Lansia')); 
		}

		$data = [
			'nama'				 => $this->request->getPost('nama_lansia'),			
			'jenis_kelamin'		 => $this->request->getPost('jenis_kelamin'),
			'tgl_lahir' 		 => $this->request->getPost('tgl_lahir'),
			'alamat'			 => $this->request->getPost('alamat'),
			'no_hp'				 => $this->request->getPost('no_hp'),
			'status_kesehatan'   => $this->request->getPost('status_kesehatan'),
			'tgl_meninggal' 	 => $this->request->getPost('tgl_meninggal'),
			'keterangan' 		 => $this->request->getPost('keterangan'),
		];

		$this->Lansia_Model->updateData($nik_lansia, $data);
		session()->setFlashData('sukses', 'Data Telah Diubah');
		return redirect()->to(base_url('Lansia')); 

	}

	public function delete_data($nik_lansia){
		$this->Lansia_Model->deleteData($nik_lansia);
		session()->setFlashData('sukses', 'Data Terhapus');
		return redirect()->to(base_url('Lansia')); 
	}

}

?>