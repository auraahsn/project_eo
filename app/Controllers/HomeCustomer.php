<?php

namespace App\Controllers;

class HomeCustomer extends BaseController
{
    public function index()
    {
       return view('customer/dashboard');
    }
}
