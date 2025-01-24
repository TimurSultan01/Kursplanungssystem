<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Dashboard::index');
$routes->get('dashboard', 'Dashboard::index/$1');
$routes->get('veranstaltung', 'Veranstaltung::index');
$routes->get('stundenplan', 'Stundenplan::index');
$routes->get('profil', 'Profil::index');
$routes->get('gebauedeplan', 'Gebauedeplan::index');
$routes->get('home', 'Home::index');
$routes->get('veranstaltungsplaner', 'Veranstaltungsplaner::index');
$routes->get('veranstaltungsverwaltung', 'Veranstaltungsverwaltung::index');
$routes->get('feedback', 'Feedback::index');
$routes->get('immatrikulation', 'Immatrikulation::index');
$routes->get('tutorial', 'Tutorial::index');
