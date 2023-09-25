<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Supplier extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 12,
                'auto_increment' => true,
            ],
            'nmsupplier' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'alamat' => [
                'type'  => 'VARCHAR',
                'constraint' => '50'
            ],
            'notelp' => [
                'type' => 'VARCHAR',
                'constraint' => '14'
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('tbsupplier');
    }

    public function down()
    {
        $this->forge->dropTable('tbsupplier');
    }
}
