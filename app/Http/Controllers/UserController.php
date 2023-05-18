<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
        $oMeuArray = [
            'nome' => 'Sara',
            'nome2' => 'José',
            'nome3' => 'Rúben',
        ];

        if (request()->query('user_id')) {
            $allUsers = DB::table('users')
                ->where('id', request()->query('user_id'))
                ->get();
        } else {
            $allUsers = DB::table('users')
                ->get();
        }

        $cesaeInfo = $this->getCesaeInfo();

        return view('users.all_users', compact('oMeuArray', 'cesaeInfo', 'allUsers'));
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


public function createUser(Request $request)
    {
        $myUser = $request->all();

        $request -> validate(
            [
                'email' => 'required|email|unique:users',
                'name' => 'required|string',
                'password' => 'required',
            ]
            );

        User::insert([
            'email' => $request -> email,
            'name' => $request -> name,
            'password' => Hash::make($request -> password),
        ]);

        return redirect('home_all_users')->with('message', 'Utilizador adicionado com sucesso');
    }


public function get_new_task()
{
    $allUsers = DB::table('users')
    ->get();

    return view('users.new_task', compact('allUsers'));;
    }



public function createTask(Request $request){

    $myTask = $request->all();

    $request->validate(
    [
        'name' => 'required|string',
        'description' => 'required|string',
    ]
    );

    DB::table('tasks')->insert(
    [
        'name' => $request->name,
        'description' => $request->description,
        'user_id' => $request->user_id,
    ]);

    return redirect('all_tasks')->with('message', 'tarefa criada com sucesso');
    }


public function viewUser($id)
    {
        $ourUser = User::where('id', $id)
        ->first();

        return view('users.view_user', compact('ourUser'));
    }


public function deleteUser($id)
    {
        DB::table('tasks')
        ->where('user_id', $id)
        ->delete();


        DB::table('users')
        ->where('id', $id)
        ->delete();

        return back();


        if(request() -> query('user_id')){
            $allUsers = DB::table('users')
            ->where('id', request()->query('user_id'))
            ->get();

            }else{
            $allUsers = DB::table('users')
            ->get();
            }
    }


protected function getAllTasks()
    {
        $allTasks= DB::table('tasks')
        ->join('users', 'users.id', '=', 'tasks.user_id')
        ->select('tasks.*', 'users.name as usname')
        ->get();

        return $allTasks;
    }


public function deleteTask($id)
    {
        DB::table('tasks')
        ->where('id', $id)
        ->delete();

        return back();
    }


public function viewTask($id)
    {
        $ourTask = DB::table('tasks')
        ->where('id', $id)
        ->first();

        return view('users.view_task', compact('ourTask'));
    }

}
