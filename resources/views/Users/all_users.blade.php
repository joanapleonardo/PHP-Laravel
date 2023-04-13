@extends('layouts.main_layout')

@section('title')
    <title>All Users</title>
@endsection

@section('content')

<div class="container">
    <h2>Olá, aqui estão todos os utilizadores</h2>
</div>

<a href="{{route('home')}}"><li>Voltar</li></a>

@endsection