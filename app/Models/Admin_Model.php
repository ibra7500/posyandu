<?php

namespace App\Models;
use CodeIgniter\Model;

class Admin_Model extends Model {

    protected $db, $builder;

    public function __construct() {
        $this->db = \Config\Database::connect();
    }

    public function getData ($id = false) {

        if ($id === false) {
            return $this->db->table('users')
                            ->select('auth_groups_users.user_id, auth_groups_users.group_id, email, username, fullname, id')
                            ->join('auth_groups_users', 'id = auth_groups_users.user_id', 'left')
                            ->where('auth_groups_users.group_id', 2)
                            ->orderBy('user_id', 'ASC')
                            ->get()
                            ->getResultArray();
        }
        else {
            return $this->db->table('users')
                            ->select('auth_groups_users.user_id, auth_groups_users.group_id, email, username, fullname, id')
                            ->join('auth_groups_users', 'id = auth_groups_users.user_id', 'left')
                            ->where('auth_groups_users.group_id', 2)
                            ->where('id', $id)
                            ->orderBy('user_id', 'ASC')
                            ->get()
                            ->getRowArray();
        }
        
    }

    public function updateData($id, $data) {

        $this->db->table('users')
                 ->where('id', $id)
                 ->update($data);
                 

    }

    public function deleteData($id) {
        
        $this->db->table('users')
                 ->where('id', $id)
                 ->delete();
 
    }
}
?>