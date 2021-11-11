<?php

namespace App\Controllers;
use App\Models\Balita_Model;

class Balita extends BaseController
{

	public function __construct() {
		$this->Balita_Model = new Balita_Model();
	}

	public function index() 
	{
		$data['title'] = 'Data Balita';
		$data['balita'] = $this->Balita_Model->getData();
		return view('user/balita/index', $data);
	}

	public function add_data() {
		$data['title'] = 'Tambah Data Balita';
		return view('user/balita/form_input', $data);
	}

	public function input_data()
	{
		$rules = $this->validate([
			'nik_balita' => 'required|numeric',
			'nama_balita' => 'required|string',
			'jenis_kelamin' => 'required|string',
			'tgl_lahir'	=>	'required',
			'berat_lahir' => 'required|numeric',
			'panjang_lahir' => 'required|numeric',
			'status_kesehatan' => 'required',
			'nik_ayah' => 'required|numeric',
			'nama_ayah' => 'required|string',
			'nik_ibu' => 'required|numeric',
			'nama_ibu' => 'required|string',
			'alamat' => 'required|string',
			'no_hp_ortu' => 'required|numeric',
		]);

		if (!$rules) {
			session()->setFlashData('gagal', \Config\Services::validation()->getErrors());
			return redirect()->to(base_url('Balita')); 
		}

		$data = [
			'nik_balita'		 => $this->request->getPost('nik_balita'),
			'nama'				 => $this->request->getPost('nama_balita'),
			'jenis_kelamin'		 => $this->request->getPost('jenis_kelamin'),
			'tgl_lahir'		 	 => $this->request->getPost('tgl_lahir'),
			'berat_lahir'		 => $this->request->getPost('berat_lahir'),
			'panjang_lahir'		 => $this->request->getPost('panjang_lahir'),
			'status_kesehatan'	 => $this->request->getPost('status_kesehatan'),
			'nik_ayah'			 => $this->request->getPost('nik_ayah'),
			'nama_ayah'			 => $this->request->getPost('nama_ayah'),
			'nik_ibu'			 => $this->request->getPost('nik_ibu'),
			'nama_ibu'			 => $this->request->getPost('nama_ibu'),
			'alamat'			 => $this->request->getPost('alamat'),
			'no_hp_ortu'		 => $this->request->getPost('no_hp_ortu'),
		];

		$this->Balita_Model->addData($data);
		session()->setFlashData('sukses', 'Data Telah Ditambahkan');
		return redirect()->to(base_url('Balita')); 
	}

	public function update_data($nik_balita)
	{
		$data['title'] = 'Perbarui Data Warga Yang Sudah Vaksin';
		$data['balita'] = $this->Balita_Model->getData($nik_balita);
		return view('user/Balita/form_update', $data);
	}

	public function edit_data($nik_balita) {

		$rules = $this->validate([
			'nama_balita' => 'required|string',
			'jenis_kelamin' => 'required|string',
			'tgl_lahir'	=>	'required',
			'berat_lahir' => 'required|numeric',
			'panjang_lahir' => 'required|numeric',
			'status_kesehatan' => 'required',
			'nik_ayah' => 'required|numeric',
			'nama_ayah' => 'required|string',
			'nik_ibu' => 'required|numeric',
			'nama_ibu' => 'required|string',
			'alamat' => 'required|string',
			'no_hp_ortu' => 'required|numeric',
		]);

		if (!$rules) {
			session()->setFlashData('gagal', \Config\Services::validation()->getErrors());
			return redirect()->to(base_url('Balita')); 
		}

		$data = [
			'nama'				 => $this->request->getPost('nama_balita'),
			'jenis_kelamin'		 => $this->request->getPost('jenis_kelamin'),
			'tgl_lahir'		 	 => $this->request->getPost('tgl_lahir'),
			'berat_lahir'		 => $this->request->getPost('berat_lahir'),
			'panjang_lahir'		 => $this->request->getPost('panjang_lahir'),
			'status_kesehatan'	 => $this->request->getPost('status_kesehatan'),
			'nik_ayah'			 => $this->request->getPost('nik_ayah'),
			'nama_ayah'			 => $this->request->getPost('nama_ayah'),
			'nik_ibu'			 => $this->request->getPost('nik_ibu'),
			'nama_ibu'			 => $this->request->getPost('nama_ibu'),
			'alamat'			 => $this->request->getPost('alamat'),
			'no_hp_ortu'		 => $this->request->getPost('no_hp_ortu'),
		];

		$this->Balita_Model->updateData($nik_balita, $data);
		session()->setFlashData('sukses', 'Data Telah Diubah');
		return redirect()->to(base_url('Balita')); 

	}

	public function delete_data($nik_balita) {
	
		$this->Balita_Model->deleteData($nik_balita);
		session()->setFlashData('sukses', 'Data Terhapus');
		return redirect()->to(base_url('Balita')); 
	}

	public function detail_data ($nik_balita) {

		$data['title'] = 'Detail Data Balita';
		$data['balita'] = $this->Balita_Model->getData($nik_balita);
		return view('user/balita/detail_data', $data);

	}

}

?>