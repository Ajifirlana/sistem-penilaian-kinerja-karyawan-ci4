<?php

namespace App\Models;

use CodeIgniter\Model;

class NKPATJoinModel extends Model
{
    protected $table            = 'nkp_relation';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields;
}
