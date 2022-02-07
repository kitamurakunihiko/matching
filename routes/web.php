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
    Route::get('top1', 'Admin\TopController@display');
    Route::get('profile', 'Admin\ProfileController@index');
    Route::get('profile/create', 'Admin\ProfileController@add');
    Route::post('profile/create', 'Admin\ProfileController@create');
    Route::get('profile/edit', 'Admin\ProfileController@edit');
    Route::post('profile/edit', 'Admin\ProfileController@update');
    Route::get('candidate', 'Admin\CandidateController@index');
    Route::get('candidate/detail', 'Admin\DetailController@detail');
    Route::get('candidate/index', 'Admin\CandidateController@index');
    Route::post('candidate/index', 'Admin\CandidateController@swipe');
    Route::get('match/index', 'Admin\MatchController@index');
    Route::get('match/chat', 'Admin\MatchController@chat');
});

//TOPページ
Route::get('/', 'TopController@display');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
