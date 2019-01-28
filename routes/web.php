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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('orders','Orders\OrdersController');

/*******************ADMIN************************/
    Route::prefix('adm')
    ->middleware('admin')
    //->middleware('auth')
    ->group(function () {


    Route::get('/', 'Adm\AdminController@dashboard')->name('dashboard')->middleware('admin');

    //DASHBOARD
    Route::get('/dashboard', 'Adm\AdminController@admin')->middleware('admin');

    /*------------CATEGORIA NOVEDADES----------------*/
    Route::resource('categorianovedades', 'Adm\CategorianovedadesController')->middleware('admin');

    /*------------SISTEMAS----------------*/
    Route::resource('categorias', 'Adm\CategoriasController')->middleware('admin');
    
});