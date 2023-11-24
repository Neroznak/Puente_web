<?php


use App\Controllers\AuthController;
use App\Controllers\Projects;
use CodeIgniter\Router\RouteCollection;
use App\Controllers\Pages;


/**
 * @var RouteCollection $routes
 */


//$routes->setDefaultController('start'); // Устанавливаем дефолтный контроллер
//$routes->get('pages', [Pages::class, 'index']);
//$routes->get('projects', [Projects::class, 'view']);
//$routes->get('add_project', [Projects::class, 'view']);
//$routes->get('home', [Pages::class, 'view']);
//$routes->get('tasks', [Pages::class, 'view']);
//$routes->get('employers', [Pages::class, 'view']);
//$routes->get('(:segment)', [Pages::class, 'view']);
//$routes->get('(:segment)', [Projects::class, 'view']);

//// Маршрут для основных страниц
//$route['default_controller'] = 'pages'; // Установите контроллер по умолчанию на 'pages'
//$route['404_override'] = '';
//$route['translate_uri_dashes'] = FALSE;

// Маршруты для страниц проектов
$routes->get('/', 'Home::index');
$routes->get('home', [Pages::class, 'view']);
$routes->get('projects', [Projects::class, 'view']);
$routes->get('add_project', [Projects::class, 'view_add']);
$routes->get('tasks', [Pages::class, 'view_tasks']);
$routes->get('employers', [Pages::class, 'view_employers']);
$routes->get('add_project', [Projects::class, 'view']);
$routes->get('project_page', [Projects::class, 'view_project']);
$routes->get('404', [Pages::class, 'view']);
$routes->get('start', [Pages::class, 'view']);
$routes->get('log', [AuthController::class, 'login']);

