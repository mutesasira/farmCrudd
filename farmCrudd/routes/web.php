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

Route::get('/', function () {
    return view('welcome');
});
Route::post('/storeAnimalsRoute', 'animalsController@storeAnimals')->name('storeAnimalsRoute'); 
Route::get('/addAnimalsRoute', 'animalsController@addAnimals')->name('addAnimalsRoute');
Route::get('/displayAnimalsRoute', 'animalsController@displayAnimals')->name('displayAnimalsRoute');
Route::get('/deleteAnimalsRoute/{id}', 'animalsController@deleteAnimals')->name('deleteAnimalsRoute');
Route::post('/editAnimalsRoute', 'animalsController@editAnimals')->name('editAnimalsRoute');
Route::get('/newAnimalsRoute/{id}', 'animalsController@newAnimals')->name('newAnimalsRoute');
