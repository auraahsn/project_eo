<?php

namespace App\Controllers;

class HomeCustomer extends BaseController
{
    public function index()
    {
        // $session = session();
        // if($session->role_id != 2){
        //     return redirect()-> to(site_url('home'));
        // }
       return view('customer/dashboard');
    }
}
