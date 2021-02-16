<?php

use App\Mail\mailExamen;
use Illuminate\Support\Facades\Mail;
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

Route::get('/correo', function() {
    $correo = new mailExamen;

    Mail::to('igonzalezbravo@iessonferrer.net')->send($correo);

    return 'Mensaje enviado';
});