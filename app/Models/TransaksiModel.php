<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiModel extends Model
{
    protected $table = 'tbtransaksi'; // Nama tabel di database
    protected $primaryKey = 'idtransaksi'; // Nama primary key
    protected $allowedFields = [
        'id_transaksi',
        'nmcustomer',
        'tanggal_transaksi',
        'kdobat',
        'qty',
        'banyak',
        'harga',
        'total_harga'
    ]; // Kolom yang dapat diisi

}
