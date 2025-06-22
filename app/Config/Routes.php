<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/jobs', 'Jobs::index');

//sign in route
$routes->get('/signin', 'AuthController::signinPage');
$routes->get('/auth/google', 'AuthController::googleSignIn');
