<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TableNationalite extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true
            ],
            'nom'=> [
                'type'=> 'VARCHAR',
                'constraint'=> 100
            ]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('Nationalite');
    }

    public function down()
    {
        $this->forge->dropTable('Nationalite');
    }
}
