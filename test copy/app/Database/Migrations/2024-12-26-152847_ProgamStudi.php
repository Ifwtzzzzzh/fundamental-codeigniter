<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ProgamStudi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'kd_prod' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => false,
                'auto_increment' => false,
                'null' => false,
            ],
            'nm_prod' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP'
        ]);
        $this->forge->addKey('kd_prod', true);
        $this->forge->createTable('program_studi');

    }

    public function down()
    {
        $this->forge->dropTable('program_studi');
    }
}