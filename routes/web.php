<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SurveyController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/survey/{url}', [SurveyController::class, 'show']);


Route::post('/survey', [SurveyController::class,'store'])->name('survey.store');


Route::get('/thankyou', function () {
    return view('thankyou');
})->name('thankyou');
