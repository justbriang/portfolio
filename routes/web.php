<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\ContactUSController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::resource('/', ProjectsController::class);
Route::resource('contact-us', ContactUSController::class);
//Route::post('/projects', [ProjectsController::class, 'store']);

// Route::post('/projects', 'ProjectsController@store');
//Route::get('/projects/create','ProjectsController@create');
