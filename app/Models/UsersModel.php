<?php namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'id_user';

    protected $allowedFields = ['nama_user', 'username', 'password_user', 'no_telp','role_id' ];

    


}