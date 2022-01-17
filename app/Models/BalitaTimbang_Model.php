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

    public function getDataTimbang($nik_balita) {

        return $this->db->table('timbang_balita')
                        ->select('*, balita.tgl_lahir')
                        ->join('balita', 'balita.nik_balita = timbang_balita.nik_balita') 
                        ->where('timbang_balita.nik_balita', $nik_balita)
                        ->orderBy('kode_timbang', 'ASC')
                        ->get()
                        ->getResultArray();
    }

    public function deleteData($nik_balita) {
        $this->builder->where('nik_balita', $nik_balita);
        $this->builder->delete();
    }

    public function deleteDataTimbang($kode) {
        $this->db->table('timbang_balita')
                 ->where('kode_timbang', $kode, FALSE)
                 ->delete();
    }

}
?>