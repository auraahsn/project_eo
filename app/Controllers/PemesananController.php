<?php

namespace App\Controllers;

class PemesananController extends BaseController
{
    public function index()
    {
    
        $builder = $this->db->table('pemesanan');
        $query   = $builder->get()->getResult();
        $data['pemesanan'] = $query;
        return view('pemesanan/list', $data);
        //print_r($query->getResult());  
    }
    public function create()
    {
        $builder = $this->db->table('users');
        $query   = $builder->get()->getResult();
        $data['users'] = $query;
        return view('pemesanan/add',$data);
    }
    public function store()
    {
        //card 1: name sama
        $data = $this->request->getPost();
        $this->db->table('pemesanan')->insert($data);

        if ($this->db->affectedRows() > 0) {
            return redirect()->to(site_url('pemesanan'))->with('success', 'Data Berhasil Disimpan!');
        }
    }
    public function edit($id = null)
    {
        if ($id != null) {
            $query = $this->db->table('pemesanan')->getWhere(['id_pemesanan' => $id]);
            if ($query->resultID->num_rows > 0) {
                $data['pemesanan'] = $query->getRow();
                return view('pemesanan/edit', $data);
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
        $this->db->table('pemesanan')->where(['id_pemesanan' => $id])->update($data);
        return redirect()->to(site_url('pemesanan'))->with('success', 'Data Berhasil DiUpdate!');
    }

    public function destroy($id)
    {
        $this->db->table('pemesanan')->where(['id_pemesanan' => $id])->delete();
        return redirect()->to(site_url('pemesanan'))->with('success', 'Data Berhasil Dihapus!');
    }
}
