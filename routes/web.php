<?php

use Illuminate\Support\Facades\Route;

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
    return view('layouts.index');
});
Route::get('/index', function(){
    return view("layouts.index");
});
Route::get('/modals', function(){
    return view("layouts.modals");
});
Route::get('/alerts', function(){
    return view("layouts.alerts");
});
Route::get('/buttons', function(){
    return view("layouts.buttons");
});
Route::get('/dropdowns', function(){
    return view("layouts.dropdowns");
});
Route::get('/popovers', function(){
    return view("layouts.popovers");
});
Route::get('/progress-bar', function(){
    return view("layouts.progress-bar");
});
Route::get('/form_basics', function(){
    return view("forms.form_basics");
});
Route::get('/form_advanceds', function(){
    return view("forms.form_advanceds");
});
Route::get('/404', function(){
    return view("Auth.404");
});
Route::get('/blank', function(){
    return view("Auth.blank");
});
Route::get('/login', function(){
    return view("Auth.login");
});
Route::get('/register', function(){
    return view("Auth.register");
});
Route::get('/charts', function(){
    return view("charts");
});

Route::view('/index', 'layouts.index')->name('index');
Route::view('/modals', 'layouts.modals')->name('modals');
Route::view('/alerts', 'layouts.alerts')->name('alerts');
Route::view('/buttons', 'layouts.buttons')->name('buttons');
Route::view('/dropdowns', 'layouts.dropdowns')->name('dropdowns');
Route::view('/popovers', 'layouts.popovers')->name('popovers');
Route::view('/progress-bar', 'layouts.progress-bar')->name('progress-bar');
Route::view('/form_basics', 'forms.form_basics')->name('form_basics');
Route::view('/form_advanceds', 'forms.form_advanceds')->name('form_advanceds');
Route::view('/datatables', 'Tables.datatables')->name('datatables');
Route::view('/simple-tables', 'Tables.simple-tables')->name('simple-tables');
Route::view('/404', 'Auth.404')->name('404');
Route::view('/blank', 'Auth.blank')->name('blank');
Route::view('/login', 'Auth.login')->name('login');
Route::view('/register', 'Auth.register')->name('register');
Route::view('/charts', 'charts')->name('charts');

