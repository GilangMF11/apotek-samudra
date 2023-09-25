<?php

namespace App\Models;

use CodeIgniter\Model;

class SupplierModel extends Model
{
    protected $table = 'tbsupplier';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nmsupplier', 'alamat', 'notelp'];
}
