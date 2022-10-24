<?php

namespace App\Controllers;

class PemesananController extends BaseController
{
    
    public function edit($id=null){
        if($id !=null){
            $query=$this->db->table('pemesanan')->getWhere(['id_pemesanan'=> $id]);
            if($query->resultID->num_rows>0){
                $data['pemesanan']=$query->getRow();
                return view('pemesanan/edit', $data); 
            }else{
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            }
        }else{
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function update($id){
        $data = $this ->request->getPost();
        unset($data['_method']);
        $this->db->table('pemesanan')->where(['id_pemesanan'=> $id])->update($data);
        return redirect()->to(site_url('pemesanan'))->with('success', 'Data Berhasil DiUpdate!');
        
    }

    public function destroy($id){
        $this->db->table('pemesanan')->where(['id_pemesanan'=> $id])->delete();
        return redirect()->to(site_url('pemesanan'))->with('success', 'Data Berhasil Dihapus!');
        
    }
}