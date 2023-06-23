<?php

namespace App\Models;

use CodeIgniter\Model;

class SasaranATModel extends Model
{
    protected $table            = 'sasaran_kinerja_anggota';
    protected $primaryKey       = 'id_kinerja_anggota';
    protected $useAutoIncrement = true;
    protected $allowedFields;

    function getWaktu($id)
    {
        return $this->db->table('sasaran_kinerja_anggota')
            ->select('waktu')
            ->where('id_kinerja_anggota = ' . $id)
            ->Get()->getResult();
    }

    function getWaktu2($id)
    {
        return $this->db->table('sasaran_kinerja_anggota')
            ->select('waktu2')
            ->where('id_kinerja_anggota = ' . $id)
            ->Get()->getResult();
    }
}
