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
    function join(){
        return $this->db->table('nkp_relation')
         ->join('nkp','nkp.id_nkp=nkp_relation.id')
         ->where('nkp.bagian = ','at')
         ->get()->getResultArray();  
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
    function get_byid($id){
         return $this->db->table('nkp')
        ->where('id_nkp = ',$id)
        ->Get()
        ->getResultArray();
    }

}
