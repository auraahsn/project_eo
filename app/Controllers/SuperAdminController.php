<?php

namespace App\Controllers;

class SuperAdminController extends BaseController
{
    public function index()
    {
        // $session = session();
        // if($session->role_id != 1){
        //     return redirect()-> to(site_url('customer/dashboard'));
        // }
        $builder = $this->db->table('users');
        $query   = $builder->get()->getResult();
        $data['users'] = $query;
        return view('superadmin/home', $data);
        // return view('superadmin/home');
    }
    public function generate()
    {
        echo password_hash('12345', PASSWORD_BCRYPT);
    }
    public function create()
    {
        return view('superadmin/add');
    }
    public function store()
    {
        //card 1: name sama
        $data = $this->request->getPost();
        $this->db->table('users')->insert($data);

        if ($this->db->affectedRows() > 0) {
            return redirect()->to(site_url('homesuperadmin'))->with('success', 'Data Berhasil Disimpan!');
        }
    }
    public function edit($id = null)
    {
        if ($id != null) {
            $query = $this->db->table('users')->getWhere(['id_user' => $id]);
            if ($query->resultID->num_rows > 0) {
                $data['users'] = $query->getRow();
                return view('superadmin/edit', $data);
            } else {
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            }
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function update($id)
    {
        $data = $this->request->getPost();
        unset($data['_method']);
        $this->db->table('users')->where(['id_user' => $id])->update($data);
        return redirect()->to(site_url('homesuperadmin'))->with('success', 'Data Berhasil DiUpdate!');
    }

    public function destroy($id)
    {
        $this->db->table('users')->where(['id_user' => $id])->delete();
        return redirect()->to(site_url('homesuperadmin'))->with('success', 'Data Berhasil Dihapus!');
    }
}
