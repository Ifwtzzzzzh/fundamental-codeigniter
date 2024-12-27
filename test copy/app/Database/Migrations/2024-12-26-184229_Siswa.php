<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Siswa extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'NIM' => [
                'type'           => 'INT',
                'constraint'     => 14,
                'unsigned'       => false,
                'auto_increment' => false,
                'null' => false,
            ],
            'nm_mahasiswa' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],
            'tgl_lahir' => [
                'type'       => 'DATE',
                'null' => false,
            ],
            'kd_fak' => [
                'type'       => 'INT',
                'constraint' => 5,
                'null' => false,
            ],
            'kd_prod' => [
                'type'       => 'INT',
                'constraint' => 5,
                'null' => false,
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP'
        ]);
        $this->forge->addKey('NIM', true);
        $this->forge->addKey('kd_fak', false);
        $this->forge->addKey('kd_prod', false);
        $this->forge->createTable('siswa');

    }

    public function down()
    {
        $this->forge->dropTable('siswa');
    }
}