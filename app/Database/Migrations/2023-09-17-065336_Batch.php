<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Batch extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 12,
                'auto_increment' => true,
            ],
            'kdbatch'=> [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            
        ]);
        $this->forge->addKey('id');
        $this->forge->createTable('tbbacth');
    }

    public function down()
    {
        $this->forge->dropTable('tbbacth');
    }
}
