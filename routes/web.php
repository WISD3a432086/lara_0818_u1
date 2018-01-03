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

Route::get('/', function () {
    return view('welcome');
})->middleware(CheckAge::class);


Route::get('/tracy', function () {
    throw new \Exception('Tracyworks!');
});

Route::get('admin/profile', function () {
    //
})->middleware(CheckAge::class);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('mail','MailController@getSend');



