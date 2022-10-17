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

        public function edit($id=null){
            if($id !=null){
                $query=$this->db->table('events')->getWhere(['id'=> $id]);
                if($query->resultID->num_rows>0){
                    $data['events']=$query->getRow();
                    return view('events/edit', $data); 
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
            $this->db->table('events')->where(['id'=> $id])->update($data);
            return redirect()->to(site_url('events'))->with('success', 'Data Berhasil DiUpdate!');
            
        }
    
        public function destroy($id){
            $this->db->table('events')->where(['id'=> $id])->delete();
            return redirect()->to(site_url('events'))->with('success', 'Data Berhasil Dihapus!');
            
        }
    
}