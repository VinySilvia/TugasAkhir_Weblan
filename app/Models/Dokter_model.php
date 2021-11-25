<?php

namespace App\Models;
Use CodeIgniter\Model;

class Dokter_model extends Model
{

    public function getDokter()
    {
        $bulder = $this->db->table('dokter');
        return $bulder->get();
    }
    public function saveDokter($data)
    {
        $query = $this->db->table('dokter')->insert($data) ;
        return $query;
    }
}
