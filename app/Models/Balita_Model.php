<?php 

namespace App\Models;
use CodeIgniter\Model;

class Balita_Model extends Model {

    protected $db, $builder;

    public function __construct() {
        
        $this->db = \Config\Database::connect();
        $this->builder = $this->db->table('balita');
        
    }

    public function getData ($nik_balita = false) {
        $status = 1;
        if ($nik_balita === false) {
            return $this->table('balita')
                        ->select('*, orang_tua.id_ortu, orang_tua.nama_ayah, orang_tua.nama_ibu, orang_tua.alamat, orang_tua.no_hp_ayah, orang_tua.no_hp_ibu')
                        ->join('orang_tua', 'orang_tua.id_ortu = balita.id_ortu')
                        ->where('status', $status)
                        ->get()
                        ->getResultArray();    
        }
        else {
            return $this->table('balita')
                        ->select('*, orang_tua.id_ortu, orang_tua.nama_ayah, orang_tua.nama_ibu, orang_tua.alamat, orang_tua.no_hp_ayah, orang_tua.no_hp_ibu')
                        ->join('orang_tua', 'orang_tua.id_ortu = balita.id_ortu')
                        ->where('nik_balita', $nik_balita)
                        ->where('status', $status)
                        ->get()
                        ->getRowArray();
        }
    }

    public function check_nik_ortu($nik_ayah, $nik_ibu){
        return $this->db->table('orang_tua')
                        ->where('nik_ayah', $nik_ayah, FALSE)
                        ->where('nik_ibu', $nik_ibu, FALSE)
                        ->get()
                        ->getRowArray();       
    }

    public function get_id_ortu($nik_ayah, $nik_ibu){
        $query_nik_ortu = $this->db->table('orang_tua')
                            ->where('nik_ayah', $nik_ayah, FALSE)
                            ->where('nik_ibu', $nik_ibu, FALSE)
                            ->get();  
        $result_nik_ortu = $query_nik_ortu->getRow();
        return $result_nik_ortu->id_ortu;
    }    

    public function addData($data) {
       
        $this->builder->insert($data);
     }
     
     public function updateData($nik_balita, $data) {
        
        $this->builder->where('nik_balita', $nik_balita);
        $this->builder->update($data);
 
     }
 
     public function deleteData($nik_balita) {
        
        $this->builder->where('nik_balita', $nik_balita);
        $this->builder->delete();
 
     }

}


?>