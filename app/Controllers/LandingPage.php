<?php

namespace App\Controllers;

class LandingPage extends BaseController
{
    public function index()
    {
        echo view('landing_page/landingpage');
    }
    public function generate()
    {
        echo password_hash('12345', PASSWORD_BCRYPT);
    }
}
