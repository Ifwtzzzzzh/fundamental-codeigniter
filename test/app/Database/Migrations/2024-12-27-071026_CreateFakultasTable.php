<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateFakultasTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'kd_fak' => [
                'type' => 'VARCHAR',
                'constraint' => 10,
                'null' => false,
            ],
            'nm_fak' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => false,
            ],
        ]);
        $this->forge->addKey('kd_fak', true); // Primary key
        $this->forge->createTable('fakultas');
    }

    public function down()
    {
        $this->forge->dropTable('fakultas');
    }
}