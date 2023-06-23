<?php

namespace App\Models;

use CodeIgniter\Model;

class NilaiNKTModel extends Model
{
    protected $table            = 'nilai_nkt';
    protected $primaryKey       = 'id_nilai_nkt';
    protected $useAutoIncrement = true;
    protected $allowedFields;
}
