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

Route::get('products/{id}', function ($id) {
    $tab = [
        1 => 'Tu es un champion',
        2 => 'Salut'
    ];
    return view('welcome',["product"=>$tab[$id]]);
});
