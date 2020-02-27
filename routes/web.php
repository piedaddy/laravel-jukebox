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


Route::get('/author/create', 'AuthorController@create');
Route::post('/author', 'AuthorController@store'); //when comes to author with a postt method, request will go to store
Route::get('/author/{id}/edit', 'AuthorController@edit');
Route::put('/author/{id}', 'AuthorController@update'); //we use put because we are UPDATING -- the browser cannot do put 


