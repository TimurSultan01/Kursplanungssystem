<?php

namespace App\Controllers;

class Immatrikulation extends BaseController
{
    public function index($view_type = null)
    {
        if ($view_type != 0) {
            return redirect()->to(base_url('dashboard/index/0'));
        }

        $data['zustand'] = $view_type;
        $data['title'] = 'Bewerbung';

        echo view('templates/head', $data);
        echo view('templates/menu', $data);
        echo view('templates/immatrikulation', $data);
        echo view('templates/footer');
    }


    public function login($view_type = null)
    {
        if ($view_type != 0) {
            return redirect()->to(base_url('dashboard/index/0'));
        }

        $data['zustand'] = $view_type;
        $data['title'] = 'Login';

        echo view('templates/head', $data);
        echo view('templates/menu', $data);
        echo view('templates/login', $data);
        echo view('templates/footer');
    }
}