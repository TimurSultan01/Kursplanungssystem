<?php

namespace App\Controllers;

class Gebauedeplan extends BaseController
{
    public function index($view_type = null, $bearbeiten = null, $speichern = null)
    {
        if ($view_type != 1 && $view_type != 2) {
            return redirect()->to(base_url('dashboard/index/0'));
        }

        $data['zustand'] = $view_type;
        $data['bearbeiten'] = $bearbeiten;
        $data['speichern'] = $speichern;
        $data['title'] = 'Profil';

        echo view('templates/head', $data);
        echo view('templates/menu', $data);
        echo view('templates/profil', $data);
        echo view('templates/footer');
    }
}