<?php

namespace App\Controllers;

class Feedback extends BaseController
{
    public function index($view_type = null)
    {
        if ($view_type != 1 && $view_type != 2) {
            return redirect()->to(base_url('dashboard/index/0'));
        }

        $data['zustand'] = $view_type;
        $data['title'] = 'Feedback';

        echo view('templates/head', $data);
        echo view('templates/menu', $data);
        echo view('templates/feedback', $data);
        echo view('templates/footer');
    }
}