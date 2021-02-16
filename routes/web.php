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
    return view('welcome');
});

Route::get('/header', function () {
    return view('header');
});

Route::get('/footer', function() {
    return view('footer');
});

Route::get('/contact', function() {
    $correo = new MailPublicitario;

    Mail::to('igonzalezbravo@iessonferrer.net')->send($correo);

    return 'Mensaje enviado';
});