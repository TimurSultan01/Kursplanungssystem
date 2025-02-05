<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index($view_type = null)
    {
        // Erklärung $view_type
        if ($view_type == '2') {
            $view = 'prof_view';  // View für "prof"
        } elseif ($view_type == '1') {
            $view = 'stud_view';  // View für "stud"
        } else {
            $view = 'default_view';  // Standard-View für Wert 0 oder ungültige Werte
        }

        $data['zustand'] = $view_type;
        $data['title'] = 'Startseite';

        echo view('templates/head', $data);
        echo view('templates/menu', $data);
        echo view('templates/startpage', $data);
        echo view('templates/footer');
    }

    public function alt($view_type = null)
    {
        $data['zustand'] = $view_type;
        $data['title'] = 'Startseite';

        echo view('templates/head', $data);
        echo view('templates/menu', $data);
        echo view('templates/startpage_alt', $data);
        echo view('templates/footer'); 
    }
}