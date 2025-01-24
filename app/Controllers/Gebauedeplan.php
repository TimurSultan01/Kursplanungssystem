<?php

namespace App\Controllers;

class Gebauedeplan extends BaseController
{
    public function index($view_type = null, $building_type = 0)
    {
        $data['zustand'] = $view_type;
        $data['building'] = $building_type;
        $data['title'] = 'Gebäudeplan';

        echo view('templates/head', $data);
        echo view('templates/menu', $data);
        echo view('templates/gebaeudeplan', $data);
        echo view('templates/footer');
    }
}