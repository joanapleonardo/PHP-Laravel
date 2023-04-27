<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

public function home()
{
    $aMinhaVariavel = "Hello turma de Soft Dev";

    $userModel = User::all();

    file_put_contents("usersModel.txt", print_r($userModel, true));
    return view('users.home', compact('aMinhaVariavel'));
}


public function all_users()
{
    $oMeuArray = ['nome'=> 'Sara',
    'nome2' => 'José',
    'nome3' => 'Rúben'
];

    $allUsers = DB::table('users')
        ->get();

        file_put_contents("output.txt", print_r($allUsers, true));




    $cesaeInfo = $this->getCesaeInfo();

    return view('users.all_users', compact('cesaeInfo', 'allUsers', 'oMeuArray'));
}



protected function getCesaeInfo()
{
    $cesaeInfo = [
        'name' => 'cesae',
        'address' => 'rua ciriaco cardoso',
        'email' => 'cesae@cesae.pt',
    ];

    return $cesaeInfo;
}



public function add_users()
{
    return view('users.add_users');
}

public function all_tasks()
{
    $allTasks=$this->getAllTasks();

    return view('users.all_tasks', compact('allTasks'));
}

public function viewUser($id)
{
    $ourUser = User::where('id', $id)->first();

    return view('users.view_user', compact('ourUser'));
}


protected function getAllTasks()
{
    $allTasks= DB::table('tasks')
    ->join('users', 'users.id', '=', 'tasks.user_id')
    ->select('tasks.*', 'users.name as usname')
    ->get();

    return $allTasks;
}



}
