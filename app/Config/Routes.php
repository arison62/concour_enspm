<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Pages;
use App\Controllers\News;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', [Pages::class, 'index']);
$routes->get('connexion', [Pages::class,'connexion']);
$routes->post('connexion', [Pages::class, 'connexion']);

$routes->get('inscription', [Pages::class, 'inscription']);
$routes->post('inscription', [Pages::class, 'inscription']);

$routes->get('concour', [Pages::class, 'concour']);

$routes->get('news', [News::class, 'index']);
$routes->get("news/new", [News::class, 'new']);

$routes->post("news", [News::class, 'create']);
$routes->get('news/(:segment)', [News::class, 'show']);


$routes->get('pages/(:segment)', [Pages::class, 'index']);
$routes->get('(:segment)', [Pages::class, 'view']);
