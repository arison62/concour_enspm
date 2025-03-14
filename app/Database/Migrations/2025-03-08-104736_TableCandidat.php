<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TableCandidat extends Migration
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
                'constraint' => 250
            ],
            'prenom' => [
                'type' => 'VARCHAR',
                'constraint' => 250,
                'null' => true
            ],
            'date_naissaince' => [
                'type' => 'DATE',
                'null' => true
            ],
            'lieu_naissance' => [
                'type' => 'VARCHAR',
                'constraint' => 250
            ],
            'parcours_id' => [
                'type' => 'INT',
                'unsigned' => true
            ],
            'nationalite_id' => [
                'type' => 'INT',
                'unsigned' => true
            ],
            'departement_id' => [
                'type' => 'INT',
                'unsigned' => true
            ],
            'centre_examen_id' => [
                'type' => 'INT',
                'unsigned' => true
            ],
            'compte_id' => [
                'type' => 'INT',
                'unsigned' => true
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('parcours_id', 'Parcours', 'id');
        $this->forge->addForeignKey('nationalite_id', 'Nationalite', 'id');
        $this->forge->addForeignKey('departement_id', 'Departement', 'id');
        $this->forge->addForeignKey('centre_examen_id', 'CentreExamen', 'id');
        $this->forge->addForeignKey('compte_id', 'Compte', 'id');
        $this->forge->createTable('Candidat');
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->db->disableForeignKeyChecks();
        
        $this->forge->dropTable('Candidat');

        $this->db->enableForeignKeyChecks();
    }
}
