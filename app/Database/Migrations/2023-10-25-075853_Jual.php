<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Jual extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_transaksijual' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
            ],
            'tgltrans' => [
                'type' => 'DATE',
            ],
            'kdobat' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'kdbatch' => [
                'type'  => 'VARCHAR',
                'constraint' => '50',
                'null' => TRUE
            ],
            'tglproduksi' => [
                'type' => 'DATE',
                'null' => TRUE,
            ],
            'tglexp' => [
                'type' => 'DATE'
            ],
            'unit' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
            ],
            'kategori' => [
                'type' => 'VARCHAR',
                'constraint' => '25',
            ],
            'deskripsi' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'qty' => [
                'type' => 'INTEGER',
                'constraint' => '12'
            ],
            'hrgbeli' => [
                'type' => 'DOUBLE',
                'constraint' => '10,2',
            ],
            'hrgjual' => [
                'type' => 'DOUBLE',
                'constraint' => '10,2',
            ],
            'pemasok' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ]

        ]);
        $this->forge->addKey('id_transaksi jual', true);
        $this->forge->createTable('tbjual');
    }

    public function down()
    {
        $this->forge->dropTable('tbjual');
    }
}
