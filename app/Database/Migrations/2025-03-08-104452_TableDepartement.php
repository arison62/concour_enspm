<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TableDepartement extends Migration
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
                'constraint' => 100,

            ],
            'region_id' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('region_id', 'Region', 'id');
        $this->forge->createTable('Departement');
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->dropTable('Departement');
        $this->db->enableForeignKeyChecks();

    }
}
