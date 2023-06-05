@extends('layouts.main_layout')


@section('title')
<title>User</title>
@endsection


@section('content')
<form action="{{route('update_user')}}" method="POST" enctype="multipart/form-data">
    @csrf

<div class="container">
        <h1>Detalhes do user</h1>

     <div class="mb3">
        <label for="name" class="form-label">Nome</label>
        <input value="{{$ourUser->name}}" name="nome" type="text" class="form-control" id="name">
    </div>

    <div class="mb3">
        <label for="photo" class="form-label">Foto</label>
        <input value="" name="photo" type="file" class="form-control" id="photo">
        <input type="hidden" name="id" value="{{$ourUser->id}}">
    </div>

    <button type="submit">Editar</button>
</div>
</form>

    {{-- <h1>Aqui podes adicionar users</h1> --}}
    <div class="container">
    <a href="{{route('home')}}"><li>Voltar</li></a>
    </div>

@endsection
