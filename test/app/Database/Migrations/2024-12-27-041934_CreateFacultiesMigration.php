<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateFacultiesMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'kd_fak'           => [
                 'type'           => 'VARCHAR',
                 'constraint'     => '11'
              ],
              'nm_fak'       => [
                  'type'           => 'VARCHAR',
                  'constraint'     => '255',
              ],
        ]);
        $this->forge->addKey('kd_fak', TRUE);
        $this->forge->createTable('faculties');
    }

    public function down()
    {
        //
    }
}