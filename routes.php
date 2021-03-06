<?php

$router->get('', 'PagesController@home');
$router->get('about-us', 'PagesController@aboutUs');
$router->get('contact', 'PagesController@contact');
$router->get('models', 'PagesController@models');
$router->get('api/products', 'PagesController@apiModels');
$router->get('models/{id}', 'CourseDetailsController@modelView');

$router->get('admin/login', "Authenticate@login");
$router->get('admin/register', "Authenticate@register");
$router->post('admin/createuser', "Authenticate@createuser");
$router->post('admin/validate', "Authenticate@validate");
$router->get('admin/logout', "Authenticate@logout", true);



$router->get('admin/products', "ProductsController@index");
$router->get('admin/products/create', "ProductsController@create");
$router->post('admin/products', "ProductsController@store");
$router->get('admin/products/show', "ProductsController@show");
$router->get('admin/products/edit', "ProductsController@edit");
$router->post('admin/products/update', "ProductsController@update");
$router->post('admin/products/destroy', "ProductsController@destroy");



