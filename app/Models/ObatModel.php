<?php

namespace App\Models;

use CodeIgniter\Model;

class ObatModel extends Model
{
    protected $table = 'tbobat';
    protected $primaryKey = 'kdobat';
    protected $allowedFields = [
        'kdobat',
        'nmobat',
        'kdbatch',
        'tglproduksi',
        'tglexp',
        'rak',
        'unit',
        'kategori',
        'deskripsi',
        'qty',
        'hrgbeli',
        'hrgjual',
        'pemasok'
    ];
    public function getLastKdobat()
    {
    return $this->selectMax('kdobat')->first();
    }
}
