<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TableReleveNote extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();
        
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned'=> true,
                'auto_increment' => true
            ],
            'diplome_id' => [
                'type' => 'INT',
                'unsigned' => true
            ],
            'fichier_path' => [
                'type' => 'VARCHAR',
                'constraint' => 1024
            ],
            'date_obtention' => [
                'type' => 'DATE',
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('diplome_id', 'Diplome', 'id');
        $this->forge->createTable('ReleveNote');
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->db->disableForeignKeyChecks();
        
        $this->forge->dropTable('ReleveNote');

        $this->db->enableForeignKeyChecks();
    }
}
