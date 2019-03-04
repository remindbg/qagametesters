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
    return view('home');
});
Route::get('/portal/about', function () {
    return view('staticpages.about');
});
Route::get('/portal/qa', function () {
    return view('staticpages.about');
})->middleware('admin');
Route::get('/portal/dashboard', function () {
    return view('staticpages.about');
})->middleware('admin');
Route::get('/portal/company-login', function () {
    return view('staticpages.about');
})->middleware('admin');
Route::get('/portal/companies/login', function () {
    return view('staticpages.about');
})->middleware('admin');


Route::get('games/{id}/{slug}','GameController@single')->name('fgame.single');
Route::get('portal/apply','MessageController@create')->name('fapply.create')->middleware('auth');
Route::post('portal/apply','MessageController@store')->name('fapply.store')->middleware('auth');
Route::get('portal/final','MessageController@final')->name('fapply.final')->middleware('auth');



Route::get('portal/profile', function () {
    return view('auth.pending');
});


Route::resource('corporate/games','admin\GameController');
Route::resource('corporate/messages','admin\MessageController');


Auth::routes();



