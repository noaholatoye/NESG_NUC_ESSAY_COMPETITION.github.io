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

Route::get('/', 'pagesController@index')->name('pages.index');
//verify users
Route::get('/verify','pagesController@verify')->name('verify');
Route::group(['middleware' => ['auth']], function (){
    Route::post('/', 'pagesController@register');

    

    //submitting entries
    Route::get('/submit_entry','EntriesController@index')->name('submit_entry');
    Route::post('/submit_entry', 'EntriesController@store');
});

Auth::routes();

