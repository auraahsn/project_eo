<?php

namespace App\Controllers;

class LandingPage extends BaseController
{
    public function index()
    {
        echo view('landing_page/landingpage');
    }
    public function aboutLP(){
        echo view('landing_page/about_lp');
    }
    public function generate()
    {
        echo password_hash('12345', PASSWORD_BCRYPT);
    }
    public function faqsLP(){
        echo view('landing_page/faqs_lp');
    }
}
