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




Route::get('/admin', function () {
    return view('admin');
});
Route::get('/admin2', function () {
    return view('admin2');
});
Route::get('/widgets', function () {
    return view('widgets');
});
Route::get('/afficherClients', function () {
    return view('afficherClients');
});
Route::get('/flot', function () {
    return view('flot');
});
Route::get('/AjouterClients', function () {
    return view('AjouterClients');
});
Route::get('/ajouterCat', function () {
    return view('ajouterCat');
});
Route::get('/inline', function () {
    return view('inline');
});
Route::get('/advanced', function () {
    return view('advanced');
});
Route::get('/general', function () {
    return view('general');
});
Route::get('/simple', function () {
    return view('simple');
});
Route::get('/data', function () {
    return view('data');
});
Route::get('/calender', function () {
    return view('calender');
});
Route::get('/compose', function () {
    return view('compose');
});
Route::get('/invoice-print', function () {
    return view('invoice-print');
});
Route::get('/invoice', function () {
    return view('invoice');
});
Route::get('/mailbox', function () {
    return view('mailbox');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/pace', function () {
    return view('pace');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/read-mail', function () {
    return view('read-mail');
});








Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/general','Controller@insertCat');
Route::post('/general','Controller@insert');
Route::resource('posts','CatController');

Auth::routes();

 


Route::resource('client','ClientController');