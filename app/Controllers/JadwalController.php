<?php

namespace App\Controllers;

class JadwalController extends BaseController
{
    public function index()
    {

        $builder = $this->db->table('events');
        $query   = $builder->get()->getResult();
        $data['events'] = $query;
        return view('events/list', $data);
        //print_r($query->getResult());
    }
    public function create()
        {
            return view('events/add');
        }
        public function store()
        {
            //card 1: name sama
            $data = $this->request->getPost();
            $this->db->table('events')->insert($data);
    
            if ($this->db->affectedRows() > 0) {
                return redirect()->to(site_url('events'))->with('success', 'Data Berhasil Disimpan!');
            }
        }
    
}