<?php


use App\Controllers\Projects;
use CodeIgniter\Router\RouteCollection;
use App\Controllers\Pages;


/**
 * @var RouteCollection $routes
 */


$routes->setDefaultController('start'); // Устанавливаем дефолтный контроллер
//$routes->get('pages', [Pages::class, 'index']);
//$routes->get('projects', [Projects::class, 'view']);
//$routes->get('add_project', [Projects::class, 'view']);
//$routes->get('home', [Pages::class, 'view']);
//$routes->get('tasks', [Pages::class, 'view']);
//$routes->get('employers', [Pages::class, 'view']);
$routes->get('(:segment)', [Pages::class, 'view']);
//$routes->get('(:segment)', [Projects::class, 'view']);
