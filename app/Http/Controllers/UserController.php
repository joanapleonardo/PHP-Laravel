<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('users.home');
    }

    public function index(){
        return view('users.add_users');
    }

    public function index(){
        return view('users.all_users');
    }
}
