<?php

namespace App\Models;
use CodeIgniter\Model;

class BalitaTimbang_Model extends Model {

    protected $db, $builder;

    public function __construct() {
        $this->db = \Config\Database::connect();
        $this->builder = $this->db->table('timbang_balita');
    }

    public function kode_input_timbang_balita () {

        // $q = $this->db->table('timbang_balita')
        //     ->selectMax('RIGHT(id_timbang,6)', 'kd_timbang')
        //     ->get();
        $q = $this->db->query("SELECT MAX(RIGHT(kode_timbang,6)) AS kd_timbang FROM timbang_balita");
        $kd = "";
        if($q->getResultObject()>0){
            foreach($q->getResultObject() as $k){
                $tmp = ((int)$k->kd_timbang)+1;
                $kd = sprintf("%06s", $tmp);
            }
        }else{
            $kd = "000001";
        }
        return "TB".$kd;
	}
    
    public function addDataTimbang($data) {
        $db = \Config\Database::connect();
        $this->builder->insert($data);
    }

    public function getDataTimbang($id_timbang = false) {
        if ($id_timbang === false) {
            return $this->db->table('timbang_balita')
                        ->select('timbang_balita.kode_timbang ,timbang_balita.nik_balita, timbang_balita.berat_badan, timbang_balita.tinggi_badan, 
                        timbang_balita.lingkar_kepala, balita.nama')
                        ->join('balita', 'timbang_balita.nik_balita = balita.nik_balita', 'LEFT')
                        ->get()->getResultArray();
        }
        else {
            return $this->db->table('timbang_balita')
                    ->select('timbang_balita.kode_timbang ,timbang_balita.nik_balita, timbang_balita.berat_badan, timbang_balita.tinggi_badan, 
                    timbang_balita.lingkar_kepala, balita.nama')
                    ->join('balita', 'timbang_balita.nik_balita = balita.nik_balita', 'LEFT')
                    ->where('kode_timbang', $id_timbang)
                    ->get()->getResultArray();
        }
    }

}
?>