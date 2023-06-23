<?php

namespace App\Models;

use CodeIgniter\Model;

class NKPPTModel extends Model
{
    protected $table            = 'nkp_pt';
    protected $primaryKey       = 'id_nkp_pt';
    protected $useAutoIncrement = true;
    protected $allowedFields;
}
