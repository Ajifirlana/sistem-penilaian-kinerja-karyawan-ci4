<?php

namespace App\Models;

use CodeIgniter\Model;

class AtModel extends Model
{

    protected $table            = 'at';
    protected $primaryKey       = 'idAT';
    protected $useAutoIncrement = true;
    protected $allowedFields;

    function getAll(){
        return $this->db->table('at')
        ->join('pt','pt.idPT = at.idPT')
        ->join('kt','kt.idKT = at.idKT')
        ->Get()->getResultArray();
    }
    
}
