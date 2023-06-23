<?php

namespace App\Models;

use CodeIgniter\Model;

class NkppModel extends Model
{
    protected $table            = 'nkpp';
    protected $primaryKey       = 'id_nkpp';
    protected $useAutoIncrement = true;
    protected $allowedFields;

    function getAT(){
        return $this->db->table('nkpp')
        ->where('bagian = ','at')
        ->where('id_nkp != 0')
        ->where ('nip = ',$_SESSION['nip'])
        ->Get()
        ->getResultArray();
    }

    function getATData(){
        return $this->db->table('nkpp')
        ->join('nkp_at','nkp_at.id_nkp_at = nkpp.id_nkp')
        ->where('bagian = ','at')
        ->where('id_nkp != 0')
        ->where ('nip = ',$_SESSION['nip'])
        ->Get()->getResult();
    }

    function getKT(){
        return $this->db->table('nkpp')
        ->where('bagian = ','kt')
        ->where('id_nkp != 0')
        ->where ('nip = ',$_SESSION['nip'])
        ->Get()
        ->getResultArray();
    }

    function getPT(){
        return $this->db->table('nkpp')
        ->where('bagian = ','pt')
        ->where ('nip = ',$_SESSION['nip'])
        ->Get()
        ->getResultArray();
    }

}
