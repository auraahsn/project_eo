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
}
