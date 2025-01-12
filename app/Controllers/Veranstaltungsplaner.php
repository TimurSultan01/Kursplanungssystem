<?php

namespace App\Controllers;

class Veranstaltungsplaner extends BaseController
{
    public function index($view_type = null, $art = 0)
    {
        if ($view_type != 1) {
            return redirect()->to(base_url('dashboard/index/0'));
        }

        $data['zustand'] = $view_type;
        $data['art'] = $art;
        $data['title'] = 'Veranstaltungsplaner';

        echo view('templates/head', $data);
        echo view('templates/menu', $data);
        echo view('templates/planer', $data);
        echo view('templates/footer');
    }
}