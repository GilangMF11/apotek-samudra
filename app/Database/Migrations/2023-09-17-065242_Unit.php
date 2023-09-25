<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Unit extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_unit' => [
                'type'           => 'INT',
                'constraint'     => 12,
                'auto_increment' => true,
            ],
            'nmunit' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ]
        ]);
        $this->forge->addKey('id_unit', true);
        $this->forge->createTable('tbunit');
    }

    public function down()
    {
        $this->forge->dropTable('tbunit');
    }
}
