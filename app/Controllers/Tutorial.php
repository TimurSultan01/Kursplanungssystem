<?php

namespace App\Controllers;

class Tutorial extends BaseController
{
    public function index($view_type = null)
    {
        if ($view_type == 0) {
            return redirect()->to(base_url('dashboard/index/0'));
        }

        $data['zustand'] = $view_type;
        $data['title'] = 'Startseite';
        echo view('templates/tutorial', $data);
    }
}