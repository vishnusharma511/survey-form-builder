<?php

use Illuminate\Routing\Router;
use App\Admin\Controllers\SurveyController;
use App\Admin\Controllers\SurveyInputController;
use App\Admin\Controllers\SurveyInputSelectController;

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
    $router->resource('survey-input-selects', SurveyInputSelectController::class);
    $router->resource('form-datas', FormDataController::class);
});
