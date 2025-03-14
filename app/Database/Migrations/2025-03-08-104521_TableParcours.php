<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TableParcours extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();
        
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true
            ],
            'nom' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('Parcours');
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->db->disableForeignKeyChecks();
        
        $this->forge->dropTable('Parcours');

        $this->db->enableForeignKeyChecks();
    }
}
