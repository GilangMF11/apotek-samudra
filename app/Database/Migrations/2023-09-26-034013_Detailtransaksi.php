<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Detailtransaksi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 12,
                'auto_increment' => true,
            ],
            'id_transaksi' => [
                'type' => 'INT',
                'constraint' => 50,
            ],
            'kdobat' => [
                'type' => 'INT',
                'constraint' => 12,
            ],
            'qty' => [
                'type' => 'INT',
                'constraint' => 12,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('tbdetailtransaksi');
    }

    public function down()
    {
        $this->forge->dropTable('tbdetailtransaksi');
    }
}
