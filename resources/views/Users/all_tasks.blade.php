@extends('layouts.main_layout')


@section('title')
<title>Todas as Tarefas</title>
@endsection


@section('content')
<div class="container">
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome da Tarefa</th>
        <th scope="col">Descrição</th>
        <th scope="col">Status</th>
        <th scope="col">Nome de Utilizador</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($allTasks as $item)
      <tr>
          <th scope="row">{{$item->id}}</th>
          <td>{{$item->name}}</td>
          <td>{{$item->description}}</td>
          <td>{{$item->status}}</td>
          <td>{{$item->usname}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>


    <a href="{{route('home')}}"><li>Voltar</li></a>

@endsection
