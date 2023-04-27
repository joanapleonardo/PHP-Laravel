<?php

use App\Http\Controllers\HomeController;
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


Route::get('/home',
[UserController::class, 'home']
)->name('home');

Route::get('/home_all_users',
[UserController::class, 'all_users']
)->name('show_all_users');

Route::get('/home_add_users',
[UserController::class, 'add_users']
)->name('show_add_users');

Route::get('/home_all_tasks',
[UserController::class, 'all_tasks']
)->name('show_all_tasks');

Route::get('/view_user{id}',
[UserController::class, 'viewUser']
)->name('show_user');

Route::get('/delete_user{id}',
[UserController::class, 'deleteUser']
)->name('delete_user');




/*Route::fallback('/fallback', function (){
    return view('users.fallback');
    })->name('show_fallback');*/
