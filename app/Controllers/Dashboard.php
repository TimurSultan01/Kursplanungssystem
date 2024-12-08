<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index(): void
    {
        echo view('templates/head');
        echo view('templates/menu');
        echo view('templates/footer');
    }
}