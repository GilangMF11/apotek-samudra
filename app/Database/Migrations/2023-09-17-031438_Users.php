<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 12,
                'auto_increment' => true,
            ],
            'username' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'kdbatch' => [
                'type' => 'VARCHAR',
                'constraint' => '12',
            ],
            'rak' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
            ],
            'unit' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
            ],
        ]);
        $this->forge->addKey('kdobat', true);
        $this->forge->createTable('tbobat');
    }

    public function down()
    {
        this->forge->dropTable('users');
    }
}
