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
        if ($nik_balita === false) {
            return $this->table('balita')
                        ->get()
                        ->getResultArray();    
        }
        else {
            return $this->table('balita')
                        ->where('nik_balita', $nik_balita)
                        ->get()
                        ->getRowArray();
        }
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