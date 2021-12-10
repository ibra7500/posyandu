<?php

namespace App\Models;
use CodeIgniter\Model;

class Admin_Model extends Model {

    protected $db, $builder;

    public function __construct() {
        $this->db = \Config\Database::connect();
    }

    public function getData () {

        return $this->db->table('auth_groups_users')
        ->select('user_id, group_id, users.email, users.username, users.fullname')
        ->join('users', 'user_id = users.id', 'left')
        ->where('group_id', 2)
        ->orderBy('user_id', 'ASC')
        ->get()
        ->getResultArray();
    }
}
?>