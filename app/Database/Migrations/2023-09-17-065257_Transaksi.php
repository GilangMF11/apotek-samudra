<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Transaksi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_transaksi' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'nmcustomer' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'tanggal_transaksi' => [
                'type' => 'DATE',
            ],
            'kdobat' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'qty' => [
                'type' => 'INT',
                'constraint' => 12,
            ],
            'harga' => [
                'type' => 'DECIMAL',
                'constraint' => '10,2',
            ],
            'total_harga' => [
                'type' => 'DECIMAL',
                'constraint' => '10,2',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('tbtransaksi');
    }

    public function down()
    {
        $this->forge->dropTable('tbtransaksi');
    }
}
