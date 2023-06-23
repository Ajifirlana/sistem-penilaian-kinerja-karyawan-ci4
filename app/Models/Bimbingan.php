<?php

namespace App\Models;

use CodeIgniter\Model;

class Bimbingan extends Model
{
    protected $table            = 'bimbingan';
    protected $primaryKey       = 'idBimbingan';
    protected $useAutoIncrement = true;
    protected $allowedFields;

    function getAT(){
        return $this->db->table('bimbingan')
        ->where('bagian = ','at')
        ->Get()
        ->getResultArray();
    }

    function getKT(){
        return $this->db->table('bimbingan')
        ->where('bagian = ','kt')
        ->Get()
        ->getResultArray();
    }

    function getPT(){
        return $this->db->table('bimbingan')
        ->where('bagian = ','pt')
        ->Get()
        ->getResultArray();
    }

}
