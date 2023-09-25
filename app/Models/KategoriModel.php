<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriModel extends Model
{
    protected $table = 'tbkategori';
    protected $primaryKey = 'id_kategori';
    protected $allowedFields = ['nmkategori'];
}
