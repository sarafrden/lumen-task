<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'api'], function () use ($router) {
  $router->get('Courses',  ['uses' => 'CourseController@showAllCourses']);

  $router->get('Courses/{id}', ['uses' => 'CourseController@showOneCourse']);

  $router->post('Courses', ['uses' => 'CourseController@create']);

  $router->delete('Courses/{id}', ['uses' => 'CourseController@delete']);

  $router->put('Courses/{id}', ['uses' => 'CourseController@update']);


  $router->get('Categories',  ['uses' => 'CategoryController@showAllCategories']);

  $router->get('Categories/{id}', ['uses' => 'CategoryController@showOneCategory']);

  $router->post('Categories', ['uses' => 'CategoryController@create']);

  $router->delete('Categories/{id}', ['uses' => 'CategoryController@delete']);

  $router->put('Categories/{id}', ['uses' => 'CategoryController@update']);
});
