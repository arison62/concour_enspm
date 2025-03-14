<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TableCentreExamen extends Migration
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
                'constraint' => 100
            ],
            'adresse' => [
                'type' => 'VARCHAR',
                'constraint' => 250
            ],

        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('CentreExamen');
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->db->disableForeignKeyChecks();
        
        $this->forge->dropTable('CentreExamen');

        $this->db->enableForeignKeyChecks();
    }
}
