<?php


use App\Controllers\AuthController;
use App\Controllers\Employers;
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
$routes->post('projects', [Projects::class, 'create']);
$routes->get('tasks', [Pages::class, 'view_tasks']);
$routes->get('employers', [Employers::class, 'index']);
$routes->get('add_employers', [Employers::class, 'view_add']);
$routes->get('/projects/(:any)', [ProjectPage::class,'index/$1']);
$routes->get('404', [Pages::class, 'view_404']);
$routes->get('login', [AuthController::class, 'login']);
$routes->get('forgot_password', [AuthController::class, 'forgot']);
$routes->get('registration', [AuthController::class, 'registration']);
//
//$routes->get('news/new', [News::class, 'new']); // Add this line
//$routes->post('news', [News::class, 'create']); // Add this line


