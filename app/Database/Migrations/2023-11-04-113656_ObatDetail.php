<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ObatDetail extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'kdobat'=> [
                'type' => 'VARCHAR',
                'constraint' => '12'
            ],
            'kdbatch'=> [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'qty' => [
                'type' => 'INTEGER',
                'constraint' => '12'
            ],
            'tglproduksi' => [
                'type' => 'DATE'
            ],
            'tglexp' => [
                'type' => 'DATE'
            ]
        ]);
        $this->forge->addKey("kdobat");
        $this->forge->createTable("tbdetailobat");
    }

    public function down()
    {
        $this->forge->dropTable("tbdetailobat");
    }
}
