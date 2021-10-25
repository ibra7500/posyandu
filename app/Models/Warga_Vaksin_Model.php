<?php namespace App\Models;
use CodeIgniter\Model;

class Warga_Vaksin_Model extends Model {

    protected $db, $builder;

    public function __construct() {
        $this->db = \Config\Database::connect();
        $this->builder = $this->db->table('warga_vaksin');
    }
    

    public function getData($nik = false) {
        if ($nik === false) {
            return $this->table('warga_vaksin')
                        ->get()
                        ->getResultArray();    
        }
        else {
            return $this->table('warga_vaksin')
                        ->where('nik', $nik)
                        ->get()
                        ->getRowArray();
        }
    }

    public function addData($data) {
       
       $this->builder->insert($data);
    }
    
    public function updateData($nik, $data) {
       
       $this->builder->where('nik', $nik);
       $this->builder->update($data);

    }

    public function deleteData($nik) {
       
       $this->builder->where('nik', $nik);
       $this->builder->delete();

    }
}