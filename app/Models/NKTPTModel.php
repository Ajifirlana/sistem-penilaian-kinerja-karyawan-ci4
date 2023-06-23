<?php

namespace App\Models;

use CodeIgniter\Model;

class NKTPTModel extends Model
{
    protected $table            = 'nkt_pt';
    protected $primaryKey       = 'id_nkt_pt';
    protected $useAutoIncrement = true;
    protected $allowedFields;
}
