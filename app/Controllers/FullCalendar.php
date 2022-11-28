<?php namespace App\Controllers;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
 
 
class FullCalendar extends BaseController
{
 
    public function index() {
 
        $db      = \Config\Database::connect();
        $builder = $db->table('events');   
        $query = $builder->select('*')
                    ->limit(10)->get();
 
        $data = $query->getResult();
 
       foreach ($data as $key => $value) {
            $data['data'][$key]['title'] = $value->title;
            $data['data'][$key]['start'] = $value->start_date;
            $data['data'][$key]['end'] = $value->end_date;
            $data['data'][$key]['backgroundColor'] = "#0000FF";
        }        
      return view('calendar',$data);
    }
 
}