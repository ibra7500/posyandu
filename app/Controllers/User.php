<?php

namespace App\Controllers;
use App\Models\User_Model;

class User extends BaseController
{
	public function __construct() {
		$this->User_Model = new User_Model();
	}

	public function index(){
		$data = [
			'title' => 'Dashboard',
			'jumlah_ibu_hamil' => $this->User_Model->getDataIbuHamil(),
			'jumlah_balita' => $this->User_Model->getDataBalita(),
			'jumlah_lansia' => $this->User_Model->getDataLansia(),
			'jumlah_warga_vaksin' => $this->User_Model->getDataWargaVaksin(),
			'balita_kurang' => $this->User_Model->getDataBalitaKurang(),
			'title_balita' => 'Daftar Balita dengan Gizi Kurang dan Gizi Buruk',
			'balita_lebih' => $this->User_Model->getDataBalitaLebih(),
			'title_balita_lebih' => 'Daftar Balita dengan Gizi Lebih',
			'title_ibu_hamil' => 'Daftar Ibu Hamil yang Ingin Melahirkan',
			'ibu_lahir' => $this->User_Model->getDataIbuLahir(),
			'title_belum_vaksin' => 'Daftar Warga yang Belum Vaksin Kedua COVID-19',
			'belum_vaksin' => $this->User_Model->getDataBelumVaksin(),
		];
		return view('user/index', $data);
		
	}

}
