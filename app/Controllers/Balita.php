<?php

namespace App\Controllers;
use App\Models\Balita_Model;
use App\Models\BalitaTimbang_Model;

class Balita extends BaseController
{
	protected $db, $builder;

	public function __construct() {
		$this->db = \Config\Database::connect();
		$this->builder = $this->db->table('balita');
		$this->Balita_Model = new Balita_Model();
		$this->BalitaTimbang_Model = new BalitaTimbang_Model();
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

	public function input_data() {
		$status = 1;
		$berat = $this->request->getPost('berat_lahir');
		$format_berat_lahir = floatval(str_replace(',', '.', str_replace('.', '', $berat)));

		$panjang = $this->request->getPost('panjang_lahir');
		$format_panjang_lahir = floatval(str_replace(',', '.', str_replace('.', '', $panjang)));

		if ((strpos($berat, ".") !== false) || (strpos($panjang, ".") !== false)) {
			session()->setFlashData('error', 'Data Harus Menggunakan Koma');
			return redirect()->to(base_url('Balita/add_data'));
		}

		$nik_ayah = $this->request->getPost('nik_ayah');
		$nik_ibu = $this->request->getPost('nik_ibu');


		$nik_ortu = $this->Balita_Model->check_nik_ortu($nik_ayah,$nik_ibu);

		if($nik_ortu > 0){

			if((preg_match("/[a-z]/i", $panjang)) || (preg_match("/[a-z]/i", $berat ))){
				$rules = $this->validate([
					'nik_balita' => 'required|numeric',
					'nama_balita' => 'required|string',
					'jenis_kelamin' => 'required|string',
					'tgl_lahir'	=>	'required',
					'berat_lahir'	=> 'required|numeric',
					'panjang_lahir'	=> 'required|numeric',
					'status_kesehatan' => 'required',
					'nik_ayah' => 'required|numeric',
					'nik_ibu' => 'required|numeric',
				]);
			}
			else{
				$rules = $this->validate([
					'nik_balita' => 'required|numeric',
					'nama_balita' => 'required|string',
					'jenis_kelamin' => 'required|string',
					'tgl_lahir'	=>	'required',
					'status_kesehatan' => 'required',
					'nik_ayah' => 'required|numeric',
					'nik_ibu' => 'required|numeric',
				]);
			}
			if (!$rules) {
				session()->setFlashData('gagal', \Config\Services::validation()->getErrors());
				return redirect()->to(base_url('Balita')); 
			}

			$id_ortu = $this->Balita_Model->get_id_ortu($nik_ayah,$nik_ibu);
			

			$data = [
				'nik_balita'		 => $this->request->getPost('nik_balita'),
				'id_ortu'			 => $id_ortu,
				'nama'				 => $this->request->getPost('nama_balita'),
				'jenis_kelamin'		 => $this->request->getPost('jenis_kelamin'),
				'tgl_lahir'		 	 => $this->request->getPost('tgl_lahir'),
				'berat_lahir'		 => $format_berat_lahir,
				'panjang_lahir'		 => $format_panjang_lahir,
				'status_kesehatan'	 => $this->request->getPost('status_kesehatan'),
				'status'			 => $status,
			];
			$this->Balita_Model->addData($data);
			session()->setFlashData('sukses', 'Data Telah Ditambahkan');
			return redirect()->to(base_url('Balita'));


		}else{
			session()->setFlashData('error', 'NIK Ayah dan / atau Ibu belum terdaftar!');
			return redirect()->to(base_url('Balita/add_data'));
		}

	
	}

	public function update_data($nik_balita)
	{
		$data['title'] = 'Perbarui Data Warga Yang Sudah Vaksin';
		$data['balita'] = $this->Balita_Model->getData($nik_balita);
		return view('user/Balita/form_update', $data);
	}

	public function edit_data($nik_balita) {
		
		$berat = $this->request->getPost('berat_lahir');
		$format_berat_lahir = floatval(str_replace(',', '.', str_replace('.', '', $berat)));

		$panjang = $this->request->getPost('panjang_lahir');
		$format_panjang_lahir = floatval(str_replace(',', '.', str_replace('.', '', $panjang)));

		if ((strpos($berat, ".") !== false) || (strpos($panjang, ".") !== false)) {
			session()->setFlashData('error_koma', 'Data Harus Menggunakan Koma');
			return redirect()->to(base_url('Balita/update_data/'.$nik_balita));
		}

		$nik_ayah = $this->request->getPost('nik_ayah');
		$nik_ibu = $this->request->getPost('nik_ibu');

		$nik_ortu = $this->Balita_Model->check_nik_ortu($nik_ayah,$nik_ibu);

		if ($nik_ortu > 0) {

			if((preg_match("/[a-z]/i", $panjang)) || (preg_match("/[a-z]/i", $berat ))){
				$rules = $this->validate([
					'nama_balita' => 'required|string',
					'jenis_kelamin' => 'required|string',
					'tgl_lahir'	=>	'required',
					'berat_lahir'	=> 'required|numeric',
					'panjang_lahir'	=> 'required|numeric',
					'status_kesehatan' => 'required',
					'nik_ayah' => 'required|numeric',
					'nik_ibu' => 'required|numeric',
				]);
			}else{
				$rules = $this->validate([
					'nik_balita' => 'required|numeric',
					'nama_balita' => 'required|string',
					'jenis_kelamin' => 'required|string',
					'tgl_lahir'	=>	'required',
					'status_kesehatan' => 'required',
					'nik_ayah' => 'required|numeric',
					'nik_ibu' => 'required|numeric',
				]);
			}
			if (!$rules) {
				$nik_balita = $this->request->getPost('nik_balita');
				session()->setFlashData('gagal', \Config\Services::validation()->getErrors());
				return redirect()->to(base_url('Balita/update_data/'.$nik_balita)); 
			}
		
			$id_ortu = $this->Balita_Model->get_id_ortu($nik_ayah,$nik_ibu);
					
			$data = [
				'id_ortu'			 => $id_ortu,
				'nama'				 => $this->request->getPost('nama_balita'),
				'jenis_kelamin'		 => $this->request->getPost('jenis_kelamin'),
				'tgl_lahir'		 	 => $this->request->getPost('tgl_lahir'),
				'berat_lahir'		 => $format_berat_lahir,
				'panjang_lahir'		 => $format_panjang_lahir,
				'status_kesehatan'	 => $this->request->getPost('status_kesehatan'),
			];
			$this->Balita_Model->updateData($nik_balita, $data);
			session()->setFlashData('sukses', 'Data Telah Diubah');
			return redirect()->to(base_url('Balita'));
		}
		
	}

	public function delete_data($nik_balita) {
	
		$this->BalitaTimbang_Model->deleteData($nik_balita);
		$this->Balita_Model->deleteData($nik_balita);
		session()->setFlashData('sukses', 'Data Terhapus');
		return redirect()->to(base_url('Balita')); 
	}

	public function detail_data ($nik_balita) {
		$data['title'] = 'Detail Data Balita';
		$data['balita'] = $this->Balita_Model->getData($nik_balita);
		return view('user/balita/detail_data', $data);
	}

	public function penimbangan_balita($nik_balita) {

		$data['title'] = 'Penimbangan Balita';
		$data['balita'] = $this->Balita_Model->getData($nik_balita);	
		$data['id_timbang'] = $this->BalitaTimbang_Model->getDataTimbang($nik_balita);
		$data['kode_timbang'] = $this->BalitaTimbang_Model->kode_input_timbang_balita();
		return view('user/balita/penimbangan_balita', $data);

	}


	public function input_timbang_balita() {

		$tinggi = $this->request->getPost('tinggi_badan');
		$format_tinggi = floatval(str_replace(',', '.', str_replace('.', '', $tinggi)));

		$berat = $this->request->getPost('berat_badan');
		$format_berat = floatval(str_replace(',', '.', str_replace('.', '', $berat)));


		$lk_kepala = $this->request->getPost('lingkar_kepala');
		$format_lk_kepala = floatval(str_replace(',', '.', str_replace('.', '', $lk_kepala)));

		if ((strpos($berat, ".") !== false) || (strpos($tinggi, ".") !== false) || (strpos($lk_kepala, ".") !== false)) {
			session()->setFlashData('error_koma', 'Data Harus Menggunakan Koma');
			$nik_balita = $this->request->getPost('nik_balita');
			return redirect()->to(base_url('Balita/penimbangan_balita/'.$nik_balita));
		}

		if((preg_match("/[a-z]/i", $tinggi)) || (preg_match("/[a-z]/i", $berat )) || (preg_match("/[a-z]/i", $lk_kepala ))){
			$rules = $this->validate([
				'nik_balita' => 'required',
				'kode_timbang' => 'required',
				'tinggi_badan' => 'required|numeric',
				'berat_badan' => 'required|numeric',
				'lingkar_kepala' => 'required|numeric',
				'tgl_penimbangan' => 'required',
			]);
		}else{
			$rules = $this->validate([
				'nik_balita' => 'required',
				'kode_timbang' => 'required',
				'tgl_penimbangan' => 'required',
			]);
		}
		if (!$rules) {
			$nik_balita = $this->request->getPost('nik_balita');
			session()->setFlashData('gagal', \Config\Services::validation()->getErrors());
			return redirect()->to(base_url('Balita/penimbangan_balita/'.$nik_balita)); 
		}
		$data = [
			'kode_timbang'		 => $this->request->getPost('kode_timbang'),
			'nik_balita'		 => $this->request->getPost('nik_balita'),
			'tinggi_badan'		 => $format_tinggi,
			'berat_badan'		 => $format_berat,
			'lingkar_kepala'	 => $format_lk_kepala,
			'tgl_penimbangan'	 => $this->request->getPost('tgl_penimbangan'),
		];


		$this->BalitaTimbang_Model->addDataTimbang($data);
		$nik_balita = $this->request->getPost('nik_balita');
		session()->setFlashData('sukses', 'Data Telah Ditambahkan');
		return redirect()->to(base_url('Balita/penimbangan_balita/'.$nik_balita)); 

	}

}

?>

