<?php

namespace App\Models;

use CodeIgniter\Model;

class NKTATModel extends Model
{
    protected $table            = 'nkt_at';
    protected $primaryKey       = 'id_nkt_at';
    protected $useAutoIncrement = true;
    protected $allowedFields;

    function getNilai($id){
        return $this->db->table('nkt_at')
        ->select('*')
        ->from('nilai_nkt')
        ->where('nkt_at.waktu = nilai_nkt.waktu') 
        ->where('id_nkt_at ='.$id) 
        ->Get()->getResultArray();
    }
}
