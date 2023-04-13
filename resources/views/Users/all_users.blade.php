@extends('layouts.main_layout')

@section('title')
    <title>All Users</title>
@endsection

@section('content')

<div class="container">
    <h2>Olá, aqui estão todos os utilizadores</h2>
</div>

<h2>Info cesae</h2>


<h5>{{$cesaeInfo['name']}}
    {{$cesaeInfo['address']}}
    {{$cesaeInfo['email']}}</h5>


<a href="{{route('home')}}"><li>Voltar</li></a>

@endsection