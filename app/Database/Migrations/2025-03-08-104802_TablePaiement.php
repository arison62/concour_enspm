<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TablePaiement extends Migration
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
           'recu_path' => [
            'type' => 'VARCHAR',
            'constraint' => 1024
           ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('candidat_id', 'Candidat', 'id');
        $this->forge->createTable('Paiement');
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->db->disableForeignKeyChecks();
        
        $this->forge->dropTable('Paiement');

        $this->db->enableForeignKeyChecks();
    }
}
