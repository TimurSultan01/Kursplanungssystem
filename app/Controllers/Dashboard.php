<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index($view_type = 0)
    {
        // Setze Standard-View, wenn kein Parameter übergeben wird
        if ($view_type == 'prof') {
            $view = 'prof_view';  // View für "prof"
        } elseif ($view_type == 'stud') {
            $view = 'stud_view';  // View für "stud"
        } else {
            $view = 'default_view';  // Standard-View für Wert 0 oder ungültige Werte
        }
        $data['zustand'] = $view_type;

        echo view('templates/head');
        echo view('templates/menu', $data);
        echo view('templates/startpage', $data);
        echo view('templates/footer');
    }
}