<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TableDiplome extends Migration
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
            'candidat_id' => [
                'type' => 'INT',
                'unsigned' => true
            ],
            'type_diplome_id' => [
                'type' => 'INT',
                'unsigned' => true
            ],
            'annee_obtention' => [
                'type' => 'INT',
                'unsigned' => true
            ],
            'etablissement' => [
                'type' => 'VARCHAR',
                'constraint' => 250
            ]
        ]);
        
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('candidat_id', 'Candidat', 'id');
        $this->forge->addForeignKey('type_diplome_id', 'DiplomeType', 'id');
        $this->forge->createTable('Diplome');
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->db->disableForeignKeyChecks();
        
        $this->forge->dropTable('Diplome');

        $this->db->enableForeignKeyChecks();
    }
}
