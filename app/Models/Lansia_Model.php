<?php 

namespace App\Models;
use CodeIgniter\Model;

class Lansia_Model extends Model {

    protected $db, $builder;

    public function __construct() {

        $this->db = \Config\Database::connect();
        $this->builder = $this->db->table('lansia');
    }

    public function getData ($nik_lansia = false) {
        if ($nik_lansia === false) {
            return $this->table('lansia')
                        ->get()
                        ->getResultArray();    
        }
        else {
            return $this->table('lansia')
                        ->where('nik_lansia', $nik_lansia)
                        ->get()
                        ->getRowArray();
        }
    }

    public function addData($data) {
       
        $this->builder->insert($data);
     }
     
     public function updateData($nik_lansia, $data) {
        
        $this->builder->where('nik_lansia', $nik_lansia);
        $this->builder->update($data);
 
     }
 
     public function deleteData($nik_lansia) {
        
        $this->builder->where('nik_lansia', $nik_lansia);
        $this->builder->delete();
 
     }
}

?>