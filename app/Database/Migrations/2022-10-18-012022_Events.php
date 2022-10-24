<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Events extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'title' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'start_date' => [
                'type'       => 'DATE',
            ],
            'end_date' => [
                'type'       => 'DATE',
            ],
            
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('events');

    }

    public function down()
    {
        $this->forge->dropTable('events');
    }
}