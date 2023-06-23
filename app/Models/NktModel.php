<?php

namespace App\Models;

use CodeIgniter\Model;

class NktModel extends Model
{
    protected $table            = 'nkt';
    protected $primaryKey       = 'id_nkt';
    protected $useAutoIncrement = true;
    protected $allowedFields;

    function getAT(){
        return $this->db->table('nkt')
        ->where('bagian = ','at')
        ->Get()
        ->getResultArray();
    }

    function getKT(){
        return $this->db->table('nkt')
        ->where('bagian = ','kt')
        ->Get()
        ->getResultArray();
    }

    function getPT(){
        return $this->db->table('nkt')
        ->where('bagian = ','pt')
        ->Get()
        ->getResultArray();
    }

    function getNilaiAT(){
        return $this->db->table('nkt')
        ->select('nkt_at.waktu')
        ->from('nkt_at')
        ->where('nkt.waktu = nkt_at.waktu')
        ->where('bagian = ','at')
        ->Get()
        ->getResultArray();
    }
}
