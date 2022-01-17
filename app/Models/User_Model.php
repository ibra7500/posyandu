<?php

namespace App\Models;
use CodeIgniter\Model;

class User_Model extends Model {

    protected $db, $builder;

    public function __construct() {
        $this->db = \Config\Database::connect();
    }

    public function getDataBalita () {
        $status = 1;
        return $this->db->table('balita')
                        ->selectCount('nik_balita')
                        ->where('status', $status)
                        ->countAllResults();
    }

    public function getDataIbuHamil () {
        $status = 1;
        return $this->db->table('ibu_hamil')
                        ->selectCount('nik_ibu_hamil')
                        ->where('status', $status)
                        ->countAllResults();
    }

    public function getDataLansia () {
        return $this->db->table('lansia')
                        ->selectCount('nik_lansia')
                        ->where('tgl_meninggal', null, FALSE)
                        ->countAllResults();
    }

    public function getDataWargaVaksin () {
        return $this->db->table('warga_vaksin')
                        ->selectCount('nik')
                        ->countAllResults();
    }

    public function getDataBalitaKurang() {
        $kurang = "Gizi Kurang";
        $buruk = "Gizi Buruk";
        $status = 1;
        return $this->db->table('balita')
                        ->select('nik_balita, nama, jenis_kelamin, status_kesehatan, tgl_lahir')
                        ->where('status', $status)
                        ->where('status_kesehatan', $kurang)
                        ->orWhere('status_kesehatan', $buruk)
                        ->get()
                        ->getResultArray();
    }

    public function getDataIbuLahir() {
        $status = 1;
        return $this->db->table('ibu_hamil')
                        ->select('nik_ibu_hamil, nama_ibu_hamil, hpht, hpl')
                        ->where('hpl <', 'DATE_ADD(NOW(), INTERVAL 1 MONTH)', FALSE)
                        ->where('status', $status)
                        ->get()
                        ->getResultArray();
    }

    public function getDataBelumVaksin() {
        $tgl = '0000-00-00';
        return $this->db->table('warga_vaksin')
                        ->select('nik, nama, alamat, no_hp, tgl_vaksin_kedua')
                        ->where('tgl_vaksin_kedua', $tgl, FALSE)
                        ->orWhere('tgl_vaksin_kedua', null, FALSE)
                        ->get()
                        ->getResultArray();
    }

    public function getDataBalitaLebih() {
        $lebih = "Gizi Lebih";
        $status = 1;
        return $this->db->table('balita')
                        ->select('nik_balita, nama, jenis_kelamin, status_kesehatan, tgl_lahir')
                        ->where('status', $status)
                        ->where('status_kesehatan', $lebih)
                        ->get()
                        ->getResultArray();
    }
}
?>