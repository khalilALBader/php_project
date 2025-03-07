<?php


require_once 'controllers/HomeController.php';
require_once 'controllers/PageController.php';

require_once 'controllers/AuthController.php';
require_once 'controllers/ProductController.php';
require_once 'controllers/AdminAdminsController.php';
require_once 'controllers/UserController.php';
require_once 'controllers/AdminOrdersController.php';
require_once 'controllers/AdminCategoriesController.php';



$router = new Router();

$router->get('/', 'HomeController@index', 'home.index');
$router->get('/about', 'PageController@about', 'about');
$router->get('/contact', 'PageController@contact', 'contact');

// //users routes
$router->get('admin/login', 'AdminController@login', 'admin.login');
$router->post('admin/login', 'AdminController@authenticate', 'admin.authenticate');
$router->get('/users', 'UserController@index', 'user.list');

$router->get('/users/create', 'UserController@create', 'user.create');
$router->post('/users/create', 'UserController@store', 'user.store');

$router->get('/users/{id}/edit', 'UserController@edit', 'user.edit');
$router->put('/users/{id}/edit', 'UserController@update', 'user.update');

$router->delete('/users/{id}', 'UserController@destroy', 'user.destroy');
$router->get('/users/{id}', 'UserController@show', 'user.show');

//products admin routes
$router->get('/products', 'ProductController@index', 'product.index');

$router->get('/products/create', 'ProductController@create', 'product.create');
$router->post('/products/create', 'ProductController@store', 'product.store');

$router->get('/products/{id}/edit', 'ProductController@edit', 'product.edit');
$router->put('/products/{id}/edit', 'ProductController@update', 'product.update');

$router->delete('/products/{id}', 'ProductController@destroy', 'product.destroy');

$router->get('/products/{id}', 'ProductController@show', 'product.show');



//////////
//admins admin routes
$router->get('/admins', 'AdminAdminsController@index', 'admin.index');

$router->get('/admins/create', 'AdminAdminsController@create', 'admin.create');
$router->post('/admins/create', 'AdminAdminsController@store', 'admin.store');

$router->get('/admins/{id}/edit', 'AdminAdminsController@edit', 'admin.edit');
$router->put('/admins/{id}/edit', 'AdminAdminsController@update', 'admin.update');

$router->delete('/admins/{id}', 'AdminAdminsController@destroy', 'admin.destroy');

$router->get('/admins/{id}', 'AdminAdminsController@show', 'admin.show');



/////////////////////////
//users admin routes
$router->get('/users', 'UserController@index', 'user.index');

$router->get('/users/create', 'UserController@create', 'user.create');
$router->post('/users/create', 'UserController@store', 'user.store');

$router->get('/users/{id}/edit', 'UserController@edit', 'user.edit');
$router->put('/users/{id}/edit', 'UserController@update', 'user.update');

$router->delete('/users/{id}', 'UserController@destroy', 'user.destroy');

$router->get('/users/{id}', 'UserController@show', 'user.show');




/////////////////////////////////////////////////
/////////////////////////
//Categories admin routes
$router->get('/categories', 'AdminCategoriesController@index', 'category.index');

$router->get('/categories/create', 'AdminCategoriesController@create', 'category.create');
$router->post('/categories/create', 'AdminCategoriesController@store', 'category.store');

$router->get('/categories/{id}/edit', 'AdminCategoriesController@edit', 'category.edit');
$router->put('/categories/{id}/edit', 'AdminCategoriesController@update', 'category.update');

$router->delete('/categories/{id}', 'AdminCategoriesController@destroy', 'category.destroy');

$router->get('/categories/{id}', 'AdminCategoriesController@show', 'category.show');


/////////////////////////
//Orders admin routes
$router->get('/orders', 'AdminOrdersController@index', 'order.index');

$router->get('/orders/{id}/edit', 'AdminOrdersController@edit', 'order.edit');
$router->put('/orders/{id}/edit', 'AdminOrdersController@update', 'order.update');

$router->delete('/orders/{id}', 'AdminOrdersController@destroy', 'order.destroy');



// ////////////////////////////////////////////////////////////////////////////////////
// Auth Controller
$router->get('/login', 'AuthController@index', 'signin');
$router->post('/login', 'AuthController@login', 'login');

$router->get('/signup', 'AuthController@singnup', 'signup');
$router->post('/signup', 'AuthController@register', 'register');



$router->dispatch();
