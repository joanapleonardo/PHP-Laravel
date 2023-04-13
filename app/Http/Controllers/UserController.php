<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

public function home()
{
    $aMinhaVariavel = "Hello turma de Soft Dev"; 

    return view('users.home', compact('aMinhaVariavel'));
}


public function all_users()
{
    $oMeuArray = ['nome'=> 'Sara',
    'nome2' => 'José', 
    'nome3' => 'Rúben'];

    
    $cesaeInfo = $this->getCesaeInfo();

    return view('users.all_users', compact('cesaeInfo'));

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

}