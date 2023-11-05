<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DetailJual extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => '11',
                'auto_increment' => true
            ],
            'id_transaksijual' => [
                'type' => 'VARCHAR',
                'constraint' => '20'
            ],
            'kdobat' => [
                'type' => 'VARCHAR',
                'constraint' => '12'
            ],
            'hrgjual' => [
                'type' => 'DECIMAL',
                'constraint' => '10.2'
            ],
            'hrgbeli' => [
                'type' => 'DECIMAL',
                'constraint' => '10.2'
            ],
            

        ]);
    }

    public function down()
    {
        //
    }
}
