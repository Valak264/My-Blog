<?php

use App\Controllers\Blog;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', [Blog::class, 'index']);
$routes->get('/articles/(:num)', [Blog::class, 'article']);
$routes->get('/newArticle', [Blog::class, 'newArticle']);
$routes->get('/aboutMe', [Blog::class, 'aboutMe']);
$routes->post('/newArticle/save', [Blog::class, 'save']);

service('auth')->routes($routes);
