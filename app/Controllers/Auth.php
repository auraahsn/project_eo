<?php

namespace App\Controllers;
use App\Models\UsersModel;

class Auth extends BaseController
{
    public function index()
    {
        return redirect()->to(site_url('login'));
    }

    public function login()
    {
    if(session('id_user')){
        return redirect()->to(site_url('home'));
    }
        return view('auth/login');
    }

    public function loginProcess()
    {
        $post = $this->request->getPost();
        $query = $this->db->table('users')->getWhere(['username' => $post['username']]);
        $user = $query->getRow();
        if ($user) {
            if(password_verify($post['password'], $user->password_user)){
                $params=['id_user'=>$user->id_user];
                session()->set($params);
                   return redirect()->to(site_url('home'));
                }else{
                return redirect()->back()->with('error', 'Password salah');
            }
        } else {
            return redirect()->back()->with('error', 'Username tidak ditemukan');
        }
    }

    public function logout(){
        session()->remove('id_user');
        return redirect()->to(site_url('login'));
    }
    public function register()
    { session();
		$data = [
			'validate' => \Config\Services::validation(),
		];
        return view('auth/register', $data);
    }

    public function registerProcess(){
        $val = $this->validate(
            [
                'nama_user' => 'required',
                'username' => [
                      'rules' => 'required|is_unique[users.username]',
                      'errors' =>[
                          'is_unique' =>'{field} sudah dipakai'
                                  ]
                              ],
                'password_user' => 'required',
                'no_telp' => 'required',
            ],
          );
  
        if(!$val){
            $pesanvalidasi = \Config\Services::validation();
            return redirect()->to('auth/register')->withInput()->with('validate',$pesanvalidasi);
        }
        $data = array(
            'nama_user' => $this->request->getPost('nama_user'),
            'username' => $this->request->getPost('username'),
            'password_user' => password_hash($this->request->getPost('password_user'), PASSWORD_DEFAULT),
            'no_telp' => $this->request->getPost('no_telp'),
            'role_id'=>'2',
        );
        $model = new UsersModel;
        $model->insert($data);
        //session()->setFlashdata('pesan','Selamat Anda berhasil Registrasi, silakan login!');
        return redirect()->to(site_url('auth/login'));
       
    
    }

}
