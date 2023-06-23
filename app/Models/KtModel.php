<?php

namespace App\Models;

use CodeIgniter\Model;

class KtModel extends Model
{
    protected $table            = 'kt';
    protected $primaryKey       = 'idKT';
    protected $useAutoIncrement = true;
    protected $allowedFields;

    function getAll(){
        return $this->db->table('kt')
        ->join('pj','pj.idPJ = kt.idPJ')
        ->join('pt','pt.idPT = kt.idPT')
        ->Get()->getResultArray();
    }
}
