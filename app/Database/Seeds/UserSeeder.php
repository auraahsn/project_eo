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
                'no_telp' =>'08909878909',
                'role_id' =>'2'
            ],
            [
                'nama_user' => 'Admin 2',
                'username' => 'admin2',
                'password_user' => password_hash('12345', PASSWORD_BCRYPT),
                'no_telp' =>'2',
                'role_id' =>'2'
            ],
            [
                'nama_user' => 'Ages Mahesa',
                'username' => 'agesmahesa',
                'password_user' => password_hash('ages', PASSWORD_BCRYPT),
                'no_telp' =>'08509878909',
                'role_id' =>'1'
            ]
        ];
        $this->db->table('users')->insertBatch($data);
    }
}
