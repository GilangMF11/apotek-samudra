<?php

namespace App\Models;

use CodeIgniter\Model;

class DetailTransaksiModel extends Model
{
    protected $table = 'tbdetail_transaksi'; // Nama tabel di database
    protected $primaryKey = 'id'; // Nama primary key
    protected $allowedFields = ['id','id_transaksi', 'kdobat', 'qty', 'harga', 'banyak']; // Kolom yang dapat diisi

}
