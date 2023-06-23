<?php

namespace App\Models;

use CodeIgniter\Model;

class PjModel extends Model
{

    protected $table            = 'pj';
    protected $primaryKey       = 'idPJ';
    protected $useAutoIncrement = true;
    protected $allowedFields;
  
}
