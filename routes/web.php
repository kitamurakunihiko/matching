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
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    // 会員TOPページ
    Route::get('top', 'Admin\TopController@display');
    
    Route::get('profile', 'Admin\ProfileController@index');
    Route::post('profile/edit', 'Admin\ProfileController@edit');
    Route::get('candidate', 'Admin\CandidateController@index');
    Route::get('candidate/detail', 'Admin\CandidateController@detail');
});

//TOPページ
Route::get('/', 'TopController@display');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// // Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
