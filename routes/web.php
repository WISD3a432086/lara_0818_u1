<?php

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

use App\Http\Middleware\CheckAge;

//Route::get('/', function () {
    //
//})->middleware('first', 'second');

Route::get('/', function () {
    //
})->middleware(CheckAge::class);

    //return view('welcome');
//});

Route::get('/tracy', function () {
    throw new \Exception('Tracyworks!');
});

Route::get('admin/profile', function () {
    //
})->middleware(CheckAge::class);


Route::auth();



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
