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
use App\Http\Middleware\ThreadMiddleware;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/top_page', 'TopPageController@index');

Route::get('/new_thread_creation_form', 'TopPageController@new_thread_creation');

Route::post('/new_thread_creation_form', 'ThreadController@create');

Route::get('/thread/{id}', 'ThreadController@thread')->name('thread.show');

Route::get('/response_creation_form/{id}', 'ResponseController@to_response_creation_form');

Route::post('/response_creation_form/{id}', 'ResponseController@create');
