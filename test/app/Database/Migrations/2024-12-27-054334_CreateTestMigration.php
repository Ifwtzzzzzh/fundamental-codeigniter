<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTestMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'           => [
                 'type'           => 'INT',
                 'constraint'     => 11,
                 'unsigned'       => TRUE,
                 'auto_increment' => TRUE
              ],
              'kd_fak'       => [
                  'type'           => 'VARCHAR',
                  'constraint'     => '255',
              ],
              'nm_fak'     => [
                   'type'           => 'VARCHAR',
                  'constraint'     => '255',
              ],
        ]);
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('tests');
    }

    public function down()
    {
        //
    }
}