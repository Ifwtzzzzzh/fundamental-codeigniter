<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateMejaSiswaTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'NIM' => [
                'type' => 'VARCHAR',
                'constraint' => 15,
                'null' => false,
            ],
            'nm_mhs' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => false,
            ],
            'tgl_lahir' => [
                'type' => 'DATE',
                'null' => false,
            ],
            'kd_fak' => [
                'type' => 'VARCHAR',
                'constraint' => 10,
                'null' => false,
            ],
            'kd_prod' => [
                'type' => 'VARCHAR',
                'constraint' => 10,
                'null' => false,
            ],
        ]);
        $this->forge->addKey('NIM', true); // Primary key
        $this->forge->addForeignKey('kd_fak', 'fakultas', 'kd_fak', 'CASCADE', 'CASCADE'); // Foreign key
        $this->forge->addForeignKey('kd_prod', 'program_studi', 'kd_prod', 'CASCADE', 'CASCADE'); // Foreign key
        $this->forge->createTable('meja_siswa');
    }

    public function down()
    {
        $this->forge->dropTable('meja_siswa');
    }
}