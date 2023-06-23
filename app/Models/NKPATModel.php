<?php

namespace App\Models;

use CodeIgniter\Model;

class NKPATModel extends Model
{
    protected $table            = 'nkp_at';
    protected $primaryKey       = 'id_nkp_at';
    protected $useAutoIncrement = true;
    protected $allowedFields;
}
