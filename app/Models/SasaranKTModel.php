<?php

namespace App\Models;

use CodeIgniter\Model;

class SasaranKTModel extends Model
{
    protected $table            = 'sasaran_kinerja_kt';
    protected $primaryKey       = 'id_kinerja_kt';
    protected $useAutoIncrement = true;
    protected $allowedFields;
}
