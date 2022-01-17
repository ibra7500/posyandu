<?php namespace App\Models;
use CodeIgniter\Model;

class Orang_Tua_Model extends Model {

    protected $db, $builder;

    public function __construct() {
        $this->db = \Config\Database::connect();
        $this->builder = $this->db->table('orang_tua');
    }
    
    public function getData($id_ortu = false) {
        if ($id_ortu === false) {
            return $this->table('orang_tua')
                        ->orderBy('id_ortu', 'ASC')
                        ->get()
                        ->getResultArray();    
        }
        else {
            return $this->table('orang_tua')
                        ->where('id_ortu', $id_ortu)
                        ->orderBy('id_ortu', 'ASC')
                        ->get()
                        ->getRowArray();
        }
    }

    public function addData($data) {
        $this->builder->insert($data);
    }

    public function updateData($id_ortu, $data) {
        $this->builder->where('id_ortu', $id_ortu);
        $this->builder->update($data);
    }

    public function deleteData($id_ortu) {
        $this->builder->where('id_ortu', $id_ortu);
        $this->builder->delete();
     }
}