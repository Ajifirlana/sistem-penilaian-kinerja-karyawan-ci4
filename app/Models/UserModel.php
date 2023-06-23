<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table            = 'admin';
    protected $primaryKey       = 'idAdmin';
    protected $useAutoIncrement = true;
    protected $allowedFields;
}
