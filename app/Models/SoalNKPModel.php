<?php

namespace App\Models;

use CodeIgniter\Model;

class SoalNKPModel extends Model
{
    protected $table            = 'nkp_hasil_soal';
    protected $primaryKey       = 'id_soal';
    protected $useAutoIncrement = true;
    protected $allowedFields;

    function getAT(){
        return $this->db->table('nkp_hasil_soal')
        ->where('bagian = ','at')
        ->Get()
        ->getResultArray();
    }
}
