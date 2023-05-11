@extends('layouts.main_layout')



@section('title')
    <title>All Users</title>
@endsection



@section('content')
<div class="container">

<form method="POST" action="{{route('create_task')}}">

      @csrf

      <select class="custom-select" name="user_id">
        <option value="" selected>Todos os Contactos</option>
        @foreach ($allUsers as $item)
            <option value="{{ $item->id }}">
                {{ $item->name }}</option>
        @endforeach
    </select>

      <div class="mb-3">
            <label for="exampleInputName1" class="form-label">Nome</label>
            <input type="text" class="form-control" name="name" value="" id="exampleInputName1" aria-describedby="nameHelp">

 </div>

      <div class="mb-3">
        <label for="exampleInputStatus1" class="form-label">Description</label>
        <input type="text" class="form-control" name="description" value="" id="exampleInputDescription1" aria-describedby="descriptionHelp">

        @error('empty')
      <div id="emptyHelp" class="form-text">Campo vazio</div>
      @enderror

      </div>

      <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>>

<a href="{{route('home')}}"><li>Voltar</li></a>

@endsection
