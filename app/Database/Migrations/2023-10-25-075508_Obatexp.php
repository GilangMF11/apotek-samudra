<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Obatexp extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'kdobat' => [
                'type'           => 'VARCHAR',
                'constraint'     => 12,
            ],
            'nmobat' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'kdbatch'=> [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'rak' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
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
        $this->forge->addKey('kdobat', true);
        $this->forge->createTable('tbobatexp');
    }

    public function down()
    {
        $this->forge->dropTable('tbobatexp');
    }
}
