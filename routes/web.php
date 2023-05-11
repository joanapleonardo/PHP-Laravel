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

Route::get('/view_user{id}',
[UserController::class, 'viewUser']
)->name('show_user');

Route::get('/view_task{id}',
[UserController::class, 'viewTask']
)->name('show_task');

Route::get('/delete_user{id}',
[UserController::class, 'deleteUser']
)->name('delete_user');

Route::get('/delete_tasks{id}',
[UserController::class, 'deleteTask']
)->name('delete_task');

Route::post('/create_user',
[UserController::class, 'createUser']
)->name('create_user');

Route::get('/all_tasks',
[UserController::class, 'all_tasks']
)->name('show_all_tasks');


Route::get('/add_new_task',
[UserController::class, 'get_new_task']
)->name('new_task');


Route::post('/create_task',
[UserController::class, 'createTask']
)->name('create_task');





/*Route::fallback('/fallback', function (){
    return view('users.fallback');
    })->name('show_fallback');*/
