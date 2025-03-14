<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TableCycle extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();
        
        $this->forge->addField([
            "id" => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment'=> true
            ],
            "nom" => [
                "type" => 'VARCHAR',
                "constraint" => 100
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('Cycle');
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->db->disableForeignKeyChecks();
        
        $this->forge->dropTable("Cycle");

        $this->db->enableForeignKeyChecks();
    }
}
