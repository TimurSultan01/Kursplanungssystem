<?php

namespace App\Controllers;

class Veranstaltung extends BaseController
{   // Variable angemeldet für Student angemledet bei Veranstaltung, useraction für Infoboxen anzeigen
    public function index($view_type = null, $angemeldet = null, $useraction = 2)
    {  
        if ($view_type != 1 && $view_type != 2) {
            return redirect()->to(base_url('dashboard/index/0'));
        }

        $data['zustand'] = $view_type;
        $data['angemeldet'] = $angemeldet;
        $data['title'] = 'Veranstaltung';
        $data['useraction'] = $useraction;

        echo view('templates/head', $data);
        echo view('templates/menu', $data);
        echo view('templates/veranstaltung', $data);
        echo view('templates/footer');
    }


    public function bearbeiten($view_type = null)
    {  
        if ($view_type != 2) {
            return redirect()->to(base_url('dashboard/index/0'));
        }
        
        $data['zustand'] = $view_type;
        $data['title'] = 'Veranstaltung';

        echo view('templates/head', $data);
        echo view('templates/menu', $data);
        echo view('templates/veranstaltungbearbeiten', $data);
        echo view('templates/footer');
    }
}