<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello world', function () {
    return "<h1>Hello World</h1>";
});

Route::fallback(function (){
return"<h1>Desculpe, esta página não existe</h1>";
});

Route::get('/simple-php-route', function () {
    return view('simple_php');
});

Route::get('/laravel-blade', function () {
    return view('my_laravel');
});






Route::get('/home', [UserController::class, 'index']
)->name('home');





Route::get('/home_all_users', [UserController::class, 'users.all_users']
)->name('show_all_users');

Route::get('/home_add_users', function () {
    return view('users.add_users');
})->name('show_add_users');

Route::get('/home_add_users', function () {
    return view('users.add_users');
})->name('show_add_users');

/*Route::fallback('/fallback', function (){
    return view('users.fallback');
    })->name('show_fallback');*/