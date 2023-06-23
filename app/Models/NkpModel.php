<?php

namespace App\Models;

use CodeIgniter\Model;

class NkpModel extends Model
{
    protected $table            = 'nkp';
    protected $primaryKey       = 'id_nkp';
    protected $useAutoIncrement = true;
    protected $allowedFields;

    function getAT(){
        return $this->db->table('nkp')
        ->where('bagian = ','at')
        ->Get()
        ->getResultArray();
    }

    function getKT(){
        return $this->db->table('nkp')
        ->where('bagian = ','kt')
        ->Get()
        ->getResultArray();
    }

    function getPT(){
        return $this->db->table('nkp')
        ->where('bagian = ','pt')
        ->Get()
        ->getResultArray();
    }

}
