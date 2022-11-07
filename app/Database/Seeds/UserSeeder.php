<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        //untuk satu data
        /* $data = [
            'nama_user' => 'Admin',
            'username' => 'admin1',
            'password_user' => password_hash('12345', PASSWORD_BCRYPT),
        ];
        $this->db->table('users')->insert($data); */
        $data = [
            [
                'nama_user' => 'Admin',
                'username' => 'admin1',
                'password_user' => password_hash('12345', PASSWORD_BCRYPT),
                'level' =>'admin',
            ],
            [
                'nama_user' => 'Admin 2',
                'username' => 'admin2',
                'password_user' => password_hash('12345', PASSWORD_BCRYPT),
                'level' =>'admin',
            ],
            [
                'nama_user' => 'Ages Mahesa',
                'username' => 'agesmahesa',
                'password_user' => password_hash('ages', PASSWORD_BCRYPT),
                'level' =>'admin',
            ]
        ];
        $this->db->table('users')->insertBatch($data);
    }
}
