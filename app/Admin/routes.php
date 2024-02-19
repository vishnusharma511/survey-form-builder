<?php

use Illuminate\Routing\Router;
use App\Admin\Controllers\SurveyController;
use App\Admin\Controllers\SurveyInputController;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');

    $router->resource('surveys', SurveyController::class);

    $router->resource('survey-inputs', SurveyInputController::class);

});
