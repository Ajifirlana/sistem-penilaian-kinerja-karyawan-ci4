<?php

namespace App\Models;

use CodeIgniter\Model;

class PtModel extends Model
{
    protected $table            = 'pt';
    protected $primaryKey       = 'idPT';
    protected $useAutoIncrement = true;
    protected $allowedFields;

    function getAll(){
        return $this->db->table('pt')
        ->join('pj','pj.idPJ = pt.idPJ')
        ->Get()->getResultArray();
    }

}
