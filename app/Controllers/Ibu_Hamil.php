<?php

namespace App\Controllers;
use App\Models\Ibu_Hamil_Model;

class Ibu_Hamil extends BaseController
{

	public function __construct() {
		$this->Ibu_Hamil_Model = new Ibu_Hamil_Model();
	}

	public function index() 
	{
		$data['title'] = 'Data Ibu Hamil';
		$data['ibu_hamil'] = $this->Ibu_Hamil_Model->getData();
		return view('user/ibu_hamil/index', $data);
	}

	public function add_data() {
		$data['title'] = 'Tambah Data Ibu Hamil';
		return view('user/ibu_hamil/form_input', $data);
	}

	public function input_data()
	{
		$rules = $this->validate([
			'nik_ibu_hamil' => 'required|numeric',
			'nama_ibu_hamil' => 'required|string',
			'umur' => 'required|numeric',
			'hamil_keberapa'	=>	'required|numeric',
			'anak_keberapa' => 'required|numeric',
			'hpht' => 'required',
			'hpl' => 'required',
			'skor_rochjati' => 'required|numeric',
			'nama_suami' => 'required|string',
			'alamat' => 'required|string',
			'no_hp' => 'required|numeric',
		]);

		if (!$rules) {
			session()->setFlashData('gagal', \Config\Services::validation()->getErrors());
			return redirect()->to(base_url('Ibu_Hamil')); 
		}

		$data = [
			'nik_ibu_hamil'		 => $this->request->getPost('nik_ibu_hamil'),
			'nama_ibu_hamil'	 => $this->request->getPost('nama_ibu_hamil'),
			'umur'		 	 	 => $this->request->getPost('umur'),
			'hamil_keberapa'	 => $this->request->getPost('hamil_keberapa'),
			'anak_keberapa'		 => $this->request->getPost('anak_keberapa'),
			'hpht'			 	 => $this->request->getPost('hpht'),
			'hpl'	 		  	 => $this->request->getPost('hpl'),
			'skor_rochjati'		 => $this->request->getPost('skor_rochjati'),
			'nama_suami'		 => $this->request->getPost('nama_suami'),
			'alamat'			 => $this->request->getPost('alamat'),
			'no_hp'			 	 => $this->request->getPost('no_hp'),
		];

		$this->Ibu_Hamil_Model->addData($data);
		session()->setFlashData('sukses', 'Data Telah Ditambahkan');
		return redirect()->to(base_url('Ibu_Hamil')); 
	}

	public function update_data($nik_ibu_hamil)
	{
		$data['title'] = 'Perbarui Data Warga Yang Sudah Vaksin';
		$data['ibu_hamil'] = $this->Ibu_Hamil_Model->getData($nik_ibu_hamil);
		return view('user/ibu_hamil/form_update', $data);
	}

	public function edit_data($nik_ibu_hamil) {

		$rules = $this->validate([
			'nama_ibu_hamil' => 'required|string',
			'umur' => 'required|numeric',
			'hamil_keberapa'	=>	'required|numeric',
			'anak_keberapa' => 'required|numeric',
			'hpht' => 'required',
			'hpl' => 'required',
			'skor_rochjati' => 'required|numeric',
			'nama_suami' => 'required|string',
			'alamat' => 'required|string',
			'no_hp' => 'required|numeric',
		]);

		if (!$rules) {
			session()->setFlashData('gagal', \Config\Services::validation()->getErrors());
			return redirect()->to(base_url('Ibu_Hamil')); 
		}

		$data = [
			'nama_ibu_hamil'	 => $this->request->getPost('nama_ibu_hamil'),
			'umur'		 		 => $this->request->getPost('umur'),
			'hamil_keberapa'	 => $this->request->getPost('hamil_keberapa'),
			'anak_keberapa'		 => $this->request->getPost('anak_keberapa'),
			'hpht'		 		 => $this->request->getPost('hpht'),
			'hpl'	 			 => $this->request->getPost('hpl'),
			'skor_rochjati'		 => $this->request->getPost('skor_rochjati'),
			'nama_suami'		 => $this->request->getPost('nama_suami'),
			'alamat'			 => $this->request->getPost('alamat'),
			'no_hp'		 		 => $this->request->getPost('no_hp'),
		];

		$this->Ibu_Hamil_Model->updateData($nik_ibu_hamil, $data);
		session()->setFlashData('sukses', 'Data Telah Diubah');
		return redirect()->to(base_url('Ibu_Hamil')); 

	}

	public function delete_data($nik_ibu_hamil) {
	
		$this->Ibu_Hamil_Model->deleteData($nik_ibu_hamil);
		session()->setFlashData('sukses', 'Data Terhapus');
		return redirect()->to(base_url('Ibu_Hamil')); 
	}

	public function detail_data ($nik_ibu_hamil) {

		$data['title'] = 'Detail Data Ibu Hamil';
		$data['ibu_hamil'] = $this->Ibu_Hamil_Model->getData($nik_ibu_hamil);
		return view('user/ibu_hamil/detail_data', $data);

	}

}

?>