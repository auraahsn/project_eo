<?php

namespace App\Controllers;

use App\Models\PortofolioModel;

class Portofolio extends BaseController
{
    public function index()
    {
        $portofolio = new PortofolioModel();

        // $builder = $this->db->table('portofolio');
        // $query = $builder->get()->getResult();
        // $data['portofolio'] = $query;
        $data['portofolio'] = $portofolio->findAll();
        return view('portofolio/get', $data);
    }
    public function create()
    {
        return view('portofolio/add');
    }
    public function store()
    {
        $portofolio = new PortofolioModel();

        $file = $this->request->getFile('foto');
        if ($file->isValid() && !$file->hasMoved()) {
            $fotoNama = $file->getRandomName();
            $file->move('uploads/', $fotoNama);
        }

        $data = [
            'title' => $this->request->getPost('title'),
            'foto' => $fotoNama,
        ];
        $portofolio->save($data);
        return redirect()->to('portofolio')->with('status', 'Portofolio berhasil ditambahkan!');
    }
    public function edit($id)
    {
        $portofolio = new PortofolioModel();
        $data['portofolio'] = $portofolio->find($id);
        return view('portofolio/edit', $data);
    }
    public function update($id)
    {
        $portofolio = new PortofolioModel();
        $port_item = $portofolio->find($id);
        $fotoLama =  $port_item['foto'];;
        // echo $port_item['foto'];
        $file = $this->request->getFile('foto');
        if ($file->isValid() && !$file->hasMoved()) {
            $fotoLama =  $port_item['foto'];;
            if (file_exists("uploads/" . $fotoLama)) {
                unlink("uploads/" . $fotoLama);
            }
            $fotoNama = $file->getRandomName();
            $file->move('uploads/', $fotoNama);
        } else {
            $fotoNama =  $fotoLama;
        }

        $data = [
            'title' => $this->request->getPost('title'),
            'foto' => $fotoNama,
        ];
        $portofolio->update($id, $data);
        return redirect()->to('/portofolio')->with('status', 'Portofolio berhasil diedit!');
    }
    public function delete($id)
    {
        $portofolio = new PortofolioModel();
        $data = $portofolio->find($id);
        $imageFile = $data['foto'];
        if (file_exists("uploads/.$imageFile")) {
            unlink("uploads/.$imageFile");
        }
        $portofolio->delete($id);
        return redirect()->back()->with('status', 'Portofolio berhasil dihapus!');
    }
    public function destroy($id)
    {
        $portofolio = new PortofolioModel();
        $data = $portofolio->find($id);
        $imageFile = $data['foto'];
        if (file_exists("uploads/.$imageFile")) {
            unlink("uploads/.$imageFile");
        }
        $portofolio->delete($id);
        return redirect()->back()->with('status', 'Portofolio berhasil dihapus!');
    }
}
