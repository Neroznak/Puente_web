<?php


use App\Controllers\AuthController;
use App\Controllers\ProjectPage;
use App\Controllers\Projects;
use CodeIgniter\Router\RouteCollection;
use App\Controllers\Pages;


/**
 * @var RouteCollection $routes
 */

// Маршруты для страниц проектов
$routes->get('/', 'Home::index');
$routes->get('home', [Pages::class, 'view']);
$routes->get('projects', [Projects::class, 'view']);
$routes->get('archive_projects', [Projects::class, 'view_archive']);
$routes->get('add_project', [Projects::class, 'view_add']);
$routes->get('tasks', [Pages::class, 'view_tasks']);
$routes->get('employers', [Pages::class, 'view_employers']);
$routes->get('add_project', [Projects::class, 'view']);
$routes->get('/projects/(:any)', [ProjectPage::class,'index/$1']);
$routes->get('404', [Pages::class, 'view_404']);
$routes->get('start', [Pages::class, 'view']);
$routes->get('login', [AuthController::class, 'login']);
$routes->get('forgot_password', [AuthController::class, 'forgot']);
$routes->get('registration', [AuthController::class, 'registration']);

