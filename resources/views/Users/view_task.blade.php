@extends('layouts.main_layout')


@section('title')
<title>User</title>
@endsection


@section('content')

<div class="container">
        <h1>Tarefas</h1>
        <h3>Nome:{{ $ourTask->name }}</h3>
        <h3>Descrição:{{ $ourTask->description}}</h3>
</div>


    {{-- <h1>Aqui podes adicionar users</h1> --}}
    <a href="{{route('home')}}"><li>Voltar</li></a>

@endsection
