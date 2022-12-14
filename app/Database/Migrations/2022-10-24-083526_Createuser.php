<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Createuser extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_user' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_user' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'username' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'password_user' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            // 'level' => [
            //     'type'       => 'INT',
            //     'constraint' => '2',
            // ],
            'no_telp' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'role_id' => [
                'type'       => 'INT',
                'constraint' => '2',
            ],
        ]);
        $this->forge->addKey('id_user', true);
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
