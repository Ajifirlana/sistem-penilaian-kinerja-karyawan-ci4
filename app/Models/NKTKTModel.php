<?php

namespace App\Models;

use CodeIgniter\Model;

class NKTKTModel extends Model
{
    protected $table            = 'nkt_kt';
    protected $primaryKey       = 'id_nkt_kt';
    protected $useAutoIncrement = true;
    protected $allowedFields;
}
