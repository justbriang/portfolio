<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUSController;
use App\Http\Controllers\ProjectsController;

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

// Route::get('/', function () {
//     return view('welcome');
// });



// Route::post('upload',function(){

//     dd(request()->file('file')->store(
//         'my-file',
//         's3'
//     ));

//     return back();

// })->name('upload');


// Route::get('/fileUpload', function () {
//     return view('fileUpload');
// });

//Route::get('contact-us', 'ContactUSController@contactUS');
//Route::post('contact-us', ['as'=>'contactus.store','uses'=>'ContactUSController@contactUSPost']);


Route::resource('contact-us', ContactUSController::class);

Route::resource('/', ProjectsController::class);

