@extends('layouts.main_layout')

@section('title')
<title>Home</title>
@endsection

@section('content')

<div class="container">
    <h1>Olá, tá tudo?</h1>

    <ul>
        <a href="{{route('show_all_users')}}">
            <li>Todos os utilizadores</li>
        </a>
    </ul>
    <ul>
        <a href="{{route('show_add_users')}}">
            <li>Aqui podes adicionar utilizadores</li>
        </a>
    </ul>

<h1>Vamos testar as variáveis</h1>
<h4>{{$aMinhaVariavel}}</h4>


</body>
<link rel="stylesheet" href="{}">
</html>