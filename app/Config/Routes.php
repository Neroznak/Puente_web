<?php

use App\Controllers\News;
use CodeIgniter\Router\RouteCollection;
use App\Controllers\Pages;


/**
 * @var RouteCollection $routes
 */


$routes->get('pages', [Home::class, 'index']);


//$routes->get('news', [News::class, 'index']);
//$routes->get('news/(:segment)', [News::class, 'show']);
//
//$routes->get('pages', [Pages::class, 'index']);
//$routes->get('(:segment)', [Pages::class, 'view']);
