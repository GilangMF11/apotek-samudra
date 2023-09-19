<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pemnyimpanan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_rak' => [
                'type'           => 'INT',
                'constraint'     => 12,
                'auto_increment' => true,
            ],
            'nmrak' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('tbrak');
    }

    public function down()
    {
        $this->forge->dropTable('tbrak');
    }
}
