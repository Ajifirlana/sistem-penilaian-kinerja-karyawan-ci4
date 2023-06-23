<?php

namespace App\Models;

use CodeIgniter\Model;

class NKPKTModel extends Model
{
    protected $table            = 'nkp_kt';
    protected $primaryKey       = 'id_nkp_kt';
    protected $useAutoIncrement = true;
    protected $allowedFields;
}
