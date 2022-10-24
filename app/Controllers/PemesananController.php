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
        return view('pemesanan/add');
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
}