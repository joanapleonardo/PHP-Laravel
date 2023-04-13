@extends('layouts.main_layout')

@section('title')
<title>Home</title>
@endsection

@section('content')

<div class="container">

    <h1>Olá, tá tudo?</h1>

    <ul>
        <a href="{{route('show_all_users')}}"><li>Todos os utilizadores</li>
        </a>
    
        <a href="{{route('show_add_users')}}"><li>Aqui podes adicionar utilizadores</li>
        </a>
    </ul>
</div>
@endsection