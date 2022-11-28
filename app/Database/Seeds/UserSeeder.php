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
                'nama_user' => 'Super Admin',
                'username' => 'superadmin',
                'password_user' => password_hash('eoyama100', PASSWORD_BCRYPT),
                'no_telp' =>'08909878909',
                'role_id' =>'3'
            ],
            [
                'nama_user' => 'Admin',
                'username' => 'admin',
                'password_user' => password_hash('weblanjut100', PASSWORD_BCRYPT),
                'no_telp' =>'085289096756',
                'role_id' =>'2'
            ]
        ];
        $this->db->table('users')->insertBatch($data);
    }
}
