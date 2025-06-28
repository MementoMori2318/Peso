<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/jobs', 'Jobs::index');

$routes->group('seeker', function ($routes) {
    $routes->get('form', 'Jobs::seekerForm');
    $routes->get('profile', 'Jobs::seekerProfile');
});

$routes->group('employer', function ($routes) {
    $routes->get('profile', 'Jobs::employerProfile');
    $routes->get('info', 'Jobs::employerInfoForm');
    $routes->post('save-info', 'Jobs::saveEmployerInfo');
    $routes->get('post-job', 'Jobs::postJobForm');
    $routes->post('save-job', 'Jobs::saveJob');
});


//sign in route
$routes->get('/signin', 'AuthController::signinPage');
$routes->get('/auth/google', 'AuthController::googleSignIn');
