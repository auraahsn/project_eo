<?php

namespace App\Controllers;

use App\Models\PortofolioModel;

class PortofolioCustomer extends BaseController
{
    public function index()
    {
        $portofolio = new PortofolioModel();
        
        $data['portofolio'] = $portofolio->findAll();
        return view('customer/portofolio_customer', $data);
    }
    public function store()
    {
        $portofolio = new PortofolioModel();

        $file = $this->request->getFile('foto');
        if ($file->isValid() && !$file->hasMoved()) {
            $fotoNama = $file->getRandomName();
            $file->move(WRITEPATH.'../uploads/', $fotoNama);
        }

        $data = [
            'title' => $this->request->getPost('title'),
            'foto' => $fotoNama,
        ];
        $portofolio->save($data);
        return redirect()->to('portofolio')->with('status', 'Portofolio berhasil ditambahkan!');
    }
}
