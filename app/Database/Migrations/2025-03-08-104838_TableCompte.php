<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class TableCompte extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();
        
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment'=> true
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'mot_de_passe' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'date_creation' => [
                'type' => 'TIMESTAMP',
                'default' => new RawSql('CURRENT_TIMESTAMP')
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('Compte');
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->db->disableForeignKeyChecks();
        
        $this->forge->dropTable('Compte');

        $this->db->enableForeignKeyChecks();
    }
}
