<?php

namespace App\Models;

use CodeIgniter\Model;

class SasaranPTModel extends Model
{
    protected $table            = 'sasaran_kinerja_pt';
    protected $primaryKey       = 'id_kinerja_pt';
    protected $useAutoIncrement = true;
    protected $allowedFields;
}
