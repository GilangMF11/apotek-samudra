<?php

namespace App\Models;

use CodeIgniter\Model;

class UnitModel extends Model
{
    protected $table = 'tbunit';
    protected $primaryKey = 'id_unit';
    protected $allowedFields = ['nmunit'];
}
