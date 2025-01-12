<?php

namespace App\Controllers;

class Veranstaltungsverwaltung extends BaseController
{
    public function index($view_type, $useraction = null)
    {
        if ($view_type != 2) {
            return redirect()->to(base_url('dashboard/index/0'));
        }

        $data['zustand'] = $view_type;
        $data['useraction'] = $useraction;
        $data['title'] = 'Veranstaltungsverwaltung';

        echo view('templates/head', $data);
        echo view('templates/menu', $data);
        echo view('templates/verwaltung', $data);
        echo view('templates/footer');
    }
}