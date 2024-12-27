<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProgramStudiTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'kd_prod' => [
                'type' => 'VARCHAR',
                'constraint' => 10,
                'null' => false,
            ],
            'nm_prod' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => false,
            ],
        ]);
        $this->forge->addKey('kd_prod', true); // Primary key
        $this->forge->createTable('program_studi');
    }

    public function down()
    {
        $this->forge->dropTable('program_studi');
    }
}