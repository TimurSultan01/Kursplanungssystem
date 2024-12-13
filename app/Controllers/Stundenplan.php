<?php

namespace App\Controllers;

class Stundenplan extends BaseController
{
    public function index($view_type = 0)
    {
        $data['zustand'] = $view_type;
        
        echo view('templates/head');
        echo view('templates/menu', $data);
        echo view('templates/stundenplan', $data);
        echo view('templates/footer');
    }
}