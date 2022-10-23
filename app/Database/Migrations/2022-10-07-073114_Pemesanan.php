<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pemesanan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pemesanan' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_pemesan' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'telepon' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'jenis_acara' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'tanggal_acara' => [
                'type' => 'DATE',
            ],
            'deskripsi_acara' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'status' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
        ]);
        $this->forge->addKey('id_pemesanan', true);
        $this->forge->createTable('pemesanan');
    }

    public function down()
    {
        $this->forge->dropTable('pemesanan');
    }
}
